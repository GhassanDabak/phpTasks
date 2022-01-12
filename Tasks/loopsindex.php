<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Question (1)</h1>
    <?php
    function leap($input){
        if($input%4==0){
            return "This year is a leap year";
        }
        else{
            return "This year is not a leap year";
        }
    }
    echo leap("2020");
    ?>
    <hr>
    <h1>Question (2)</h1>
    <?php
    function season($input){
        if($input<20){
            return "It is wintertime";
        }else{
            return "It is summertime";
        }
    }
    echo season("45");
    ?>
    <hr>
    <h1>Question (3)</h1>
    <?php
    function sum($num1,$num2){
        if($num1===$num2){
            return ($num1+$num2)*3;
        }else{
            return $num1+$num2;
        }
    }
    echo sum(10,11);
    echo "<br>";
    echo sum(10,10);
    ?>
    <hr>
    <h1>Question (4)</h1>
    <?php
    function returnSum($num1,$num2){
        $sum = $num1+$num2;
        if($sum===30){
            echo 30;
        }else{
            echo "false";
        }
    }
    echo returnSum(15,15);
    ?>
    <hr>
    <h1>Question (5)</h1>
    <?php
    function multiple($num){
        if($num%3===0){
            echo $num;
        }else{
            echo "false";
        }
    }
    echo multiple(20);
    ?>
    <hr>
    <h1>Question (6)</h1>
    <?php
    function ranged($num){
        if($num>=20 && $num<=50){
            return "true";
        }else{
            return "false";
        }
    }
    echo ranged(20);
    ?>
    <hr>
    <h1>Question (7)</h1>
    <?php
    $array = array(1,5,9);
    function largest($arr){
        $max=0;
        for($i=0;$i<count($arr);$i++){
            if($max<$arr[$i]){
                $max=$arr[$i];
            }
        }
        return $max;
    }
    echo largest($array);
    ?>
    <hr>
    <h1>Question (8)</h1>
    <?php
    function units($num){
        if($num<=50){
            return 2.50 . "JOD/Unit";
        }elseif($num>=51 && $num<=100){
            return 5.00 . "JOD/Unit";
        }
        elseif($num>=101 && $num <=200){
            return 6.20 . "JOD/Unit";
        }elseif($num>250){
            return 7.50 . "JOD/Unit";
        }
    }
    echo units(400);
    ?>
<hr>
    <h1>Question (9)</h1>
    <?php
    function calc($num1,$num2,$equation){
        if($equation=="/"){
            return $num1 / $num2;
        }
        if($equation=="*"){
            return $num1 * $num2;
        }
        if($equation=="-"){
            return $num1 - $num2;
        }
        if($equation=="+"){
            return $num1 + $num2;
        }
    }
    echo calc(10,5,"-");
    ?>
    <hr>
    <h1>Question (10)</h1>
    <?php
    function vote($age){
        if($age<18){
            return "You are not eligible to vote";
        }else{
            return "You are eligible to vote";
        }
    }
    echo vote(18);
    ?>
    <hr>
    <h1>Question (11)</h1>
    <?php
    function check_num($num){
        if($num<0){
            return "Negative";
        }
        elseif($num===0){
            return "Zero";
        }else{
            return "Positive";
        }
    }
    echo check_num(-60);
    ?>
    <hr>
    <h1>Question (12)</h1>
    <?php
    function avg($arr){
        $sum = array_sum($arr);
        $aveg = $sum / count($arr);
        if($aveg<60){
            return "F";
        }elseif($aveg>=60 && $aveg<70){
            return "D";
        }elseif($aveg>=70 && $aveg<80){
            return "C";
        }elseif($aveg>=80 && $aveg<90){
            return "B";
        }elseif($aveg>=90){
            return "A";
        }
    }
    $grades = array(60,86,95,63,55,74,79,62,50);
    echo avg($grades)
    ?>
</body>
</html>