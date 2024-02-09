<?php

    // เชื่อมต่อฐานข้อมูล
    $dsn = "mysql:host=localhost;dbname=mydb";
    $username = "root";
    $password = "123";

    // เตรียมข้อมูล
    $fnameEdit = "Yoyo";
    $ageEdit = 14;
    $departmentEdit = "IT";
    $id = 1;

    try{
        $obj = new PDO($dsn, $username, $password);
        $sql = "UPDATE employees SET fname = ?, age = ?, department = ? WHERE id = ?";
        $stmt = $obj -> prepare($sql);
        $stmt -> bindParam(1, $fnameEdit);
        $stmt -> bindParam(2, $ageEdit);
        $stmt -> bindParam(3, $departmentEdit);
        $stmt -> bindParam(4, $id);
        $stmt -> execute();
        echo "Update Success";

    }catch(PDOException $e){
        echo $e-> getMessage();
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>อัพเดทข้อมูล (UPDATE)</title>
</head>
<body>
    
</body>
</html>