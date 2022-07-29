<?php
//Lesson 4. Task 1.
/*
//#1
$a = ['a','b','c'];
echo $a;
var_dump($a);
*/
/*
//#2
$a=['a','b','c'];
var_dump($a);
//#3
$p=['a','b','c','d'];
echo "{$p[0]}+{$p[1]}+{$p[2]}+{$p[3]}";
*/
/*
#4
$ar = [1,2,3];
var_dump($ar[0]+$ar[1]+$ar[2]);
#5
$arr=[2,5,3,9];
$arr1=$arr[0]*$arr[1];
$arr2=$arr[2]*$arr[3];
$result = $arr1+$arr2;
var_dump($result);
*/
//Lesson 4. Task 2.
/*
//#1
$rt = [1=>'a', 'b', 'c'];
var_dump($rt);
echo "<br>";
//#2
$art = [1=>'січень' ,'лютий' ,'березень' ,'квітень' ,'травень'];
var_dump($art);
echo "<br>";
//#3
$rob = ['name'=>'Олександр','surname'=>'Бортанович', 'patronymic'=>'Олексійович'];
echo "Прізвище: {$rob['surname']} Ім'я: {$rob['name']} По-батькові: {$rob['patronymic']}";
echo "<br>";
//#4
$date=['year'=>2022,'month'=>'Липень','day'=>26];
echo "Рік: {$date['year']} Місяць: {$date['month']} День: {$date['day']} ";
*/
//Lesson 4. Task 3.
/*
$date=[5=>2022,95=>'Липень',25=>26];
var_dump($date);
*/
//Lesson 4. Task 4.
//#1
/*
$arr = ['a','b','c','d','e'];
echo count($arr);
*/
//#2
/*
$arr = ['a'=>1, 'b'=>2, 'c'=>3, 'd'=>4];
echo count($arr);
*/
//#3
/*
$arr = ['a', 'b', 'c', 'd', 'e'];
echo $arr[count($arr)-1];
*/
//#4
/*
$arr = ['a', 'b', 'c', 'd', 'e'];
echo $arr[count($arr)-2];
*/
//Lesson 4. Task 5.
//#1
/*
$arr = ['a'=>1,'b'=>2, 'c'=>3];
$arr['a']=4;
$arr['b']=5;
$arr['c']=6;
var_dump($arr);
*/
//#2
/*
$arr=['a'=>1,'b'=>2,'c'=>3];
$arr['a'] .=3;
$arr['b'] .=3;
$arr['c'] .=3;
var_dump($arr);
*/
//#3
/*
$arr=['a'=>1,'b'=>2,'c'=>3];
$arr['a']++;
$arr['a']++;
$arr['b']--;
$arr['c']--;
$arr['c']--;
var_dump($arr);
*/
//Lesson 4. Task 6
//#1
/*
$arr = [];
$arr[]=1;
$arr[]=2;
$arr[]=3;
$arr[]=4;
$arr[]=5;
var_dump($arr);
*/
//#2
/*
$arr = [1,2,3];
$arr[]=4;
$arr[]=5;
var_dump($arr);
*/
//#3
/*
$arr=[];
$arr['year']=2022;
$arr['month']='липень';
$arr['day']=27;
var_dump($arr);
*/
//Lesson 4. Task 7.
/*
//#1
$arr=[1,2,3,4,5];
$key1=0;
$key2=1;
var_dump($arr[$key1]+$arr[$key2]);
*/
//#2
/*
$arr =['a'=>1, 'b'=>2, 'c'=>3];
$key='a';
echo $arr[$key];
*/
//Lesson 4. Task 8.
//#1
/*
$test = 10;
if ($test>10){
    echo '+';
}else{
    echo '-';
}
*/
//#2
/*
$test = 10;
if ($test<10){
    echo '+';
}else{
    echo '-';
}
*/
//#3
/*
$test = 10;
if ($test>=10){
    echo '+';
}else{
    echo '-';
}
*/
//#4
/*
$test = 10;
if ($test<=10){
    echo '+';
}else{
    echo '-';
}
*/
//#5
/*
$test = 10;
if ($test==10){
    echo '+';
}else{
    echo '-';
}
*/
//#6
/*
$test = 10;
if ($test!=10){
    echo '+';
}else{
    echo '-';
}
*/
//#7
/*
$test1=1;
$test2=2;
if ($test2>$test1){
    echo '+';
}else{
    echo '-';
}
*/
//Lesson 4. Task 9.
/*
$te1=2;
$te2=3;
if ($te1!==$te2){
    echo '+';
}else{
    echo '-';
}
*/
//Lesson 4. Task 10.
//#1
/*
$num = 3;
if ($num>0 and $num<5){
    echo '+';
}else{
    echo '-';
}
*/
//#2
/*
$num = 15;
if ($num>=10 and $num<=20){
    echo '+';
}else{
    echo '-';
}
*/
//#3
/*
$num1 = 1;
$num2 = 4;
if ($num1<=1 and $num2>=3){
    echo '+';
}else{
    echo '-';
}
*/
//#4
/*
$num1=-10;
$num2=-10;
if ($num1 >=0 or $num2>=0){
    echo '+';
}else{
    echo '-';
}
*/
#9
/*
$num1=1;
if ($num1==0 or $num1==1){
    echo '+';
}else{
    echo '-';
}
*/
/*
$num = 3;
if (($num>0 and $num<5) or ($num>10 and $num<20)){
    echo '+';
}else{
    echo '-';
}
*/
//#13
/*
$num =3;
if (($num>5 and $num<10) or ($num==20)){
    echo '+';
}else{
    echo '-';
}
*/
//#14
/*
$num=3;
if (($num==9) or ($num>10 and $num<20) or ($num>20 and $num<30)){
    echo '+';
}else{
    echo '-';
}
*/
//Lesson 4. Task 11.
/*
$num1=5;
$num2=6;
if (!($num1>=0 or $num2 <= 10)){
    echo '+';
}else {
    echo '-';
}
*/
//Lesson 4. Task 12.
#1
/*
$test = true;
if ($test===true){
    echo 'True';
}else{
    echo 'False';
}
*/
#2
/*
$test = true;
if ($test===false){
    echo 'True';
}else{
    echo 'False';
}
*/
#3
/*
$test =1;
if ($test=true){
    echo '+';
}else {
    echo '-';
}
*/
#6
/*
$test =1;
if ($test!=true){
    echo '+';
}else {
    echo '-';
}
*/
#7
/*
$test ='';
if ($test==false){
    echo '+';
}else {
    echo '-';
}
*/
#8
/*
test;
if (test==true){
    echo '+';
}else{
    echo '-';
}
*/
/*
$test = true;
if (!$test){
    echo '+';
}else{
    echo '-';

}
*/
/*
$test = true;
if ($test!=true){
    echo '+';
}else{
    echo '-';
}
*/
#9
/*
$test  = true;
if ($test){
    echo '+';
}else{
    echo '-';
}
*/
#10
/*
$test = true;
if (!$test){
    echo '+';
}else{
    echo '-';
}
*/
#11
/*
$test   = true;
if (!$test){
    echo '+';
}else{
    echo '-';
}
*/
#12
/*
$test=true;
if ($test){
    echo '+';
}else{
    echo '-';
}
*/
#13
/*
$test=3;
if ($test){
    echo '+';
}else{
    echo '-';
}
*/
//Lesson 4. Task 13
#1
/*
$test = 0;
if (isset($test)){
    echo '+';
}else{
    echo '-';
}
*/
#2
/*
$test = null;
if (!isset($test)){
    echo '+';
}else{
    echo '-';
}
*/
#4
/*
if (!isset($test)){
    echo '+';
}else{
    echo '-';
}
*/
#7
/*
$test = false;
if (isset($test)){
    echo '+';
}else{
    echo '-';
}
*/
#8
/*
$arr = [1,2,3,4,5];

if (isset($arr[])){
    echo '+';
}else{
    echo '-';
}
*/
//Lesson 4. Task 14.
#1
/*
$test =0;

if (empty($test)){
    echo '+';
}else{
    echo '-';
}
*/
#2
/*
$test =-1;

if (empty($test)){
    echo '+';
}else{
    echo '-';
}
*/
#3
/*
$test ='';

if (empty($test)){
    echo '+';
}else{
    echo '-';
}
*/
//Lesson 4. Task 15.
#1
/*
$test =10;
if ($test=10){
    echo 'True';
}
*/
#2
/*
$test=5;
if ($test==0) echo 'true'; else echo 'false';
*/
#3
/*
$test = 0;
if ($test==0) echo 'true';
*/
//Lesson 4. Task 16.
#1
/*
$day =31;
if ($day<=10){
    echo '1 декада';
}
if ($day>10 and $day<=20){
    echo '2 декада';
}
if ($day>20 and $day<=31){
    echo '3 декада';
}
*/
#2
/*
$day =11;
if ($day<=10){
    echo '1 декада';
} elseif ($day>10 and $day<=20){
    echo '2 декада';
} elseif ($day>20 and $day<=31) {
    echo '3 декада';
}
*/
#3
/*
$day =44;
if ($day<=10){
    echo '1 декада';
} elseif ($day>10 and $day<=20){
    echo '2 декада';
} elseif ($day>20 and $day<=31) {
    echo '3 декада';
}else {
    echo 'Невірне значення $day';
}
*/
#4
/*
$age = 76;
$age2=(string)$age;
$sum = 0;
if ($age > 10){
    if ($age < 99){
        echo 'Потрапляє в діапазон 10 - 99';
        echo "<br>";
        for ($i = 0; $i < strlen($age2);$i++){
            $sum += $age2[$i];
        }
        echo "Вік: {$age}";
        echo "<br>";
        echo "Сумма: {$sum}";
        echo "<br>";
        if ($sum<=9){
            echo 'Сума цифр однозначне';
        }else{
            echo 'Сума цифр двузначне';
        }
    }else{
        echo 'Число більше 99';
    }
}else {
    echo 'Число менше 10';
}
*/
//Lesson 4. Task 17.

