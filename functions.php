<?php 
//variable scope - 
//global 
//local

//defining global cope of a var

$globalvariables = 'My name is mohit';


//user define function:
function message(){
global $globalvariables;

echo $globalvariables;


}

//echo $globalvariables;


//call of function
message();


$globalvar= 'hello';

//function
function msg(){
global $globalvar;

echo $globalvar;

}

//call function
msg();

//global scope
$main="variable";

function cmnt(){
    global $main;

    echo $main;
}

//call function 
cmnt();

$variable ="note";

function myfirstmessage(){
    global $variable;

    echo $variable;

}
   myfirstmessage();

?>





















