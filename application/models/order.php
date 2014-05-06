<?php
class Order extends CI_Model
{
	var $productId; //รหัสสินค้า
	var $suppliesId; //ระหัสผู้ขายFK
	
		
	function __construct()
	{
		$this->load->database();
		parent::__construct();
	}
	###### SET : productId (รหัสสินค้า) ######
	function setProductId($productId)
	{
		$this->productId = $productId;
	}

	###### GET : productId (รหัสสินค้า) ######
	function getProductId()
	{
		return $this->productId;
	}
	###### SET : suppliesId (ระหัสผู้ขายFK) ######
	function setSuppliesId($suppliesId)
	{
		$this->suppliesId = $suppliesId;
	}

	###### GET : suppliesId (ระหัสผู้ขายFK) ######
	function getSuppliesId()
	{
		return $this->suppliesId;
	}
####################################################

	function addorder($code,$productId,$suppliesId){
		$orderCode = "OC".$code;
		for($i=0;$i<count($productId);$i++)
		{
			$data = array(
					   'orderCode' => $orderCode,
					   'productId' => $productId[$i],
					   'suppliesId' => $suppliesId[$i]
					);
			$this->db->insert('order',$data);
		}
	}
	function upDateStatus($productId,$status){
		for($i=0;$i<count($productId);$i++)
		{
			$data = array(
					   'status' => $status
					);
		
			$this->db->where('productId', $productId[$i]);
			$this->db->update('product', $data);
		}
	}
	function orderUsergorup(){
		$this->db->select('suppliesId');
		$this->db->group_by('suppliesId');
		$data=$this->db->get('product')->result_array();
		return $data; 
	}
	function returnorderCode(){
		$this->db->select('orderCode');
		$this->db->group_by('orderCode');
		$data = $this->db->get('order')->result_array();
		return count($data);	
	}

}
?>