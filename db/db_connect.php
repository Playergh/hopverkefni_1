<?php
    // Kári was here
    try {
        $pdo = new PDO("mysql: host = skolahysing.com; dbname = shop", "shop", "shop");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->exec("SET NAMES 'utf8'");
    }catch(PDOException $e){
        $error = "Unable to connect to the database server.";
        include "../error/error.php";
        exit();
    }
?>