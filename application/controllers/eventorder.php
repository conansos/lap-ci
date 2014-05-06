<?php 
/*
Controller EventOrder
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
class eventorder extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->database();  // เชื่อมต่อ DB
		$this->load->model('product');
		$this->load->model('order');
		$this->load->model('supplies');
	}
	function index()
	{ 
		$data = $this->Product->getproductInfo();
		$this->load->view('listPuchasing',$data);	
	}
	function updateNormal()
	{
		$this->order->upDateStatus(
							 $this->input->post('productId')
							,'normal');
		$data = $this->product->getproductInfo();
		$this->load->view('listPuchasing',$data);
	}
#############################################################################	
	function updateAlert()
	{	
		echo $code = $this->order->returnorderCode();
		die();
		$code = $code+1;
		$this->order->addorder($code,$this->input->post('productId'),$this->input->post('suppliesId'));
		$this->order->upDateStatus(
							 $this->input->post('productId')
							,'alert');
		$data = $this->product->getproductInfo();
		$this->load->view('listPuchasing',$data);
	}
	function loadview()
	{
		$data = $this->product->getproductInfo();
		$this->load->view('listorder',$data);
	}
	function test()
	{
		$data['test'] = $this->order->orderUsergorup();
		$data['user'] = $this->supplies->showAllData();
		$this->load->view('test',$data);
	}
	

}

?>