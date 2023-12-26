<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\EmployeeModel;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\RESTful\ResourceController;
use Firebase\JWT\JWT;

class Auth extends ResourceController
{
    use ResponseTrait;

    private $key = 'your-secret-key'; // Change this to your secret key

    public function register()
    {
        $db = \Config\Database::connect(); 
        $user = new UserModel();
        $employee = new EmployeeModel();
        
    
        $data = [
            'username' => $this->request->getVar('username'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'status' => 'active',
            'role' => $this->request->getVar('role'), // Assuming role is sent from the frontend
        ];
    
        $db->transStart(); // Start a transaction
    
        $u = $user->save($data);
    
        if ($u) {
            $userId = $user->insertID(); // Get the last inserted user ID
    
            // Check if the role is 'employee' and save to the EmployeeModel
            if ($data['role'] === 'Employee') {
                $employeeData = [
                    'userid' => $userId,
                    'lastname' => $this->request->getVar('lastname'),
                    'firstname' => $this->request->getVar('firstname'),
               
                ];
    
                $e = $employee->save($employeeData);
    
                if (!$e) {
                    // Roll back the transaction if employee data saving fails
                   $db->transRollback();
                    return $this->respond(['msg' => 'failed']);
                }
            }
    
           $db->transCommit(); // Commit the transaction
            return $this->respond(['msg' => 'okay']);
        }
    
        // If any step fails, roll back the transaction
       $db->transRollback();
    
        return $this->respond(['msg' => 'failed']);
    }
    
   public function login()
{
    $user = new UserModel();
    $username = $this->request->getVar('username');
    $password = $this->request->getVar('password');
    $data = $user->where('username', $username)->first();

    if ($data) {
        $pass = $data['password'];
        $authenticatePassword = password_verify($password, $pass);

        if ($authenticatePassword) {
            return $this->respond([
                'status' => 200,
                'message' => 'success',
                'data' => [
                    'userId' => $data['userid'], // Assuming 'id' is the user ID column in your user table
                    'role' => $data['role'], // Assuming 'role' is a column in your user table
                ],
            ]);
        } else {
            return $this->respond([
                'status' => 401,
                'message' => 'Invalid credentials',
            ]);
        }
    } else {
        return $this->respond([
            'status' => 404,
            'message' => 'User not found',
        ]);
    }
}




    private function generateToken()
    {
        $issuedAt   = time();
        $expiration = $issuedAt + 60 * 60; // 1 hour
        $payload    = [
            'iat'  => $issuedAt,
            'exp'  => $expiration,
            'data' => 'your additional data here', // You can add additional data to the payload
        ];

        return JWT::encode($payload, $this->key, 'HS256');
    }

    public function getEmployeeDetails()
    {
        $userId = $this->request->getGet('userId');
        
        // Assuming you have an EmployeeModel to fetch employee details
        $employeeModel = new EmployeeModel();
        $employeeDetails = $employeeModel->where('userid', (int)$userId)->first();

        if ($employeeDetails) {
            return $this->respond([
                'status' => 200,
                'message' => 'success',
                'data' => $employeeDetails,
            ]);
        } else {
            return $this->respond([
                'status' => 404,
                'message' => 'Employee details not found',
            ]);
        }
    }

    // EmployeeController.php

    public function updateEmployeeDetails()
    {
        $userId = $this->request->getVar('userId');
        
        $employeeModel = new EmployeeModel();
        $employeeDetails = $employeeModel->where('userid', (int)$userId)->first();
   
        if ($employeeDetails) {
            // Update employee details
            $updatedData = [
                'firstname' => $this->request->getVar('firstName'),
                'lastname' => $this->request->getVar('lastName'),
                'middlename' => $this->request->getVar('middleName'),
                'gender' => $this->request->getVar('gender'),
                'dateofbirth' => $this->request->getVar('dateOfBirth'),
                'contactnumber' => $this->request->getVar('contactNumber'),
                'email' => $this->request->getVar('email'),
                'address' => $this->request->getVar('address'),
                // Add other fields as needed
            ];
     
            $employeeModel->where('userid', (int)$userId)->set($updatedData)->update();
    
            return $this->respond([
                'status' => 200,
                'message' => 'Employee details updated successfully',
            ]);
        } else {
            return $this->respond([
                'status' => 404,
                'message' => 'Employee details not found',
            ]);
        }
    }
    
    

}
