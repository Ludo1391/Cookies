<?php
    $dsn = 'mysql://e62ld9pn0f7x0xzk:lta7hrufcx8aj5h9@tvcpw8tpu4jvgnnq.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306/qjxdxft63112ooy3';
    
    $username = 'e62ld9pn0f7x0xzk';
    $password = 'lta7hrufcx8aj5h9'; 
    
    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error = "Database Error: ";
        $error .= $e->getMessage();
        include('../view/error.php');
        exit();
    }
?>