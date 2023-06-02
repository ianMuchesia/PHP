<?php



for ($x= 0; $x<=10; $x++){
    echo$x. '<br>';
}


$x = 10;

while($x>0){
    echo $x. '<br>';
    $x--;
}


//For Each Loop

$posts = [ "First Reading",  "Second Reading",  "Third Reading"];

for($i = 0 ; $i<count($posts); $i++)
{
    echo $posts[$i].'<br>';
}


foreach($posts as $post){
    echo $post . '<br>';
}

foreach($posts as $index => $post){
    echo $index . ':' . $post . '<br>';
}


//Associative Array


$people = [
    'first_name'=> 'msodoki',
    'last_name'=>  'mwanza',
    'email' => 'msodoki@mwanza.com'
];

foreach($people as $key => $value){
    echo $key . ':'. $value . '<br/>';
}