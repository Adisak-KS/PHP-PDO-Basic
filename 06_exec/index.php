<?php

    // เชื่อมต่อฐานข้อมูล
    $dns = "mysql:host=localhost;dbname=mydb";
    $username = "root";
    $password = "123";

    try{
        $obj = new PDO($dns, $username, $password);
        // echo "Connect Database Success";

        // การบันทึกข้อมูลลง Database
        $sql = "INSERT INTO employees(fname, age, department) VALUE ('Kong', 23, 'IT')";
        $result = $obj->exec($sql);
        if($result){
            echo "Insert Success";
        }
    }catch(PDOException $e){
        echo $e-> getMessage();
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>การบันทึกข้อมูลด้วย exec</title>
</head>
<body>
    
</body>
</html>