<?php
require("models/catalog.php");
if(isset($_REQUEST["b1"]))
{
	$name = $_REQUEST["t1"];
	if(isset($_REQUEST["rg1"]))
	$stats = $_REQUEST["rg1"];
	if($name=="")
	{
		echo "<h2> Name is empty </h2>  <br> <br>";
		echo "<a href='?module=catalog&cmd=add'> Retry </a>";
	}
	else
	{
		$add = new catalog();
		$add -> catalog_add($name, $stats);
		
	}
}
?>