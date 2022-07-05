<html>
    <head>
        <style>
            table,td,tr,th{
                border:1px solid black;
                border-collapse:collapse;
                margin-left:50%;
            }
            h1,body{
                text-align:center;
            }
            button{
                margin-top:40px;
            }
            </style>
</head>
<body>
<h1>To do list</h1>
    <form name="myform"  action='todolist.php'>
        tasks:<input type="text" name='tasks'>
        <input type='submit'>
        
        </form>
        
        </body>
    </html>
<?php
$y=1;
$servername = "localhost";
$username = "Praveen";
$password = "anand";
$dbname = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
function update(){
    ob_start();
    global $y;
    
    global $row,$result,$query,$conn;
$query='select * from todolist';
$result=$conn->query($query);

  
echo '<table><tr><th>NO</th><th>TASKS</th></tr>';
while ($row=$result->fetch_assoc()){
    echo '<tr>';
    echo '<td>'.$row['no'].'</td>'.'<td>'.$row['task'].'</td>';
    echo  '</tr>';
}


echo '</table>';
if($y>1){
    ob_end_clean();
}
$y+=1;
header('Refresh:5;u
rl=todolist.php');
}
update();
$count='select count(*) from todolist';
$i=$conn->query($count);
while($row1=$i->fetch_assoc()){
    $k= $row1['count(*)'];
}

if(isset($_REQUEST['tasks'])){
    global $k;
    $k+=1;
    $query1="insert into  todolist(no,task) values(".$k.","."'".$_REQUEST['tasks']."')";
    $result=$conn->query($query1);
    update();
    
    
}
if(isset($_REQUEST['delete'])){
    $query2='delete from todolist where no=1';
    $result3=$conn->query($query2);
    $query3='update todolist set no=no-1';
    $result3=$conn->query($query3);


    if($result3===TRUE){
        update();
    }
    else{
        echo 'an error  occured';
    }
}

?>
<html>
    <form name='myform1' action='todolist.php'>
        <button type='submit' name='delete' value='yes'>delete</button>
</form>
    </html>