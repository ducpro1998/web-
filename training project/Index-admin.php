<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="CSS/index.css" />
</head>

<body id="body">

<div id="menu">
  <table width="100%" height="80px" border="0">
    <tr>
      <td width="545" scope="row"><img src="pics/download.png" width="194" height="70" /> </td>
      <td width="214">
      <a href="?module=product"> Product list </a>
      </td>
      <td width="350">
      <a href="?module=catalog">Catalog </a>
      </td>
    </tr>
  </table>
</div>
<div id="wrapper">
<div id="header">
	carousel slide chọn ảnh từ form php
</div>
<div id="content"> 
	<?php
	$module="";
	if(isset($_REQUEST["module"]))
	{
		$module = $_REQUEST["module"];
	}
	switch($module)
	{
		case "product":
		require("controllers/c_product_cmd.php");
		break;
		
		case "catalog":
		require("controllers/c_catalog_cmd.php");
		break;
		
		default:
		echo("<h1> Welcome </h1>");
	}
	
	
	?>
 </div>
<div id="footer"> 
<h2>Contact me</h2>
<a href="https://www.facebook.com/ducpro1998"> Facebook </a>
<br /> <br  /> 
<h2> Store Location</h2>
<p> Hoan Kiem Lake - Hoan Kiem distr - Hanoi </p>
 </div>
</div>

</body>
</html>