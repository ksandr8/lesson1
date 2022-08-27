<?php
/*
$ch1= 1;
$ch2= 100;
$sum = 0;
for ($i = $ch1; $i <= $ch2; $i++){
    echo "\n";
    //echo $i;
    //if ($i%2==0){
    //echo $i;
    $sum+=$i;
  //}
}
echo $sum;
*/
/*
$ch1= 1;
$sum = 0;
for ($i = 0; $i <=$ch1;$i++) {
    $sum += $ch2;
}
echo "Сумма: {$sum}";
*/

//Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'.
//С помощью цикла foreach выведите эти слова в столбик.
/*
$a = ['html', 'css', 'php', 'js', 'jq'];
foreach ($a as $key=>$value){
    $key++;
    echo $key . " = " . $value;
    echo "<br>";
}
*/

//Дан массив с элементами 10, 20, 15, 17, 24, 35.
//Найдите сумму элементов этого массива. Запишите ее в переменную $result.
/*
$a = [10, 20, 15, 17, 24, 35];
$result = 0;
foreach ($a as $value) {
    $result += $value;
}
echo $result;
*/

//Дан массив ['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой']  . С помощью цикла
//foreach выведите на экран столбец ключей и элементов в формате 'green - зеленый'.
/*
$a = ['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'];
foreach ($a as $key=>$value) {
    echo $key ." - " . $value;
    echo "<br>";
}
*/
//Ввыести: {Имя}  возраст : {возраст}
/*
$array = [
    [
        'name' => 'Alex',
        'age' => '25',
    ],
    [
        'name' => 'Jack',
        'age' => '38',
    ],
];
foreach ($array as $value) {
    echo "Name: {$value['name']} Age: {$value['age']}";
    echo "<br>";
}
*/
/*
$a = 0;
$arrA = [];
$arrB = [];
while ($a <= 100) {
    if ($a % 2 == 0) {
        $arrA[] = $a;
    } else {
        $arrB[] = $a;
    }
    $a++;
}
var_dump($arrA);
echo "<br>";
var_dump($arrB);
*/
/*
Дано число $num=1000
    . Делите его на 2 столько раз, пока результат деления не станет меньше 50. Какое число получится? Посчитайте количество итераций, необходимых для этого (итерация
    - это проход цикла). Решите задачу сначала через цикл while, а потом через цикл for.
*/
/*
$num = 1000;
$i = 0;
while ($num > 50) {
    $num = $num / 2;
    $i++;
}
echo "Кількість ітерацій - $i <br> Число - $num";
*/
/*
$num = 1000;
for ($i = 0; $num > 50; $i++) {
    $num = $num / 2;
}
echo "Число - $num  <br> Кількість ітерацій - $i ";
*/
/*
$products = [];
$mobilePhone = [];
$mobilePhone = [
    'name' => 'iphone 13 pro',
    'price' => '1000$',
    'src' => 'https://applehome.te.ua/wp-content/uploads/2021/09/iphone-13-pro-silver-select.png'
];
$mobilePhone1 = [
    'name' => 'iphone 13',
    'price' => '600$',
    'src' => 'https://applehome.te.ua/wp-content/uploads/2021/09/iphone-13-pro-silver-select.png'
];
$products[] = $mobilePhone;
$products[] = $mobilePhone1;

foreach ($products as $product) {
    echo "<div class=block style=\"height:100px; width:400px; margin:20px; background-color:aliceblue;padding:25px;border:2mm ridge rgba(86, 89, 252, 1);\">";
    echo "<h1>{$product['name']}</h1>";
    echo "<h2>{$product['price']}</h2>";
    echo "<img src={$product['src']} width=350 height=450 ";
    echo "</div>";
}
*/



