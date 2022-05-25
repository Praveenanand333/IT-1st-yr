
<html>
    <body>
        <?php
        $firstname="praveen";?>
    <a href="test2.php?firstname=<?php echo $firstname;?>">click to pass value in next page</a>
    

    </body>
</html>
<!-- test2.php
<?php
$a =$_GET['firstname'];
echo $a;
?> -->