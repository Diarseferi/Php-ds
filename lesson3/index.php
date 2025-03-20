<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lesson3</title>
</head>
<body>
    <?php
    
    $num=-10;
    $age=88;
    $numri=23;

    $a=10;
    $b=50;

    $age2=15;
    if($num <0){
        echo "$num is less than 0". "<br>";
    }

    if(($age > 12) && ($age < 20)){
        echo "you are a tennager";
    }else{
        echo "you are a grown man";
    }

    if($numri<0){
        echo "The value of \$num us a negative number";
    }elseif($numri == 0){
        echo "The value of $numri is 0";
    }else{
        echo "The value of $numri is a positive number";
    }

    if($a==$b){
        echo "1  <br>";
    }else if($a >$b){
        echo "2  <br>" ;
    }else{
        echo "3  <br>";
    }

    switch($age2){
        case($age2 >= 15) && ($age2 <= 18);
        echo "you are a minor (0-18 years old) <br>";
        break;

        case($age2 >18);
        echo "you are a young adult";
        break;

        case($age >25);
        echo "you are a grown man <br>";
        break;
    }

    $day="E enjte"
        switch($day){
            
            case="e hane"
            echo "e hane";
            break;

            case="e marte"
            echo "e marte";
            break;

            case="e merkure"
            echo "e merkure";
            break;

            case="e enjte"
            echo "e enjte";
            break;

            case="e premte"
            echo "e premte";
            break;

            case="e shtune"
            echo "e shtune";
            break;

            case="e dielle"
            echo "e dielle";
            break;
        }
        
    
    $whileVar=1;
     while($whileVar >= 5){
        echo "<br>Numri is $whileVar </br>"
        $whileVar++;
     }
    
    $dowhile=1;
    do($dowhile <= 5){
        echo "The number is $dowhile </br>"
        $dowhile++;
    }while($dowhile < 5);

    for($forVar = 0; $forVar < 5; $forVar++){
        echo "The number is $forVar </br>";
    }
    ?>

    <?php
    $cars= array("BMW","Audi","Volvo","Tesla")
    foreach($cars as $value){
        echo "$value </br>";
    }
       
    ?>


    <?php
    $age= array("John " => "18", "Micheal" => "25", "Emma" => "22");
    foreach($age as $x1 => $value){
        echo "$x1 is $value years old </br>";
    }

    ?>
    
    
    
</body>
</html>