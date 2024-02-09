<?php

    // เชื่อมต่อฐานข้อมูล
    $dns = "mysql:host=localhost;dbname=mydb";
    $username = "root";
    $password = "123";

    try{
        $obj = new PDO($dns, $username, $password);
        echo "Connect Database Success";
    }catch(PDOException $e){
        echo $e-> getMessage();
    }

?>