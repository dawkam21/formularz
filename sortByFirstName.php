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
      <h1><a href="index.php">Formularz</a></h1>
        <form class="mainForm" action="users.php" method="post">
          <label for="firstName" class="details"><i class="fa fa-user"></i></label>
          <input type="text" name="txtFirstName" id="firstName" placeholder="Twoje imię"/>

          <label for="lastName" class="details"><i class="fa fa-user"></i></label>
          <input type="text" name="txtLastName" id="lastName" placeholder="Twoje nazwisko"/>
            <br>
          <label for="pass" class="details"><i class="fa fa-lock"></i></label>
          <input type="password" name="txtPassword" id="pass" placeholder="Hasło"/>

          <label for="cnfmPassword" class="details"><i class="fa fa-lock"></i></label>
          <input type="password" name="txtPassword2" id="cnfmPassword" placeholder="Powtórz hasło"/>
            <br>
          <label for="email" class="details"><i class="fa fa-envelope"></i></label>
          <input type="email" name="txtEmail" id="email" placeholder="Email"/>

          <label for="phoneNumber" class="details"><i class="fa fa-phone"></i></label>
          <input type="text" name="txtPhone" id="phoneNumber" minlength="9" maxlength="9" placeholder="Numer telefonu"/>
            <br>   
          <label for="birthday" class="details">Data urodzenia : </label>
          <input type="date" name="txtBirthDate" id="birthday" min="1900-12-31" max="2019-12-31"/>
            <br>
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
            <br>
          <label for="weight" class="details">Waga (kg): </label>
          <input type="number" name="txtWeight" id="weight" min="1" max="300"/>
            <br>
          <label for="height" class="details">Wzrost (cm): </label>
          <input type="number" name="txtHeight" id="height" min="30" max="250"/>
            <br>
          <label for="sex" class="details">K</label>
          <input type="radio" name="txtSex" id="sexK" value="Kobieta"/>
          <label for="sex" class="details">M</label>
          <input type="radio" name="txtSex" id="sexM" value="Mężczyzna"/>
          <label for="sex" class="details">Inny</label>
          <input type="radio" name="txtSex" id="sexDiff" value="Inny"><br> 
          <label for="myCheck" class="details"><a id="terms" href="regulamin.html" target="_blank">Czy akceptujesz regulamin?</a></label>
          <input type="checkbox" name="checkbox" id="myCheck" onclick="init()" onchange="document.getElementById('sbmt').disabled = !this.checked;" !checked/><br>
          <span id="result"></span><br>

          <label for="aboutYourself" class="details">O sobie: </label><br>

          <textarea name="aboutYourself" id="aboutYourself"></textarea><br>

          <input type="submit" class ="buttons" name="sbmt" id="sbmt" value="Wyślij" disabled/>
          <input type="reset" class ="buttons" value="Wyczyść" />
        </form>
        </div>
      </section>
      <section id="history">
        <?php
          require_once "connect.php";
          try {
            $con = new mysqli($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);
              
              if($con->connect_errno != 0) {
                throw new Exception(mysqli_connect_errno());
              } else {
                $sql1 = "SELECT id, fldFirstName, fldLastName, fldEmail, fldBirthDate, fldSex FROM tbl_users ORDER BY fldFirstName DESC LIMIT 10";
      
                $result = $con->query($sql1);
      
                  if ($result->num_rows > 0) {

                    echo "<table class='mainTable'>";
                    echo "<tbody>
                            <tr>
                              <th style='padding: 2px; width: 8%;'><a href='sortByIdAsc.php'>id <i class='fa fa-sort-down'></i></a></th>
                              <th style='width: 16%;'><a href='sortByFirstNameAsc.php'>Imię <i class='fa fa-sort-up'></i></a></th>
                              <th style='width: 25%;'><a href='sortbyLastNameAsc.php'>Nazwisko <i class='fa fa-sort-down'></i></a></th>
                              <th><a href='sortByEmailAsc.php'>Email <i class='fa fa-sort-down'></i></a></th>
                              <th style='width: 13%;'><a href='sortByBirthDate.php'>Data urodzenia <i class='fa fa-sort-down'></i></a></th>
                              <th><a href='sortBySexAsc.php'>Płeć <i class='fa fa-sort-down'></i></a></th>
                            </tr>";

                      while($row = $result->fetch_assoc()) {
                          echo "<tr class='active-row'>";
                          echo "<td>" . $row["id"]. "</td>";
                          echo "<td>" . $row["fldFirstName"]. "</td>";
                          echo "<td>" . $row["fldLastName"]. "</td>";
                          echo "<td>" . $row["fldEmail"]. "</td>";
                          echo "<td>" . $row["fldBirthDate"]. "</td>";
                          echo "<td>" . $row["fldSex"]. "</td";
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
      </section>
      <section>
          <div class="button-container">
            <button>Konwertuj do pliku CSV</button>  
          </div>
      </section>
    </main>
    <script src="app.js"></script>
  </body>

</html>
