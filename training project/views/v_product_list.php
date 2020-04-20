<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<h1 align="center"> Product list </h1>
<?php
require("models/database.php");
$sql = "SELECT*FROM product";
$pdo_stm = $pdo_conn->prepare($sql);
$res =$pdo_stm->execute();
?>
<table width="1172" border="1" style="text-align:center;margin:0 auto">
  <tr style="background-color:#FC0">
    <td width="50" scope="row">ID</td>
    <td width="146">Name</td>
    <td width="102">Catalog</td>
    <td width="88">Quantity</td>
    <td width="128">Status</td>
    <td width="98">Price</td>
    <td width="173">Picture</td>
    <td width="218">Description</td>
    <td width="111">Action</td>
  </tr>
  <?php
  while($row = $pdo_stm->fetch(PDO::FETCH_ASSOC))
  {
  	$id = $row["id"];
	$name = $row["name"];
	$quan = $row["quan"];
	$des = $row["des"];
	$pic = $row["pic"];
	if($pic=="")
	{
		$pic="nothing.jpg";
	}
	$stats = $row["stats"];
	$cat= $row["catalog"];
	$price = $row["Price"];
  ?>
  <tr>
    <td><?=$id?></td>
    <td><?=$name?></td>
    <td><?=$cat?></td>
    <td><?=$quan?></td>
    <td><?=($stats)==1?"Available":"Unavailable"?></td>
    <td><?=$price?> $</td>
    <td><img src="../pics/products/<?=$pic?>" width="50" /></td>
    <td><?=$des?></td>
    <td> Edit - Remove </td>
  </tr>
  <?php
  }
  ?>
</table>
<br />
<table style="margin:0 auto" width="80px" border="0">
  <tr>
    <th colspan="4" scope="row"><input type="submit" name="b1" id="b1" value="Add new product" onclick="window.location.href='?module=product&cmd=add'" /></th>
  </tr>
</table>
</body>
</html>