<?php include('config.php') ?>
<!DOCTYPE html_entity_decode>
<html>
<head>
    <title>Log In</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <div class="container">

        <div class="header">

        <strong><p>Enter in your Account</p></strong>

    </div>

    <form action="member/login.php" method="post">

    <?php include('errors.php') ?>

    
    <div>

        <label for="username">Username : </label>
        <input type="text" name="username" required>

    </div>

    <div>

        <label for ="password">Password : </label>
        <input type="password" name="password_1" required>

    </div>

    <button type="submit" name="login_user"> Log In </button>

    <p>Not a user?<a href="registration.php"><b>Register Here</b></a></p>
<style>
p {
color:red;
}
footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  height:5%;
  background-color: transparent;
 text-align: center;
 color:red;
 }
</style>
</form>
</div>
</body>
<footer>
Designer: SNIZER | Coder: The-Guardians
</footer>
</html>