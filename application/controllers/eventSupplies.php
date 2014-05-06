<?php 
/*
Controller EventSupplies
สร้างโดย นาย หฤษฏ์ สุริยะโชติ
สร้างเมื่อ 18/4/2557
อัพเดทเมื่อ 22/4/2557

function ทั้งหมด
index :: โหลดหน้าSupplies
doAdd :: เพิ่มข้อมูลผู้ขาย
doDelete ::ลบข้อมูลผู้ขา
*/
class eventsupplies extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->database();  // เชื่อมต่อ DB
		$this->load->model('supplies');

	
	}
	function index()
	{
		$this->load->database();  // เชื่อมต่อ 
		$data = $this->supplies->showAllData();
		$this->load->view('uisupplies',$data);
		
	}
	function doAdd()
	{
	
		$this->load->model('supplies');

		$id = $this->db->insert_id();	
		$this->supplies->add($this->input->post('suppliesId')
							,$this->input->post('suppliesName')
							,$this->input->post('suppliesAddress')
							,$this->input->post('suppliesTel'));
		$data = $this->supplies->showAllData();
		$this->load->view('uisupplies',$data);
		
	}
	

	function doDelete($suppliesId)
	{    

		$this->load->model('supplies');
		$this->supplies->deleteSupplies($suppliesId);

		$data = $this->supplies->showAllData();
		$this->load->view('uisupplies',$data);
	}
	
	function upDate($Id){

		$this->load->database();  // เชื่อมต่อ 
		$data = $this->supplies->updateSupplies($Id);
		$this->load->view('updatesupplies',$data);
		}
	function doUpDate()
	{
	
		$this->load->model('supplies');
	
		$this->supplies->updateSupplies2($this->input->post('suppliesId')
							,$this->input->post('suppliesName')
							,$this->input->post('suppliesAddress')
							,$this->input->post('suppliesTel'));
		$data = $this->supplies->showAllData();
		$this->load->view('uisupplies',$data);
		
	}
}

?>