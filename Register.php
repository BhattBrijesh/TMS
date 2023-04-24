<?php
   include('includes/connection.php');
   if(isset($_POST['user_registration']))
   {
    $query="insert into users values(null,'$_POST[name]','$_POST[email]', '$_POST[password]',$_POST[mobile])";
    $query_run=mysqli_query($connection,$query);
    if($query_run){
        echo "<script type='text/javascript'>
        alert('User Registered Successfully..');
        window.location.href='index.php';
        </script>";

    }
    else{
        echo "<script type='text/javascript'>
        alert('Error...Plz try again');
        window.location.href='register.php';
        </script>";

    }
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TMS | Register Page |</title>
  <!-- jQuery File -->
  <script src="includes/jquery-1.12.4.js"></script>
  <!-- Bootstrap files -->
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"></link>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <!-- External css file -->
  <link rel="stylesheet" type="text/css" href="css/style.css"></link>
    
</head>
<body >
     <!-- <div class="row">
        <div class="col-md-3 m-auto" id="register_home_page" style="border: 2px solid white;">
            <center><h3 style="background-color:#5A8F7B; padding:5px; width:15vw; border: 2px solid white;">User Login</h3></center>
            <form action=""method="post">
            <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Enter Name" required=""></div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Enter E-mail" required=""></div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Enter Password" required=""></div>
                <div class="form-group">
                    <input type="number" name="mobile" class="form-control" placeholder="Enter Mobile Number" required=""></div>

                <div class="form-group">
                   <center> <input type="Submit" name="user_registration" value="Register" class="btn btn-warning" style="border: 2px solid white;"></center></div>
            </form><br>
           <center> <a href="index.php" class="btn btn-danger" style="border: 2px solid white;">Go to Home</a></center>

    </div>
    </div>
     -->

     <div class="row justify-content-center">
  <div class="col-md-4 m-auto" style="padding-top:10px;">
    <div class="card border-0 shadow-sm">
      <div class="card-body ">
        <h3 class="text-center mb-4 card-header bg-primary text-white text-center">Sign Up</h3>
        <form action="" method="post">
          <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Enter Full Name" required>
          </div>
          <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email Address" required>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password" required>
          </div>
          <div class="form-group">
            <label for="mobile">Mobile Number</label>
            <input type="number" name="mobile" id="mobile" class="form-control" placeholder="Enter Mobile Number" required>
          </div>
          <div class="form-group">
            <button type="submit" name="user_registration" class="btn btn-primary btn-block">Create Account</button>
          </div>
        </form>
        <div class="text-center">
         <strong> Already have an account?</strong> <a href="user_login.php">Login here</a><br><br>
          <a href="index.php" class="btn btn-danger">Go to Home</a>
        </div>
        
      </div>
    </div>
  </div>
</div>


</body>
</html>