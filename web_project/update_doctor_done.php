
<html>
<body>
<?php

error_reporting(0);
$conn= mysqli_connect("localhost","root","","hospital") or die(mysql_error()) ;
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
};



 $sql="UPDATE doctors SET doc_name ='$_POST[doc_name]',blood_group='$_POST[blood_group]',pass='$_POST[pass]',contact='$_POST[contact]',
 address='$_POST[address]' WHERE id = '$_POST[id]'";



if(mysqli_query($conn, $sql)){
    echo "Records Updated successfully";
   $_SESSION['message'] = "info updated";
    header('location: admin_doctors_view.php?msg=Updated docotor record Successfully');
   //header('location :admin_doctors_view.php') ;
		//header('location: dr_about.php');   
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

?>

</body>

</html>