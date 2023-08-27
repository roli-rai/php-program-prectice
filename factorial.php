<?php
function fact($n){
    $fact=1;
for($i=$n; $i>0; $i--){
    $fact=$fact*$i;

    }
    return $fact;

 }
 echo "<br>factorial of 6 is=" .fact(6);








/*$a=5;
$fact=1;
for($i=$a; $i>0; $i--){
    $fact=$fact*$i;
}
    echo "<br>factorial of $a is=" .$fact;*/
?>