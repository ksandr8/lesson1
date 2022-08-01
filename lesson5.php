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