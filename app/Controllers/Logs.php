<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use App\Models\LogModel;
use CodeIgniter\RESTful\ResourceController;
use App\Models\UserModel;
use App\Models\EmployeeModel;

class Logs extends ResourceController
{
    use ResponseTrait;

    protected $modelName = 'App\Models\LogModel';
    protected $format    = 'json';

    public function create()
    {
        $json = $this->request->getJSON();

        if(!$json){
            return $this->failUnauthorized('No inputs found');
        }

        $data = [
            'date' => $json->date,
            'logType' => $json->logType,
            'reason' => $json->reason,
            'hours' => $json->hours,
            'minutes' => $json->minutes
        ];

        $id = $this->model->insert($data);

        $data['id'] = $id;
        return $this->respondCreated($data);
}
public function getEmployeeAttendance($employee_id)
    {
        $logModel = new LogModel();
        $attendance = $logModel->getEmployeeAttendance($employee_id);

        // If you need to use the UserModel or EmployeeModel
        $userModel = new UserModel();
        $employeeModel = new EmployeeModel();

        return $this->respond($attendance);
    }
}