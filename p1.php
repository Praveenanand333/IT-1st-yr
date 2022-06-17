<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
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
    <h1>Login</h1>
    <div class='dv'>
        <h2>Enter your credentials here</h2>
        <form  method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <input name="user" type="text" placeholder="Username"><br><br>
            <input name="pass" type="password" placeholder="password"><br><br>
            <input type="submit" value="Submit">
        </form>
    </div>
    <?php
    echo "<br><br>";
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if($_POST['user'] == ''){
            echo "<div class='dv'>";
            echo "Username cannot be empty";
            echo "</div>";
        }
        else if($_POST['pass'] == ''){ 
            echo "<div class='dv'>";
            echo "Password cannot be empty";
            echo "</div>";
        }
        else{
            echo "<div class='dv'>";
            echo "<br>Entered information<br>";
            echo "Username : {$_POST['user']}<br>";
            echo "Password : {$_POST['pass']}";
            echo "</div>";
    }
        }
        
    ?>
    
</body>
</html>