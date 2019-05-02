<?php
namespace MVC\Models;

use MVC\Core\ResourceModel;
/**
 * lop luu tru du lieu
 */
class WorkerResourceModel extends ResourceModel
{
	private $table;
	private $column;
	private $id;

	function __construct()
	{
		$this->table = 'workers';
	}
	

	public function showAll($table)
	{
		return parent::showAll($table);
	}
	public function createWorker($table, $model)
	{
		parent::create($table, $model);
	}
	public function deleteWorker($table, $id)
	{
		parent::delete($table, $id);
	}
	public function showWorker($table, $id)
	{
        return parent::show($table, $id);
	}
	public function editWorker($table, $model)
	{
        parent::edit($table, $model);
	}
	public function searchWorker($table, $name)
	{
		return parent::search($table, $name);
	}
}