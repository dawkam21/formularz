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

        $row = mysqli_fetch_array($rsl);

        $_SESSION['name'] = $row['name'];
        header("location: user_page.php");
    } else {
        $error[] = 'Nieprawidłowy email lub hasło';
    }

}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Logowanie użytkownika</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='logStyle.php'>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <main>
    <section id="form">
                <h1>Logowanie</h1>
                <?php

                    if (isset($error)) {
                        foreach($error as $error) {
                            echo '<span class="error-msg">' . $error . '</span>';
                        };
                    };
                ?>
            <form name="userForm" method="post" action="user-page.php">
                <div class="txt">
                <label for="login"></label>
                    <input type="text" name="txtLogin" placeholder="Podaj login" required>
                    <i class='bx bx-user'></i>
                </div>
                <div class="txt">
                <label for="haslo"></label>
                    <input type="password" name="txtPassword" placeholder="Podaj hasło" required>
                    <i class='bx bxs-lock-alt' ></i>
                </div>

                <div class="remember-forgot">
                    <label for="forgot" id="forgot">
                        <input type="checkbox" name="" id=""> Pamiętaj mnie
                        <a href="">Nie pamiętasz hasła?</a>
                    </label>
                </div>
                <div class="txtBtn">
                    <button type="submit" class="btnTxt">Zaloguj się</button>
                </div>

                <div class="register-link">
                    <p>Nie masz konta? <a href="user-register-form.php">Zarejestruj się</a></p>
                </div>

                <?php

                 ?>
            </form>
        </section>

        <div class="change">
            <a href="admin-page.php">Wróć do poziomu administratora</a>
        </div>
    </main>

    <script src='logApp.js'></script>
</body>
</html>