<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<?php
include 'calc.inc.php';


if($_SERVER['REQUEST_METHOD']=='POST'){

$firstNumber=$_POST['firstNumber'];
$secondNumber=$_POST['secondNumber'];
$operator=$_POST['operator'];


$obj = new Calc($firstNumber,$secondNumber,$operator);
}
?>



<div style="display: flex; justify-content: center; border: 1px solid black; padding: 10px;">
<h1>THE RESULT IS :</h1>
<h1 style="color:red"><?php  echo $obj->calcMethod();?></h1>
</div>








</body>
</html>








