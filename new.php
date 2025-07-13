<?php //starting tag


echo "hello";  //single line comment 
/* this is line
next line
next line
*/

//Create a variable in PHP: 

$y = "John"; //string
$x = 5; //integer

$int = 35; //integer

$booltrue = True; //boolean

$boolfalse = False; //Boolean


//starting string

$name= "Ananya";
$color= "black";
$country="1.2";
$fruit ="Apple";
$tutorial="PHP";
$language="server";
$state="Himachal pradesh";
$PHP="Hypertext preprocessor";
$file=".php";
$subject="english";

//starting echo
echo "$name<br>";
echo "$color<br>";
echo "$country<br>";
echo "$fruit<br>";
echo "$tutorial<br>";
echo "$state<br>";
echo "$PHP<br>";
echo "$file<br>";
echo "$subject<br>";



//starting integar 
$age=1.8;
$day=19;
$month=02;
$year=2007;
$money=2500;
$height=256;
$width=20;
$marks=368;
$price=1000;
$number=20;

//starting echo
echo "$age<br>";
echo "$day<br>";
echo "$month<br>";
echo "$year<br>";
echo "$money<br>";
echo "$height<br>";
echo "$width<br>";
echo "$marks<br>";
echo "$price<br>";
echo "$number<br>";





//string 
$stringvar="hello";
echo $stringvar;

//integar
$integarvar= 3;
echo $integarvar;

//float 
$floatvar = 1.5;
echo $floatvar;

//Boolean 
$boolvartrue = true;
echo $boolvartrue;
$boolvarfalse=false;
echo $boolvarfalse;
 
//Array
$arrayvar= array("apple", "mango", "orange", "watermalon","melon");
var_dump ($arrayvar);



// object

class Car{
    public $color;
    public $model;
    public function __construct($color,$model){
        $this->color = $color;
        $this->model = $model;
    }
    public function message(){
return "My car is a". $this ->color. " " .$this->model. "!";
    }
   
} 
$bestcar = new Car("red","volvo");
var_dump($bestcar);


//php numbers
$a = 7889;
$b = 443.4555;
$c = "283";

var_dump($a);
echo "<br>"
var_dump($b);
echo "<br>";




//php numbers bool
$a = 5748;
$b = 43.33333;
$c = "35";
$d = "hello";

var_dump(is_int($a));
echo "<br>";
var_dump(is_int($b));
echo "<br>";
var_dump(is_int($c));
echo "<br>";
var_dump(is_int($d));



?>










