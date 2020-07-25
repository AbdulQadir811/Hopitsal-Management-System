<html>
<body>
<?php
error_reporting(0);
$conn= mysqli_connect("localhost","root","","hospital") or die(mysql_error()) ;
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
};
$id=$_POST['id'];
 $sql="UPDATE employees SET name ='$_POST[name]',blood_group='$_POST[blood_group]',password='$_POST[password]',contact='$_POST[contact]',address='$_POST[address]' WHERE emp_id = $id";

if(mysqli_query($conn, $sql)){
    echo "Records Updated successfully.";
    header("location: admin_employees_view.php ?msg=employee record udated Successfully");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

?>

</body>

</html>