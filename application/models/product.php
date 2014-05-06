<?php
/*
Model Product
สร้างโดย นาย หฤษฏ์ สุริยะโชติ
สร้างเมื่อ 18/4/2557


attibute
$id; //ไพรมารี่คีย์
$productId; //รหัสสินค้า
$productName; //ชื่อสินค้า
$productPrice; //ราคาสินค้า
$productAmount; //จำนวนคงเหลือของสินค้า
$productAlert; //จุดสั่งซื้


function ทั้งหมด
index :: โหลดหน้าแรก
add :: เพิ่มข้อมูลสินค้าลงฐานข้อมูล
getproductInfo :: ดึงข้อมูลสินค้าจากฐานข้อมูล
deleteProduct :: ลบข้อมูลสินค้าจากฐานข้อมูล

*/

class Product extends CI_Model
{
	var $id; //ไพรมารี่คีย์
	var $productId; //รหัสสินค้า
	var $productName; //ชื่อสินค้า
	var $productPrice; //ราคาสินค้า
	var $productAmount; //จำนวนคงเหลือของสินค้า
	var $productAlert; //จุดสั่งซื้อ
	var $suppliesId; //ระหัสผู้ขายFK

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
	###### SET : productName (ชื่อสินค้า) ######
	function setProductName($productName)
	{
		$this->productName = $productName;
	}

	###### GET : productName (ชื่อสินค้า) ######
	function getProductName()
	{
		return $this->productName;
	}
	###### SET : productPrice (ราคาสินค้า) ######
	function setProductPrice($productPrice)
	{
		$this->productPrice = $productPrice;
	}

	###### GET : productPrice (ราคาสินค้า) ######
	function getProductPrice()
	{
		return $this->productPrice;
	}
	###### SET : productAmount (จำนวนคงเหลือของสินค้า) ######
	function setProductAmount($productAmount)
	{
		$this->productAmount = $productAmount;
	}

	###### GET : productAmount (จำนวนคงเหลือของสินค้า) ######
	function getProductAmount()
	{
		return $this->productAmount;
	}
	###### SET : productAlert (จุดสั่งซื้อ) ######
	function setProductAlert($productAlert)
	{
		$this->productAlert = $productAlert;
	}

	###### GET : productAlert (จุดสั่งซื้อ) ######
	function getProductAlert()
	{
		return $this->productAlert;
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

######################### Funtion #################################
	function add($productName,$productPrice,$productAmount,$productAlert,$suppliesId)
	{
		$this->db->query('INSERT INTO product (productName,productPrice,productAmount,productAlert,suppliesId) VALUES ("'.$productName.'","'.$productPrice.'","'.$productAmount.'","'.$productAlert.'","'.$suppliesId.'")');
	}

	function getproductInfo()
	{
		$queryProduct = $this->db->get('product')->result_array();
		$querySupplies = $this->db->get('supplies')->result_array();
		$data['dataProduct'] = $queryProduct;
		$data['dataSupplies'] = $querySupplies;
		return $data;
	}

	function deleteProduct($productId)
	{
	$this->db->from('product');
	$this->db->where('product.productId',$productId);
	if	($this->db->delete())
		{
		echo "";
		}
	else
		{
		echo "";
		}
	}

}