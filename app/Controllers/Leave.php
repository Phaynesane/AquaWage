<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Leave extends ResourceController
{
    protected $modelName = 'App\Models\EmployeeModel';
    protected $format    = 'json';

    public function fetchEmployeeData($id)
    {
        $employee = $this->model->find($id);

        if(!$employee){
            return $this->failNotFound('Employee not found');
        }

        return $this->respond($employee);
    }

    public function submitLeaveRequest()
    {
        $leaveRequestData = [
            'employee_id' => $this->request->getVar('employee_id'),
            'leave_type' => $this->request->getVar('leave_type'),
            'leave_reason' => $this->request->getVar('leave_reason'),
        ];

        $leaveRequestModel = new \App\Models\LeaveModel();

        $leaveRequestId = $leaveRequestModel->insert($leaveRequestData);

        if(!$leaveRequestId){
            return $this->failServerError('Failed to create leave request');
        }

        $leaveRequestData['id'] = $leaveRequestId;

        return $this->respondCreated($leaveRequestData);
    }
}