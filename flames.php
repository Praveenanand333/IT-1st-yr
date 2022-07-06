<html>
    <head>
        <style>
            body{
                text-align:center;
                font-size:30px;
            }
            </style>
</head>
    <body>
        <h1>FLAMES CALCULATOR</h1>
        <form action='flames.php'>
    Name1:<input type='text' name='name1'>
    <br>Name2:<input type='text' name='name2'><br>
    <input type='submit' >
    </form>
</body>
    </html>
<?php
$con=new mysqli('localhost','root','','flames');

if(isset($_REQUEST['name1'])&& isset($_REQUEST['name2'])){
$name1=$_REQUEST['name1'];
$name2=' '.$_REQUEST['name2'];
$n11=$name1;
$n22=$name2;
$n1=str_split($name1);
$n2=str_split($name2);
foreach($n1 as $i){
    
    if(stripos($name2,$i)>0){
        $name1=substr_replace($name1,'',stripos($name1,$i),1);
        $name2=substr_replace($name2,'',stripos($name2,$i),1);
    };
    
}

$count=strlen($name1)+strlen($name2)-1;
echo 'The  count is '.$count.'<br>';

$flames='FLAMES';
while(strlen($flames)!=1){
    if($count<strlen($flames)){
        $flames=substr($flames,$count).substr($flames,0,$count);
        $flames=substr_replace($flames,'',-1);
    }
    else if($count==strlen($flames)){
        $flames=substr_replace($flames,'',-1);
    }
    else{
        $temp=$count;
        while($temp>strlen($flames)){
            $temp=$temp-strlen($flames);
        }
        $flames=$flames=substr($flames,$temp).substr($flames,0,$temp);
        $flames=substr_replace($flames,'',-1);
    }

}
echo  'The result is'.' '.$flames;
if(isset($_REQUEST['name1'])&& isset($_REQUEST['name2'])){
    $query0="insert into flamesdata values('".$_REQUEST['name1']."','".$_REQUEST['name2']."','".$flames."')";
    $r=$con->query($query0);

}
}
?>
