<?php
  $name = $_COOKIE['name'];
  $password = $_COOKIE['password'];
  $name_password = array("ethan"=>"ethan", "xuan hao"=>"xuan hao");
  if ($password != $name_password[$name]){
    header("Location: index.php");
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
  <h2 style="color:lime;">Login Successful</h2><br>
  <h1>Welcome, <?php echo ucwords($name)?></h1>
  <form action="dashboard.php" method="get">
    <button type="submit" name="Logout" value="1">Logout?</button>
  </form>
  <?php
  
  if(isset($_GET["Logout"])) {
    setcookie ("name","",time() -3600,"/");
    setcookie ("password","",time() -3600,"/");
    setcookie ("loggedIn","",time() -3600,"/");
    header('Location: index.php');
  }
  ?>
</body>
</html>
