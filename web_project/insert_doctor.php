<html>
<body>
<?php
$var2="";
error_reporting(0);
$conn= mysqli_connect("localhost","root","","hospital") or die(mysql_error()) ;
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
};


$sql="select * from patient where email='$_POST[email]' and pass='$_POST[password]'";


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
	header("location:admin_doctors_insert.php?msg= email already exists");
	exit();
}


 $sql="INSERT INTO doctors (doc_name,email,blood_group,pass,age,sex,dept_id,birth_date,salary,fee,address,shift) VALUES 
('$_POST[doc_name]','$_POST[email]','$_POST[blood]','$_POST[password]','$_POST[age]','$_POST[sex]','$_POST[dept_id]','$_POST[b_day]','$_POST[salary]','$_POST[fee]','$_POST[address]','$_POST[shift]')";

if(mysqli_query($conn, $sql)){
    //$_SESSION['message'] = "Records added successfully.";
    $var2= "Records added successfully.";
    header("location:admin_doctors_insert.php?msg= Record inserted successfully");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

?>

</body>

</html>