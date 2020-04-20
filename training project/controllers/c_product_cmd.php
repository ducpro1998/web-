<?php
require_once("models/clsProduct.php");
require_once("widgets/widgets.php");
$cmd="";
if (isset($_REQUEST["cmd"]))
$cmd = $_REQUEST["cmd"];
switch ($cmd)
{
	case "add":
	require ("views/v_product_add.php");
	break;
	
	case "add_prog":
	require ("controllers/c_product_add_prog.php");
	break;
	
	default:
	require ("views/v_product_list.php");
}
?>