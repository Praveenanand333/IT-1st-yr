<?php
$name=$_REQUEST['name'];
echo 'Your name is'. $name.'<br>';
$rollno=$_REQUEST['rollno'];
echo 'Your rollno is '.$rollno.'<br>';
$dob=$_REQUEST['dob'];
echo 'Your date of birth is '.$dob.'<br>';
$bloodgroup=$_REQUEST['bloodgrp'];
echo 'Your blood group is '.$bloodgroup.'<br>';
$number =$_REQUEST['number'];
echo 'Your mobile number is '.$number.'<br>';
$fathersname=$_REQUEST['fathersname'];
echo 'Your father name is '.$fathersname.'<br>';
$mothersname=$_REQUEST['mothersname'];
echo 'Your mother name is '.$mothersname.'<br>';
$address=$_REQUEST['address'];
echo 'Your address is '.$address.'<br>';
$willingness=$_REQUEST['willingness'];
if($willingness=='yes'){
    echo 'you are willing to enroll'.'<br>';

}
else{
    echo 'you are not willing to enroll'.'<br>';
}

?>