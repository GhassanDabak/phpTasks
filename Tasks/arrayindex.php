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
    $colors = array("red","green","white");
    echo "<p> The memory of that scene for me is like a frame of film forever frozen at that moment: the " . " " . $colors[0] . "carpet, the " . " " . $colors[1] . "lawn, the " . " " . $colors[2] . "house, the leaden sky. The new president and his first lady. -Richard M. Nixon </p>"
    ?>
    <hr>
    <h1>Question (2)</h1>
    <?php
    $colors = array("Green","Red","White");
    echo "<ul> ";
    for($i=0;$i<count($colors);$i++){
        echo "<li>" . $colors[$i] . "</li>";
    }
    echo "</ul>";
    ?>
    <hr>
    <h1>Question (3)</h1>
    <?php
    $cities = array("Italy"=>"Rome","France"=>"Paris","Germany"=>"Berlin","Greece"=>"Athens");
    asort($cities);
    foreach($cities as $country => $capital){
        echo "<p> The capital of " . $country . " is " . $capital . "</p>";
    }
    ?>
    <hr>
    <h1>Question (4)</h1>
    <?php
    $colors = array("Green","Red","White");
    echo $colors[0];
    ?>
    <hr>
    <h1>Question (4)</h1>
    <?php
    function anyArr($str,$index,$arr){
        array_splice($arr,$index,0,$str);
        for($i=0;$i<count($arr);$i++){
            echo $arr[$i] . " ";
        }
    }
    $nums = array(1,2,3,4,5);
    echo anyArr("$","3",$nums);
    ?>
    <hr>
    <h1>Question (5)</h1>
    <?php
    $fruits = array("d"=>"lemon","a"=>"orange","b"=>"banana","c"=>"apple");
    asort($fruits);
    foreach($fruits as $key => $value){
        echo $key . " = " . $value . "<br>";
    }
    ?>
    <hr>
    <h1>Question (6)</h1>
    <?php
    $values = array(78,60,62,68,71,68,73,85,66,64,76,63,75,76,73,68,62,73,72,65,74,62,62,65,64,68,73,75,79,73);
    function temps($arr){
        $sum = array_sum($arr);
        $average = $sum / count($arr);
        sort($arr);
        $lowest = array_splice($arr,0,5);
        $imploded = implode(",",$lowest);
        rsort($arr);
        $highest = array_splice($arr,0,5);
        $imploded_high = implode(",",$highest);

        echo "<p> Average Temperature is: " . $average . "<p> <br>";
        echo "<p> List of five lowest temperatures: " . $imploded . "<p><br>";
        echo "<p> List of five lowest temperatures: " . $imploded_high . "<p><br>";
    }
    echo temps($values);
    ?>
    <hr>
    <h1>Question (7)</h1>
    <?php
    $array1 = array("color"=>"red",2,4);
    $array2 = array("a","b","color"=> "green","shape"=>"trapezoid",4);
    echo "<pre>";
    print_r(array_merge($array1,$array2));
    echo "</pre>";
    ?>
    <hr>
    <h1>Question (1)</h1>
    <?php
    function changeArrayToUpper($arr){
        for($i=0;$i<count($arr);$i++){
            $arr[$i]=strtoupper($arr[$i]);
        }
        echo "<pre>";
        print_r($arr);
        echo "</pre>";
    }
    $colors = array("red","blue","white","yellow");
    echo changeArrayToUpper($colors);
    ?>
    <hr>
    <h1>Question (2)</h1>
    <?php
    function changeArrayToLower($arr){
        for($i=0;$i<count($arr);$i++){
            $arr[$i]=strtolower($arr[$i]);
        }
        echo "<pre>";
        print_r($arr);
        echo "</pre>";
    }
    $colors = array("RED","BLUE","WHITE","YELLOW");
    echo changeArrayToLower($colors);
    ?>
    <hr>
    <h1>Question (9)</h1>
    <?php
    for($i=200;$i<=250;$i++){
        if($i%4==0){
            echo $i . ",";
        }
    }
    ?>
    <hr>
    <h1>Question (10)</h1>
    <?php
    $words = array("abcd","abc","de","hjjj","g","wer");
    $mapped_array = array_map('strlen',$words);
    echo "The shortest length is " . min($mapped_array) . " " . "The longest array length is " . max($mapped_array) . " ";
    ?>
    <hr>
    <h1>Question (11)</h1>
    <?php
    function random($num1,$num2){
        for($i=0;$i<10;$i++){
            echo rand($num1,$num2) . " ";
        }
    }
    echo random("11","20");
    ?>
    <hr>
    <h1>Question (12)</h1>
    <?php
    $array1 = array(2,0,10,12,6);
    function noZeros(Array $arr){
        return min(array_diff(array_map('intval',$arr),array(0)));
    }
    print_r(noZeros(Array (2,0,10,12,6)));
    
    ?>
</body>
</html>