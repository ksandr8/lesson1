<?php
function kvadrat($chislo)
{
    $kv = pow($chislo, 2);
    return $kv;
}

function sum($a, $b)
{
    return $a + $b;
}

function three($c, $d, $e)
{
    $tr = ($c - $d) / $e;
    return $tr;
}

function diap($a)
{
    switch ($a) {
        case 1:
            echo 'Понеділок';
            break;
        case 2:
            echo 'Вівторок';
            break;
        case 3:
            echo 'Середа';
            break;
        case 4:
            echo 'Четвер';
            break;
        case 5:
            echo 'П\'ятниця';
            break;
        case 6:
            echo 'Субота';
            break;
        case 7:
            echo 'Неділя';
            break;
        default:
            echo 'немає дня';
    }
}

function gorod($y)
{
    $cit = strip_tags($y);
    echo "Ваше місто $cit";
}

function user($name, $age, $text)
{
    $n = strip_tags($name);
    $t = strip_tags($text);
    echo "Ваше імя: $n Ваш вік: $age Ваш текст: $t";
}