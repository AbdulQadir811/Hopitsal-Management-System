


<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/login_main.css">
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
h2 {
  margin: 25px;
  margin-top: 0px;
  color:  black ;
  
}
</style>
</head>
<body>
     
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">HOME</a>
    </div>
    <ul class="nav navbar-nav">
    <li><a href="dr_login.php">Doctor</a></li>
    <li><a href="patient_login.php">Patient</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>  
      
<?php
if (isset($_GET['msg']) ){
  echo "<div style='background-color:#ddd;' align='center'><h3> $_GET[msg]</h3></div>";
  
}

?>


<div class="login-page">
  

  <div class="form" >
  	<h2>Admin Login </h2>
       <form class="login-form" method="post" action="admin_signin.php"  >
      <input type="text" placeholder="email" name="email" required>
      <input type="password" placeholder="password" name="password" required>
     <button  type="submit" name="save" >Save</button>
    </form>
  </div>
</div>

<script>
  $('.message a').click(function(){
   
   $(".login-page").load("");
});
</script>
</body>
</html>

