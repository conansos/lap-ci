<?php
/*
Model Product
���ҧ�� ��� ��ɯ� ������⪵�
���ҧ����� 18/4/2557


attibute
$id; //����������
$productId; //�����Թ���
$productName; //�����Թ���
$productPrice; //�Ҥ��Թ���
$productAmount; //�ӹǹ������ͧ͢�Թ���
$productAlert; //�ش��觫��


function ������
index :: ��Ŵ˹���á
add :: �����������Թ���ŧ�ҹ������
getproductInfo :: �֧�������Թ��Ҩҡ�ҹ������
deleteProduct :: ź�������Թ��Ҩҡ�ҹ������

*/

class Product extends CI_Model
{
	var $id; //����������
	var $productId; //�����Թ���
	var $productName; //�����Թ���
	var $productPrice; //�Ҥ��Թ���
	var $productAmount; //�ӹǹ������ͧ͢�Թ���
	var $productAlert; //�ش��觫���
	var $suppliesId; //����ʼ����FK

	function __construct()
	{
		$this->load->database();
		parent::__construct();
	}

	###### SET : id (����������) ######
	function setId($id)
	{
		$this->id = $id;
	}

	###### GET : id (����������) ######
	function getId()
	{
		return $this->id;
	}


	###### SET : productId (�����Թ���) ######
	function setProductId($productId)
	{
		$this->productId = $productId;
	}

	###### GET : productId (�����Թ���) ######
	function getProductId()
	{
		return $this->productId;
	}
	###### SET : productName (�����Թ���) ######
	function setProductName($productName)
	{
		$this->productName = $productName;
	}

	###### GET : productName (�����Թ���) ######
	function getProductName()
	{
		return $this->productName;
	}
	###### SET : productPrice (�Ҥ��Թ���) ######
	function setProductPrice($productPrice)
	{
		$this->productPrice = $productPrice;
	}

	###### GET : productPrice (�Ҥ��Թ���) ######
	function getProductPrice()
	{
		return $this->productPrice;
	}
	###### SET : productAmount (�ӹǹ������ͧ͢�Թ���) ######
	function setProductAmount($productAmount)
	{
		$this->productAmount = $productAmount;
	}

	###### GET : productAmount (�ӹǹ������ͧ͢�Թ���) ######
	function getProductAmount()
	{
		return $this->productAmount;
	}
	###### SET : productAlert (�ش��觫���) ######
	function setProductAlert($productAlert)
	{
		$this->productAlert = $productAlert;
	}

	###### GET : productAlert (�ش��觫���) ######
	function getProductAlert()
	{
		return $this->productAlert;
	}
	###### SET : suppliesId (����ʼ����FK) ######
	function setSuppliesId($suppliesId)
	{
		$this->suppliesId = $suppliesId;
	}

	###### GET : suppliesId (����ʼ����FK) ######
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