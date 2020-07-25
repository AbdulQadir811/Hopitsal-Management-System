<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'crud');

	// initialize variables
	$name = "";
	$address = "";
	$id = 0;
	$update = false;

	
   if (isset($_POST['save'])) {
		

		$sql="INSERT INTO doctors (doc_name,email,contact,blood_group) VALUES 
('$_POST[name]','$_POST[email]','$_POST[phone]','$_POST[blood]')";

if(mysqli_query($db, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
	}
