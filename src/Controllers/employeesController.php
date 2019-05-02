<?php
namespace MVC\Controllers;

use MVC\Core\Controller;
use MVC\Models\Employee;
use MVC\Models\EmployeeRepository;
use MVC\Models\EmployeeResourceModel;

class employeesController extends Controller
{
    private $employeeRepository;

    function __construct()
    {
        $this->employeeRepository = new EmployeeRepository();
    }
    public function index()
    {

        $d['employees'] = $this->employeeRepository->showAll();
        $this->set($d);
        $this->render("index");
    }
    public function create()
    {
        if (isset($_POST['name'])) {
            $employee = new Employee();
            $employee->setName($_POST['name']);
            $employee->setDate(date("Y-m-d", strtotime($_POST['birthday'])));
            $employee->setGender($_POST['gender']);
            $employee->setAddress($_POST['address']);
            $employee->setTask($_POST['task']);
            $employee->setNgayNangLuong(date("Y-m-d", strtotime($_POST['ngay_nang_luong'])));
            $employee->setMucLuong($_POST['muc_luong']);
            $this->employeeRepository->createEmployee($employee);
            header("Location: " . WEBROOT . "employees/index");
        }
        $this->render("create");
    }
    public function edit($id)
    {
        $d["employee"] = $this->employeeRepository->showEmployee($id);
        if (isset($_POST["name"]))
        {
            $employee = new Employee();;
            $employee->setID($id);
            $employee->setName($_POST['name']);
            $employee->setDate(date("Y/m/d", strtotime($_POST['birthday'])));
            $employee->setGender($_POST['gender']);
            $employee->setAddress($_POST['address']);
            $employee->setTask($_POST['task']);
            $employee->setNgayNangLuong(date("Y/m/d", strtotime($_POST['ngay_nang_luong'])));
            $employee->setMucLuong($_POST['muc_luong']);

            $this->employeeRepository->edit($id, $employee);

            header("Location: " . WEBROOT . "employees/index");
                        
                        
        }
        $this->set($d);
        $this->render("edit");
    }

    public function delete($id)
    {
        $this->employeeRepository->delete($id);
        header("Location: " . WEBROOT . "employees/index");
    }

}
?>