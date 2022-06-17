<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Tables</title>
    <style>
        body{
            font-family:sans-serif;
        }
        table,td,th{
            border:2px solid black;
            padding:10px;
            text-align:center;
            
        }
        table{
            margin:auto;
            border-collapse:collapse;
            width:50vw;
        }
        h1{
            text-align:center;
        }
    </style>
</head>
<body>
    <h1>Multiplication tables of numbers from 1 to 10</h1>
    <?php 
        define('num1',11);
        define('num2',11);
        $i = 1;
        while($i < num1){
            echo "<table><caption><strong>Multiplication table of {$i}</strong></caption><tr><th>S.No.</th><th>Multiples</th></tr>";
            $j = 1;
            while($j < num2){
                $m = $i*$j;
                echo "<tr><td>{$j}</td><td>{$i} x {$j} = {$m}</td></tr>";
                $j++;
            }
            echo "</table><br><br>";
            $i++;
        }
    ?>
</html>