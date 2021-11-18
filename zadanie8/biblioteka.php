<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Biblioteka miejska</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="banner">
    <h2>Miejska Biblioteka Publiczna w Książkowicach</h2>
  </div>
  <div class="left">
    <h3>W naszych zbiorach znajdziesz dzieła następujących autorów:</h3>
    <ul>
      <?php
        $con = mysqli_connect('localhost','root','','biblioteka');
        $qst = "SELECT imie, nazwisko FROM autorzy";
        $sql = mysqli_query($con,$qst);
          while($row = mysqli_fetch_array($sql)){
            echo "<li>".$row[0]." ".$row[1]."</li>";
          }
      ?>
    </ul>
  </div>
  <div class="main">
    <h3>Dodaj nowego czytelnika</h3>
    <form method="POST" action="biblioteka.php">
      imię: <input type="text" name="imie" value=""> <br>
      nazwisko: <input type="text" name="nazwisko" value=""> <br>
      rok urodzenia: <input type="number" name="rok" value=""> <br>
      <input type="submit" value="DODAJ" name="wyslano">
        <?php
          @$imie = strval($_POST['imie']);
          @$nazwisko = strval($_POST['nazwisko']);
          @$rok = strval($_POST['rok']);
          if(isset($_POST['wyslano'])){
            if($imie == "" || $nazwisko == "" || $rok == ""){
              echo "<br> Proszę wypełnić wszystkie pola";
              mysqli_close($con);
            }
            else{
              echo "<br> Czytelnik: ".$imie." ".$nazwisko." został dodany do bazy danych";
              $kod = strtoupper(substr($imie, 0, 2)."".substr($nazwisko, 0, 2)."".substr($rok, -2, 2));
              $qst2 = "INSERT INTO czytelnicy(imie, nazwisko, kod) VALUES ('$imie','$nazwisko','$kod')";
              mysqli_query($con, $qst2);
              mysqli_close($con);
            }
          }
          else{
            mysqli_close($con);
          }
          ?>
    </form>
  </div>
  <div class="right">
    <img src="biblioteka.png" alt="książki">
    <h4>ul. Czytelnicza 25<br> 12-120 Książkowice<br> tel.: 123123123<br> e-mail: <a href="mailto:biuro@biblioteka.pl">biuro@biblioteka.pl</a></h4>
  </div>
  <div class="footer">
    <p>Projekt strony: Vojcik</p>
  </div>
</body>
</html>