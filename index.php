<?php
if(isset($_COOKIE['loggedIn'])){
    if ($_COOKIE['loggedIn'] == true){
        header("Location: dashboard.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="index.js" defer></script>
</head>
<body>
  <form action="index.php" method="post">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name"><br>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password">
    <input type="submit" name="submit" value="Submit" style="margin: 20px 0;">
  </form>
  <button id="btn_showPassword" onclick="showText('password')">Show Password</button><br>
  <?php
    if(isset($_POST['submit'])){
      $name = $_POST['name'];
      $password = $_POST['password'];
      

      $name_password = array("ethan"=>"ethan", "xuan hao"=>"xuan hao");
      if($password == $name_password[$name]){
        echo "Login Successful";
        setcookie("name", $name, time() + 86400, "/"); // expires in one day
        setcookie("password", $password, time() + 86400);
        setcookie("loggedIn", true, time() + 86400, "/"); // log in status is valid for a day
        echo "<script>window.location.href='dashboard.php';</script>";
      }
      else{
        echo "<h2 style='color: red;'>Login Failed</h2><br>Please check your username and password.";
      }
    }
  ?>
  <p>Please Login</p>
  <h3>New Feature:</h3>
  <ul>
    <li>You stays logged in for 1 day every time you Login, unless you logged out.</li>
    <li>When you stays logged in, opening <a href="index.php">index.php</a> will redirect you to dashboard.</li>
    <li>Source code: <a href="https://github.com/ethanwke/php-login" target="_blank">Click Me.</a></li>
  </ul>
  <p>Programmed by Wong Khai Ee.</p>

</body>
</html>
