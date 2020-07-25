<html>
<body>
<?php
error_reporting(0);
$conn= mysqli_connect("localhost","root","","hospital") or die(mysql_error()) ;
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
};

$sql="INSERT INTO employees (title,name,password,contact,blood_group,age,sex,birth_date,salary,shift,address) VALUES 
('$_POST[title]','$_POST[name]','$_POST[password]','$_POST[contact]', '$_POST[blood_group]','$_POST[age]','$_POST[sex]','$_POST[birth_date]','$_POST[salary]','$_POST[shift]','$_POST[address]')";

if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
    header("location:admin_employees_insert.php?msg=Employee Inserted successfully");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

?>

</body>

</html>