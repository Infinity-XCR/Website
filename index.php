<?php
require_once('member/config.php');
?>
<?php

if(isset($_SESSION['username'])) {

   $_SESSION['msg'] = "You must log in to view this page";
   header("location: ");
}
if (isset($_GET['logout'])){

   session_destroy();
   unset($_SESSION['username']);
   header("location: login.php");
}
?>
<?php $css=rand(100000000000,999999999999); ?>
<!DOCTYPE html_entity_decode>
<html>
<head>
  <title>Nexus Project</title>
  <link rel="stylesheet" type="text/css" href="style.css?__cv=<?php echo $css; ?>">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<div class="log-button">
<a href="member/login.php">Login Here</a>
</div>
<div class="reg-button">
<a href="member/registration.php">Create Account</a>
</div>
<style>
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  height:5%;
  background-color: transparent;
 text-align: center;
 color:red;
 }
p,h2{
color:red;
}
</style>
<div class="footer">
<footer>
<b>Designer: SNIZER | Coder: The-Guardians</b>
</footer>
</div>
</body>
</html>