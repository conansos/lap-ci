<?php 
/*
Controller EventProduct
สร้างโดย นาย หฤษฏ์ สุริยะโชติ
สร้างเมื่อ 18/4/2557
อัพเดทเมื่อ 22/4/2557


function ทั้งหมด
index :: โหลดหน้าProduct
doAdd :: เพิ่มข้อมูล สินค้า
doDelete ::ลบข้อมูลสินค้า
upDate :: เรียกข้อมูลมาแสดง เพื่อ อัดเดท
doUpDate :: อัพเดทข้อมูล ลง ฐานข้อมู
*/
class eventproduct extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->database();  // เชื่อมต่อ DB
		$this->load->model('product');
	}
	function index()
	{ 
		$data = $this->product->getproductInfo();
		$this->load->view('uiproduct',$data);
		
	}
	function doAdd()
	{
	
		$this->load->model('product');

		$id = $this->db->insert_id();	
		$this->product->add(
							 $this->input->post('productName')
							,$this->input->post('productPrice')
							,$this->input->post('productAmount')
							,$this->input->post('productAlert')
							,$this->input->post('suppliesId'));
		$data = $this->product->getproductInfo();
		$this->load->view('uiproduct',$data);
		
	}
	

	function doDelete($ProductId)
	{    

		$this->load->model('product');
		$this->product->deleteProduct($ProductId);

		$data = $this->product->getproductInfo();
		$this->load->view('uiproduct',$data);
	}
	
	function upDate($Id){

		$this->load->database();  // เชื่อมต่อ 
		$data = $this->product->updateProduct($Id);
		$this->load->view('updateproduct',$data);
		}
	function doUpDate()
	{
	
		$this->load->model('product');
	
		$this->product->updateProduct2(
							 $this->input->post('ProductName')
							,$this->input->post('ProductAddress')
							,$this->input->post('ProductTel'));
		$data = $this->product->showAllData();
		$this->load->view('uiproduct',$data);
		
	}

}

?>