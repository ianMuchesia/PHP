<?php 
function registerUser(){
   echo 'User Registered'; 
}

registerUser();


//block scope and global scope ,  aglobal scope can be used in this style

$globalVariable = 100;
function globalScope(){
    global $globalVariable;
    echo $globalVariable;
}


globalScope();


function argument($args){
    echo $args;
}

argument('ian');


function sum ($n1 , $n2){
    return $n1 + $n2;
}
echo sum(5,5);

$subtract = function($n1, $n2){
    if($n1<$n2){
        return $n2-$n1;
    }
    return $n1-$n2;
};


echo $subtract(12,10);


$Multiply = fn($n1, $n2)=>$n1 * $n2;
echo $Multiply(12,10);
 


