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

<form style="width:30%; margin:0 auto" action="savedata.php" method="post"> 
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" name="sname">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Address</label>
    <input type="text" class="form-control" name="saddress">

  </div>
  <div class="mb-3">
  <select name="sclass">
        
        <option value="" Selected disabled>Select</option>
        <?php
        $conn = mysqli_connect('localhost','root','','crud') or die("Connection failed");
        $sql = "SELECT * FROM studentclass";
        $result = mysqli_query($conn,$sql) or die("Query Failed");
        while($row = mysqli_fetch_assoc($result)){  
       ?> 
        <option value="<?php echo $row['cid']?>"> <?php echo $row['cname']?></option>
    <?php }?>
</select>  
</div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Number</label>
    <input type="text" name ="snumber" class="form-control" id="exampleInputPassword1">
  </div>

  <button type="submit" class="btn btn-primary">Save</button>
</form>

</body>
</html> 