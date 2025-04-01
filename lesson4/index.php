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
    // $sports = ["Real madrid","Barcelona","Chelsea","Arsenal"];

    // array_push($sports,"Ben fica");
    // var_dump($sports);

    ?>

<?php 
    // $sports = ["Real madrid","Barcelona","Chelsea","Arsenal"];

    // array_pop($sports);
    // var_dump($sports);

    ?>

    <?php
    // $sports = array("Real madrid","Barcelona","Ben fica");
    // array_unshift($sports, "Chelsea");
    // var_dump($sports);

    ?>

    <?php
    // $sports = array("Real madrid","Barcelona","Ben fica");
    // array_shift($sports);
    // var_dump($sports);
    ?>

    <?php
    // $sports = ["Real madrid","Barcelona","Ben fica","Chelsea","Arsenal"];

    // $output =array_splice($sports,2);
    // $output1 =array_splice($sports,3);
    // $output2 =array_splice($sports,-2,1);

    // var_dump($output,$output1,$output2);

    ?>

    <?php
    // $sports = [12,24,36,48];
    // var_dump(array_sum($sports));
    ?>

    <?php
    $temp = [25,30,25, 26,20,28,25];
    $average_temp =array_sum($temp)/7;
    echo ($average_temp);
    ?>
</body>
</html>