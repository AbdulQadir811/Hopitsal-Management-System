<?php


$con1=mysqli_connect("localhost","root","","hospital") or die(mysqli_error());

$sql = "INSERT INTO patient ( email,name,pass,age,contact_no,address,blood_group,birth_date,sex,discription ) VALUES ( '$_POST[email]', '$_POST[name]', '$_POST[pass]'), '$_POST[age]', '$_POST[contact_no]', '$_POST[address]', '$_POST[blood_group]', '$_POST[birth_date]', '$_POST[sex]', '$_POST[discription]'";
echo $sql;

$result=mysqli_query($con1,$sql) or die(mysql_error());
if ($result)
{
header("location:login.php?msg=You are regisered to DB");
}
else
{
	echo "<h1>YOUR DATA IS NOT INSERTED</h1>";
	}
	?>
	<?php
/*
$var1 = $row['id'];
$var3 = $row['name'];

$var4 = $row['age'];
$var5 = $row['sex']; */

	/* $_SESSION['name']=$var3['name'];
$_SESSION['id']=$var1['id'];
$_SESSION['age']=$var4['age'];
$_SESSION['sex']=$var5['sex']; */
?>
