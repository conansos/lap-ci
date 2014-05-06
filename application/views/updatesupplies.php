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
    <li><a href="#tabs-1">อัพเดทข้อมูล</a></li>
    <li><a href="#tabs-2">HOME</a></li>
  </ul>
  <div id="tabs-1">
    
<?php foreach($update as $row){?>
	<form id="form1" name="form1" method="post" action="/~b542110009/index.php/eventsupplies/doUpDate/">
	<hr></hr>
	</br>
  รหัสผู้ขายสินค้า
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="text" name="suppliesId" id="suppliesId" value="<?php echo $row['suppliesId']; ?>" /><br><br>
ชื่อผู้ขายสินค้า
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="suppliesName" id="suppliesName" value="<?php echo $row['suppliesName']; ?>"/><br><br>
ที่อยู่ผู้ขายสินค้า
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="suppliesAddress" id="suppliesAddress" value="<?php echo $row['suppliesAddress']; ?>"/><br><br>
เบอร์ติดต่อผู้ขายสินค้า
&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="suppliesTel" id="suppliesTel" value="<?php echo $row['suppliesTel']; ?>"/><br>
<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="Add" id="Add" value="update"/><br><br>
<?php }?>
<hr></hr>
</form>
  </div>
  <div id="tabs-2">
 <p><a name="update" href="/~b542110009/index.php/eventsupplies">Back To Supplies</a></p>
  <p><a name="update" href="/~b542110009/index.php">Back To Index</a></p>
  </div>
</div>

</body>
</html>