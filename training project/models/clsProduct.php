<?php
require("models/clsDatabase.php");
class clsProduct
{
	var $arr_data = array();
	public function clsProduct()
	{
	}
	public function array_data_binding($id,$name,$catalog,$quantity,$status,$price,$picture,$desciption)
	{
		$this->arr_data[0]= $id;
		$this->arr_data[1]= $name;
		$this->arr_data[2]= $catalog;
		$this->arr_data[3]= $quantity;
		$this->arr_data[4]= $status;
		$this->arr_data[5]= $price;
		$this->arr_data[6]= $picture;
		$this->arr_data[7]= $desciption;
	}
	public function product_add()
	{
		$db = new clsDatabase();
		$sql_string = "INSERT INTO product VALUES(?,?,?,?,?,?,?,?)";
		$data_arr = $this->arr_data;
		$result = $db->SQL_Execution($sql_string,$data_arr);
		return $result;
	}
}
?>