<?php
/*
Model Lap2
สร้างโดย นาย หฤษฏ์ สุริยะโชติ
สร้างเมื่อ 2/5/2557



function ทั้งหมด
getData :: ดึงข้อมูลจากDB



*/
class Lap2 extends CI_Model//r
{
	function __construct()//r
	{
		parent::__construct();//r
	}
	function getData()
	{
		$query = $this->db->get('psp2');
		return $query;
	}
}
?>