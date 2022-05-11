<?php
$a=10;
$b=20;
echo $a+$b;
echo "<br>";
function calc(int $a,int $b){
echo "the sum is " ,$a+$b,"<br>";
echo "the difference is", $a-$b,"<br>";
echo "the product is  " ,$a*$b,"<br>";
echo "the quotient is ",$a/$b,"<br>";
}
calc(5,6)
?>
