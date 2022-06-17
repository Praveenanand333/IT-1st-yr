<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome</title>
    <style>
        body{
            font-family:sans-serif;
        }
        .dv{
            border:2px solid black;
            margin:auto;
            width:20vw;
            padding:1vw 2vw;
            background-color:wheat;
        }
        h1,h2{
            text-align:center;
            color:red;
        }
        h2{
            margin-top:0.5vh;
        }
    </style>
</head>
<body>
<h1>Palindrome Checker</h1>
    <div class='dv'>
        <h2>Enter a string</h2>
        <form  method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <input name="str" type="text" placeholder="String"><br><br>
            <input type="submit" value="Submit">
        </form>
    </div>
    <?php
    echo "<br><br>";
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
           $str = $_POST['str'];
           $sp = 0;
           $str1 = "";
           foreach(str_split($str) as $i){
                if($i == ' '){
                    $sp += 1;
                }
                $str1 .= strtolower($i);
           }
           $str2 = strrev($str1);
           if($sp == 0 and $str2 == $str1){
            echo "<div class='dv'>";
            echo "One Word palindrome";
            echo "</div>";
           }
           else if($str2 == $str1){
            echo "<div class='dv'>";
            echo "Phrase palindrome with spaces";
            echo "</div>";
           }
           else{
            $str3 = "";
            foreach(str_split($str1) as $i){
                if($i == ' '){
                   continue;
                }
                $str3 .= strtolower($i);
           }
           $str4 = "";
            foreach(str_split($str2) as $i){
                if($i == ' '){
                   continue;
                }
                $str4 .= strtolower($i);
           }
           if($str3 == $str4){
            echo "<div class='dv'>";
            echo "Phrase palindrome without spaces";
            echo "</div>";
           }
           else{
            echo "<div class='dv'>";
            echo "Not a palindrome";
            echo "</div>";
           }
           
           }
        }
        
    ?>
</body>
</html>