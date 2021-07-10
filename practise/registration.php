<?php
session_start();
include ('includes/dbcon.php');

if (isset($_POST['submit'])) {
   $username = $_POST['userName'];
   $useremail = $_POST['userEmail'];
   $userphone = $_POST['userPhone'];
   $userpass = md5($_POST['userpassword']);
   $sql = "INSERT INTO organizationusers (FullName,Email,MobileNumber,PasswordF) 
   VALUES ('$username','$useremail','$userphone','$userpass')";
   if ($conn->query($sql) === TRUE) {
       header('location:signin.php');
   }
   else{
       echo "Error:".$sql."<br>". $conn->error;
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="well">
             <h2 align="center">Registration Form</h2>
        </div>
        <form action="" method="POST" role="form">
        <div class="form-group">
                <label for="email">User Name:</label>
                <input type="text" class="form-control" id="username" placeholder="Enter Name" name="userName" required="true">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="useremail" placeholder="Enter email" name="userEmail" required="true">
            </div>
            <div class="form-group">
                <label for="text">Phone Number:</label>
                <input type="text" class="form-control" id="userPhone" placeholder="Enter Phone" name="userPhone" required="true">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pasd" placeholder="Enter Password" name="userpassword" required="true">
            </div>
            <div class="form-group form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="remember"> Remember me
                </label>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>

</body>
</html>