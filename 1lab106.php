<?php
//to swap two numbers
echo '<hr>';
$a=10;
$b=20;
function swapnum($a,$b){
echo 'Before swapping<br>';
echo 'The value of a is '.$a.'<br>';
echo 'The value of b is '.$b.'<br>'.'<br>';
$temp=$a;
$a=$b;
$b=$temp;
echo 'After swapping<br>';
echo 'The value of a is'.$a.'<br>';
echo 'The value of b is '.$b.'<br>';}
swapnum($a,$b);
echo '<hr>';
//end of swap num

//armstrong number
$c=407;
function armstrong($c){
$num=$c;
$sum=0;
while($num!=0){
$rem=$num%10;
$sum+=pow($rem,strlen(strval($c)));
$num=($num/10);


}
if($sum==$c){
    echo 'the number is armstrong number'.'<br>';
}
else{
    echo 'the number is not armstrong number'.'<br>';
}
}
armstrong($c);
echo '<hr>';
//end of armstrong number

//reversing a number and palindrome

$num1 = 23456; 
function palindrome($num1){ 
$revnum = 0;  
while ($num1 > 1)  
{  
$rem1 = $num1 % 10;  
$revnum = ($revnum * 10) + $rem1;  
$num1 = ($num1 / 10);   
}  
echo "Reverse number of 23456 is: $revnum".'<br>';
if($revnum==$num1){
    echo 'the number is palindrome number'.'<br>';
}  
else{
    echo 'the number is not palindrome number'.'<br>';

}}
palindrome($num1);
echo '<hr>';
//end of reverse and palindrome number
//prime number
$num2=19;
function primecheck($num2){
$flag=true;
for($i=2;$i<$num2;$i++){
if($num2%$i==0){
    $flag=false;
}
}
if($flag){
    echo 'the number is prime number'.'<br>';
}
else{
    echo 'the number is not prime number'.'<br>';
}}
primecheck($num2);
echo '<hr>';
//end of prime number

//factorial
$num3=5;
function fact($num3){
    $temp=$num3;
    $factorial=1;
    for($j=$num3;$j>=1;$j--){
        $factorial*=$j;

    }
    echo 'the factorial is '.$factorial.'<br>';
}
fact($num3);

// end of factorial
echo '<hr>';

//fibonacci series 
$num4=10;
function fib($num4){
    $n1=0;
    $n2=1;
    echo 'the numbers in fibonacci series are<br>';
    echo $n1.'<br>';
    echo $n2.'<br>';
    for($k=0;$k<=$num4;$k++){

        $temp1=$n1;
$n3 =$n1+$n2;
echo $n3.'<br>';
$n1=$n2;
$n2=$n3;
    }
}
fib($num4);
//end of fibonacciseries
echo '<hr>';

//reverse a string
$str='welcometophp';
echo 'The string is '.$str.'<br>';
function reverse($str){
    $revstr=strrev($str);
    echo 'The string after reversing is '.$revstr.'<BR>';
}
reverse($str);
//end of reverse a string
?>
