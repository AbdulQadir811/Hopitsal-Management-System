


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
  color:  black;
  
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
    <li><a href="dr_login.php">Doctor Login</a></li>
    <li><a href="patient_login.php">Patient Login</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
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
  	<h2>Doctor Login </h2>
       <form class="login-form" method="post" action="dr_signin.php"  >
      <input type="text" placeholder="email" name="email" required>
      <input type="password" placeholder="password" name="password" required>
     <button  type="submit" name="save" >Save</button>
      <p class="message">Not registered? <a href="dr_signup.php">Create an account</a></p>
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

