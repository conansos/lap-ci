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
    <li><a href="#tabs-1">เพิ่มข้อมูลสินค้าใหม่</a></li>
    <li><a href="#tabs-2">ข้อมูลสินค้า</a></li>
    <li><a href="#tabs-3">HOME</a></li>
  </ul>
  <div id="tabs-1">
    <?php $this->load->helper("form"); ?>
<?php echo form_open("/eventproduct/doAdd"); ?>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="17%" height="41">ชื่อสินค้า </td>
    <td width="83%"><input type="text" name="productName" id="productName" /></td>
  </tr>
  <tr>
    <td height="42">ชื่อผู้ขาย </td>
    <td><select name="suppliesId">
      <?php foreach($dataSupplies as $row1):
			?>
      <option value="<?php echo $row1['suppliesId']?>"><?php echo $row1['suppliesName']?></option>
      <?php endforeach ?>
    </select></td>
  </tr>
  <tr>
    <td height="40">ราคาสินค้า </td>
    <td><input type="text" name="productPrice" id="productPrice" /></td>
  </tr>
  <tr>
    <td height="39">จำนวนสินค้า</td>
    <td><input type="text" name="productAmount" id="productAmount" /></td>
  </tr>
  <tr>
    <td height="39">จุดสั่งซื้อ</td>
    <td><input type="text" name="productAlert" id="productAlert" /></td>
  </tr>
  <tr>
    <td height="49">&nbsp;</td>
    <td><input type="submit" name="Add" id="Add" value="Add Product" /></td>
  </tr>
</table>
</div>
  <div id="tabs-2">
    <?php
		foreach($dataProduct as $row)
				{

					echo '<br />';
					echo 'ชื่อสินค้า'.' : '.$row['productName'];
					echo ' ';
					echo '<br />';
					echo 'รหัสผู้ขาย'.' : '.$row['suppliesId'];
					echo ' ';
					echo '<br />';
					echo 'ราคาสินค้า'.' : '.$row['productPrice'].'  '.'บาท';
					echo ' ';
					echo '<br />';
					echo 'จำนวนสินค้า'.' : '.$row['productAmount'].'  '.'แพค';
					echo ' ';
					echo '<br />';
					echo 'จุดสั่งซื้อ'.' : '.$row['productAlert'].'  '.'แพค';
					echo ' ';
					echo '<br />';
					
					?>
					<a name="delete" href="/~b542110009/index.php/eventproduct/doDelete/<?php echo $row['productId'];?>">Delete</a>
					<br>
					
					<?php
					echo '------------------------------------------------------------- ';
					}
					?>
  </div>
  <div id="tabs-3">
  <p><a name="update" href="/index.php">Back To Index</a></p><!--/~b542110009/index.php-->
  </div>
</div>

</body>
</html>