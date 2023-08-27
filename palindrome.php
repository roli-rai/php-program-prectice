<?php
$n=121;
 $sum=0;
 $c=$n;
 while ($n>0) {
   # echo $n."<br>"; 
     $mod=$n%10;

     $sum=$sum*10+$mod;
    # echo $sum."<br>";
     $n=floor($n/10);
 }
# echo $sum;
if ($c==$sum) {
    echo "$c is palindrome ";
}
    else {
        echo "$c is not palindrome ";
    }
    
    

?>