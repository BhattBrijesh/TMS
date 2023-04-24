<?php
    session_start();
    include('includes/connection.php');
    if(isset($_POST['user_login'])){
        $query="select email,password,name,u_id from users where email='$_POST[email]' AND password='$_POST[password]'";
        $query_run=mysqli_query($connection,$query);
        if($query_run){
            if(mysqli_num_rows($query_run)){
                while($row=mysqli_fetch_assoc($query_run)){
                     $_SESSION['email']=$row['email'];
                     $_SESSION['name']=$row['name'];
                     $_SESSION['u_id']=$row['u_id'];

                }
                echo"<script type='text/javascript'>
                window.location.href='user_dashboard.php';
                </script>";
             }
            else{
                echo"<script type='text/javascript'>
                alert('Please enter correct detail.');
                window.location.href='user_login.php';
                </script>";
             }
        } else {
            // Handle query execution error
            echo "<script type='text/javascript'>
            alert('Error executing query: " . mysqli_error($connection) . "');
            window.location.href='admin_login.php';
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
    <title>TMS | User Login |</title>
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
        <div class="col-md-3 m-auto" id="login_home_page" style="border: 2px solid white;">
            <center><h3 style="background-color:#5A8F7B; padding:5px; width:15vw; border: 2px solid white;">User Login</h3></center>
            <form action=""method="post">
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Enter E-mail" required=""></div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Enter Password" required=""></div>
                <div class="form-group">
                   <center> <input type="Submit" name="user_login" value="Login" class="btn btn-warning" style="border: 2px solid white;"></center></div>
            </form><br>
           <center> <a href="index.php" class="btn btn-danger" style="border: 2px solid white;">Go to Home</a></center>

    </div>
    </div> -->
    <div class="row">
  <div class="col-md-3 m-auto"  style="padding-top:100px;">
    <div class="card">
      <div class="card-header bg-primary text-white text-center">
        <h3 class="m-0 ">User Login</h3>
      </div>
      <div class="card-body">
        <form action="" method="post">
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email" required>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password" required>
          </div>
          <div class="form-group">
            <button type="submit" name="user_login" class="btn btn-primary btn-block">Login</button>
          </div>
        </form>
        <div class="text-center">
          <a href="index.php" class="btn btn-danger">Go to Home</a>
        </div>
      </div>
    </div>
  </div>
</div>

    
</body>
</html>
