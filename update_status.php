<?php
    include('includes/connection.php'); 
    if(isset($_POST['update'])){
        $query="update tasks set status='$_POST[status]' where tid=$_GET[id]";

        $query_run=mysqli_query($connection,$query);
        if($query_run){
            echo "<script type='text/javascript'>
            alert('Status update successfully...');
            window.location.href='user_dashboard.php';
            </script>";
        }
        else{
            echo"<script type='text/javascript'>
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
    <title>update</title>
     <!-- jQuery File -->
     <script src="includes/jquery-1.12.4.js"></script>
    <!-- Bootstrap files -->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- External css file -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- jQuery code -->
   
</head>
<body>
<div class="row" id="header">
        <div class="col-md-12">
            <div class="col-md-4" style="display:inline-block;">
                <h3>Task Management System</h3>
            </div>
</div>
</div>
<div class="row">
    <div class="col-md-4 m-auto" style="color:white;"><br>
    <h3 style="color:white;">Update the Task</h3><br>
    <?php
    $query="select * from tasks where tid=$_GET[id]";
    $query_run=mysqli_query($connection,$query);
    while($row=mysqli_fetch_assoc($query_run)){
        ?>
    
    <form action=""method="post">
        <div class="form-group">
            <input type="hidden" name="id" class="form-control" value=""required>
        </div>
        <div class="form-group">
            <select class="form-control" name="status">
              <option>-Select-</option>
              <option>Pending</option>  
              <option>In-Progress</option>
              <option>Complete</option> 
            </select>
                    

        </div>


        <input type="submit" class="btn btn-warning" name="update" value="update">
</form>
       <?php
         }
        ?>
</div>
</div>
</body>
</html>