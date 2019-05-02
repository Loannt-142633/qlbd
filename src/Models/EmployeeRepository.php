<?php
namespace MVC\Models;

use MVC\Models\EmployeeResourceModel;
use MVC\Models\Employee;
/**
 * 
 */
class EmployeeRepository
{
	private $employeeResourceModel;

	function __construct()
	{
		$this->employeeResourceModel = new EmployeeResourceModel();
	}
	public function showAll()
	{
        return $this->employeeResourceModel->showAll('employees');
	}
	public function createEmployee(Employee $employee)
	{
		$this->employeeResourceModel->createEmployee('employees', $employee);
	}
	public function delete($id)
	{
        $this->employeeResourceModel->deleteEmployee('employees', $id);
	}
	public function showEmployee($id)
	{
        return $this->employeeResourceModel->showEmployee('employees', $id);
	}
	public function edit($id, Employee $employee)
	{
		$this->employeeResourceModel->editEmployee('employees', $employee);
	}

}