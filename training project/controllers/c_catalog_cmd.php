<?php
$cmd = "";
if (isset($_REQUEST["cmd"]))
$cmd = $_REQUEST["cmd"];
switch($cmd)
{
	case "add":
	require("views/v_catalog_add.php");
	break;
	
	case "add_progress":
	require("controllers/c_catalog_add_prog.php");
	break;
	
	case "delete":
	require ("controllers/c_catalog_del.php");
	break; 
	
	case "edit_prog":
	require ("controllers/c_catalog_edit_prog1.php");
	break;
	
	case "edit":
	require ("views/v_catalog_edit.php");
	break;
	
	default:
	require("views/v_catalog_list.php");
}
?>