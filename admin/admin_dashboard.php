<?php
session_start();
 include('../includes/connection.php');
 if(isset($_POST['create_task'])){
    $query="insert into tasks values(null,'$_POST[id]','$_POST[description]','$_POST[start_date]','$_POST[end_date]','Not Started')";
    $query_run=mysqli_query($connection,$query);
    if($query_run){
        echo "<script type='text/javascript'>
        alert('Task created successfully...');
        window.location.href='admin_dashboard.php';
        </script>";
    }
    else{
        echo"<script type='text/javascript'>
        alert('Error...Plz try again');
        window.location.href='admin_dashboard.php';
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
    <title>| Admin Dashboard |</title>
    <!-- jQuery File -->
    <script src="../includes/jquery-1.12.4.js"></script>
    <!-- Bootstrap files -->
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <!-- External css file -->
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <!-- jQuery code -->
    <script type="text/javascript">
        $(document).ready(function(){
            $("#create_task").click(function(){
                $("#right_sidebar").load("create_task.php");
            });
        });
        $(document).ready(function(){
            $("#view_leave").click(function(){
                $("#right_sidebar").load("view_leave.php");
            });
        });
        $(document).ready(function(){
            $("#manage_task").click(function(){
                $("#right_sidebar").load("manage_task.php");
            });
        });
        
    </script>
</head>
<body>
 
    <!-- Header  code start here -->
    <div class="row" id="header">
        <div class="col-md-12">
            <div class="col-md-4" style="display:inline-block;">
                <h3>Task Management System</h3>
            </div>
            <div class="col-md-6" style="display:inline-block; text-align:right;">
                <b>Email: </b><?php echo $_SESSION['email'];?>
                <span style="margin-left:25px;"><b>Name: </b><?php echo $_SESSION['name'];?></span>
            </div>
        </div>
    </div>
    <!-- Header code ends here -->
    <div class="row">
        <div class="col-md-2" id="left_sidebar">
            <table class="table">
                <tr>
                    <td style="text-align:center;">
                        <a href="admin_dashboard.php" type="button" class="link">Dashboard</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center;">
                        <a href="../To-Do-App-master/index.html" target="_blank" type="button" class="link" >To Do List</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center;">
                        <a type="button" class="link" id="create_task">Create Task</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center;">
                        <a type="button" class="link" id="manage_task">Manage Task</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center;">
                        <a type="button" class="link" id="view_leave">Leave application</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center;">
                        <a href="../logout.php" type="button" class="link1">Logout</a>
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-md-10" id="right_sidebar">
            <h2><strong>Instruction For Admin</strong></h2>
            <ul style="line-height:2.9em;font-size:1.2em;list-style-type:none;">
                <li> 1. Admin must ensure that the system is always available and accessible to users.</li>
                <li> 2. Admin manage user accounts, system settings, and security.</li>
                <li> 3. Admin monitor system performance and troubleshoot issues.</li>
                <li> 4. Admin must perform regular backups of the system data to ensure its integrity.</li>
                <li> 5. Admin should stay up-to-date with the latest technology trends and security threats.</li>

                </div>
</div>
<footer class="footer1">
        <strong>Copyright &copy; 2023- All rights reserved</strong>
</footer>
</body>
</html>