<html>
<head>
<style>
table,td,tr{
border:2px solid black;
border-collapse:collapse;
}
</style>
</head>
</html>
<?php 
$servername='localhost';
$username='root';
$password='';
$database='bookdb';
 $conn =new mysqli($servername,$username,$password,$database);
 if($conn->connect_error){
 die('connection error'.$conn->connect_error);
 }
$query0="insert into book(Id,Name,Purchaser,Price) values(5,'python','ram',3000)";
$result0=$conn->query($query0);
 $query='select * from book';
 $result=$conn->query($query);
 echo 'After inserting<br>';
echo '<table>';
while($row =$result->fetch_assoc()){
	echo '<tr>';
 echo '<td>'.$row['Id'].'</td>'.'<td>'.$row['Name'].'</td>'.'<td>'.$row['Purchaser'].'</td>'.'<td>'.$row['Price'].'</td>';
 	echo '</tr>';
 }
 echo '</table>';
 $query2='delete from book where Id=5';
 $result2=$conn->query($query2);
 echo 'After deleting<br>';
 
 echo '<table>';
 $result3=$conn->query($query);
while($row =$result3->fetch_assoc()){
	echo '<tr>';
 echo '<td>'.$row['Id'].'</td>'.'<td>'.$row['Name'].'</td>'.'<td>'.$row['Purchaser'].'</td>'.'<td>'.$row['Price'].'</td>';
 	echo '</tr>';
 }
 echo '</table>';
 ?>
