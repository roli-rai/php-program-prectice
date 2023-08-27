<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php 
$a=50; #hardcode value 
$b=2;
$sum=$a+$b;
$sub=$a-$b;
$multi=$a*$b;
$devide=$a/$b;
   echo " addition no. = $sum<br>"; 
    echo " subtraction no. = $sub<br>"; 
echo " multifunction no. = $multi<br>"; 
 echo " devides no. = $devide<br>"; 
?>

 
<form>
<H1>Enter first no.</H1>
 
<input type="number"name="number1"/><br>
<H1>Enter second no.</H1>

<input type="number"name="number2"/><br>
 
<input type="submit"name="submit"  value="Add"><br>
</form>
<?php
if(isset($_POST['submit']))
{
    $number1=$_POST[number1];
    $number2=$_POST[number2];
     
    $sum=$number1+$number2;
    echo "the sum of $number1 and $number2 is:".$sum;
}

?>
 
</body>
</html>