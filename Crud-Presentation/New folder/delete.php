<?php 

$sid = $_GET['id'];
$conn = mysqli_connect('localhost','root','','crud');
$sql = "DELETE FROM `student` WHERE sid = {$sid}";
$result = mysqli_query($conn,$sql) or die("Query Failed");

header('Location: http://localhost/New%20folder/read.php');

?>