<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
if (!isset($_REQUEST["id"]))
	die("no ID");
$id = $_REQUEST["id"];
require("models/database.php");
$sql = "SELECT * FROM catalog WHERE id = $id";
$pdo_stm = $pdo_conn->prepare($sql);
$ks = $pdo_stm->execute();
$row = $pdo_stm->fetch();
$name = $row["name"];
$stats = $row["stats"];


?>
<body>
<h1 align="center"> Edit Catalog </h1>
<form method="post" action="?module=catalog&cmd=edit_prog">
<table border="1" style="margin:0 auto; border-collapse:collapse">
<td width="375">
  <table width="378" height="164" border="0">
    <tr>
      <th width="99" height="53" scope="row">Name</th>
      <td width="212"><input type="text" name="t1" id="t1" value="<?=$name?>" /></td>
    </tr>
    <tr>
      <th height="62" scope="row">Status</th>
      <td><p>
        <label>
          <input type="radio" name="rg1" id="rg1_0" value="1" <?=($stats==1?"checked":"")?> />
          Available</label>
        <br />
        <label>
          <input type="radio" name="rg1" id="rg1_1" value="0"<?=($stats==0?"checked":"")?> />
          Out of stock</label>
        <br />
      </p></td>
    </tr>
    <tr>
      <th colspan="2" scope="row"><input type="submit" name="b1" id="b1" value="Edit" /></th>
    </tr>
  </table>
</td>
</table>
<input type="hidden" name="t2" id="t2" value="<?=$id?>"/>

</form>
</body>
</html>