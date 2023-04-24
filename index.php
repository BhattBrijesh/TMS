<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>ETMS</title>
  <!-- jQuery File -->
  <script src="includes/jquery-1.12.4.js"></script>
  <!-- Bootstrap files -->
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"></link>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <!-- External css file -->
  <link rel="stylesheet" type="text/css" href="css/style.css"></link>
    
</head>
<div class="header"><strong>Task Management System<strong> </div>
<body>
  <!-- <div class="header"><strong>Task Management System<strong> </div> -->
    <!-- <div class="row">
        <div class="col-md-4 m-auto" id="home_page" style="border: 4px solid white;">
            <center><h3><strong>Choose Login Role<strong></h3></center><br> 
            <a href="user_login.php"class="btn btn-success"style="border: 2px solid azure;">User Login</a>
            <a href="register.php"class="btn btn-warning" style="border: 2px solid azure;">User Registration</a>
            <a href="admin/admin_login.php" class="btn btn-info" style="border: 2px solid azure;">Admin Login</a>
</div>
</div> -->


<div class="container-fluid">
    <div class="row justify-content-center align-items-center" style="padding-top:100px ;">
        <div class="col-md-6 p-5 text-center shadow-lg rounded-lg" style="background-color: #f8f9fa;border: 2px solid wheat;">
            <h1 class="mb-5 title-style hover-effect">Welcome To Our Platform</h1>
            <div class="d-flex justify-content-around">
                <a href="user_login.php" class="btn btn-primary btn-lg rounded-pill shadow-lg hover-effect">User Login</a>
                <a href="register.php" class="btn btn-warning btn-lg rounded-pill shadow-lg hover-effect">User Registration</a>
                <a href="admin/admin_login.php" class="btn btn-info btn-lg rounded-pill shadow-lg hover-effect">Admin Login</a>
            </div>
        </div>
    </div>
</div>

<style>
    .title-style {
        color: #333;
        font-size: 36px;
        font-weight: bold;
        text-shadow: 1px 1px 2px #ddd;
    }

    .hover-effect {
        transition: all 0.3s ease-in-out;
    }

    .hover-effect:hover {
        transform: translateY(-3px);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn-warning {
        background-color: #ffc107;
        border-color: #ffc107;
    }

    .btn-info {
        background-color: #17a2b8;
        border-color: #17a2b8;
    }
</style> 


<footer class="footer">
      <strong>Copyright &copy; 2023- All rights reserved</strong>
</footer>

</body>
</html>