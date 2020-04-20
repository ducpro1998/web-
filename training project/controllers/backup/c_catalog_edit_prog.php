<?php
require("models/database.php");
//require("models/catalog.php");
if (!isset($_REQUEST["b1"]))
	header("location::?module=catalog");
else
	{
	$id = $_REQUEST["t2"];
	$name = $_REQUEST["t1"];	
	if(isset($_REQUEST["rg1"]))
	$stats = $_REQUEST["rg1"];
	if($name=="")
	{
		die("Name is empty <br/>
		<a href='?module=catalog&cmd=edit&id=$id'> Return </a>");
	}
	else  // tách hàm update sang model ko update đc bản ghi
	{
		$sql="UPDATE catalog SET name=?, stats=? WHERE id=?";
		$pdo_stm = $pdo_conn->prepare($sql);
		$pdo_stm->bindParam(1,$name);
		$pdo_stm->bindParam(2,$stats);
		$pdo_stm->bindParam(3,$id);
		$res= $pdo_stm->execute();
		if($res)
		{
		echo "<h3> Edited </h3>";
		echo "<a href='?module=catalog'> Return </a>";
		}
			else
		die ("<h3> Error</h3> <br>
		<a href='?module=catalog'> Return </a>");	
		
	}
	/*
	{
		$edit = new catalog();
		$edit -> catalog_edit($name,$stats);
	}
	*/
}	
?>