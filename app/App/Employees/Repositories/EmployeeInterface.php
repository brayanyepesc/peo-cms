<?php

namespace App\App\Employees\Repositories;

interface EmployeeInterface
{
    public function getAllEmployees($client_id);
    public function createEmployee($request);
    public function getEmployeeById($id);
    public function updateEmployee($request, $id);
    public function deleteEmployee($id);
}