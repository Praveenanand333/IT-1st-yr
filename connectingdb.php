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
$query0="insert into book(Id,Name,Purchaser,Price) values(2,'python','ram',3000)";
$result0=$conn->query($query0);
 $query='select * from book';
 $result=$conn->query($query);
echo '<table>';
while($row =$result->fetch_assoc()){
	echo '<tr>';
 echo '<td>'.$row['Id'].'</td>'.'<td>'.$row['Name'].'</td>'.'<td>'.$row['Purchaser'].'</td>'.'<td>'.$row['Price'].'</td>';
 	echo '</tr>';
 }
 echo '</table>';
 
 ?>