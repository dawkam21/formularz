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
            <form name="frmContact" method="post" action="contact.php">
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
                <div class="txt">
                <label for="haslo2"></label>
                    <input type="password" name="txtPassword2" placeholder="Powtórz hasło" required>
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
                    <p>Nie masz konta? <a href="">Zarejestruj się</a></p>
                </div>

                <?php

                 ?>
            </form>
        </section>
    </main>

    <script src='logApp.js'></script>
</body>
</html>