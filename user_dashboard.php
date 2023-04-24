<?php
  session_start();
  if (isset($_SESSION['email'])) {
   include('includes/connection.php');
    if (isset($_POST['submit_leave'])) {
       $query="insert into leaves values(null, '$_SESSION[u_id]','$_POST[subject]','$_POST[message]','$_POST[start_date]','$_POST[Up_to]','No Action')";
       $query_run=mysqli_query($connection,$query);
        if($query_run){
        echo "<script type='text/javascript'>
                alert('Leave applied successfully...');
                window.location.href='user_dashboard.php';
                </script>";
                            }       
           else {
            echo "<script type='text/javascript'>
                alert('Error...Plz try again');
                window.location.href='user_dashboard.php';
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
    <title>| User Dashboard |</title>
    <!-- jQuery File -->
  <script src="includes/jquery-1.12.4.js"></script>
  <!-- Bootstrap files -->
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"></link>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <!-- External css file -->
  <link rel="stylesheet" type="text/css" href="css/style.css"></link>
  <script type="text/javascript">
        $(document).ready(function(){
            $("#manage_task").click(function(){
                $("#right_sidebar").load("task.php");
            });
        });
        $(document).ready(function(){
            $("#apply_leave").click(function(){
                $("#right_sidebar").load("apply_leave.php");
            });
        });
        $(document).ready(function(){
            $("#leave_status").click(function(){
                $("#right_sidebar").load("leave_status.php");
            });
        });
        
    </script>
  
</head>
<body>
  <!-- Header  code start here -->
  <div class="row" id="header">
    <div class="col-md-12">
        <div class="col-md-4" style="display:inline-block;">
           <h2><strong>Task Management System</strong></h2>
      </div>
    <div class="col-md-6" style="display:inline-block; text-align:right;">
        <b>Email: </b> <?php echo $_SESSION['email'];?>
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
                        <a href="user_dashboard.php" type="button" class="link">Dashboard</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center;">
                        <a href="To-Do-App-master/index.html" target="_blank" type="button" class="link" >To Do List</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center;">
                        <a type="button" class="link" id="manage_task">Update Task</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center;">
                        <a type="button" class="link" id="apply_leave">Apply leave</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center;">
                        <a type="button" class="link" id="leave_status">Leave Status</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center;">
                        <a href="logout.php" type="button" class="link">Logout</a>
                    </td>
                </tr>
</table>
</div>
      <div class="col-md-10" id="right_sidebar">
        <h2><strong>Instruction For Employees</strong></h2>
        <ul style="line-height:3em;font-size:1.2em;list-style-type:none;">
            <li> 1. All the Employee Should mark their attendance daily.</li>
            <li> 2. Everyone must complete the task assigned to them.</li>
            <li> 3. Keep track of task progress and update task status regularly.</li>
            <li> 4. Notify the manager of any issues or problems that may impact task completion.</li>
            <li> 5. Follow company policies and procedures for task management and data security.</li>
        </ul>
    
</div>
</div>
<footer class="footer1">
        <strong>Copyright &copy; 2023- All rights reserved</strong>
</footer>
</body>
</html>
<?php
}
else{
  header('Location:user_login.php');   

}
