<?php
session_start();
session_unset();
session_destroy();
header("location:patient_login.php?msg=Successful Logged Out");
exit();

?>