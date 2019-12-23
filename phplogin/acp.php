<html>
<head>
<title>N.E.X.U.S Admin Control Panel</title>
</head>
<body>
<?php
require 'authenticate.php';

$condb=mysqli_connect ($Config['MySQL']["host"], $Config['MySQL']["user"], $Config['MySQL']["pass"], $Config['MySQL']["dbname"]) or
  die("Problems with connection.");
mysqli_select_db("aurora",$condb) or
  die("Problems with database selection.");
$registros=mysqli_query("select * from acp='$_REQUEST[admin]'",$condb) or
  die("Problem with select:".mysqli_error());
if ($reg=mysqli_fetch_array($registros))
{
?>
  <form action="admin.php" method="post">
  Nickname:
  <input type="text" name="nick" value="<?php echo $reg['admin'] ?>">
  <br>
  Password:
  <input type="hidden" name="pass" value="<?php echo $reg['admin'] ?>">
  <input type="submit" value="Go">
  </form>
<?php
}
else
  echo "Access denied!";
?>
</body>
</html> 