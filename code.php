<?php
//lesson 3. Task 1
//echo "привіт світ";
//lesson 3. Task 2
//echo '12345'; // вивід 12345
//echo 12345;
//var_dump('12345'); // вивід 12345 і ще деяку корисну інфу
//lesson 3. Task 3
//$a = 10;
//$a = 20;
//echo $a;
//lesson 3. Task 4;
/*
$a = 1+2;
echo $a;
$b = 3-2;
echo $b;
$c = 3*2;
echo $c;
$d = 4/2;
echo $d;
$h = 1+2+3;
echo $h;
*/
//Lesson 3. Task 5.
//#1
/*
$a = 10;
$b = 2;
echo $a+$b;
echo $a-$b;
echo $a*$b;
echo $a/$b;
*/
//#2
/*
$c = 10;
$d = 5;
$result = $c+$d;
echo $result;
*/
//#3
/*
$a = 1;
$b = 2;
$c = 3;
echo $a+$b+$c;
*/
//#4
/*
$a=10;
$b=5;
$c=$a-$b;
echo $c;
$d=7;
$result=$c*$d;
echo $result;
*/
//Lesson 3. Task 6.
/*
//#1
$a = 5+5*3; // вивід 20
echo $a;
//#2
$a = 5+5*3+3; // вивід 23
echo $a;
//#3
$a = 8/2+2; // вивід 6
echo $a;
//#4
$a = 8+2/2; // вивід 9
echo $a;
//#5
$a = 8/2*2; // вивід 8
echo $a;
//#6
$a = 8*4/2/2; // вивід 8
echo $a;
//#7
$a = (2+3)*(2+3); // вивід 25
echo $a;
//#8
$a = (2+3)*2+3; // вивід 13
echo $a;
//#9
$a = 2*(2+4*(3+1)); // вивід 36
echo $a;
//#10
$a = 2*8/4; // вивід 4
echo $a;
//#11
$a = (2*8)/4; // вивід 4
echo $a;
//#12
$a = 2*(8/4); // вивід 4
echo $a;
*/
//Lesson 3. Task 7.
/*
$a =1.5;
$b =0.75;
echo $a+$b;
*/
//Lesson 3. Task 8.
/*
$a = -100;
echo $a;
$a = 23;
echo -$a;
*/
//Lesson 3. Task 9.
/*
$a=10;
$b=3;
echo $a%$b;
*/
//Lesson 3. Task 10.
/*
$a = 2;
echo $a ** 10;
$a =3*2**3; // Вивід 24
$a =(3*2)**3;// Вивід 216
$a =3*2**(3+1); // Вивід 48
$a =2**3*3; // Вивід 24
$a =3*2**3*3; // Вивід 72
*/
//Lesson 3. Task 11.
/*
$str = 'hello';
echo $str;
$s='abc';
$t='def ';
echo $s . $t;
$u = 'hello';
$p = 'world ';
echo $u . ' ' . $p;
$so = 'green';
echo strlen($so); // вивід кількість символів
$gt = 'тест';
echo mb_strlen($gt); // вивід кількість символів кирилиця
*/
//Lesson 3. Task 12.
/*
$str = 'Hello';
echo '<i>' . $str . '</i>';
$num = '<br>1 <br>2 <br>3 <br>4 <br>5 <br>6 <br>7 <br>8 <br>9';
echo $num;

$img = 'https://klever.blog/types-of-it-companies/';
$txt = 'image';
echo '<br>' . '<a href="' . $img . '">' . $txt . '</a>';

$image = '<img src="prof-test.png">';
echo '<br>' . $image . '<br>';

$input = '<input type="text" placeholder="first name">';
echo '<br>' . $input;

$txtar = '<textarea rows="4" cols="40" placeholder="some text">';
echo '<br>' . $txtar;
*/
//Lesson 3. Task 13.
/*
$old = true;
var_dump($old);
$ow = false;
var_dump($ow);
*/
//Lesson 3. Task 14.
/*
$sd = null;
var_dump($sd);
var_dump($sw);
*/
//Lesson 3. Task 15.
/*
$a = '1';
$v = '2';
echo $a + $v + '3'; //вивід 6
*/
//Lesson 3. Task 16.
/*
$test = (int)'12345';
var_dump($test);
//var_dump((int)$test);
$tr = (float)'12.345';
var_dump($tr);
$tr = (int)'12.345';
var_dump($tr);
$ft = (string) 12345;
var_dump($ft);
$uo = (float) 12.345;
var_dump($uo);
*/
//Lesson 3. Task 17.
/*
$rt = 'abcde';
echo $rt [0] . $rt [2] . $rt [4];
$ui = 'abcde';
$ui [0] = 'e';
$ui [1] = 'd';
$ui [2] = 'c';
$ui [3] = 'b';
$ui [4] = 'a';
echo $ui;

$str = 'abcde';
$num = 4;
echo $str[$num];

$hp = 'abcde';
$last = strlen($hp) -1;
echo $hp[$last];

$pos = 'hello';
echo $pos[strlen($pos)-2];

$rt = 'friend';
echo $rt[strlen($rt)-3];

$numb = '12345';
echo $numb[0]+$numb[1]+$numb[2]+$numb[3]+$numb[4];

$io = 12345;
$ios = (string) $io;
echo $ios[0]+$ios[1]+$ios[2]+$ios[3]+$ios[4];
echo $ios[0]*$ios[1]*$ios[2]*$ios[3]*$ios[4];
$ios[0] = 5;
$ios[1] = 4;
$ios[2] = 3;
$ios[3] = 2;
$ios[4] = 1;
echo $ios;
*/
//Lesson 3. Task 18.
/*
$num = 1;
$num = $num+1;
$num = $num+1;
echo $num;
*/
/*
$nu = 47;
$nu +=7;
$nu -=18;
$nu *= 10;
$nu /= 15;
echo $nu;
$str = 'a';
$str .= 'b';
$str .= 'c';
echo $str;
*/
//Lesson 3. Task 19.
