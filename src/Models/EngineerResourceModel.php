<?php
namespace MVC\Models;

use MVC\Core\ResourceModel;
/**
 * lop luu tru du lieu
 */
class EngineerResourceModel extends ResourceModel
{
	private $table;
	private $column;
	private $id;

	function __construct()
	{
		$this->table = 'engineers';
	}
	

	public function showAll($table)
	{
		return parent::showAll($table);
	}
	public function createEngineer($table, $model)
	{
		parent::create($table, $model);
	}
	public function deleteEngineer($table, $id)
	{
		parent::delete($table, $id);
	}
	public function showEngineer($table, $id)
	{
        return parent::show($table, $id);
	}
	public function editEngineer($table, $model)
	{
        parent::edit($table, $model);
	}
	public function searchEngineer($table, $name)
	{
		return parent::search($table, $name);
	}
}