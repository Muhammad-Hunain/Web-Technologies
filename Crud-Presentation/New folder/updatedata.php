<?php
 $sid = $_POST['sid'];
 $sname =   $_POST['sname'];
 $saddress = $_POST['saddress'];
 $sclass =   $_POST['sclass'];
 $snumber = $_POST['snumber'];

//  echo $snumber;
//  echo $sname;
//  echo $sclass;
//  echo $snumber;


$conn = mysqli_connect('localhost','root','','crud') or die("Connection Unsucceessfull");
$sql = "UPDATE  student SET sname = '{$sname}',saddress = '{$saddress}',sclass = '{$sclass}',snumber='{$snumber}' WHERE sid = '{$sid}'";
$result = mysqli_query($conn,$sql) or die('Query Failed');

header('Location: http://localhost/New%20folder/read.php');
?>