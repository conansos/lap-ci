<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*Controller eventIndex
���ҧ�� ��� ��ɯ� ������⪵�
���ҧ����� 18/4/2557
�Ѿഷ����� 22/4/2557


function ������
index :: ��Ŵ˹���á
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