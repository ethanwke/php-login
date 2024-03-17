<?php
  $name = $_POST['name'];
  $data_name = array("ethan", "xuan hao");
  if(!in_array($name,$data_name)){
     echo "<script>window.location.href='index.php';</script>";
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <h2>Login Successful</h2><br>
  <h1>Welcome, <?php echo $name ?></h1>
</body>
</html>
