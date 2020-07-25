<html>
<body>
<?php
error_reporting(0);
$conn= mysqli_connect("localhost","root","","hospital") or die(mysql_error()) ;
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
};




$sql="select * from doctors where email='$_POST[email]' and pass='$_POST[password]'";


$result=mysqli_query($conn,$sql) or die(mysql_error());

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
	header("location:dr_signup.php?msg=email already exists");
	exit();
}

if(is_null('$_POST[name]')||is_null('$_POST[blood_group]'))
{
	header("location:dr_signup.php?msg=some infois missing");
	exit();
}


 $sql="INSERT INTO doctors (doc_name,blood_group,email,pass,age,sex,dept_id,birth_date,salary,fee,address,shift,contact) VALUES 
('$_POST[name]','$_POST[blood_group]','$_POST[email]','$_POST[password]','$_POST[age]','$_POST[gender]','$_POST[dept_id]','$_POST[birthday]','$_POST[salary]','$_POST[fee]','$_POST[address]','$_POST[shift]','$_POST[contact]')";





if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
    header("location:dr_login.php?msg=Doctor Registered Successfully");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

?>

</body>

</html>