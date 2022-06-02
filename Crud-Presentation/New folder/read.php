
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
<?php
    $conn = mysqli_connect('localhost','root','','crud') or die("Connection failed");
    $sql = "SELECT * FROM student JOIN studentclass WHERE student.sclass = studentclass.cid";
    $result = mysqli_query($conn,$sql) or die("Query Failed. ");
    if(mysqli_num_rows($result)>0)
    {
    
?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Student id</th>
      <th scope="col">Student Name</th>
      <th scope="col">Student Address</th>
      <th scope="col">Student Class</th>
      <th scope="col">Student Number</th>
      <th scope="col">Action</th>
    
    </tr>
  </thead>
  <tbody>
      <?php
        while($row = mysqli_fetch_assoc($result)){
      ?>
    <tr>
      <td><?php echo $row['sid'] ?></td>
      <td><?php echo $row['sname']?></td>
      <td><?php echo $row['saddress']?></td>
      <td><?php echo $row['cname']?></td>
      <td><?php echo $row['snumber']?></td>
      <td> 
          <a href="./update.php?id=<?php echo $row['sid']?>" class="btn btn-primary">Edit</a>
          <a href="./delete.php?id=<?php echo $row['sid'] ?>" class="btn btn-primary">Delete</a>
        </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
 <?php }
 else{
    echo"<h2>No record Found</h2>";
 }
 mysqli_close($conn);
 ?>    

</body>
</html>
