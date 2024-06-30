<?php

namespace App\App\Employees\Controllers;

use App\App\Employees\Repositories\EmployeeRepository;
use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    protected $employeeRepository;

    public function __construct(EmployeeRepository $employeeRepository)
    {
        $this->employeeRepository = $employeeRepository;
    }

    public function index($client_id)
    {
        try {
            $employees = $this->employeeRepository->getAllEmployees($client_id);
            return response()->json([
                'message' => 'Employees retrieved',
                'data' => $employees,
            ]);
        } catch (\Exception $e) {

        }
    }

    public function store(Request $request)
    {
        try {
            $employee = $this->employeeRepository->createEmployee($request);
            return response()->json([
                'message' => 'Employee created',
                'data' => $employee,
            ]);
        } catch (\Exception $e) {

        }
    }

    public function show(Employee $employee)
    {
        try {
            $employee = $this->employeeRepository->getEmployeeById($employee->id);
            return response()->json([
                'message' => 'Employee retrieved',
                'data' => $employee,
            ]);
        } catch (\Exception $e) {
            
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $employee = $this->employeeRepository->updateEmployee($request, $id);
            return response()->json([
                'message' => 'Employee updated',
                'data' => $employee,
            ]);
        } catch (\Exception $e) {
            
        }
    }

    public function destroy($id)
    {
        try {
            $this->employeeRepository->deleteEmployee($id);
            return response()->json([
                'message' => 'Employee deleted',
            ]);
        } catch (\Exception $e) {
            
        }
    }

}