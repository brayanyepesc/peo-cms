<?php

namespace App\App\Employees\Repositories;

use App\App\Employees\Repositories\EmployeeInterface;
use App\Models\Employee;

class EmployeeRepository implements EmployeeInterface
{
    protected $employee;

    public function __construct(
            Employee $employee,
        )
    {
        $this->employee = $employee;
    }

    public function getAllEmployees($client_id)
    {
        return $this->employee->employeesAccordinToClient($client_id)->get();
    }

    public function createEmployee($request)
    {
        return $this->employee->create($request->all());
    }

    public function getEmployeeById($id)
    {
        return $this->employee->find($id);
    }

    public function updateEmployee($request, $id)
    {
        $employee = $this->employee->find($id);
        return $employee->update($request->all());
    }

    public function deleteEmployee($id)
    {
        return $this->employee->destroy($id);
    }

}