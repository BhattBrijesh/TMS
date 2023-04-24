<?php
    include('../includes/connection.php'); 
    if(isset($_POST['edit_task'])){
        $query="update tasks set u_id=$_POST[id],description='$_POST[description]',start_date='$_POST[start_date]',end_date='$_POST[end_date]' where tid=$_GET[id]";

        $query_run=mysqli_query($connection,$query);
        if($query_run){
            echo "<script type='text/javascript'>
            alert('Task update successfully...');
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
    <title>Document</title>
     <!-- jQuery File -->
     <script src="../includes/jquery-1.12.4.js"></script>
    <!-- Bootstrap files -->
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <!-- External css file -->
    <link rel="stylesheet" type="text/css" href="../css/style.css">
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
    <h3 style="color:white;">Edit the Task</h3><br>
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
                    <label>select user:</label>
                    <select class="form-control" name="id" required>
                        <option value="">-select-</option>
                        <?php
                            // Establish database connection
                            include('../includes/connection.php');

                            // Fetch users from the database
                            $query1 = "SELECT u_id , name FROM users";
                            $result1 = mysqli_query($connection, $query1);

                            // Loop through the results and create options
                            while($row1 = mysqli_fetch_assoc($result1)) {
                                echo '<option value="' . $row1['u_id'] . '">' . $row1['name'] . '</option>';
                            }
                        ?>
                    </select>

        </div>


               <div class ="form-group">
                    <label>Description:</label>
                    <textarea class="form-control" rows="3" cols="50" name="description" required><?php echo $row['description'];?></textarea>
                </div>
                <div class="form-group">
                    <label>Start date:</label>
                    <input type="date" class="form-control" name="start_date" value="<?php echo $row['start_date'];?>" required>
                </div>
                <div class="form-group">
                    <label>End date:</label>
                    <input type="date" class="form-control" name="end_date" value="<?php echo $row['end_date'];?>" required>
                </div>
                <input type="submit" class="btn btn-warning" name="edit_task" value="update">
</form>
       <?php
         }
        ?>
</div>
</div>
</body>
</html>