<?php
namespace MVC\Controllers;

use MVC\Core\Controller;
use MVC\Models\Engineer;
use MVC\Models\EngineerRepository;
use MVC\Models\EngineerResourceModel;

class engineersController extends Controller
{
    private $engineerRepository;

    function __construct()
    {
        $this->engineerRepository = new EngineerRepository();
    }
    public function index()
    {

        $d['engineers'] = $this->engineerRepository->showAll();
        $this->set($d);
        $this->render("index");
    }
    public function create()
    {
        if (isset($_POST['name'])) {
            $engineers = new Engineer();
            $engineers->setName($_POST['name']);
            $engineers->setDate(date("Y-m-d", strtotime($_POST['birthday'])));
            $engineers->setGender($_POST['gender']);
            $engineers->setAddress($_POST['address']);
            $engineers->setNganh($_POST['branch']);
            $engineers->setNgayNangLuong(date("Y-m-d", strtotime($_POST['ngay_nang_luong'])));
            $engineers->setMucLuong($_POST['muc_luong']);
            $this->engineerRepository->createEngineer($engineers);
            header("Location: " . WEBROOT . "engineers/index");
        }
        $this->render("create");
    }
    public function edit($id)
    {
        $d["engineer"] = $this->engineerRepository->showEngineer($id);
        if (isset($_POST["name"]))
        {
            $engineer = new Engineer();;
            $engineer->setID($id);
            $engineer->setName($_POST['name']);
            $engineer->setDate(date("Y/m/d", strtotime($_POST['birthday'])));
            $engineer->setGender($_POST['gender']);
            $engineer->setAddress($_POST['address']);
            $engineer->setNganh($_POST['branch']);
            $engineer->setNgayNangLuong(date("Y/m/d", strtotime($_POST['ngay_nang_luong'])));
            $engineer->setMucLuong($_POST['muc_luong']);

            $this->engineerRepository->edit($id, $engineer);

            header("Location: " . WEBROOT . "engineers/index");
                        
                        
        }
        $this->set($d);
        $this->render("edit");
    }

    public function delete($id)
    {
        $this->engineerRepository->delete($id);
        header("Location: " . WEBROOT . "engineers/index");
    }

}
?>