<?php
function upload($input_name, $folder_name)
{
	$file_name = "";
	$file_size = "";
	$file_type = "";
	$file_temp = "";
	$error = array();
	if(isset($_FILES["$input_name"])&& $_FILES["$input_name"]["error"]==0)
	{
		$file_name = $_FILES["$input_name"]["name"];
		$file_temp = $_FILES["$input_name"]["tmp_name"];
		$file_type = $_FILES["$input_name"]["type"];
		if($file_size > 4000000)
			{
				$error[] = "The file you tried to upload was too large. Please upload a file smaller than 4 MB. ";
			}
		$arr = explode(".",$file_name);
		$type = strtolower(end($arr));
		$valid_type = array("gif,jpeg,bmp,jpg");
		if(in_array($type,$valid_type)=== false)//nếu đuôi tệp không có trong mảng
	 		{
         		$errors[]="File type is not supported.";
     		}
		
		if (empty($error)==true)
		{
			move_uploaded_file($file_temp,"$folder_name/".$file_name);
		}
		else
		{
			echo "type: $file_type </br>";
			print_r($error);
			die ("Upload failed");
		}
	}
}
?>