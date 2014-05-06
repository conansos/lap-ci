<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>supplies</title>
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
    <li><a href="#tabs-1">เพิ่มข้อมูลผู้ขายสินค้า</a></li>
    <li><a href="#tabs-2">ข้อมูลผู้ขายสินค้า</a></li>
	<li><a href="#tabs-3">HOME</a></li>
  </ul>
  <div id="tabs-1">
<?php $this->load->helper("form"); ?>
<?php echo form_open("/eventsupplies/doAdd"); ?><br>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="16%" height="35" align="left">รหัสผู้ขายสินค้า</td>
    <td width="84%"><input type="text" name="suppliesId" id="suppliesId" /></td>
  </tr>
  <tr>
    <td height="35" align="left">ชื่อผู้ขายสินค้า</td>
    <td><input type="text" name="suppliesName" id="suppliesName" /></td>
  </tr>
  <tr>
    <td height="35" align="left">เบอร์ติดต่อผู้ขายสินค้า</td>
    <td><input type="text" name="suppliesTel" id="suppliesTel" /></td>
  </tr>
  <tr>
    <td height="34" align="left">ที่อยู่ผู้ขายสินค้า</td>
    <td><textarea name="suppliesAddress" id="suppliesAddress" cols="45" rows="5"></textarea>
  </tr>
  <tr>
    <td height="40"></td>
    <td><input type="submit" name="Add" id="Add" value="เพิ่มข้อมูลผู้ขายสินค้า"  /></td>
  </tr>
</table>
  </div>
  <div id="tabs-2">
    <?php
		foreach($master as $row)
				{
				//	echo '<br />';
				//	echo "รหัสผู้ขายสินค้า&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['suppliesId'];
				//	echo ' ';
					echo '<br />';
					echo "ชื่อผู้ขายสินค้า&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['suppliesName'];
					echo ' ';
					echo '<br />';
					echo "ที่อยู่ผู้ขายสินค้า&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['suppliesAddress'];
					echo ' ';
					echo '<br />';
					echo "เบอร์ติดต่อผู้ขายสินค้า&nbsp;&nbsp;&nbsp;&nbsp;".$row['suppliesTel'];
					echo ' ';
					echo '<br />';
					
					?>
				<br><a name="delete" href="/~b542110009/index.php/eventsupplies/doDelete/<?php echo $row['suppliesId'];?>">Delete</a>     <a name="update" href="/~b542110009/index.php/eventsupplies/upDate/<?php echo $row['Id'];?>">Update</a>
					<br><br>
					
					<?php
					echo '<hr>';
					}
					?>
  </div>
  <div id="tabs-3">
  <p><a name="update" href="/index.php">Back To Index</a></p><!--/~b542110009/index.php-->
  </div>
</div>
</body>
</html>