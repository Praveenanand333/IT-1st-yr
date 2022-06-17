<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unit conversion</title>
    <style>
        body{
            font-family:sans-serif;
        }
        .dv{
            border:2px solid black;
            margin:auto;
            width:50vw;
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
        fieldset{
            margin:10px;
        }
        .mar{
            margin-top:4vh;
        }
    </style>
</head>
<body>
<div class='dv'>
        <h2>Unit Converter</h2>
        <form  method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <input name="str" type="text" placeholder="value to be converted"><br><br>
            Select any one of the converting option below<br><br>
            <fieldset>
                <legend>Length:</legend>
                <input type='radio' name='rd' value='mtcm'>Meter to Centimeter
                <input type='radio' name='rd' value='cmtm'>Centimeter to Meter
                <input type='radio' name='rd' value='mtft'>Meter to Foot
                <input type='radio' name='rd' value='fttm'>Foot to Meter
                <br><br>
            </fieldset>
            <fieldset>
                <legend>Time:</legend>
                <input type='radio' name='rd' value='sth'>Seconds to Hours
                <input type='radio' name='rd' value='hts'>Hours to Seconds
                <input type='radio' name='rd' value='stm'>Seconds to Minutes
                <input type='radio' name='rd' value='mts'>Minutes to Seconds<br>
                <input type='radio' name='rd' value='mth'>Minutes to Hours
                <input type='radio' name='rd' value='htm'>Hours to Minutes
                <br><br>
            </fieldset>
            <fieldset>
                <legend>Temperature:</legend>
                <input type='radio' name='rd' value='ctf'>Celcius to Farenheit
                <input type='radio' name='rd' value='ftc'>Farenheit to Celcius
                <br><br>
            </fieldset>
            <fieldset>
                <legend>Digital Storage:</legend>
                <input type='radio' name='rd' value='mbtkb'>Megabytes to Kilobytes
                <input type='radio' name='rd' value='kbtmb'>Kilobytes to Megabytes
                <input type='radio' name='rd' value='bitby'>Bits to bytes
                <input type='radio' name='rd' value='bytbi'>Bytes to Bits
            </fieldset>
            <input type="submit" value="Convert">
        </form>
    </div>
    <?php
        $arr = array('mtcm'=>100,'cmtm'=>0.01,'mtft'=>3.280,'fttm'=>0.3048,'sth'=>0.0002777,'hts'=>3600,'stm'=>0.016666,'mts'=>60,'mth'=>0.01666,'htm'=>60,'mbtkb'=>1000,'kbtmb'=>0.001,'bitby'=>0.125,'bytbi'=>8);
        $unit = array('mtcm'=>'cm','cmtm'=>'m','mtft'=>'ft','fttm'=>'m','sth'=>'hrs','hts'=>'sec','stm'=>'min','mts'=>'sec','mth'=>'hrs','htm'=>'min','mbtkb'=>"kb",'kbtmb'=>'mb','bitby'=>'byte','bytbi'=>'bit');
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $op = $_POST['rd'];
            $val = (float)$_POST['str'];
            $unt = $unit[$op];
            $conv = $arr[$op]*$val;
            echo "<div class='dv mar'>";
            echo "Converted value : {$conv} {$unt}";
            echo "</div>";
        }
    ?>
</body>
</html>