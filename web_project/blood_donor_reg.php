<?php


$con1=mysqli_connect("localhost","root","","hospital") or die(mysqli_error());

$sql = "INSERT INTO blood_donors ( email,doc_name,blood_group,age,contact,address,birthday,sex ) 
VALUES ( '$_POST[email]', '$_POST[name]', '$_POST[blood_group]', '$_POST[age]', '$_POST[contact]', '$_POST[address]', '$_POST[birthday]', '$_POST[gender]')";



if(mysqli_query($con1, $sql)){
header("location:blood_donor_reg_form.php?msg=Blood Donor Registered successfully");

	
		echo "Records added successfully.";
	} else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($con1);
	}
	
	?>