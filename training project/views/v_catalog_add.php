<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<h2 align="center"> Catalog Information </h2>
<br />
<form method="post" action="?module=catalog&cmd=add_progress">
<table border="1" style="margin:0 auto; border-collapse:collapse">
<td> 
<table width="316" height="200" border="0">
  <tr>
    <td width="89" height="65" scope="row">Name</td>
    <td width="210">
    <input style="border-radius:5px 5px 5px 5px; height:25px" type="text" name="t1" id="t1" />
    </td>
  </tr>
  <tr>
    <td scope="row">Status</td>
    <td><p>
      <label>
        <input type="radio" name="rg1" value="1" id="rg1_0"  checked="checked"/>
        Available</label>
      <br />
      <label>
        <input type="radio" name="rg1" value="0" id="rg1_1" />
        Out of stock</label>
      <br />
    </p></td>
  </tr>
  <tr>
    <td colspan="2" scope="row" style="text-align:center"><input type="submit" name="b1" id="b1" value="Add" />
      &nbsp;
<input type="reset" name="b2" id="b2" value="Reset" />
      &nbsp;
      <input type="button" name="b3" id="b3" value="Back" onclick="window.location.href='?module=product'" /></td>
    </tr>
</table>
</td>
</table>
<br />
</form>
</body>
</html>