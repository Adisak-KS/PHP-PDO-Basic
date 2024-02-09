<?php

    // เชื่อมต่อฐานข้อมูล
    $dns = "mysql:host=localhost;dbname=mydb";
    $username = "root";
    $password = "123";

    // เตรียมข้อมูล
    $fnameValue = "Nut";
    $ageValue = "30";
    $departmentValue = "Accouting";

    try{
        $obj = new PDO($dns, $username, $password);
        // echo "Connect Database Success";

        // การบันทึกข้อมูลลง Database
        $sql = "INSERT INTO employees(fname, age, department) VALUE (?, ?, ?)";
        $stmt = $obj -> prepare($sql);
        $stmt -> bindParam(1, $fnameValue, PDO::PARAM_STR);
        $stmt -> bindParam(2, $ageValue, PDO::PARAM_INT);
        $stmt -> bindParam(3, $departmentValue, PDO::PARAM_STR);
        $stmt -> execute();
        echo "Insert Success";
        
    }catch(PDOException $e){
        echo $e-> getMessage();
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BindParam</title>
</head>
<body>
    
</body>
</html>