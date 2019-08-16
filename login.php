<?php 
    session_start();
    include_once "connect.php";

    $sql = "SELECT * FROM login where username = :username and pass = :pass";
    $stmt = $pdo->prepare($sql);
    $stmt->execute
    (
        array(
            'username' => $_POST['username'],
            'pass' => $_POST['pass'],
        )
    );
    $count = $stmt->rowCount();
    if($count > 0)
    {   
        $_SESSION['username'] = $_POST['username'];
        header("Location: Manage.php");
        
    }
    else
    {
        echo "<h1>Sai username or passs</h1>";
    }

        
?>