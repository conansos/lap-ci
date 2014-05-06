<?php
/*
Model Supplies
สร้างโดย นาย หฤษฏ์ สุริยะโชติ
สร้างเมื่อ 18/4/2557

attibute ทั้งหมด
$id; //ไพรมารี่คีย์
$suppliesId; //ระหัสผู้ขาย
$suppliesName; //ชื่อผู้ขาย
$suppliesAddress; //ที่อยู่ผู้ขาย
$suppliesTel; //เบอร์ผู้ขาย


function ทั้งหมด
index :: โหลดหน้าแรก
add :: เพิ่มข้อมูลผู้ขายลงฐานข้อมูล
showAllData :: ดึงข้อมูลผู้ขายจากฐานข้อมูล
deleteSupplies :: ลบข้อมูลผู้ขายจากฐานข้อมูล
updateSupplies :: ดึงข้อมูลจากฐานข้อมูลเพื่ออัพเดท
updateSupplies2 :: อัพเดทข้อมูลลงฐานข้อมูล
*/
class Supplies extends CI_Model
{
	var $id; //ไพรมารี่คีย์
	var $suppliesId; //ระหัสผู้ขาย
	var $suppliesName; //ชื่อผู้ขาย
	var $suppliesAddress; //ที่อยู่ผู้ขาย
	var $suppliesTel; //เบอร์ผู้ขาย

	function __construct()
	{
		$this->load->database();
		parent::__construct();
	}
	
	###### SET : id (ไพรมารี่คีย์) ######
	function setId($id)
	{
		$this->id = $id;
	}

	###### GET : id (ไพรมารี่คีย์) ######
	function getId()
	{
		return $this->id;
	}


	###### SET : suppliesId (ระหัสผู้ขาย) ######
	function setSuppliesId($suppliesId)
	{
		$this->suppliesId = $suppliesId;
	}

	###### GET : suppliesId (ระหัสผู้ขาย) ######
	function getSuppliesId()
	{
		return $this->suppliesId;
	}

	###### SET : suppliesName (ชื่อผู้ขาย) ######
	function setSuppliesName($suppliesName)
	{
		$this->suppliesName = $suppliesName;
	}

	###### GET : suppliesName (ชื่อผู้ขาย) ######
	function getSuppliesName()
	{
		return $this->suppliesName;
	}
	###### SET : suppliesAddress (ที่อยู่ผู้ขาย) ######
	function setSuppliesAddress($suppliesAddress)
	{
		$this->suppliesAddress = $suppliesAddress;
	}

	###### GET : suppliesAddress (ที่อยู่ผู้ขาย) ######
	function getSuppliesAddress()
	{
		return $this->suppliesAddress;
	}
	###### SET : suppliesTel (เบอร์ผู้ขาย) ######
	function setSuppliesTel($suppliesTel)
	{
		$this->suppliesTel = $suppliesTel;
	}

	###### GET : suppliesTel (เบอร์ผู้ขาย) ######
	function getSuppliesTel()
	{
		return $this->suppliesTel;
	}

######################### Funtion #################################

	function add($suppliesId,$suppliesName,$suppliesAddress,$suppliesTel)
	{
		$this->db->query('INSERT INTO supplies (suppliesId,suppliesName,suppliesAddress,suppliesTel) VALUES ("'.$suppliesId.'","'.$suppliesName.'","'.$suppliesAddress.'","'.$suppliesTel.'")');
	}

	function showAllData(){
		
		$data = $this->db->get('supplies')->result_array();
		return $data;		
	}

	function deleteSupplies($suppliesId)
	{
	$this->db->from('supplies');
	$this->db->where('supplies.suppliesId',$suppliesId);
	if	($this->db->delete())
		{
		echo "";
		}
	else
		{
		echo "";
		}
	}
	function updateSupplies($Id)
	{
		$this->db->where('supplies.Id', $Id);
		$query['update'] = $this->db->get('supplies')->result_array();
		return $query;
	}
	function updateSupplies2($suppliesId,$suppliesName,$suppliesAddress,$suppliesTel){

		$data = array(
               'suppliesName' => $suppliesName,
               'suppliesAddress' => $suppliesAddress,
               'suppliesTel' => $suppliesTel
            );

			$this->db->where('supplies.suppliesId', $suppliesId);
			$this->db->update('supplies', $data); 

		/*$this->db->query('UPDATE INTO supplies (suppliesId,suppliesName,suppliesAddress,suppliesTel) VALUES ("'.$suppliesId.'","'.$suppliesName.'","'.$suppliesAddress.'","'.$suppliesTel.'")');*/
	}



		
	

}