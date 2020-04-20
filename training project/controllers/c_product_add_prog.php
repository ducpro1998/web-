<?php
if (!isset($_REQUEST["bt_submit"]))
	header("location::?module=product");
else
{
	$prod_name = $_REQUEST["txtname"];
	$price = $_REQUEST["txt_price"];
	$catalog = $_REQUEST["select_cat"];
	$quantity = $_REQUEST["txt_quantity"];
	if(isset($_REQUEST["rg1"]))
	{
	$stats = $_REQUEST["rg1"];
	}
	$picture = upload("file_pic", "pics/products");
	$txt_des = $_REQUEST["txt_des"];
	if($prod_name=="")
	{
		die("Name is empty. <br>
			<a href='?module=product&cmd=add'>Return </a>");
	}
	if ($quantity=="")
	{
		die("Quantity is empty. <br>
			<a href='?module=product&cmd=add'>Return </a>");
	}
	else if(!is_numeric($quantity))
	{
		die("Quantity must be in numeric. <br>
			<a href='?module=product&cmd=add'>Return </a>");
	}
	
	if ($price=="")
	{
		die("Price is empty. <br>
			<a href='?module=product&cmd=add'>Return </a>");
	}
	else if (!is_numeric($price))
	{
		die("Price must be in numeric. <br>
			<a href='?module=product&cmd=add'>Return </a>");
	}
	$add = new clsProduct();
	$add-> array_data_binding(NULL,$prod_name,$catalog,$quantity,$stats,$price,$picture,$txt_des);
	$result = $add->product_add();
	if ($result<0)
	{
		die("Failed
		<a href='?module=product'>Return </a>");
	}
	else
	 {
		 echo $result;
		 echo "Product has been added";
		echo " <a href='?module=product'>Return </a>";
	 }
}
?>