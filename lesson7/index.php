<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lesson7</title>
</head>
<body>
    <?php
    
    $host='localhost';
    $user='root';
    $pass='';

    try{
        $conn=new PDO ("mysql:host=$host",$user,$pass);
        echo "Connected";
    }
    catch(Exception $e){
        echo"Not Connected";
    }

    ?>
</body>
</html>