<?php
  include('../includes/connection.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage_Task</title>
</head>
<body>
    <center><h1 style="color:white;">All Assigned Tasks</h1></center><br>
    <table class="table" style="background-color:whitesmoke;width:75vw; border:4px solid black; ">
    <tr style="border:4px solid black;" >
        <th>S.No.</th>
        <th>User</th>
        <th>Task ID</th>
        <th style="width:20%;">Description</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Status</th>
        <th>Action</th>
    
    </tr>
    <?php
     $sno=1;
     $query="select*from tasks";
     $query_run=mysqli_query($connection,$query);
     if(mysqli_num_rows($query_run) > 0) {
        $count = 1;
     while($row=mysqli_fetch_assoc($query_run)){
        ?>
        <tr style="border:2px solid black;" >
            <td><?php echo $count++; ?></td>
            <?php
            $query1="select name from users where u_id=$row[u_id]";
            $query_run1=mysqli_query($connection,$query1);
            while($row1=mysqli_fetch_assoc($query_run1)){
                ?>
                <td><?php echo $row1['name'];?></td>
                <?php
            }
            ?>
            <td><?php echo $row['tid'];?></td>
            <td><?php echo $row['description'];?></td>
            <td><?php echo $row['start_date'];?></td>
            <td><?php echo $row['end_date'];?></td>
            <td><?php echo $row['status'];?></td>
            <td><a href="edit_task.php?id=<?php echo $row['tid'];?>">Edit</a> | <a href="delete_task.php?id=<?php echo $row['tid'];?>">Delete</a></td>
        </tr>
        <?php
          }
         } 
        else {
          echo "<tr><td colspan='7'>No Task Assigned</td></tr>";
        }
      ?>

    
</table>
</body>
</html>