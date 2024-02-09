<?php

    $number1 = 10;
    $number2 = 0;

    try{
        if($number2 == 0){
           throw new Exception("Do not divide by 0.");
        }
        $result = $number1 / $number2;
        echo "Total : ". $result;
    }catch(Exception $e){

        // echo $e -> getMessage();
        echo $e -> getLine();
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สร้างฐานข้อมูล (Database )</title>
</head>
<body>
    
</body>
</html>