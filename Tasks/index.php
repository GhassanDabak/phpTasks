<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Question (1)
    </h1>
    <?php
    function toUpperCase($str)
    {
        return strtoupper($str);
    }
    echo toUpperCase("ghassan")
    ?>
    <hr>
    <?php
    function toLowerCase($str)
    {
        return strtolower($str);
    }
    echo toLowerCase("Ghassan");
    ?>
    <hr>
    <?php
    function firstLetter($str)
    {
        return ucfirst($str);
    }
    echo firstLetter("ghassan");
    ?>
    <hr>
    <?php
    function wordCapitalizer($str)
    {
        return ucwords($str);
    }
    echo wordCapitalizer("ghassan dabak");
    ?>
    <hr>
    <h1>Question (2)</h1>
    <?php
    function toTime($str){
        $chunk = str_split($str,2);
        $result = implode(':',$chunk);
        return $result;
    }

    echo toTime("085119");
    ?>
    <hr>
    <h1>Question (3)</h1>
    <?php
    function check($str, $word)
    {

        // Test if string contains the word 
        if (stripos($str, $word) !== false) {
            echo "Word Found!";
        } else {
            echo "Word Not Found!";
        }
    }
    $str = "I am a full stack developer at orange coding academy";
    $word = "Orange";
    echo check($str, $word);
    ?>
    <hr>
    <h1>Question (4)</h1>
    <?php
    function url($url)
    {
        $filename = basename($url);
        return $filename;
    }
    echo url("www.google.com/index.php");
    ?>
    <hr>
    <h1>Question (5)</h1>
    <?php
    function username($email)
    {
        $username = strstr($email, '@', true);
        return $username;
    }
    echo username("ghassandabak@gmail.com");
    ?>
    <hr>
    <h1>Question (6)</h1>
    <?php
    function last3($str)
    {
        return substr($str, -3);
    }
    echo last3("ghassandabak@gmail.com");
    ?>
    <hr>
    <h1>Question (7)</h1>
    <?php
    function randomPassword()
    {
        $alphabet = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
        return substr(str_shuffle($alphabet), 0, 8);
    }
    echo randomPassword();
    ?>
    <hr>
    <h1>Question (8)</h1>
    <?php
    function replaceWord()
    {
        $str = 'the new trainee is so genius.';
        echo preg_replace('/the/', 'That', $str, 1) . "\n";
    }
    echo replaceWord();
    ?>
    <hr>
    <h1>Question (9)</h1>
    <?php
    $str1 = 'football';
    $str2 = 'footboll';
    $str_pos = strspn($str1 ^ $str2, "\0");
    printf(
        'First difference between two strings at position %d: "%s" vs "%s"',
        $str_pos,
        $str1[$str_pos],
        $str2[$str_pos]
    );
    printf("\n");
    ?>
    <hr>
    <h1>Question (10)</h1>
    <?php
    function dumping_array($str){
        return var_dump(explode(" ",$str));
    }
    dumping_array("Twinkle, twinkle, little star.");
    ?>
    <hr>
    <h1>Question (11)</h1>
    <?php
    function char($char){
        $next_cha = ++$char;
        if(strlen($next_cha)>1){
            $next_cha = $next_cha[0];
        }
        return $next_cha."\n";
    }
    echo char('z');
    ?>
    <hr>
    <h1>Question (12)</h1>
    <?php
    function inserting($str,$word){
        $original_string = $str;
$string_to_insert =$word;
$insert_pos = 4;
$new_string = substr_replace($original_string, $string_to_insert.' ', $insert_pos, 0);
return $new_string;
    }
    echo inserting("The brown fox","quick");
    echo "<br>";
    function first($str){
        return strtok($str," ");
    }   
    echo first("The quick brown fox");
    ?>
    <hr>
    <h1>Question (13)</h1>
    <?php
    function removeZeros($str){
    return ltrim($str, '0');
    }
    echo removeZeros('0000065722.24')
    ?>
    <hr>
    <h1>Question (14)</h1>
    <?php
    function removePart($str,$word){
        return str_replace($word," ",$str);
    }
    echo removePart("The quick brown fox jumps over the lazy dog","fox");
    ?>
    <hr>
    <h1>Question (15)</h1>
    <?php
    function removeAdds($str,$char){
         $result = str_replace($char,"",$str);
         return $result;
    }
    echo removeAdds("The quick brown fox jumps over the lazy dog---","-");
    ?>
    <hr>
    <h1>Question (16)</h1>
    <?php
    function removeSpecial($str){
        $result =  preg_replace('/[^A-Za-z0-9\-]/', ' ', $str);
        return str_replace("-"," ",$result);
    }
    echo removeSpecial("1+2/3*2:2-3/4*3");
    ?>
    <hr>
    <h1>Question (17)</h1>
    <?php
    function firstFive($str){
        $pieces = explode(" ",$str);
        return implode(" ", array_splice($pieces,0,5));
    }
    echo firstFive("The quick brown fox jumps over the lazy dog");
    ?>
    <hr>
    <h1>Question (18)</h1>
    <?php
    function removeCommas($str){
        return str_replace(",","",$str);
    }
    echo removeCommas("2,543.12");
    ?>
    <hr>
    <h1>Question (19)</h1>
    <?php
    function printAlph(){
        $alphabet = "abcdefghijklmnopqrstuvwxyz";
        $arr = str_split($alphabet);
        foreach($arr as $key=>$value){
            echo $value . " ";
        }
    }
    echo printAlph();
    ?>
</body>

</html>