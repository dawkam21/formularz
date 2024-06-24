<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Formularz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" media="screen" href="style21.php" />
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>
  <body>
    <header>
    </header>
    <main>
      <section class="container">
      <div class="form">
        <h1><a href="index1.php">Formularz</a></h1>
          <form id="forms" action="users.php" method="post">
            <div class="details">
            <label for="firstName" class="details"><i class="fa fa-user"></i></label>
            <input type="text" name="txtFirstName" id="firstName" placeholder="Twoje imię"/>
            </div>

            <div class="details">
            <label for="lastName" class="details"><i class="fa fa-user"></i></label>
            <input type="text" name="txtLastName" id="lastName" placeholder="Twoje nazwisko"/>
            </div>

            <div class="details">
            <label for="pass" class="details"><i class="fa fa-lock"></i></label>
            <input type="password" name="txtPassword" id="pass" placeholder="Hasło"/>
            </div>

            <div class="details">
            <label for="cnfmPassword" class="details"><i class="fa fa-lock"></i></label>
            <input type="password" name="txtPassword2" id="cnfmPassword" placeholder="Powtórz hasło"/>
            </div>

            <div class="details">
            <label for="email" class="details"><i class="fa fa-envelope"></i></label>
            <input type="email" name="txtEmail" id="email" placeholder="Email"/>
            </div>

            <div class="details">
            <label for="phoneNumber" class="details"><i class="fa fa-phone"></i></label>
            <input type="text" name="txtPhone" id="phoneNumber" minlength="9" maxlength="9" placeholder="Numer telefonu"/>
            </div>

            <div class="details">
            <label for="birthday" class="details">Data urodzenia : </label>
            <input type="date" name="txtBirthDate" id="birthday" min="1900-12-31" max="2019-12-31"/>
            </div>

            <div class="details">
            <!-- <select name="woj">
              <option value="1">Dolnośląskie</option>
              <option value="2">Kujawsko-Pomorskie</option>
              <option value="3">Lubelskie</option>
              <option value="4">Lubuskie</option>
              <option value="5">Łódzkie</option>
              <option value="6">Małopolskie</option>
              <option value="7">Mazowieckie</option>
              <option value="8">Opolskie</option>
              <option value="9">Podkarpackie</option>
              <option value="10">Podlaskie</option>
              <option value="11">Pomorskie</option>
              <option value="12">Śląskie</option>
              <option value="13">Świętokrzyskie</option>
              <option value="14">Warmińsko-Mazurskie</option>
              <option value="15">Wielkopolskie</option>
              <option value="16">Zachodniopomorskie</option>
              </select> -->
              <label for="birthPlace" class="details">Miejsce urodzenia: </label>
              <input type="text" name="txtBirthPlace" id="birthPlace" />
              </div>

              <div class="details">
              <label for="weight" class="details">Waga (kg): </label>
              <input type="number" name="txtWeight" id="weight" min="1" max="300"/>
              </div>

              <div class="details">
              <label for="height" class="details">Wzrost (cm): </label>
              <input type="number" name="txtHeight" id="height" min="30" max="250"/>
              </div>

              <div class="details">
              <label for="sex" class="details">K</label>
              <input type="radio" name="txtSex" id="sexK" value="Kobieta"/>
              <label for="sex" class="details">M</label>
              <input type="radio" name="txtSex" id="sexM" value="Mężczyzna"/>
              <label for="sex" class="details">Inny</label>
              <input type="radio" name="txtSex" id="sexDiff" value="Inny">
              </div>

              <div class="details">
              <label for="myCheck" class="details"><a id="terms" href="regulamin.html" target="_blank"><b>Czy akceptujesz regulamin?</b></a></label>
              <input type="checkbox" name="checkbox" id="myCheck" onclick="init()" onchange="document.getElementById('sbmt').disabled = !this.checked;" !checked/>
              </div>

              <span id="result"></span>


              <label for="aboutYourself" class="details">O sobie: </label>

              <textarea name="aboutYourself" id="aboutYourself"></textarea>

              <div class="details">
              <input type="submit" class ="buttons" name="sbmt" id="sbmt" value="Wyślij" disabled/>
              <input type="reset" class ="buttons" value="Wyczyść" />
              </div>

          </form>
        </div>
      <div id="history">
        <?php
          require_once "connect.php";
          try {
            $con = new mysqli($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);
              
              if($con->connect_errno != 0) {
                throw new Exception(mysqli_connect_errno());
              } else {
                $sql1 = "SELECT id, fldFirstName, fldLastName, fldEmail, fldBirthDate, fldSex FROM tbl_users ORDER BY fldBirthDate ASC LIMIT 18";
      
                $result = $con->query($sql1);
      
                if ($result->num_rows > 0) {
                
                  echo "<table class='mainTable'>";
                  echo "<tbody>
                  <tr>
                  <th style='padding: 2px; width: 8%;'><a href='sortByIdAsc.php'>id <i class='fa fa-sort-down'></i></th>
                  <th style='width: 16%;'><a href='sortByFirstNameAsc.php'>Imię <i class='fa fa-sort-down'></i></a></th>
                  <th style='width: 25%;'><a href='sortbyLastNameAsc.php'>Nazwisko <i class='fa fa-sort-down'></i></a></th>
                  <th><a href='sortByEmailAsc.php'>Email <i class='fa fa-sort-down'></i></a></th>
                  <th style='width: 13%;'><a href='sortByBirthDate.php'>Data urodzenia <i class='fa fa-sort-up'></i></a></th>
                  <th><a href='sortBySexAsc.php'>Płeć <i class='fa fa-sort-down'></i></a></th>
                  <th>Edytuj</th>
                  <th>Usuń</th>
                  </tr>";
                  
                  while ($row = $result->fetch_assoc()) {
                    echo "<tr class='active-row'>";
                    echo "<td id='ids'>" . $row["id"] . "</td>";
                    echo "<td id='firstFldName'>" . $row["fldFirstName"] . "</td>";
                    echo "<td>" . $row["fldLastName"] . "</td>";
                    echo "<td>" . $row["fldEmail"] . "</td>";
                    echo "<td>" . $row["fldBirthDate"] . "</td>";
                    echo "<td>" . $row["fldSex"] . "</td>";
                    echo "<td class='blue'>" . "<a class='btnEdit' href='edit.php?id=$row[id]'>Edytuj" ."</td>";
                    echo "<td class='red'>" . "<a class='btnDelete' href='delete.php?id=$row[id]'>Usuń" . "</td>";
                    echo "</tr>";
                    }
                    
                    echo "</tbody></table>";
                          } else {
                      echo "Brak wyników";
                  }
              }
              
          } catch(Exception $e) {
            echo 'Error occured!';
            }
            ?>
      </div>
      </section>
      <section id="button">
                  <?php
      
      $con2 = new mysqli('localhost', 'root', '', 'db_contact');
      if(isset($_POST['csvAll'])) {
        echo "<script>
        alert('Skonwertowano do pliku humans.csv');
        window.location.href = '" . $_SERVER['HTTP_REFERER'] . "';
        </script>";
        }
        $queryAll = "SELECT * FROM tbl_users ORDER BY id DESC";
        $separator = ",";
        $resultAll = mysqli_query($con2, $queryAll);
        
        $fp = fopen('humans.csv', 'w');
        while($rowAll = mysqli_fetch_assoc($resultAll)){
          
          fputcsv($fp, $rowAll, $separator);
          }
          fclose($fp);
          
          if(isset($_POST['csvX']) && isset($_POST['chooseX'])) {
            $csvX = (int)$_POST['chooseX'];
            $csvLimit = (int)$_POST['chooseX'];
            $queryX = "SELECT * FROM tbl_users ORDER BY id DESC LIMIT $csvLimit";
            $separator = ",";
            $resultX = mysqli_query($con2, $queryX);
            // NIE DZIAŁA ! POPRAWIĆ !
              if ($csvLimit != 0 && $csvLimit) {
              if ($csvLimit == 1) {
                echo "<h1>Skonwertowano $csvLimit rekord</h1>";
              } else if (($csvLimit > 1 && $csvLimit < 5) || ($csvLimit > 21 && $csvLimit < 25) || ($csvLimit > 31 && $csvLimit < 35) || ($csvLimit > 41 && $csvLimit < 45) || ($csvLimit > 51 && $csvLimit < 55) || ($csvLimit > 61 && $csvLimit < 65) || ($csvLimit > 71 && $csvLimit < 75) || ($csvLimit > 81 && $csvLimit < 85) || ($csvLimit > 91 && $csvLimit < 95)) {
                echo "<h1>Skonwertowano $csvLimit rekordy</h1>";
              } else if (($csvLimit > 4 && $csvLimit < 22) || ($csvLimit > 24 && $csvLimit < 42) || ($csvLimit > 44 && $csvLimit < 62) || ($csvLimit > 64 && $csvLimit < 82) || ($csvLimit > 84 && $csvLimit < 102)) {
                echo "<h1>Skonwertowano $csvLimit rekordów</h1>";
              } else {
                echo "<h1>Nie udało się skonwertować pliku, proszę spróbować ponownie.</h1>";
              }}
              $fp = fopen('humans.csv', 'w');
              while($rowX = mysqli_fetch_assoc($resultX)){
                
                fputcsv($fp, $rowX, $separator);
                }
                fclose($fp);
                }
            
          
        ?>
    </section>
  <form method="post">
    <fieldset>
      <label for="csvAll">Konwertuj wszystkie</label>
        <input type="submit" id="csvAll" name="csvAll" value="Konwertuj do pliku CSV"><br>
      <label>Wybierz i konwertuj X</label>
        <input type="text" name="chooseX" id="chooseX" placeholder="X">
        <input type="submit" id="csvX" name="csvX" value="Konwertuj X">
    </fieldset>
  </form>
    </main>
    <script src="app.js"></script>
  </body>

</html>
