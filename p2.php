<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorting</title>
    <style>
        body{
            width:50vw;
            margin:auto;
            border:2px solid black;
            padding:2vw 4vw;
            font-family:sans-serif;
            margin-top:20vh;
        }
        h1,h1{
            text-align:center;
        }
    </style>
</head>
<body>
    <h1>Sorting Combo boxes</h1>
    <?php 
        $arr = array('Large','Small','Medium');
        $arr2 = array('Red','Maroon','Black','Green','Blue');
        $arr3 = array('Ascending','Descending');
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if($_POST['sl1'] == 'Ascending'){
                sort($arr);
                sort($arr2);
                sort($arr3);
            }
            if($_POST['sl1'] == 'Descending'){
                        rsort($arr);
                        rsort($arr2);
                    rsort($arr3);
                }
                echo "<form method='post'>
                <select>";
            foreach($arr as $i){
                echo "<option>{$i}</option>";
            }
            echo "</select>";
            echo "<br><br>";
            echo "<select>";
            foreach($arr2 as $i){
                echo "<option>{$i}</option>";
            }
            echo "</select>";
            echo "<br><br>";

            echo "<select name='sl1'>";
            foreach($arr3 as $i){
                echo "<option value='{$i}'>{$i}</option>";
            }
            echo "</select><br><br>";
            echo "<input type='submit' value='Submit'></form>";   
        }
        else{
            echo "<form method='post' action="."'p2.php'>
                <select>";
            foreach($arr as $i){
                echo "<option>{$i}</option>"; }
            echo "</select>";
            echo "<br><br>";
            echo "<select>";
            foreach($arr2 as $i){
                echo "<option>{$i}</option>";          }
            echo "</select>";
            echo "<br><br>";
            echo "<select name='sl1'>";
            foreach($arr3 as $i){
                echo "<option value='{$i}'>{$i}</option>"; }
            echo "</select><br><br>";
            echo "<input type='submit' value='Submit'></form>";}
    ?>
</body>
</html>
