<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<h1 align="center"> Add New Product </h1>
<br/>
<table border="1" style="margin:0 auto">
<td>
<form action="?module=product&cmd=add_prog" method="post" enctype="multipart/form-data">
  <table width="517" border="0" >
    <tr>
      <th width="133" height="45" scope="row">Name</th>
      <td width="374"><input type="text" name="txtname" id="txtname" /></td>
    </tr>
    <tr>
      <th height="42" scope="row">Catalog</th>
      <td>
      <select name="select_cat" id="select_cat" style="width:120px" required>
      	<option value="" disabled selected hidden> ---Catalog--- </option>
        <?php
			$table = "catalog";
			$column = "name";
			$select = new clsDatabase();
			$res = $select->get_one_column($column,$table);
			foreach ($res as $output)
			{
		?>
        	<option><?php echo $output["name"]; ?> </option>
         <?php
			}
			?>
      </select>
      </td>
    </tr>
    <tr>
      <th height="48" scope="row">Quantity</th>
      <td><input type="text" name="txt_quantity" id="txt_quantity" style="width:60px" /></td>
    </tr>
    <tr>
      <th height="69" scope="row">Status</th>
      <td><p>
        <label>
          <input type="radio" name="rg1" value="1"  checked="checked" />
          Available</label>
        <br />
        <label>
          <input type="radio" name="rg1" value="0"  />
          Unavailable</label>
        <br />
      </p></td>
    </tr>
    <tr>
      <th height="40" scope="row">Price</th>
      <td><input type="text" name="txt_price" id="txt_price" style="width:60px"/> 
        $ </td>
    </tr>
    <tr>
      <th height="40" scope="row">Picture</th>
      <td><input type="file" name="file_pic" id="file_pic" /></td>
    </tr>
    <tr>
      <th height="225" scope="row">Description</th>
      <td><textarea name="txt_des" id="txt_des" cols="45" rows="5" style="height:195px;width:320px"></textarea></td>
    </tr>
    <tr>
      <th colspan="2" scope="row"><input type="submit" name="bt_submit" id="bt_submit" value="Add" />
      &nbsp;
      <input type="reset" name="Reset" id="button" value="Reset" />
      &nbsp;
      <input type="button" name="button2" id="button2" value="Back" onclick="window.location.href='?module=product'" /></th>
    </tr>
  </table>
</form>
</td>
</table>
</body>
</html>