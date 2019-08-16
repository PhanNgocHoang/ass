<?php 
    session_start();
    if(!isset($_SESSION['username']))
    {
        header("Location: home.php");
    }
?> 
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
    <title>Create Order</title>
    <style>
        form {
            margin-left: 30%;
            margin-top: 10%;
            margin-right: 30%;
            font-size: 30px;
        }
        
        .nhap {
            margin-left: 20%;
        }
    </style>
</head>
<body>
    <header>
        <p>Hi <?php echo ($_SESSION['username']); ?></p>
        <a href="logout.php"><button class="btn btn-primary">LogOut</button></a>
        <a href="Manage.php"><button class="btn btn-primary">Manage</button></a>
    </header>
    <div class="container bg-info">
        <form action="createoder.php" class="needs-validation" method = "POST">
            <h1 style="text-align: center">Create Order</h1>
            <div>
                <label>Name of product</label>
                <input type="text" class="form-control nhap"  placeholder="Enter name of product" name="nameprd" required>
            </div>
            <div>
                <label>Name of Customer</label>
                <input type="text" class="form-control nhap"  placeholder="Enter name of Customer" name="customer" required>
            </div>
            <div>
            <label>Pay</label>
            <input type="number" name="pay" placeholder="Enter pay" required class="form-control nhap">
            </div>
            <div>
            <label>Store</label>
                <select name="store" class="nhap">
                    <option value="store1">Store 1</option>
                    <option value="store1">Store 2</option>
                    <option value="store1">Store 3</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary" name ="submit">Submit</button>
        </form>
    </div>
    <?php
   include_once "connect.php"; 
    if(!isset($_POST['submit']))
    {
    }
    else
    {
        $namepr = $_POST['nameprd'];
        $pay = $_POST['pay'];
        $namect = $_POST['customer'];
        $store = $_POST['store'];
        $sql = "insert into orderpr(customer, pay, productname, store) values ('$namect', '$pay', '$namepr', '$store')";
        $pdo->exec($sql);
        echo 'create Sucessfully';
    }
   ?>
</body>
</html>