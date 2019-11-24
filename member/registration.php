<?php include('config.php') ?>
<!DOCTYPE html_entity_decode>
<html>
<head>
    <title>Registration</title>
</head>
<body>

    <div class="container">

        <div class="header">

        <h2>Register</h2>

    </div>

<form action="registration.php" method="post">

    <?php include('errors.php') ?>

    
    <div>

        <label for="username"> Nickname: </label>
        <input type="text" name="username" required>

    </div>
    
    <div>

        <label for ="email"> E-mail: </label>
        <input type="email" name="email" required>

    </div>

    <div>

        <label for ="password"> Password: </label>
        <input type="password" name="password_1" required>

    </div>

    <div>

        <label for="password"> Password confirm: </label>
        <input type="password" name="password_2" required>

    </div>

    <button type="submit" name="reg_user"> Play </button>

    <p>Already a user?<a href="login.php"><b>Login here</b></a></p>

</form>
</div>
</body>
<footer>
Designer: SNIZER | Coder: The-Guardians & Infinity
</footer>
</html>
