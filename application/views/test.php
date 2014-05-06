<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

 <?php
	foreach($user as $u){
		foreach ($test as $r){
			if($u['suppliesId']==$r['suppliesId'])
					{ 
					echo $u['suppliesName'];
					}
	}
	
}
?>

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
	if($row['productAmount']<=$row['productAlert']&&$row['status']=='alert')
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

   </td>
   
  </tr>

	<?php } ?>
  
<?php endforeach ?>
</table>
</body>
</html>