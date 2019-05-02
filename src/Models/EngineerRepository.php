<?php
namespace MVC\Models;

use MVC\Models\EngineerResourceModel;
use MVC\Models\Engineer;
/**
 * 
 */
class EngineerRepository
{
	private $engineerResourceModel;

	function __construct()
	{
		$this->engineerResourceModel = new EngineerResourceModel();
	}
	public function showAll()
	{
        return $this->engineerResourceModel->showAll('engineers');
	}
	public function createEngineer(Engineer $engineer)
	{
		$this->engineerResourceModel->createEngineer('engineers', $engineer);
	}
	public function delete($id)
	{
        $this->engineerResourceModel->deleteEngineer('engineers', $id);
	}
	public function showEngineer($id)
	{
        return $this->engineerResourceModel->showEngineer('engineers', $id);
	}
	public function edit($id, Engineer $engineer)
	{
		$this->engineerResourceModel->editEngineer('engineers', $engineer);
	}
	public function search($name)
	{
        return $this->engineerResourceModel->searchEngineer('engineers', $name);
	}

}