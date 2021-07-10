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
             <h2 align="center">Sign In</h2>
        </div>
        <form action="" method="post" role="form">
        <div class="form-group">
                <label for="email">User Name:</label>
                <input type="text" class="form-control" id="username" placeholder="Enter Name" name="userName" required="true">
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
            <button type="submit" class="btn btn-primary" name="submit">Sign In</button>
        </form>
    </div>

</body>
</html>