
<html>
<body>
<?php

error_reporting(0);
$conn= mysqli_connect("localhost","root","","hospital") or die(mysql_error()) ;
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
};
$id=$_POST['id'];
echo "hiii";
 $sql="UPDATE patient SET name ='$_POST[name]',blood_group='$_POST[blood_group]',pass='$_POST[password]',contact_no='$_POST[contact]',
 address='$_POST[address]',description='$_POST[description]' WHERE id = '$_POST[id]'";

if(mysqli_query($conn, $sql)){
   // echo "Records Updated successfully.";
   $_SESSION['message'] = "Updated.";
   echo $_SESSION['message'];
  header('location: patient_about.php?msg=Info updated successfully');



} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

?>

</body>

</html>