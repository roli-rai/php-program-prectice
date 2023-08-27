<?php

 $n=3;
 $flag=false;
for ($i=2; $i<$n; $i++)
{
 if($n%$i==0){
    $flag=true;
 }
}
if($flag){
    echo "not a prime number";
      
}
else{
echo "it is prime number";
}
?>