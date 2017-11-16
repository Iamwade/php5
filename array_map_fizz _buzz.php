<?php

//добавляем файл в масив

$array = file("counter.txt");

// масив получается строчками . каждую строчку тоже добавляем в масив и из етого масива перем 3 наши числа


$kaunt = count($array) ;
array_map(function ($b) use ($kaunt, $array) {  
    $a1 = $array[$b];                      // строка равна $i елементу масива
    $a1 = explode(" " , $a1);              // разбиваем строку
    $fizz = $a1[0];                        // переменная $fizz
    $buzz = $a1[1];                        // переменная $buzz
    $last_number = $a1[2];                 // $last_number

    array_map(function ($a) use ($fizz, $buzz, $last_number) {
    if (($a % $fizz == 0) && ($a % $buzz == 0)) { print("FB ") ; }
    elseif ($a % $fizz == 0) { print("F ") ; }
    elseif ($a % $buzz == 0) { print("B ") ; }
    else {print "$a ";};
}, range(1, $last_number)); echo "\n";
}, range(0, $kaunt-1));