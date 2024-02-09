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
        $sql = "SELECT * FROM employees";
        $result = $obj -> query($sql);
        while($row = $result -> fetch(PDO::FETCH_ASSOC)){
            echo "ID : ". $row["id"] ."<br>";
            echo "Name : ". $row["fname"] ."<br>";
            echo "Age : ". $row["age"] ."<br>";
            echo "Department : ". $row["department"] ."<br>";
            echo "<hr>";
        }
        // print_r($arr);
        
    }catch(PDOException $e){
        echo $e-> getMessage();
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แสดงข้อมูลในหน้าเว็บ</title>
</head>
<body>
    
</body>
</html>