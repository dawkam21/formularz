<?php 

@include 'config.php';

session_start();

if (isset($_POST['submit'])) {

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);

    $sql = "SELECT * FROM user_form WHERE email = '$email' && password = '$pass'";

    $rsl = mysqli_query($con, $sql);

    if (mysqli_num_rows($rsl) > 0) {

        $error[] = 'Użytkownik już istnieje!';
        
    } else {

        if ($pass != $cpass) {
            $error[] = 'Hasła się nie zgadzają';
        } else {
            $insert = "INSERT INTO user_form(name, email, password) VALUES ('$name', '$email', '$pass')";
            mysqli_query($con, $insert);
            header("location: user-log.php");
        }

    }

}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Rejestracja użytkownika</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='adminStyle.php'>
    <script src='main.js'></script>
</head>
<body>
    <div class="form-container">
        <form action="" method="post">
            <h3>Rejestracja użytkownika</h3>
            <?php

                if (isset($error)) {
                    foreach($error as $error) {
                        echo '<span class="error-msg">' . $error . '</span>';
                    };
                };

            ?>
            <input type="text" name="name" required placeholder="wpisz swój login">
            <input type="email" name="email" required placeholder="wpisz swój email">
            <input type="password" name="password" required placeholder="wpisz swoje hasło">
            <input type="password" name="cpassword" required placeholder="potwierdź hasło">
            <input type="submit" name="submit" value="Zarejestruj się" class="form-btn">
            <p>Masz już konto?<a href="user-log.php">Zaloguj się</a></p>
        </form>
    </div>
</body>
</html>