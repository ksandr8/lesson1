<?php
include "lesson6.html";
/*
$a = [];

for ($i = 0; $i < 100; $i++) {
    $a[] = rand(15, 1000000);
}

echo "<br>";
echo "Максимальне число: " . max($a);
echo "<br>";
echo "Мінімальне число: " . min($a);

$min = $a[0];
$max = $a[0];
foreach ($a as $key => $value) {
    if ($value > $max) {
        $max = $value;
    }
    if ($value < $min) {
        $min = $value;
    }
}
echo "<br>";
echo "Максимальне число вручну: " . $max;
echo "<br>";
echo "Мінімальне число вручну: " . $min;
*/
/*
$city = "ДніПро";
$low = mb_strtolower($city);
$up = mb_convert_case($low, MB_CASE_TITLE,"UTF-8");
$num = mb_strlen($up);
echo $up;
echo "<br>";
echo $num;
*/
/*
$a =" 12-03-15";
$b = ltrim($a);
$num = mb_strlen($a);
$num1 = mb_strlen($b);
echo $a;
echo "<br>";
echo $b;
echo "<br>";
echo $num;
echo "<br>";
echo $num1;
*/

echo strtoupper("php");
echo "<br>";
echo strtolower("PHP");
echo "<br>";
echo ucfirst("london");
echo "<br>";
echo ucwords('london is the capital of great britian');
echo "<br>";
$a = 'LONDON';
$b = strtolower($a);
echo ucfirst($b);
echo "<br>";
echo strlen('html css php');
echo "<br>";
$password = 123456;
$a = strlen($password);
if ($a > 5 and $a < 10) {
    echo "Пароль підходить";
} else {
    echo "Придумайте інший пароль";
}
echo "<br>";
$h = "html css php";
echo substr($h, 0, 4);
echo "\n";
echo substr($h, 5, 3);
echo "\n";
echo substr($h, 9, 3);
echo "<br>";
$p = "helloworld";
echo substr($p, -3);
echo "<br>";
$v = 'http://';
if (substr($v, 0, 7) == 'http://' or substr($v, 0, 8) == 'https://') {
    echo "Так";
} else {
    echo "Ні";
}
echo "<br>";
$l = '.png';
if (substr($l, -4) == '.png') {
    echo "Так";
} else {
    echo "Ні";
}
echo "<br>";
$t = '.jpg';
if (substr($t, -4) == '.png' or substr($t, -4) == '.jpg') {
    echo "Так";
} else {
    echo "Ні";
}
echo "<br>";
$y = 'create';
if (strlen($y) > 5) {
    echo substr($y, 0, 5) . "...";
}
if (strlen($y) <= 5) {
    echo ucfirst($y);
}
echo "<br>";
echo str_replace('.', '-', '31.12.2013');
echo "<br>";
$str = 'abcde';
echo str_replace(['a', 'b', 'c'], ['1', '2', '3'], $str);
echo "<br>";
$yy = '1a2b3c4b5d6e7f8g9h0';
echo str_replace(['0', '1', '2', '3', '4', '5', '6', '7', '8', '9',], [], $yy);
echo "<br>";
$abc = 'aaabbbccc';
echo strtr($abc, ['a' => '1', 'b' => '2', 'c' => '3']);
echo "<br>";
echo strtr($abc, 'abc', '123');
echo "<br>";
$strv = 'abcdedasd';
echo substr_replace($strv, '!!!', 2, 5);
echo "<br>";
$op = 'abc abc abc';
echo "Перша позиція b - " . strpos($op, 'b');
echo ",";
echo "Остання позиція b - " . strrpos($op, 'b');
echo "<br>";
echo strpos($op, 'b', 3);
echo "<br>";
$trp = "aaa aaa aaa aaa aaa";
echo strpos($trp, " ", 6);
echo "<br>";
$vpn = "cross..r";
if (strpos($vpn, '..')) {
    echo "yes";
} else {
    echo "no";
}
echo "<br>";
$url = 'http://fire.com';
if (strpos($url, 'http://') === 0) {
    echo "yes";
} else {
    echo "no";
}
echo "<br>";
$string = "html css php";
$ar = explode(' ', $string);
var_dump($ar);
echo "<br>";
$gg = ['html', 'css', 'php'];
$set = implode(',', $gg);
echo $set;
echo "<br>";
$date = '2013-12-31';
$stg = explode('-', $date);
echo $stg[2] . '.' . $stg[1] . '.' . $stg[0];
echo "<br>";
$tw = str_split('1234567890', 2);
print_r($tw);
echo "<br>";
$aw = str_split('1234567890', 1);
print_r($aw);
echo "<br>";
$ow = str_split('1234567890', 2);
print_r($ow);
echo "<br>";
echo implode('-', $ow);
echo "<br>";
echo(trim(' gtr 5hy '));
echo "<br>";
echo trim('/php/', '/');
echo "<br>";
$word = 'слова слова слова.';
echo rtrim($word, '.') . '.';
echo "<br>";
