<?php

$fruits = [
    'ananas',
    'banane',
    'cerise'
];

foreach ($fruits as $key => $value){
    echo "{$key}: {$value}";
    echo '<br>';
}

$legume = [
    'a' => 'artichaut',
    'b' => 'brocoli',
    'c' => 'carotte'
];

foreach ($legume as $key => $value){
    echo "{$key}: {$value}";
    echo "<br>";
}