<?php
//Задача №1
/*
$var =1;
$var+=12;
$var-=14;
$var*=5;
$var/=7;
$var+=1;
$var-=1;
echo $var;
*/
//Задача №2
/*
$c=15;
$d=2;
$result = $c+$d;
echo $result;
*/
//Задача №3
/*
$a=17;
$b=10;
$c=$a-$b;
$d=7;
$result = $c+$d;
echo $result;
*/
//Задача №4
/*
$name = 'Alex';
echo "Привіт: $name";
*/
//Задача №5
/*
$num='12345';
$sum=0;
for ($i = 0; $i < strlen($num);$i++){
    $sum += $num[$i];
}
echo $sum;
*/
//Задача №6
/*
$sec=60;
$ch=$sec*60;
echo "\n";
echo "Кількість секунд в годині: $ch";
$s=$ch*24;
echo "\n";
echo "Кількість секунд в дні: $s";
$m=$s*31;
echo "\n";
echo "Кількість секунд в місяці: $m";
*/
//Задача №7
/*
$text ='Я ';
$text.='хочу ';
$text.='знати ';
$text.='PHP ';
echo $text;
*/
//Задача №8
/*
$var=10;
++$var;
++$var;
--$var;
echo $var;
*/
//Задача №9
/*
$hi=[];
$hi[0]='Привіт ';
$hi[1]='світ ';
$hi[2]='!';
$text=$hi[0] . $hi[1] . $hi[2];
echo $text;
*/
//Задача №10
/*
$arr =[
    'ua'=>['блакитний','червоний','зелений'],
    'en'=>['blue','red','green']
];
echo $arr['ua'][0];
*/
//Задача №11
/*
$arr=['a'=>1, 'b'=>2, 'c'=>3];
echo $arr['c'];
*/
//Задача №12
/*
$arr=['Коля'=>'1000$', 'Вася'=>'500$','Петя'=>'200$'];
echo "Зарплата Колі: {$arr['Коля']} Зарплата Петі: {$arr['Петя']}";
*/
//Задача №13
/*
$a=10;
if ($a==10){
    echo 'Правильно';
}else{
    echo 'Неправильно';
}
*/
//Задача №14
/*
$min =31;
if ($min==0 or $min<=15){
    echo 'Перша чверть';
}elseif ($min>15 and $min<=30){
    echo 'Друга чверть';
}elseif ($min>30 and $min<=45){
    echo 'Третя чверть';
}elseif ($min>45 and $min<=59){
    echo 'Четверта чверть';
}else{
    echo 'Змінна $min вказана не вірно';
}
*/
//Задача №15
/*
$lang = 'en';
$arr=[];
$ua = ['понеділок','вівторок','середа','четвер','п\'ятниця','субота','неділя'];
$en = ['monday','tuesday','wednesday','thursday','friday','saturday','sunday'];
if ($lang=='ua'){
    $arr=$ua;
    print_r($arr);
}if ($lang=='en'){
    $arr=$en;
    print_r($arr);
}
*/
/*
$lang = 'en';
$ua = ['понеділок','вівторок','середа','четвер','п\'ятниця','субота','неділя'];
$en = ['monday','tuesday','wednesday','thursday','friday','saturday','sunday'];
$arr=[];
switch ($lang){
    case 'ua': $arr = $ua; break;
    case 'en': $arr = $en; break;
    default: echo '';
}print_r($arr);
*/
/*
$lang ='en';
$arr=[
    'ua' => ['понеділок','вівторок','середа','четвер','п\'ятниця','субота','неділя'],
    'en' => ['monday','tuesday','wednesday','thursday','friday','saturday','sunday']
];
print_r($arr[$lang]);
*/
//Задача №16
/*
$a = '0';
if (empty($a)){
    echo "Правильно";
}else{
    echo "Не правильно";
}
*/
//Задача №17
/*
$a=null;
if (isset($a)){
    echo "Правильно";
}else{
    echo "Не правильно";
}
*/
//Задача №18
/*
$var = false;
if ($var != true) {
    echo "+";
} else {
    echo "-";
}
*/
//Задача №19
/*
$month =8;
if ($month==12 or ($month<=2 and $month!==0)){
    echo "Зима";
}elseif ($month>=3 and $month<=5){
    echo "Весна";
}elseif ($month>=6 and $month<=8){
    echo "Літо";
}elseif ($month>=9 and $month<=11){
    echo "Осінь";
}else{
    echo 'Неправильне значення $month';
}
*/
//Задача №20
/*
$year = 1900;
if ($year % 400 == 0) {
    echo "$year рік - Високосний";
} else {
    echo "$year рік - Не високосний";
}
*/
//Задача №21
/*
$str = 'abcde';
if ($str[0]=='a') {
    echo 'Так';
} else{
    echo 'Ні';
}
*/
//Задача №22
/*
$ch='12345';
if ($ch[0]<=3 and $ch[0]!=0){
    echo "Так";
}else{
    echo "Ні";
}
*/
//Задача №23
/*
$ch = '555555';
$sum1 = $ch[0]+$ch[1]+$ch[2];
$sum2 = $ch[3]+$ch[4]+$ch[5];
if ($sum1==$sum2){
    echo "Так";
}else{
    echo "Ні";
}
*/


//Lesson 5. Task 44.
/*
$i = 1;
while ($i<=100){
    echo $i;
    echo "<br>";
    $i++;
}
*/
/*
$i = 11;
while ($i<=33){
    echo $i;
    echo "<br>";
    $i++;
}
*/
/*
$i = 2;
while ($i<=100){
    echo $i;
    echo "<br>";
    $i+=2;
}
*/
/*
$i = 1;
while ($i<=99){
    echo $i;
    echo "<br>";
    $i+=2;
}
*/
/*
$i = 30;
while ($i>=1){
    echo $i;
    echo "<br>";
    $i--;
}
*/
//Lesson 5. Task 45.
/*
$i = 1;
while ($i<=10){
    echo $i;
    $i++; // -- _ помилка
}
*/
//Lesson 5. Task 46.
/*
for ($i=1;$i<=100;$i++){
    echo $i;
    echo "<br>";
}
*/
/*
for ($i=11;$i<=33;$i++){
    echo $i;
    echo "<br>";
}
*/
/*
for ($i=0;$i<=100;$i+=2){
    echo $i;
    echo "<br>";
}
*/
/*
for ($i=1;$i<=99;$i+=2) {
    echo $i;
    echo "<br>";
}
*/
/*
for ($i=100;$i>=0;$i--){
    echo $i;
    echo "<br>";
}
*/
//Lesson 5. Task 47.
/*
$result = 0;
for ($i = 1; $i <= 20; $i++) {
    $result += $i;
}
echo $result;
*/
/*
$result = 0;
for ($i = 2; $i <= 100; $i += 2) {
    $result = $result+$i;
}
echo $result;
*/
/*
$result = 0;
for ($i = 1; $i <= 99; $i += 2) {
    $result = $result+$i;
}
echo $result;
*/
//Lesson 5. Task 48.
/*
$arr = ['a', 'b', 'c', 'd', 'e'];
foreach ($arr as $item) {
    echo $item;
    echo "<br>";
}
*/
/*
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$result = 0;
foreach ($arr as $item) {
    $result += $item;
}
echo $result;
*/
/*
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$result = 0;
foreach ($arr as $key => $item) {
    $key++;
    $result += $item;
    $ch = $result / $key;
}
echo $ch;
*/
//Lesson 5. Task 49.
/*
$arr = ['green' => 'зелений', 'red' => 'червоний', 'blue' => 'блакитний'];
foreach ($arr as $key => $item) {
    echo "$key - $item <br>";
}
*/
/*
$arr = ['user1' => 30, 'user2' => 32, 'user3' => 33];
foreach ($arr as $key => $item) {
    echo "$key Вік: $item <br>";
}
*/
//Lesson 5. Task 50.
/*
$arr = [1, 2, 3, 4, 5];
foreach ($arr as $value){
    if($value%2!=0){
        echo $value;
    }
}
*/
/*
$arr = [2, 5, 9, 15, 1, 4];
foreach ($arr as $value){
    if($value>3 and $value<10){
        echo $value;
    }
}
*/
/*
$arr = [2, -5, 9, -15, 1, -4];
$sum = 0;
foreach ($arr as $value) {
    if ($value > 0) {
        $sum += $value;
    }
}
echo $sum;
*/
/*
$arr = [10,20,30,50,235,3000];
foreach ($arr as $value){
    $value=(string)$value;
    if ($value[0]==1 or $value[0]==2 or $value[0]==5){
        echo $value;
        echo "<br>";
    }
}
*/
/*
$arr = ['Понеділок', 'Вівторок', 'Середа', 'Четвер', 'П\'ятниця', 'Субота', 'Неділя', ];
foreach ($arr as $key => $value){
    if ($key == 5 or $key == 6){
        echo "<b> $value </b> <br>";
    }else{
        echo "$value <br>";
    }
}
*/
/*
$arr = [1 => 'Понеділок', 2 => 'Вівторок', 3 => 'Середа', 4 => 'Четвер', 5 => 'П\'ятниця', 6 => 'Субота', 7 => 'Неділя',];
$day = 7;
foreach ($arr as $key => $value) {
    if ($key == $day) {
        echo "<i>$value</i> <br>";
    }else{
        echo "$value <br>";
    }
}
*/
//Lesson 5. Task 51.
/*
for ($i=0; $i<=9; $i++)
    echo $i;
*/
//Lesson 5. Task 52.
/*
for ($i=0, $j = 0; $i <=9 ; $i++, $j+=2){
    echo $i . ' ' . $j . "<br>";
}
*/
//Lesson 5. Task 53.
/*
$arr = [1, 2, 3, 7, 5, 6];
foreach ($arr as $value){
    if ($value==0){
        break;
    }
    echo $value;
}
*/
/*
$arr = [1, 2, 3, 7, -5, 6];
$sum = 0;
foreach ($arr as $value) {
    if ($value < 0) {
        break;
    }
    $sum += $value;
}
echo $sum;
*/
/*
$arr = [1, 2, 3, 7, 5, 6];
foreach ($arr as $key => $value) {
    if ($value==3){
        echo $key;
        break;
    }
}
*/
/*
$sum = 0;
for ($num = 1; $num <= 100; $num++) {
    $sum += $num;
    $num+=1;
    if ($sum >= 100) {
        break;
    }
}echo $num;
*/
//Lesson 5. Task 54.
/*
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
foreach ($arr as $value) {
    if ($value % 2 == 0) {
        $result = $value * $value;
    } elseif ($value % 3 == 0) {
        $result = $value * $value * $value;
    } else {
        continue;
    }
    echo "<br>";
    echo $result;
}
*/
//Lesson 5. Task 55. FLAG
/*
$arr = ['a', 'b','c','d','e'];
$flag = false;
foreach ($arr as $value){
    if ($value==='c'){
        $flag=true;
        break;
    }
}
if ($flag===true){
    echo "Є";
}else{
    echo "Немає";
}
*/
//Lesson 5. Task 56.ПРОСТІ ЧИСЛА
/*
$num = 31;
$flag = true;
for ($i = 2; $i < $num; $i++){
    if ($num%$i===0) {
        $flag = false;
        break;
    }
}
var_dump($flag);
*/
//Lesson 5. Task 57.
/*
$num = 500;
while ($num > 10) {
    $num = $num / 2;
}
echo $num;
*/
/*
$num = 5;
while ($num < 1000) {
    $num = $num * 3;
    echo "$num <br>";
}
*/
/*
for ($num = 5, $i = 0; $num < 1000; $num = $num * 3, $i++);
echo "$num - $i<br>";
*/
//Lesson 5. Task 58.
/*
$str = '';
for ($i = 0; $i < 5; $i++) {
    $str .= '0';
}
echo $str;
*/
/*
$str='';
for ($i=1; $i<10; $i++){
    $str.=$i;
}echo $str;
*/
/*
$str = '';
for ($i = 9; $i > 0; $i--) {
    $str .= $i;
}
echo $str;
*/
/*
$str='';
for ($i=-1; $i>-10; $i--){
    $str.=$i;
}echo $str ;
*/
//Lesson 5. Task 59.
/*
for($i=1; $i<=9; $i++){
    for($j=1;$j<=3; $j++){
        echo $i;
    }
}
*/
/*
for($i=10; $i<=30; $i+=10){
    for($j=1;$j<=3; $j++){
        echo $i+$j;
        echo "<br>";
    }
}
*/
//Lesson 5. Task 60.
/*
$arr = [];
for ($i = 0; $i<=100; $i++){
    $arr[]=$i+1;
}
var_dump($arr);
*/
/*
$arr = [];
for ($i=0;$i<=99;$i+=2) {
    $arr[]=$i+1;
}
var_dump($arr);
*/
//Lesson 5. Task 61.
/*
$arr = ['a', 'b', 'c', 'd', 'e'];
$length = count($arr);
for ($i = 0; $i < $length; $i++){
    echo $arr[$i];
}
*/
/*
$arr = ['a', 'b', 'c', 'd', 'e'];
$length = count($arr);
for ($i = 0; $i < $length - 1; $i++) {
    echo $arr[$i];
}
*/
/*
$arr = [1, 2, 3, 4, 5, 6, 7, 8];
$length = count($arr);
for ($i = 0; $i < $length / 2; $i++) {
    echo $arr[$i];
}
*/
/*
$arr = [1, 2, 3, 4, 5, 6, 7, 8];
$length = count($arr);
$sum = 0;
for ($i = 1; $i < $length; $i++) {
    $sum+=$arr[$i];
}
echo $sum;
*/
//Lesson 5. Task 62.
/*
$arr = [1, 2, 3, 4, 5, 6, 7, 8];
$length = count($arr);
for ($i = 0; $i < $length; $i++){
    $arr[$i] = $arr[$i]*$arr[$i];
}
var_dump($arr);
*/
/*
$arr = [1, 2, 3, 4, 5, 6, 7, 8];
$length = count($arr);
for ($i = 0; $i < $length; $i++) {
    $arr[$i] -= 1;
}
var_dump($arr);
*/
/*
$arr = [1, 2, 3, 4, 5, 6, 7, 8];
$length = count($arr);
for ($i = 0; $i < $length; $i++) {
    $arr[$i] += 10;
}
var_dump($arr);
*/
//Lesson 5. Task 63.