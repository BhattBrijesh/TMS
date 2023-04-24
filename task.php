<?php
  session_start();
  include('includes/connection.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task</title>
     <!-- jQuery File -->
  <script src="includes/jquery-1.12.4.js"></script>
  <!-- Bootstrap files -->
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"></link>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <!-- External css file -->
  <link rel="stylesheet" type="text/css" href="css/style.css"></link>
  
</head>
<body>
  <center><h1 style="color:white;">Your Tasks</h1></center><br>
  <table class="table" style="background-color:whitesmoke;width:75vw; border:4px solid black;">
    <thead>
      <tr style="border:4px solid black;">
        <th>S.No.</th>
        <th>Task ID</th>
        <th style="width:20%;">Description</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
        
        $query="select * from tasks where u_id='$_SESSION[u_id]'";
            
        $result = mysqli_query($connection, $query);

        if(mysqli_num_rows($result) > 0) {
           $count = 1;
          while($row = mysqli_fetch_assoc($result)) {
      ?>
            <tr style="border:2px solid black;">
              <td><?php echo $count++; ?></td>
              <td><?php echo $row['tid']; ?></td>
              <td><?php echo $row['description']; ?></td>
              <td><?php echo $row['start_date']; ?></td>
              <td><?php echo $row['end_date']; ?></td>
              <td><?php echo $row['status']; ?></td>
              <td><a href="update_status.php?id=<?php echo $row['tid']?>">Update</a></td>
            </tr>
      <?php
          }
         } 
        else {
          echo "<tr><td colspan='7'>No task Assigned Yet</td></tr>";
        }
      ?>
    </tbody>
  </table>    
</body>
</html>
