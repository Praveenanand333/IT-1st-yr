<?php
$username=$_REQUEST['username'];
echo 'The entered username is '.$username.'<br>';
$favlanguage=$_REQUEST['fav_language'];
echo 'Your favourite language is '.$favlanguage.'<br>';
$car=$_REQUEST['cars'];
echo 'The car you selected is '.$car.'<br>';
if(isset($_REQUEST['vehicle1'])){
    $vehicle1=$_REQUEST['vehicle1'];
    echo 'You have '.$vehicle1.'<br>';

}
if(isset($_REQUEST['vehicle2'])){
    $vehicle1=$_REQUEST['vehicle2'];
    echo 'You have '.$vehicle2.'<br>';
    
}
if(isset($_REQUEST['vehicle3'])){
    $vehicle1=$_REQUEST['vehicle3'];
    echo 'You have '.$vehicle3.'<br>';
    
}
?>