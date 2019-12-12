<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>New Appointment</title>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">
<style type="text/css">
	.container {
		margin-top: 40px;
	}
	.btn-primary {
    	width: 100%;
	}
    input[type=number]::-webkit-inner-spin-button, 
    input[type=number]::-webkit-outer-spin-button { 
        -webkit-appearance: none; 
        margin: 0; 
    }
    input[type=datetime-local]::-webkit-inner-spin-button, 
    input[type=datetime-local]::-webkit-outer-spin-button { 
        -webkit-appearance: none; 
        margin: 0; 
    }
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">
<style>
    input[type=datetime-local], select {
        width: 50%;
        padding: 10px 15px;
        margin: 20px 0;
        height: 37px;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }   
</style>   
</head>
<body>

<div class="container">
   <div  class="panel panel-primary">
      <div class="panel-heading" style="font-size:24px;font-family:palatino;background-color:#00cca3;">Schedule an Appointment</div>
      <div  class="panel-body">
	  <form  action="insert.php" method="POST">
         <div class="row">
            <div class="col-md-6">
               <div class="form-group">
                  <label class="control-label">First Name</label>
                  <input type="text" class="form-control" name="Name" id="fname">
               </div>
            </div>
            <div class="col-md-6">
               <div class="form-group">
                  <label class="control-label">Last Name</label>
                  <input type="text" class="form-control" name="Surname" id="lname">
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-6">
               <div class="form-group">
                  <label class="control-label">Email</label>
                  <input type="text" class="form-control" name="email" id="email">
               </div>
            </div>
			<div class="col-md-6"> 
               <div class="form-group">
                  <label class="control-label">Phone number</label>
                  <input type="number" class="form-control" name="phone" id="phone" min="1">
               </div>
            </div>
			<label style="margin-left:240px;margin-right:25px" class="control-label">Date/Time</label>
			<input style="margin-top:15px;"type='datetime-local' name="datetime" placeholder="dd.mm.yyyy 00:00" />
            
         </div>
         <input type="submit" style="font-size:24px;font-family:palatino;width:50%;margin-left:270px;background-color:#00cca3" class="btn btn-primary" value="Submit">
		 </form>
      </div>
    </div>
    <div class="col-4">
        <h2><a href="index.php">Вернуться на главную страницу</a></h2>
     </div>

</div>
</body>
</html>