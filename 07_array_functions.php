<?php
//working with arrays


$people = ["Ian", "ken", "Ann", "able", "oopsie"];

//length
echo count($people);

//search 
var_dump(in_array('ken', $people));
//Var dump prints the data type

//add to array
$people[] = 'Carol';

print_r($people);

array_push($people , 'anold', 'grace');
array_unshift($people , 'oopsie');//add to first, becomes first Item




//remove from Array
array_pop($people);//removes the last one

array_shift($people);//removes the first one

unset($people[2]); //removes a specific item , plus also the index

//split into two chunks 

$chunked_array = array_chunk($people, 2);

//print_r($chunked_array);




//print_r($people);


//concatenate arrays


$arr1 = [ 1,2.3];
$arr2 = [ 4,5,6];

$arr3 = array_merge($arr1, $arr2);


//spread operator 
$arr4 = [...$arr1, ...$arr2];


//combine arrays
$arrCombine = [4,1];
$arr5 = array_combine($arr1,$arrCombine);//they must havethe same number of elements .
//they make something of some sort of object 
//first array make key , 2nd make Values
print_r($arr5);


$keys = array_keys($arr5);

print_r($keys);

$flipped = array_flip($arr5);

print_r($flipped);


$numbers = range(1, 20);
print_r($numbers);


$newNumbers = array_map(function($number){
    return "Number $number";
}, $numbers);
print_r($newNumbers);



$lessThan10 = array_filter($numbers, fn($number)=>$number > 10);

print_r($lessThan10);


$sum = array_reduce($numbers, fn($carry, $number)=>$carry + $number);

var_dump($sum);