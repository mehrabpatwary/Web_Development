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
</style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<title>Customer</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

</head>
<body>

<h1 align="center" style="margin-top: 20px">Customers Data</h1>
<b><a class="home" href="index.php">Home</a></b>
<div align="center" style="padding: 15px 0px; border-radius: 5px; color: black; margin: 20px 100px;background-color: white;
  box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.2)">
<form name="form1" action="" method="post">
	<table>
		<tr>
			<td><b>Order ID</b></td>
			<td><input type="text" name="t5"></td>
		</tr>
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
		<tr>
			<td><b>Enter Price</b></td>
			<td><input type="number" name="t4"></td>
		</tr>
		
		<tr>
			<td colspan="2" align="center" >
			<input type="submit" name="submit1" value="Insert" style="background-color: #55FF00; border-radius: 6px; color: white">
			<input type="submit" name="submit2" value="Delete" style="background-color: #FF0000; border-radius: 6px; color: white">
			<div class="dropdown">
			<input type="submit" value="Update" style="background-color: #55FF00; border-radius: 6px; color: white">
			 <div class="dropdown-content">
			 	<input type="submit" name="submit3" value="Update Name" style="background-color: #C70039; border-radius: 5px; color: white; margin-bottom: 6px; padding: 0px 12px">
			 	<input type="submit" name="submit5" value="Update Price" style="background-color: #C70039; border-radius: 5px; color: white;margin-bottom: 6px; padding: 0px 15px">
			 	<input type="submit" name="submit6" value="Update Address" style="background-color: #C70039; border-radius: 5px; color: white; margin-bottom: 6px; padding: 0px 6px">
			 	<input type="submit" name="submit7" value="Update Product" style="background-color: #C70039; border-radius: 5px; color: white; margin-bottom: 6px; padding: 0px 7px">
			 	<input type="submit" name="submit8" value="Update Number" style="background-color: #C70039; border-radius: 5px; color: white; margin-bottom: 6px; padding: 0px 7px">
		    </div>
		    </div>
			<input type="submit" name="submit4" value="Display" style="background-color: #55FF00; border-radius: 6px; color: white">
			<input type="submit" name="submit9" value="Search" style="background-color: #55FF00; border-radius: 6px; color: white">
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
if (isset($_POST["submit2"])) 
{
	mysqli_query($link,"delete from customer where OrderID='$_POST[t5]'");
}
if (isset($_POST["submit3"])) 
{
	mysqli_query($link,"update customer set Name='$_POST[t1]' where OrderID='$_POST[t5]'");
}
if (isset($_POST["submit5"])) 
{
	mysqli_query($link,"update customer set Price='$_POST[t4]' where OrderID='$_POST[t5]'");
}
if (isset($_POST["submit6"])) 
{
	mysqli_query($link,"update customer set Address='$_POST[t2]' where OrderID='$_POST[t5]'");
}
if (isset($_POST["submit7"])) 
{
	mysqli_query($link,"update customer set Product='$_POST[t3]' where OrderID='$_POST[t5]'");
}
if (isset($_POST["submit8"])) 
{
	mysqli_query($link,"update customer set phone='$_POST[t6]' where OrderID='$_POST[t5]'");
}
if (isset($_POST["submit4"])) 
{
	$res=mysqli_query($link,"select * from customer");
	echo "<table border=1>";
	echo "<tr>";
	echo "<th>"; echo "Order ID"; echo "</th>";
	echo "<th>"; echo "Name"; echo "</th>";
	echo "<th>"; echo "Address"; echo "</th>";
	echo "<th>"; echo "Phone Number"; echo "</th>";
	echo "<th>"; echo "Product Code"; echo "</th>";
	echo "<th>"; echo "Price"; echo "</th>";
	echo "</tr>";
	while ($row=mysqli_fetch_array($res)) 
	{
		echo "<tr>";
		echo "<td>"; echo $row["OrderID"]; echo "</td>";
		echo "<td>"; echo $row["Name"]; echo "</td>";
		echo "<td>"; echo $row["Address"]; echo "</td>";
		echo "<td>"; echo $row["phone"]; echo "</td>";
		echo "<td>"; echo $row["Product"]; echo "</td>";
		echo "<td>"; echo $row["Price"]; echo "</td>";
		echo "</tr>";
	}
	echo "</table>";
}
if (isset($_POST["submit9"])) 
{
	$res=mysqli_query($link,"select * from customer where OrderID='$_POST[t5]'");
	echo "<table border=1>";
	echo "<tr>";
	echo "<th>"; echo "Order ID"; echo "</th>";
	echo "<th>"; echo "Name"; echo "</th>";
	echo "<th>"; echo "Address"; echo "</th>";
	echo "<th>"; echo "Phone Number"; echo "</th>";
	echo "<th>"; echo "Product Code"; echo "</th>";
	echo "<th>"; echo "Price"; echo "</th>";
	echo "</tr>";
	while ($row=mysqli_fetch_array($res)) 
	{
		echo "<tr>";
		echo "<td>"; echo $row["OrderID"]; echo "</td>";
		echo "<td>"; echo $row["Name"]; echo "</td>";
		echo "<td>"; echo $row["Address"]; echo "</td>";
		echo "<td>"; echo $row["phone"]; echo "</td>";
		echo "<td>"; echo $row["Product"]; echo "</td>";
		echo "<td>"; echo $row["Price"]; echo "</td>";
		echo "</tr>";
	}
	echo "</table>";
}
?>
</div>
</div>
</body>
</html>