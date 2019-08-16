<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>
        h1 {
            text-align: center;
            font-size: 150px;
        }
        
        body {
            background-image: url("atn.jpg");
        }
        
        form {
            margin-top: 10%;
            margin-left: 30%;
            margin-right: 30%;
        }
        
        .login {
            margin-left: 30%;
        }
    </style>
    <title>ATN</title>
</head>

<body>
    <div class="container">
        <h1>Company ATN</h1>

        <form action="login.php" method="POST">
            <label for="username" class="mr-sm-2">Username:</label>
            <input type="text" class="form-control mb-2 mr-sm-2" id="username" name="username" placeholder="Enter your User name" required>
            <label for="pwd" class="mr-sm-2">Password:</label>
            <input type="password" class="form-control mb-2 mr-sm-2" id="pwd" name="pass" placeholder="Enter your password" required>
            <div class ="login">
            <!-- <label for="pos">Position</label><br>
            Store<input type="checkbox" name ="store"><br>
            Manage<input type="checkbox" name ="manage">
            </div> -->
            <input type="submit" class="btn btn-primary login" value="Login">
        </form>
    </div>
</body>
</html>

