<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Product</title>
<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( "#tabs" ).tabs();
  });
  </script>
</head>
<body>

<div id="tabs">
  <ul>
    <li><a href="#tabs-1">จุดสั่งซื้อสินค้า</a></li>
    <li><a href="#tabs-2">ใบสั่งซื้อสินค้า</a></li>
    <li><a href="#tabs-3">ยืนยันการสั่งซื้อสินค้า</a></li>
	<li><a href="#tabs-4">HOME</a></li>
  </ul>
  <div id="tabs-1">

    <table width="821" border="1">
  <tr>
    <td width="204" align="center">รายการ</td>
    <td width="178" align="center">ผู้ขาย</td>
    <td width="186" align="center">จำนวนสินค้าคงเหลือ</td>
    <td width="163" align="center">จุดสั่งซื้อ</td>
    <td width="56" align="center">เลือก</td>
  </tr>
  <?php
 foreach($dataProduct as $row):
	if($row['productAmount']<=$row['productAlert']&&$row['status']=='normal')
	{ ?>
	<tr>
	<td align="center"><?php echo $row['productName']?></td>
	<td align="center">
		<?php foreach($dataSupplies as $row1){
			if($row['suppliesId']==$row1['suppliesId'])
					{ 
					echo $row1['suppliesName'];
					}
		} ?>
	</td>
    <td align="center"><?php echo $row['productAmount']?></td>
    <td align="center"><?php echo $row['productAlert']?></td>
    <td align="center">
<?php $this->load->helper("form"); ?>
<?php echo form_open("/eventorder/updateAlert"); ?>
      <input type="checkbox" name="productId[]" value="<?php echo $row['productId']?>"/>
      <input type="hidden" name="suppliesId[]" value="<?php echo $row['suppliesId']?>"/>
      <label for="checkbox"></label>
   </td>
  </tr>

	<?php } ?>
  
<?php endforeach ?>
</table>
<input type="submit" name="button" id="button" value="Submit" />

<br/>
  </div>
  <div id="tabs-2">

  </div>
  <div id="tabs-3">
    <p>รอข้อมูล</p>
  </div>
  <div id="tabs-4">
    <a name="update" href="/index.php">Back ot Index</a><!-- /~b542110009/index.php -->
  </div>
</div>

</body>
</html>