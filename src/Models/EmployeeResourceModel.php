<?php
namespace MVC\Models;

use MVC\Core\ResourceModel;
/**
 * lop luu tru du lieu
 */
class EmployeeResourceModel extends ResourceModel
{
	private $table;
	private $column;
	private $id;

	function __construct()
	{
		$this->table = 'employees';
	}
	

	public function showAll($table)
	{
		return parent::showAll($table);
	}
	public function createEmployee($table, $model)
	{
		parent::create($table, $model);
	}
	public function deleteEmployee($table, $id)
	{
		parent::delete($table, $id);
	}
	public function showEmployee($table, $id)
	{
        return parent::show($table, $id);
	}
	public function editEmployee($table, $model)
	{
        parent::edit($table, $model);
	}
}