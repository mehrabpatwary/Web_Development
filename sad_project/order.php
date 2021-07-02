<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"customerdata");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<style>
h1 {
  background-color: white;
  color: black;
  padding-bottom: 7px; 
  box-shadow: 0px 0px 16px 0px rgba(0,0,0,0.2);
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 80px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 10px 10px;
  z-index: 1;
  border-radius: 5px;
}

.dropdown:hover .dropdown-content {
  display: block;
}
.home{
margin-left: 10px;;
background-color: #FF0000;
color: #fff;
padding: 4px 10px;
border-radius: 3px;
}
.textbox i{
  width: 26px;
  float: left;
  text-align: center;
}
</style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<title>Order Products</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

</head>
<body>

<h1 align="center" style="margin-top: 20px">Order Products</h1>
<b><a class="home" href="/sad_project/products.html">Products</a></b>
<div align="center" style="padding: 15px 0px; border-radius: 5px; color: black; margin: 20px 100px;background-color: white;
  box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.2)">
<form name="form1" action="" method="post">
	<table>
		<tr>
			<td><b>Enter Name</b></td>
			<td><input type="text" name="t1"></td>
		</tr>
		<tr>
			<td><b>Enter Address</b></td>
			<td><input type="text" name="t2"></td>
		</tr>
		<tr>
			<td><b>Phone Number</b></td>
			<td><input type="text" name="t6"></td>
		</tr>
		<tr>
			<td><b>Product Code</b></td>
			<td><input type="text" name="t3"></td>
		</tr>
		<input style="border: none;" name="t5">
        <input style="border: none;" name="t4">
		
		<tr>
			<td colspan="2" align="center" >
			    <input type="submit" name="submit1" value="Order Now" style="background-color: #55FF00;border-radius: 6px; color: white">
		    </td>
		</tr>
	</table> 
</form>
<div style="margin-top: 10px">
<?php 
if (isset($_POST["submit1"])) 
{
	mysqli_query($link,"insert into customer values('$_POST[t5]','$_POST[t1]','$_POST[t2]','$_POST[t6]','$_POST[t3]','$_POST[t4]')");
}
?>
</div>
</div>
</body>
</html>
