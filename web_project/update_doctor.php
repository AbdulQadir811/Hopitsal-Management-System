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
$id = $_SESSION['id'];
$sql = "UPDATE doctors SET doc_name='$_POST[doc_name]',blood_group='$_POST[blood]',pass='$_POST[pass]',age='$_POST[age]',sex='$_POST[sex]',dept_id='$_POST[dept_id]',birth_date='$_POST[b_day]',salary='$_POST[salary]',fee='$_POST[fee]',address='$_POST[address]',shift='$_POST[shift]' WHERE id = $id";


if(mysqli_query($conn, $sql)){
    echo "Records Update successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

?>

</body>

</html>