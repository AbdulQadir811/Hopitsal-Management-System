<?php


$con1=mysqli_connect("localhost","root","","hospital") or die(mysqli_error());

$sql="select * from patient where email='$_POST[email]' and pass='$_POST[password]'";


$result=mysqli_query($con1,$sql) or die(mysql_error());

$row = mysqli_fetch_array($result);

$var1 = $row['email'];

if (is_null($var1))
{
	echo "user does't exist ";
}
else
{
	echo "user exist ";
	echo $var1;
	header("location:signup.php?msg=email already exists");
	exit();
}



$sql = "INSERT INTO patient ( email,name,blood_group,pass,age,contact_no,address,birth_date,sex,description ) 
VALUES ( '$_POST[email]', '$_POST[name]', '$_POST[blood_group]', '$_POST[password]', '$_POST[age]', '$_POST[contact]', '$_POST[address]', '$_POST[birthday]', '$_POST[gender]', '$_POST[description]')";



if(mysqli_query($con1, $sql)){
header("location:patient_login.php?msg=Patient Registered successfully");

	
		echo "Records added successfully.";
	} else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($con1);
	}
	
	?>