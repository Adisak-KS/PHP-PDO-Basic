<?php

    // เชื่อมต่อฐานข้อมูล
    $dns = "mysql:host=localhost;dbname=mydb";
    $username = "root";
    $password = "123";

    // เตรียมข้อมูล
    $fnameValue = "Jojo";
    $ageValue = "25";
    $departmentValue = "Sale";

    try{
        $obj = new PDO($dns, $username, $password);
        // echo "Connect Database Success";

        // การบันทึกข้อมูลลง Database
        $sql = "INSERT INTO employees(fname, age, department) VALUE (:fname, :age, :department)";
        $stmt = $obj -> prepare($sql);
        $stmt -> bindParam(":fname", $fnameValue);
        $stmt -> bindParam(":age", $ageValue);
        $stmt -> bindParam(":department", $departmentValue);
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
    <title>Prepared Statement</title>
</head>
<body>
    
</body>
</html>