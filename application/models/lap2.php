<?php
/*
Model Lap2
���ҧ�� ��� ��ɯ� ������⪵�
���ҧ����� 2/5/2557



function ������
getData :: �֧�����ŨҡDB



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