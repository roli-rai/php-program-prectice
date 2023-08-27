<?php
$n=4058;
$sum=0;
$new=$n;
function fact($n){
    $fact=1;
for($i=$n; $i>0; $i--){
    $fact=$fact*$i;

    }
    return $fact;

 }
while ($n>0) {
    $mod=$n%10;
    $que=fact($mod);
    $sum=$sum+$que;
    $n=floor($n/10);
}
 if($sum==$new){
    echo "  strong no";
 }
 else
 {
    echo "not a  strong no";
 }
?>