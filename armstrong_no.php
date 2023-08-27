<?php
$n=407;
$sum=0;
$new=$n;
while ($n>0) {
    $mod=$n%10;
    $que=$mod*$mod*$mod;
    $sum=$sum+$que;
    $n=floor($n/10);
}
 if($sum==$new){
    echo " armstrong no";
 }
 else
 {
    echo "not a armstrong no";
 }
?>