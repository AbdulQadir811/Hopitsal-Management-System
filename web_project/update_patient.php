   <?php
session_start();
?>
<html>
<body>
<?php
error_reporting(0);
$conn= mysqli_connect("localhost","root","","hospital") or die(mysql_error()) ;
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
};
$id= $_SESSION['id'];
$sql = "UPDATE patient SET name='$_POST[name]',email='$_POST[email]',blood_group='$_POST[blood_group]',pass='$_POST[pass]',age='$_POST[age]',contact_no='$_POST[contact_no]',address='$_POST[address]',birth_date='$_POST[birth_day]',sex='$_POST[sex]',description='$_POST[description]' WHERE id=$idS";


if(mysqli_query($conn, $sql)){
    echo "Records Update successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

?>

</body>

</html>