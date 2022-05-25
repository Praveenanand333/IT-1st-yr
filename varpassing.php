
<html>
    <body>
        <?php
        $firstname="praveen";
        $lastname="anand";?>
    <a href="test2.php?firstname=<?php echo $firstname;?>&lastname=<?php echo $lastname;?>">click to pass value in next page</a>
    

    </body>
</html>
<!-- test2.php
<?php
$a =$_GET['firstname'];
echo $a;
$b =$_GET['lastname'];
echo $a;
echo '<br>';
echo $b;
?> -->
