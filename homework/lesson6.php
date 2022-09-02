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
echo rtrim($word, '.') . 'php-lessons';
echo "<br>";
echo strrev(12345);
echo "<br>";
$sdr = 'madam';
$rev = strrev($sdr);
if ($sdr == $rev) {
    echo "$sdr - слово паліндром";
} else {
    echo 'Слово не паліндром';
}
echo "<br>";
echo str_shuffle('asdgfbv');
echo "<br>";
$yt = 'qwertyuiopasdfghjk';
$sh = str_shuffle($yt);
echo substr($sh, 0, 6);
echo "<br>";
$sp = '12345678';
echo number_format($sp);
echo "<br>";
$pi = '';
for ($i = 0; $i < 9; $i++) {
    $pi .= 'x';
    echo str_repeat($pi, 1) . '<br>';
}
for ($i = 1; $i <= 9; $i++) {
    echo str_repeat($i, $i) . '<br>';
}
$tt = 'html, <b>php</b>, js';
echo strip_tags($tt);
echo "<br>";
$oo = '<i>html</i>,<b>php</b>,<s>js</s>';
echo strip_tags($oo, ['<i> <b>']);
echo "<br>";
echo htmlspecialchars('html,<b>php</b>,js');
echo "<br>";
echo ord('a') . "\n";
echo ord('b') . "\n";
echo ord('c') . "\n";
echo ord(' ') . "\n";
echo "<br>";
echo chr(33);
echo "<br>";
$nt = 'F';
echo ord($nt);
echo "<br>";
$len = 5;
$ft = '';
for ($i = 0; $i < $len; $i++) {
    $ft .= chr(rand(97, 122));
}
echo $ft;
echo "<br>";
$letter = 'G';
if (ord($letter) >= 65 && ord($letter) <= 90) {
    echo "Велика літера: $letter";
}
if (ord($letter) >= 97 && ord($letter) <= 122) {
    echo "Маленька літера: $letter";
}
echo "<br>";
$tre = 'ac-cd-ef';
echo strchr($tre, '-');
echo "<br>";
echo strrchr($tre, '-');
echo "<br>";
$ftr = 'ab--cd--ef';
echo strstr($ftr, '--');
echo "<br>";
$find = 'var_test_text';
$uu = explode('_', $find);
$uu0 = $uu[0];
$uu1 = ucfirst($uu[1]);
$uu2 = ucfirst($uu[2]);
echo $uu0 . $uu1 . $uu2;
echo "<br>";
$ii = [1, 2, 3, 4, 55, 43, 36, 43];
foreach ($ii as $value) {
    if (strpos($value, '3') !== false) {
        echo $value . '<br>';
    }
}
echo "<br>";



echo "Function";
echo "<br>";
echo pow(2, 10);
echo "<br>";
echo sqrt(245);
echo "<br>";
$force = [4, 2, 5, 19, 13, 0, 10];
$sum = null;
foreach ($force as $value) {
    $kva = pow($value, 2);
    $sum += $kva;
}
$kv = pow($sum, 2);
echo sqrt($kv);
echo "<br>";
$pos = sqrt(379);
echo round($pos, 1);
echo "<br>";
echo round($pos, 2);
echo "<br>";
echo round($pos, 3);
echo "<br>";
$arte = ['floor' => '', 'ceil' => ''];
$set = sqrt(587);
$kre = floor($set);
$krew = ceil($set);
$arte['floor'] .= $kre;
$arte['ceil'] .= $krew;
print_r($arte);
echo "<br>";
$ftt = [4, -2, 5, 19, -130, 0, -10];
echo min($ftt);
echo "<br>";
echo mt_rand(0, 100);
echo "<br>";
$wert = [];
for ($i = 0; $i < 10; $i++) {
    $wert[$i] = mt_rand(0, 10);
}
print_r($wert);
echo "<br>";
$pp = -20;
$ll = 5;
echo abs($pp - $ll);
echo "<br>";
