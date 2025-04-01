<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Rejestracja administratora</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='adminStyle.php'>
    <script src='main.js'></script>
</head>
<body>
    <div class="form-container">
        <form action="" method="post">
            <h3>Rejestracja</h3>
            <input type="text" name="name" required placeholder="wpisz swój login">
            <input type="email" name="email" required placeholder="wpisz swój email">
            <input type="password" name="password" required placeholder="wpisz swoje hasło">
            <input type="password" name="cpassword" required placeholder="potwierdź hasło">
            <input type="submit" name="submit" value="Zarejestruj się" class="form-btn">
            <p>Masz już konto?<a href="admin-log.php">Zaloguj się</a></p>
        </form>
    </div>
</body>
</html>