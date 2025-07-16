<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcultor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
           <h1>Calcultor</h1>
           
<form method="POST">
<div class="input-group input-group-sm mb-3">
  <span class="input-group-text" >Number1</span>
  <input name="nbr1" type="text" class="form-control" >
</div>
            <div class="input-group input-group-sm mb-3">
  <span class="input-group-text" >Number2</span>
  <input name="nbr2" type="text"  class="form-control" >
</div>
<input type="submit" name="add" value="+">
<input type="submit" name="subtract" value="-">
<input type="submit" name="multiply" value="*">
<input type="submit" name="division" value="/">
<input type="submit" name="modulus" value="%">
</form>
        </div>
    </div>




</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</html>


<?php 

if (isset($_POST['add'])) {
 $nbr1 = $_POST['nbr1'];
 $nbr2 = $_POST['nbr2'];
 $result = $nbr1 + $nbr2;
 echo '<div class="container">';
echo $result;
echo '</div>';
}elseif (isset($_POST['subtract'])) {
 $nbr1 = $_POST['nbr1'];
 $nbr2 = $_POST['nbr2'];
 $result = $nbr1 - $nbr2;
 echo '<div class="container">';
echo $result;
echo '</div>';
}elseif (isset($_POST['multiply'])) {
 $nbr1 = $_POST['nbr1'];
 $nbr2 = $_POST['nbr2'];
 $result = $nbr1 * $nbr2;
echo '<div class="container">';
echo $result;
echo '</div>';
}
elseif(isset($_POST["division"])){
$nbr1 = $_POST["nbr1"];
$nbr2 = $_POST["nbr2"];
$result = $nbr1 / $nbr2;
echo '<div class="container">';
echo $result;
echo "</div>";
}
elseif(isset($_POST["modulus"])){
    $nbr1 = $_POST["nbr1"];
    $nbr2 = $_POST["nbr2"]; 
    $result = $nbr1 % $nbr2;
    echo '<div class = "container">';
    echo $result;
    echo "</div>" ;
}

?>
function calculate(){
 $nb1 = $_POST['nbr1'];
 $nb2 = $_POST['nbr2'];

  //operator
 $operator = $_POST['operator'];

  switch ($operator) {
  case "+":
   $result = $nb1 + $nb2;
 echo $result;
    break;
  case "-":
         $result = $nb1 - $nb2;
 echo $result;
    break;
  case "*":
            $result = $nb1 * $nb2;
 echo $result;
    break;
  default:
    echo "Invalid Operator";
  }


}


if (isset($_POST['calculate'])) {

   calculate(); 
}
