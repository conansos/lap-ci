<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*Controller eventIndex
สร้างโดย นาย หฤษฏ์ สุริยะโชติ
สร้างเมื่อ 18/4/2557
อัพเดทเมื่อ 22/4/2557


function ทั้งหมด
index :: โหลดหน้าแรก
*/
class eventindex extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}
	function index()
	{
		$this->load->view('index');
	}
}