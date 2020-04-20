<?php
require("models/catalog.php");
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
		$edit = new catalog();
		$edit -> catalog_edit($name,$stats);
	}
	
}	
?>