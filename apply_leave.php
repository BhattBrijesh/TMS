<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply Leave</title>
    
</head>
<body>
    <h1 style="color:white;">Apply Leave</h1><br>
    <div class="row">
            <div class="col-md-6">
                <form action="" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" placeholder="Enter Subject">
</div>
      <div class="form-group">
        <textarea class="form-control" rows="5" cols="50" name="message" placeholder="Type Message">
</textarea>
<div class="form-group">
                    <label>start_date:</label>
                    <input type="date" class="form-control" name="start_date" reuired="">
                </div>
                <div class="form-group">
                    <label>Up_to:</label>
                    <input type="date" class="form-control" name="Up_to" required="">
                </div>
</div>
<input type="submit" class="btn  btn-warning" name="submit_leave">
</form>
</div>
</div>  
</body>
</html>
