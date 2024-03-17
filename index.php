<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <form action="index.php" method="post">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name"><br><br>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password"><br><br>
    <input type="submit" name="submit" value="Submit">
  </form>
  <?php
    if(isset($_POST['submit'])){
      $name = $_POST['name'];
      $password = $_POST['password'];
      
      $data_name = array("ethan", "xuan hao");
      $data_password = array("ethan", "xuan hao");


      if(in_array($name, $data_name) && in_array($password, $data_password)){
        echo "Login Successful";
        echo "
        <form id='autosubmit' action='dashboard.php' method='post'>
        <input type='hidden' name='name' value='{$name}'>
        </form>
        ";
        echo "
        <script type='text/javascript'>
          document.getElementById('autosubmit').submit();
        </script>";
        echo "<script>window.location.href='dashboard.php';</script>";
        
      }
      else{
        echo "Login Failed";
      }
    }
  ?>
  <p>Please Login</p>
</body>
</html>
