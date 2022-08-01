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

