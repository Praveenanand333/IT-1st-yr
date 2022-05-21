<?php
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
setcookie('anand','333', time() + (86400 * 30));
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name];
}
echo '<br>';
echo time();
// setcookie($cookie_name, $cookie_value, time() -(3600));
// setcookie('anand','333', time() - (3600));
if(isset($_COOKIE[$cookie_name])){
  echo '<br>cookie preseent';

}
else{
  echo '<br>cookie absent<br>';
}
echo count($_COOKIE);
if(count($_COOKIE) > 0) {
  echo "<br>Cookies are enabled.";
} else {
  echo "<br>Cookies are disabled.<br>";
}
echo '<br>';
// There is a default cookie set by php which is PHPSESSID 
foreach ($_COOKIE as $key=>$val)
  {
    echo $key.' is '.$val."<br>\n";
  }
?>

</body>
</html>
