<!DOCTYPE html>
<html lang="en">

<head>
     <link rel="stylesheet" type="text/css" href="css/registration_main.css">
    <!-- Required meta tags-->
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>
    input[type=date]::-webkit-inner-spin-button {
    -webkit-appearance: none;
    display: none;

}
</style>

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="assets/avendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/registration_main.css" rel="stylesheet" media="all">

   



</head>

<body>


  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">HOME</a>
    </div>
    <ul class="nav navbar-nav">
    <li><a href="dr_signup.php">Doctor SignUp</a></li>
    <li><a href="signup.php">Patient SignUp</a></li>
    <li><a href="blood_donor_reg_form.php">BloodDonor Registeration </a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="patient_login.php"><span class="glyphicon glyphicon-user"></span>Login</a></li>
     
    </ul>
  </div>
</nav>  
       

          
<?php
if (isset($_GET['msg']) ){
  echo "<div style='background-color:#ddd;' align='center'><h3> $_GET[msg]</h3></div>";
}

?>  








    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Doctor Registration</h2>
                    <form method="post" action="dr_signup_done.php" >
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    

                                    <input class="input--style-4" type="text" name="name" placeholder="name" required>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                   
                                    <input class="input--style-4" type="text" name="email" placeholder="email" required>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    

                                    <input class="input--style-4" type="text" name="password" placeholder="passowrd" required>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                   
                                    <input class="input--style-4" type="date" name="birthday" placeholder="birthday"
                                 
        onfocus="(this.type='date')"
        onblur="(this.type='text')"

                                     required>
                                </div>
                            </div>
                        </div>

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    

                                    <input class="input--style-4" type="text" name="salary" placeholder="salary" required>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                   
                                    <input class="input--style-4" type="text" name="fee" placeholder="fee" required>
                                </div>
                            </div>
                        </div>


                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                            
                                    <input class="input--style-4"  name="shift" 


                                    type="text" placeholder="Shift"onfocus="(this.type='time')"onblur="(this.type='text')" required>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                            <div class="input--style-4">
                                <select name="dept_id">
                                    <option disabled="disabled" selected="selected">Select Department</option>
                                    <option value ="1">Cardiology</option>
                                    <option value ="2">Physiotherapy
                                    </option>
                                    <option value ="3">ENT</option>
                                    
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                            </div>
                        </div>


                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                  
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="age" placeholder="age" required>
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                   
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Male
                                            <input type="radio" checked="checked" name="gender" value="Male">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Female
                                            <input type="radio" name="gender" value="Female">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                  
                                    <input class="input--style-4" type="text" name="address" placeholder="address"  required>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                  
                                    <input class="input--style-4" type="text" name="contact" placeholder="phone number" required>
                                </div>
                            </div>
                        </div>



                         <div class="row row-space">
                            <div class="col-2">
                                 <div class="input-group">
                            <div class="input--style-4">
                                <select name="blood_group">
                                    <option disabled="disabled" selected="selected">Select bloodgroup</option>
                                    <option value=""></option>
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="O-">O-</option>
                                    <option value="O+">O+</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                </div>
                            </div>
                        </div>

</div>









                     

                       <div class="row row-space">
                        <div class="col-2">
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit" name="save">Submit</button>
                         </div>   
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->