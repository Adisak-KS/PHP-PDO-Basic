<?php

    // เชื่อมต่อฐานข้อมูล
    $dsn = "mysql:host=localhost;dbname=mydb";
    $username = "root";
    $password = "123";

    // เตรียมข้อมูล
    $id = 2;

    try{
        $obj = new PDO($dsn, $username, $password);
        $sql = "UPDATE FROM employees WHERE id = ?";
        $stmt = $obj -> prepare($sql);
        $stmt -> bindParam(1, $id);
        $stmt -> execute();
        echo "Delete Success";
    }catch(PDOException $e){
        echo $e-> getMessage();
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ลบข้อมูล (DELETE)</title>
</head>
<body>
    
</body>
</html>