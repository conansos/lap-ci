<?php 
class EventPuchasing extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->database();  // เชื่อมต่อ DB
		$this->load->model('Product');
	}
	function index()
	{ 
		$data = $this->Product->getproductInfo();
		$this->load->view('listPuchasing',$data);	
	}
	
}

?>