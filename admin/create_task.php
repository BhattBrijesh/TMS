<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Task</title>
    
</head>
<body>
    <h2 style="color:white;">Create Task</h2>
    <div class="row">
        <div class="col-md-6">
            <form action="" method="post" >
                <div class="form-group">
                    <label>select user:</label>
                    <select class="form-control" name="id" required="">
                        <option value="">-select-</option>
                        <?php
                          
                         
                    
                            // Establish database connection
                            include('../includes/connection.php');

                            // Fetch users from the database
                            $query = "SELECT u_id , name FROM users";
                            $result = mysqli_query($connection, $query);

                            // Loop through the results and create options
                            while($row = mysqli_fetch_assoc($result)) {
                            echo '<option value="' . $row['u_id'] . '">' . $row['name'] . '</option>';
                                
                            }
                
                        ?>
                    </select>
                </div> 
                <div class="form-group">
                    <label>Description:</label>
                    <textarea class="form-control" rows="3" cols="50" name="description" placeholder="Mention the Task" required=""></textarea>
                </div>
                <div class="form-group">
                    <label>Start date:</label>
                    <input type="date" class="form-control" name="start_date" reuired="">
                </div>
                <div class="form-group">
                    <label>End date:</label>
                    <input type="date" class="form-control" name="end_date" required="">
                </div>
                <input type="submit" class="btn btn-warning" name="create_task" value="create">
            </form>
        </div>
    </div>
</body>
</html>
