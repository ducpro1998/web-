<?php
/* tạo một class kết nối riêng */
class catalog
{
	public function catalog_add($name,$stats) //model xử lý thêm
	{	
		try
		{
		$pdo_conn = new PDO("mysql:host=localhost;dbname=watch","root","");
		$pdo_conn->query("SET NAMES UTF-8");
		$sql = "INSERT INTO catalog VALUES (NULL,?,?)";
	$pdo_stm = $pdo_conn->prepare($sql);
	$pdo_stm->bindParam(1,$name);
	$pdo_stm->bindParam(2,$stats);
	$res = $pdo_stm->execute();
	if($res)
		{
			echo "Catalog has been added <br> <br>";
			echo "<a href='?module=catalog'> Catalog list </a>";
		}
		else
		{
			echo "Adding error";
					echo "<a href='?module=catalog&cmd=add'> Retry </a>";
	
		}
		}
		catch(PDOException $e)
			{
				if ($e->errorInfo[1] == 1062) 
					{
						die("Catalog already exists <br> 
						<a href='?module=catalog&cmd=add'>Quay lại</a> ");
					}
			}
	}
	
	public function delete($id) // model xử lý xoá
	{
		$pdo_conn = new PDO("mysql:host=localhost;dbname=watch","root","");
		$sql="DELETE FROM catalog WHERE id=?";
		$pdo_stm = $pdo_conn->prepare($sql);
		$pdo_stm->bindParam(1,$id);
		$res = $pdo_stm->execute();
		if($res)
		{
		echo "<h3> Deleted</h3>";
		echo "<a href='?module=catalog'> Return </a>";
		}
			else
		die ("<h3> Error</h3> <br>
		<a href='?module=catalog'> Return </a>");
	}
	
	public function catalog_edit($name,$stats) // model xử lý sửa
	{
		$pdo_conn = new PDO("mysql:host=localhost;dbname=watch","root","");
		$id = $_REQUEST["t2"];
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
}
?>