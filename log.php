<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Logowanie</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='logStyle.css'>
    <script src='app.js'></script>
</head>
<body>
    <div id="log">
        <h1>Zaloguj się</h1>
        <form action="log.php" method="post">
          <div class="logForm">
            <div class="logDetails">
              <label for="logLogin">Login lub email</label>
              <input type="text" name="logLogin" id="logLogin">
            </div>
            <div class="logDetails">
              <label for="logPass">Hasło</label>
              <input type="password" name="logPass" id="logPass">
            </div>
            <div class="logDetails">
              <label for="remember">Zapamiętaj mnie</label>
              <input type="checkbox" name="remember" id="remember">
            </div>
            <div class="logDetails">
              <input type="submit" value="Zaloguj się" name="logSbmt" id="logSbmt">
            </div>
                <a href="lalal.html" target="_blank">Nie pamiętasz hasła?</a>
          </div>
        </form>
      </div>
    <?php
        require_once "connect.php";
        
        try {
            $db = new mysqli($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);
            $logLogin = $_POST['logLogin'];
            // $logLogin = filter_var($logLogin, FILTER_SANITIZE_EMAIL);
            $logPass = $_POST['logPass'];
            $hash = password_hash($logPass, PASSWORD_DEFAULT);
            
            if ($db->connect_errno != 0) {
                throw new Exception(mysqli_connect_errno());
                } else {
                    $q = $db->prepare("SELECT * FROM `tbl_log` WHERE login = ? LIMIT 1");
                    
                    $q->bind_param("s", $logLogin);

                    $q->execute();
                    // $db->query($q);

                    $rslt = $q->get_result();

                    $userRow = $rslt->fetch_assoc();
                    if ($userRow == null) {
                        echo "Błędny login lub hasło! <br>";
                    } else { 
                        if (password_verify($hash, $userRow['passwordHash'])) {
                            echo "Zalogowano poprawnie";
                        } else {
                            echo "Błędny login lub hasło";  
                        }
                    }
                }
        } catch (Exception $e) {
            echo 'Error occured!';
          }
    ?>
</body>
</html>
