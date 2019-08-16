<!-- <?php
    // session_start();
    // if(!isset($_SESSION['username']))
    // {
    //     header("Location: index.php");
    // }
?>  -->
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
        table{
            boder:1px;
        }
    </style>
    <title>Manage</title>
</head>

<body>
    <div class="container">

        <h1>Store 1</h1>
        <table class="table" >
            <tr>
                <th>id order</th>
                <th>Name Customer</th>
                <th>Name of Product</th>
                <th>Pay</th>
                <th>Store</th>
            </tr>
           <?php
           require_once "connect.php";
        $sql = "select * from orderpr where orderpr.store = 'store1' ";
        $stmt = $pdo->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        $result = $stmt->fetchAll();
    ?>
    <?php
        foreach($result as $row){
           echo'<tr>';
            echo "<td>" .$row['id']."</td>";
            echo "<td>" .$row['customer']."</td>";
            echo "<td>" .$row['productname']."</td>";
            echo "<td>" .$row['pay']."</td>";
            echo "<td>" .$row['store']."</td>";
          echo'</tr>';
        }
    ?>
    <?php
        // require_once "connect.php";
        // $sql = "select sum(pay) from orderpr where orderpr.store='store1'";
    ?>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><a href="capcao.php"><button class = "btn btn-success">SUM</button></a></td>
                <?php
                 
                ?>
            </tr>
        </table>
        <h2>Store 2</h2>
        <table class="table">
            <tr>
                <th>id order</th>
                <th>Name Customer</th>
                <th>Name of Product</th>
                <th>Pay</th>
                <th>Store</th>
            </tr>
    <?php
           require_once "connect.php";
        $sql = "select * from orderpr where orderpr.store = 'store2' ";
        $stmt = $pdo->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        $result = $stmt->fetchAll();
    ?>
    <?php
        foreach($result as $row){
           echo'<tr>';
            echo "<td>" .$row['id']."</td>";
            echo "<td>" .$row['customer']."</td>";
            echo "<td>" .$row['productname']."</td>";
            echo "<td>" .$row['pay']."</td>";
            echo "<td>" .$row['store']."</td>";
          echo'</tr>';
        }
    ?>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><a href=""><button class = "btn btn-success">SUM</button></a></td>
            </tr>
        </table>
        <h3>Store 3</h3>
        <table class="table">
            <tr>
                <th>id order</th>
                <th>Name Customer</th>
                <th>Name of Product</th>
                <th>Pay</th>
                <th>Store</th>
            </tr>
    <?php
           require_once "connect.php";
        $sql = "select * from orderpr where orderpr.store = 'store3' ";
        $stmt = $pdo->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        $result = $stmt->fetchAll();
    ?>
    <?php
        foreach($result as $row){
           echo'<tr>';
            echo "<td>" .$row['id']."</td>";
            echo "<td>" .$row['customer']."</td>";
            echo "<td>" .$row['productname']."</td>";
            echo "<td>" .$row['pay']."</td>";
            echo "<td>" .$row['store']."</td>";
          echo'</tr>';
        }
    ?>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><a href=""><button class = "btn btn-success">SUM</button></a></td>
            </tr>
        </table><br>
        <a href=""><button class="btn btn-success">Sum from 3 store</button></a>
    </div>
</body>

</html>