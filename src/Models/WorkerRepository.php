<?php
namespace MVC\Models;

use MVC\Models\WorkerResourceModel;
use MVC\Models\Worker;
/**
 * 
 */
class WorkerRepository
{
	private $taskResourceModel;

	function __construct()
	{
		$this->workerResourceModel = new WorkerResourceModel();
	}
	public function showAll()
	{
        return $this->workerResourceModel->showAll('workers');
	}
	public function createWorker(Worker $worker)
	{
		$this->workerResourceModel->createWorker('workers', $worker);
	}
	public function delete($id)
	{
        $this->workerResourceModel->deleteWorker('workers', $id);
	}
	public function showWorker($id)
	{
        return $this->workerResourceModel->showWorker('workers', $id);
	}
	public function edit($id, Worker $worker)
	{
		$this->workerResourceModel->editWorker('workers', $worker);
	}
	public function search($name)
	{
        return $this->workerResourceModel->searchWorker('workers', $name);
	}

}