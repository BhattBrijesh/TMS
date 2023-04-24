<?php
  session_start();
  include('includes/connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leave Status</title>
</head>
<body>
    <center><h1 style="color:white;">Your Leave Apllication</h1></center><br>
    <table class="table" style="background-color:whitesmoke;width:75vw; border:4px solid black; ">
    <tr style="border:4px solid black;" >
        <th>S.No.</th>
        <th>Subject</th>
        <th style="width:25%;">Message</th>
        <th>Status</th>
        
    
    </tr>
    <?php
     $sno=1;
     $query="select * from leaves where u_id='$_SESSION[u_id]'";
     $query_run=mysqli_query($connection,$query);
     if(mysqli_num_rows($query_run) > 0) {
      $count = 1;
     while($row=mysqli_fetch_assoc($query_run)){
       
        ?>
        <tr style="border:2px solid black;" >
            <td><?php echo $count++; ?></td>
            <td><?php echo $row['subject'];?></td>
            <td><?php echo $row['message'];?></td>
            <td><?php echo $row['status'];?></td>
         
            
        </tr>
       <?php
         }
         }
    
     else {
        echo "<tr><td colspan='7'>Not Applied yet</td></tr>";
      }
    
    
    ?>

    
</table>
</body>
</html>