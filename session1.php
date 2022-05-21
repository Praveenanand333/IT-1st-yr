<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
if(isset($_SESSION['favcolor'])){
    print('sessionalive <br>');
}
echo "Session variables are set.";
echo '<br>';
echo $_SESSION['favcolor'];
session_unset();
if(!isset($_SESSION['favcolor'])){
    echo '<br>session unset';
}
?>

</body>
</html>