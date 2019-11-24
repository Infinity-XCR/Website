<?php require_once('config.php') ?>
<!DOCTYPE html_entity_decode>
<html>
<head>
  <title>Nexus Project</title>
  <img src="">
  <link rel="stylesheet" type="text/css" href="/style.css">
  <meta charset="utf-8">
</head>
<body>
<style>
  legend,label,footer{
      color: red;
}
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  height:5%;
  background-color: transparent;
 text-align: center;}
</style>
<div style="text-align:left">
<?php
if(isset($_SESSION['success'])) : ?>
<?php
echo $_SESSION['success'];
unset($_SESSION['success']);

?>
<?php endif ?>
<?php
if(isset($_SESSION['username'])) : ?>
<h2> Welcome <strong><?php echo $_SESSION['username']; ?></strong></h2>

<button><a href="index.php?logout='1'">Click here</a></button>

<?php endif ?>
      </div>
<div class="footer">
<footer>
Designer: SNIZER | Coder: The-Guardians
</footer>
</div>
</body>
</html>