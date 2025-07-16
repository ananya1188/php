<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="para">
        <h1>Calculator</h1>
        <form method="POST">
<div class="input-group input-group-sm mb-3">
  <span class="input-group-text" >Number1</span>
  <input name="nbr1" type="text" class="form-control" >
</div>
            <div class="input-group input-group-sm mb-3">
  <span class="input-group-text" >Number2</span>
  <input name="nbr2" type="text"  class="form-control" >
</div>
        <div class="input-group input-group-sm mb-3">
  <span class="input-group-text" >operator</span>
  <input name="operator" type="text"  class="form-control" >
</div>

<input type="submit" value="calculate" name="calculate"/>
</form>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</html>


<?php





if (isset($_POST['calculate'])) {
$nbr1 = $_POST['nbr1'];
 $nbr2 = $_POST['nbr2'];

  //operator
 $operator = $_POST['operator'];

  switch ($operator) {
  case "+":
   $result = $nbr1 + $nbr2;
 echo $result;
    break;
  case "-":
         $result = $nbr1 - $nbr2;
 echo $result;
    break;
  case "*":
            $result = $nbr1 * $nbr2;
 echo $result;
    break;
    case "/":
        $result = $nbr1 / $nbr2;
        echo $result;
        break;
        
        case "%":
            $result = $nbr1 % $nbr2;
            echo $result;
            break;

            case "**":
                $result = $nbr1 ** $nbr2;
                echo $result;
                break;

  default:
    echo "Invalid Operator";
  }
  
}


?>