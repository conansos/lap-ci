<?php

// Testcase : v.1.0
// Written by : Rungrit Anutarawiramkul
// Date : 2014-04-22 13:00 (GMT+7)

/*
Function List
----------------
+ getName()
+ setName()
+ getId()
+ setId()
*/

class Member
{
	var $id;
	var $name;

	//สำหรับ กำหนด Attribute ชื่อ
	public function setName($name)
	{
		$this->name = $name;
	}

	//สำหรับ ดึงข้อมูล Attribute ชื่อ
	public function getName()
	{
		return $this->name;
	}

	//สำหรับ กำหนด Attribute รหัสสมาชิก
	public function setId($id)
	{
		$this->id = $id;
	}

	//สำหรับ ดึงข้อมูล Attribute รหัสสมาชิก
	public function getId()
	{
		return $this->id;
	}

	/* จบการทำงาน */
}


?>