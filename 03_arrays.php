<?php
//simple  Array 
$numbers =  [ 1,2,3,4,2,5,8];
$fruits = array( 'apple', 'orange', 'pear');
//print_r($fruits);


//Associative Array

$colors = [
    1=> 'red',
    4=> 'blue',
    6=> 'green'
];

echo $colors[4];


$hex = [
    'red'=> '#f00'
];

echo $hex['red'];

//Like  a Javascript Object or  A Python  Dictionary




$people = [
    [
        1=> 'red',
        4=> 'blue',
        6=> 'green'
    ],
    [
        1=> 'red',
        4=> 'blue',
        6=> 'green'
    ],
    [
        1=> 'red',
        4=> 'blue',
        6=> 'green'
    ],[
        'red'=> 1,
    ]
    ];


    echo $people[3]['red'];


    var_dump(json_encode($people));