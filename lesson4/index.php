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
    // function divisible($n){
    //     if(($n % 2 ) == 0){
    //         return"$n eshte e plotpjestueshme me 2";
    //     }


    //     else{
    //         return"$n nuk eshte e plotpjestueshme me 2";
    //     }
    // }

    // print_r(fully_divisible(4). "<br>");
    // print_r(fully_divisible(35). "<br>");
    // print_r(fully_divisible(16). "<br>");
    // print_r(fully_divisible(3). "<br>");

    ?>

    <?php
    //  $x=5;

    //  function Draw(){
    //     $y=10;
    //     echo $y;
    //  }
    // echo "\n ,$x";

    // Draw()
    ?>

    <?php
    // $x=5;
    // $y=10;

    // function sum(){
    //     global $x,$y;
    //     $y= $x+$y;
    // }
    // sum();
    // echo $y;
    ?>

    <?php
    // function Counter(){
    //     static $counter;
    //     $counter++;
    //     echo "Vlera e count is:$counter <br>";
    // }
    // Counter();
    // Counter();
    ?>

    <?php 
    // $sports = array("Real madrid","Barcelona","Chelsea","Arsenal");

    // $sport = ["Real madrid","Barcelona","Chelsea","Arsenal"];
    // // echo $sport[0];
    // echo end ($sport);
    // echo count($sport);

    ?>

    <?php
    // $sports = ["Real madrid","Barcelona","Chelsea","Arsenal"];

    // $len=count($sports);

    // for($i=0, $i<$len ,$i++){
    //     echo  $sports[$i], "\n";
    // }

    ?>

    <?php 
    $sports = ["Real madrid","Barcelona","Chelsea","Arsenal"];

    array_push($sports,"Ben fica");
    var_dump($sports);

    ?>

<?php 
    $sports = ["Real madrid","Barcelona","Chelsea","Arsenal"];

    array_pop($sports);
    var_dump($sports);

    ?>
</body>
</html>