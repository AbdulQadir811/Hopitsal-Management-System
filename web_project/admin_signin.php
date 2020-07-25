<?php
session_start();
echo "bingoo";
$con1=mysqli_connect("localhost","root","","hospital") or die(mysqli_error());

$sql="select * from admins where email='$_POST[email]' and pass='$_POST[password]'";


$result=mysqli_query($con1,$sql) or die(mysql_error());
echo "bingoo";

$row = mysqli_fetch_array($result);

$var1 = $row['email'];
$var2 = $row['name'];
$var3 = $row['id'];
$var4 = $row['contact'];
$var5 = $row['address']; 



if (is_null($var1))
{
	echo "user does't exist ";

	//exit();
	header("location:admin_login.php?msg=Kindly login to system with correct name and password");
}
else {
	echo "user exists";
	// exit();
$_SESSION['email'] = $var1;
$_SESSION['name']=$var2;
$_SESSION['id']=$var3;
$_SESSION['contact']=$var4;
$_SESSION['address']=$var5;
echo "bingoo";


header("location:admin_dashboard.php");
}


?>