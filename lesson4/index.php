<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>leson4</title>
</head>
<body>
    <?php

    // phpinfo();

    // $x="hello";
    // print_r($x)

    // $x=5;
    // echo gettype($x) . "<br>";

    // $y=7.7;
    // echo gettype($y) . "<br>";

    // $i="Helloooo";
    // echo gettype($i) ."<br>";

    ?>

    <?php
    // function displayPhpVersion(){
    //     echo "This is Php" .phpversion();
    //     echo  "\n";
    // }

    // displayPhpVersion();

    ?>
    <?php
    
    // function hello(){
    //     echo "Hello World";
    // }

    // hello();
    ?>

    <?php
    // function sum(){
    //     $value =120+20;
    //     echo $value;
    // }
    // sum();

    ?>

    <?php
    // function maximum($x,$y){
    //     if($x > $y){
    //         return $x;
    //     }else{
    //         return $y;
    //     }
    // }

    // $a=20;
    // $b=30;
    // $test= maximum($a,$b);
    // echo "The max of $a and $b is $test";
    ?>

    <?php
    function divisible($n){
        if(($n % 2 ) == 0){
            return"$n eshte e plotpjestueshme me 2";
        }


        else{
            return"$n nuk eshte e plotpjestueshme me 2";
        }
    }

    print_r(fully_divisible(4). "<br>");
    print_r(fully_divisible(35). "<br>");
    print_r(fully_divisible(16). "<br>");
    print_r(fully_divisible(3). "<br>");

   


    ?>
</body>
</html>