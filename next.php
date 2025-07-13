<?php
//string
$text = "hlw";

//integar
$intvar = 2;

//float 
$floatvar = 1.3;

//boolean true
$booltrue = true;

//boolean false 
$boolfalse = false;

//city variable
$varcity = "Mandi";
echo $varcity;

// favorite color variable
$varcolor = "black";
echo $varcolor;


//function
function greet(){
    echo "cmnt";
}
//call function 
    greet();



    //second function
    function showMessage(){
   echo "old";
}
//call function
showmessage();

//define global
$globalvar="new";

//function
function mycmnt(){
    global $globalvar;
    echo $globalvar;

}
//call function
mycmnt();

//function for local
function mymsg(){
    global $varlocal;
    //local
 $varlocal="good";
echo $varlocal;
}
//call function 
mymsg();
?>