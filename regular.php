<?php
//$str = 'ahb acb aeb aeeb adcb axeb';
//echo preg_replace('#a.b#', '!', $str);
//echo "<br>";
//$st = 'ahb acb aeb aeeb adcb axeb';
//echo preg_replace('#a..b#', '!', $st);
//echo "<br>";
//$strs = 'aa aba abba abbba abca abea';
//echo preg_replace('#ab+a#', '!', $strs);
//echo "<br>";
//$st2 = 'aa aba abba abbba abca abea';
//echo preg_replace('#ab*a#', '!', $st2);
//echo "<br>";
//$st4 = 'ab abab abab abababab abea';
//echo preg_replace('#(ab)+#', '!', $st4);
//echo "<br>";
//$st5 = 'a+x ax aax aaax';
//echo preg_replace('#a\+x#', '!', $st5); // екранування рядка
//echo "<br>";
//$ut = '23 2+3 2++3 2+++3 345 567';
//echo preg_replace('#2(\+)+3#', '!', $ut);
//echo "<br>";
//$ut2 = '23 2+3 2++3 2+++3 445 677';
//echo preg_replace('#2(\+)*3#', '!', $ut2);
//echo "<br>";
//$ut5 = 'aa aba abba abbba abbbba abbbbba';
//echo preg_replace( '#ab{1,3}a#', '!', $ut5);
//echo "<br>";
//$str4 = 'aba accca azzza wwwwa';
//echo preg_replace( '#a.+?a#', '!', $str4);
//echo "<br>";
//$str4 = 'aba accca azzza wwwwa';
//echo preg_replace( '#a.+?a#', '!', $str4);
//echo "<br>";
//$str44 = 'aa a1a a22a a333a a4444a a55555a aba aca';
//echo preg_replace( '#a\d*a#', '!', $str44);
//echo "<br>";
//$str454 = 'aXAa aeffa aGha aza ax23a a3sSa';
//echo preg_replace( '#a[a-z0-9]*a#', '!', $str454);
//echo "<br>";
//$str9 = 'ааа ббб єєє ззз ййй ААА БББ ЗЗЗ';
//echo preg_replace( '#[а-я]+#u', '!', $str9);
//echo "<br>";
//$stt = 'xaz x.z x3z x@z x$z xrz';
//echo preg_replace( '#x[^.^@^$]z#', '!', $stt);

//class Car
//{
//    const WHEELS = 4;
//    public $color;
//    public function test()
//    {
//        echo $this->color;
//        echo self::WHEELS;
//    }
//}
//
//class Bicycle
//{
//    const WHEELS = 2;
//
//    public function test()
//    {
//        echo self::WHEELS;
//    }
//}
//
//$car1 = new Car;
//$car1->color='white';
//$car1->test();
//$car2 = new Bicycle;
//$car2->test();

//class Engine {
//    public static $engine = 1;
//    public static function whatlslt(){
//        echo "В авто присутні різні типу двигунів";
//    }
//    public function test(){
//        echo self::$engine;
//        self::whatlslt();
//    }
//}
//echo Engine::$engine;
//Engine::whatlslt();
//$cars = new Engine();
//$cars->test();
echo "<br>";
$arrr = '[abc] {abc} abc (abc) [abc]';
echo preg_replace('#[\[\{\(]\w*[\]\)\}]#', '!', $arrr);
echo "<br>";
$clone = '553 aaa bbb';
echo preg_match('#\d{3,}#', $clone);
echo "<br>";
$reg = '#\d{3,}#';
$mas[] = 'aaa 123 bbb';
$mas[] = 'aaa 12345 bbb';
$mas[] = 'aaa 12x bbb';
$mas[] = 'aaa 12 bbb';
foreach ($mas as $value) {
    echo $value . ' ' . preg_match($reg, $value) . '<br>';
}
$val = '#^([a-z0-9-_]+)\.([a-z]{2,})$#';
$masi[] = 'site.ru';
$masi[] = 'site.com';
$masi[] = 'my-site.com';
$masi[] = 'my-cool-site.com';
$masi[] = 'my_site.com';
$masi[] = 'site123.com';
$masi[] = 'site.travel';
$masi[] = 'si$te.com';
$masi[] = 'site.r';
foreach ($masi as $values) {
    echo $values . ' ' . preg_match($val, $values) . '<br>';
//    echo "<pre>";
//    preg_match($val,$values,$result);
//    var_dump($result);
//    echo "</pre>";
//    echo $result[1];
}
echo "<br>";
$date = '2025-12-31';
preg_match('#([\d]+)-([\d]+)-([\d]+)#', $date, $ress);
echo "<pre>";
var_dump($ress);
echo "</pre>";
echo $ress[1] . '-' . $ress[2] . '-' . $ress[3];

$dates = '2023-10-29 2024-11-30 2025-12-31';
$com = '#(\d+)-(\d+)-(\d+)#';
preg_match_all($com, $dates, $results);
echo "<pre>";
var_dump($results);
echo "</pre>";

$tt = '12 34 56 78';
$ch = preg_replace('#([0-9])+([0-9])+#', '$2$1', $tt);
echo $ch;
echo "<br>";
$time = '12:59:59';
$form = '#(?<hour>\d{2}):(?<minute>\d{2}):(?<second>\d{2})#';
preg_match($form,$time,$match);
foreach ($match as $key=>$valss){
    if (is_numeric($key)){
        unset($match[$key]);
    }
}
echo "<pre>";
var_dump($match);
echo "</pre>";

$oo = 'func1() func2() func3()';
$ss = ('#func\d#');
preg_match_all($ss,$oo,$ff);
echo "<pre>";
print_r($ff);
echo "</pre>";