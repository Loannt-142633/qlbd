<?php
namespace MVC\Models;

use MVC\Core\Model;
use MVC\Config\Database;
/**
 * 
 */
class Worker extends Model
{
	public  $id;
	public  $name;
	public  $birthday;
	public  $gender;
	public  $address;
	public  $rank;
	public  $ngay_nang_bac;
	public  $muc_luong;
    
     public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getName()
    {
    	return $this->name;
    }
    public function setName($name)
    {
    	$this->name = $name;
    }
    public function getDate()
    {
    	return $this->birthday;
    }
    public function setDate($birthday)
    {
    	$this->birthday = $birthday;
    }
    public function getGender()
    {
    	return $this->gender;
    }
    public function setGender($gender)
    {
    	$this->gender = $gender;
    }
    public function getAddress()
    {
    	return $this->address;
    }
    public function setAddress($address)
    {
    	$this->address = $address;
    }
    public function setBac($rank)
	{
		$this->rank = $rank;
	}
	public function getBac()
	{
		return $this->rank;
	}
	public function getNgayNangBac()
	{
		return $this->ngay_nang_bac;
	}
	public function setNgayNangBac($ngay_nang_bac)
	{
		$this->ngay_nang_bac = $ngay_nang_bac;
	}
	public function getMucLuong()
	{
		return $this->muc_luong;
	}
	public function setMucLuong($muc_luong)
	{
		$this->muc_luong = $muc_luong;
	}
	public function getpro()
    {
        return get_object_vars($this);
    }
}