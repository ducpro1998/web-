<?php
	require_once("models/catalog.php");
	if(!isset($_REQUEST["id"]))
		header("location:?module=catalog");
	$id = $_REQUEST["id"];
	$del = new catalog();
	$del -> delete($id);
	
?>