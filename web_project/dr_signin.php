<?php
session_start();

$con1=mysqli_connect("localhost","root","","hospital") or die(mysqli_error());

$sql="select * from doctors where email='$_POST[email]' and pass='$_POST[password]'";


$result=mysqli_query($con1,$sql) or die(mysql_error());

$row = mysqli_fetch_array($result);

$var1 = $row['email'];
$var2 = $row['doc_name'];
$var3 = $row['id'];
$var4 = $row['contact'];
$var5 = $row['address']; 
$var6= $row['blood_group'];
$var7 = $row['pass'];
echo $var1;
echo $var2;
if (is_null($var1)  )
{
	echo "user does't exist ";

	echo $var1;
	header("location:dr_login.php?msg=Kindly login to system with correct name and password");

}
else {
	echo "user exists";
	// exit();
$_SESSION['email'] = $var1;
$_SESSION['doc_name']=$var2;
$_SESSION['id']=$var3;
$_SESSION['contact']=$var4;
$_SESSION['address']=$var5;
$_SESSION['blood_group']= $var6;

header("location:dr_dashboard.php");
}


?>