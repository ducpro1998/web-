<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
require("models/database.php");
$sql = "SELECT * FROM catalog";
$pdo_stm = $pdo_conn->prepare($sql);
$res = $pdo_stm->execute();
?>
<h1 align="center"> Catalog </h1>
<table width="750" border="1" style="margin:0 auto">
  <tr style="text-align:center; background-color:#FC3">
    <td width="47" scope="row">ID</td>
    <td width="200">Name</td>
    <td width="267">Status</td>
    <td width="208">Action</td>
  </tr>
  <?php
  while($row = $pdo_stm->fetch(PDO::FETCH_ASSOC))
  {
	  $id = $row["id"];
	  $name = $row["name"];
	  $stats = $row["stats"];
  ?>
  <tr style="text-align:center">
    <td scope="row"><?=$id?></td>
    <td><?=$name?></td>
    <td><?=($stats)==1?"Available":"Out of stock"?></td>
    <td>
    <a href="?module=catalog&cmd=edit&id=<?=$id?>">Edit </a> - 
    <a href="?module=catalog&cmd=delete&id=<?=$id?>" onclick="return confirm('Are you sure ?')"> Remove </a>
    </td>
  </tr>
  <?php
  }
  ?>
</table>
<br />
<table style="margin:0 auto" width="80px" border="0">
  <tr>
    <th colspan="4" scope="row"><input type="submit" name="b1" id="b1" value="Add new catalog" onclick="window.location.href='?module=catalog&cmd=add'" /></th>
  </tr>
</table>

</body>
</html>