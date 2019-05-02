<?php
namespace MVC\Controllers;

use MVC\Core\Controller;
use MVC\Models\Worker;
use MVC\Models\WorkerRepository;
use MVC\Models\WorkerResourceModel;

class workersController extends Controller
{
    private $workerRepository;

    function __construct()
    {
        $this->workerRepository = new WorkerRepository();
    }
    public function index()
    {

        $d['workers'] = $this->workerRepository->showAll();
        $this->set($d);
        $this->render("index");
    }
    public function create()
    {
        if (isset($_POST['name'])) {
            $workers = new Worker();
            $workers->setName($_POST['name']);
            $workers->setDate(date("Y-m-d", strtotime($_POST['birthday'])));
            $workers->setGender($_POST['gender']);
            $workers->setAddress($_POST['address']);
            $workers->setBac($_POST['rank']);
            $workers->setNgayNangBac(date("Y-m-d", strtotime($_POST['ngay_nang_bac'])));
            $workers->setMucLuong($_POST['muc_luong']);
            $this->workerRepository->createWorker($workers);
            header("Location: " . WEBROOT . "workers/index");
        }
        $this->render("create");
    }
    public function edit($id)
    {
        $d["worker"] = $this->workerRepository->showWorker($id);
        if (isset($_POST["name"]))
        {
            $worker = new Worker();;
            $worker->setID($id);
            $worker->setName($_POST['name']);
            $worker->setDate(date("Y/m/d", strtotime($_POST['birthday'])));
            $worker->setGender($_POST['gender']);
            $worker->setAddress($_POST['address']);
            $worker->setBac($_POST['rank']);
            $worker->setNgayNangBac(date("Y/m/d", strtotime($_POST['ngay_nang_bac'])));
            $worker->setMucLuong($_POST['muc_luong']);

            $this->workerRepository->edit($id, $worker);

            header("Location: " . WEBROOT . "workers/index");
                        
                        
        }
        $this->set($d);
        $this->render("edit");
    }

    public function delete($id)
    {
        $this->workerRepository->delete($id);
        header("Location: " . WEBROOT . "workers/index");
    }
    public function search($name)
    {   
        if (isset($_POST['search'])) {
            $d['workers'] = $this->workerRepository->search($_POST['search']);
        }
        $this->set($d);
        $this->render("search");
    }

}
?>