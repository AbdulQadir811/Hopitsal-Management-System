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
$id=$_SESSION['id'];
 $sql="INSERT INTO appointments (patient_id,doctor_id,time,descriptions) VALUES 
('$id','$_POST[id]','$_POST[time]','$_POST[desc]')";

if(mysqli_query($conn, $sql)){
    header("location:appointment_view.php?msg=You are regisered to DB");   
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

?>

</body>

</html>