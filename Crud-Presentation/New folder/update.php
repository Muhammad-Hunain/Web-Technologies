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
  <h1>Update Rercord</h1>
<?php
$conn = mysqli_connect('localhost','root','','crud') or die("Connection failed");
$sid = $_GET['id'];  
$sql = "SELECT * FROM student WHERE sid={$sid}";
$result = mysqli_query($conn,$sql) or die("Query Failed. ");
if(mysqli_num_Rows($result)>0){
  while($row = mysqli_fetch_assoc($result)){

  
?>

<form style="width:30%; margin:0 auto" action="updatedata.php" method="post"> 
  <div class="mb-3">

    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="hidden" class="form-control" name="sid" value="<?php echo $row['sid']?>">
    <input type="text" class="form-control" name="sname" value="<?php echo $row['sname']?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Address</label>
    <input type="text" class="form-control" name="saddress" value="<?php echo $row['saddress']?>">
  </div>
  <div class="mb-3">
        <?php
          $conn = mysqli_connect('localhost','root','','crud') or die("Connection failed");
          $sql1 = "SELECT * FROM studentclass";
          $result1 = mysqli_query($conn,$sql1);
          if(mysqli_num_Rows($result1)>0){
            echo'<select name="sclass">';
            while($row1 = mysqli_fetch_assoc($result1))
            {
              if($row['sclass'] == $row1['cid']){
                $select = "selected";
              }
              else{
                $select ="";
              }
              echo "<option {$select} value='{$row1['cid']}'> {$row1['cname']}</option>";
            }
            echo '</select>';
          }
        ?>
</select>  
</div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Number</label>
    <input type="text" name ="snumber" value="<?php echo $row['snumber']?>" class="form-control" id="exampleInputPassword1">
  </div>

  <button type="submit" class="btn btn-primary">Save</button>
</form>
<?php 
  }
} 
?>
</body>
</html>