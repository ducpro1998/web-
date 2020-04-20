<?php
class clsDatabase
{
	var $pdo_conn; // biến toàn cục. gọi biến toàn cục = $this->pdo_conn
	var $pdo_stm;
	public function clsDatabase()// hàm constructor phải trùng tên vs clsDatabase
	{
		try{
			$this->pdo_conn = new PDO("mysql:host=localhost;dbname=watch","root","");
			}
		catch(Exception $e)
			{ 
				echo"Database connection error";
				die();
			}
			$this->pdo_conn->query("SET NAMES UTF-8");
	}
	
	public function get_one_column($column,$table)// nên lấy 2 cột
	{
		
		$sql = "select $column from $table";
		try
			{
				$this->pdo_stm = $this->pdo_conn->prepare($sql);
				$this->pdo_stm-> execute();
				$res = $this->pdo_stm->fetchAll();
				return $res;
			}
		catch(Exception $e)
		{
			echo ($e-> getMessage());
		}
	}
	public function SQL_Execution($sql,$data = array())
	{
		$this->pdo_stm = $this->pdo_conn->prepare($sql);
		if($data)
		{
			for ($i=0;$i<count($data);$i++)
			{
				$this->pdo_stm->bindParam($i+1,$data[$i]);
			}
		}
		$result = $this->pdo_stm->execute();
		if ($result==false)
			return -1;
		else
			return $this->pdo_smt->rowCount();
	}
}
?>