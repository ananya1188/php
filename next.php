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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <div class= "container">
        <div class="para">
            <h1>calculator</h1>
            <form method= "post">
            <div class="input-group input-group-sm mb-3">
                <span class="input-group-text">Number1</span>
                <input name= "nmbr1" type ="text" class= "form-control">
</div>
<div class="input-group input-group-sm mb-3">
    <span class= "input-group-text">Number2</span>
    <input name= "nmbr2" type="text" class="form-control">
</div>

<div class="input-group input-group-sm mb-3">
    <span class="input-group-text">operator</span>
    <input name="operator" type= "text" class="form-control">
</div>
<input type ="submit" value= "calculate" name ="calculate">
</form>

</div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</html>

<?php
if(isset($_POST["calculate"])){
    $nmbr1= $_POST["nmbr1"];
    $nmbr2= $_POST["nmbr2"];
    $operator=$_POST["operator"];
    
    switch($operator){
case "+":
    $result = $nmbr1 +$nmbr2;
    echo '<div class= "container">';
    echo $result;
    echo "</div>";
   break;

    case "-":
        $result = $nmbr1 - $nmbr2;
        echo '<div class= "container">';
    echo $result;
    echo "</div>";
    break;

 case "*":
        $result = $nmbr1 * $nmbr2;
        echo '<div class= "container">';
    echo $result;
    echo "</div>";
   break;

 case "/":
        $result = $nmbr1 / $nmbr2;
        echo '<div class= "container">';
    echo $result;
    echo "</div>";
   break;

 case "%":
        $result = $nmbr1 % $nmbr2;
        echo '<div class="container">';
    echo $result;
    echo "</div>";
   break;

 case "**":
        $result = $nmbr1 ** $nmbr2;
         echo '<div class="container">';
    echo $result;
    echo "</div>";
   break;
default:
 echo '<div class="container">';
echo "error";
echo "</div>";

 }
}
?>