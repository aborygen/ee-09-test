<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wycieczki krajoznawcze</title>
    <link rel="stylesheet" href="styl4.css">
    <link rel="stylesheet" href="css/bootstrap.css">
  </head>
<body>
  <div class="container my-5">
    
    <div class="row">

      <div class="col banner">
          <h1>WITAMY W BIURZE PODRÓŻY</h1>
      </div>

      <div class="col-md-12 dane">
          <h3>ARCHIWUM WYCIECZEK</h3>
          <?php
            $con = mysqli_connect('localhost','root','','egzamin4');
            $qst = "SELECT id, cel, cena FROM wycieczki WHERE dostepna = '0';";
            $sql = mysqli_query($con,$qst);
            while($row = mysqli_fetch_array($sql)){
            echo $row[0].'. '.$row[1].', cena: '.$row[2].'<br>';
            }   
          ?>
      </div>

      <div class="col-md-3 lewy">
          <h3>NAJTANIEj...</h3>
          <table>
            <tr>
              <td>Włochy</td>
              <td>od 1200 zł</td>
            </tr>
            <tr>
              <td>Francja</td>
              <td>od 1200 zł</td>
            </tr>
            <tr>
              <td>Hiszpania</td>
              <td>od 1400 zł</td>
            </tr>
          </table>
      </div>

      <div class="col-md-6 srodkowy">
          <h3>TU BYLIŚMY</h3>
          <div class="row">
            <?php
              $qst2 = "SELECT nazwaPliku, podpis FROM zdjecia ORDER BY podpis DESC;";
              $sql2 = mysqli_query($con,$qst2);
              while($row2 = mysqli_fetch_array($sql2)){
                echo "<div class='col-md-4'><img src='grafika/".$row2[0]."' alt='".$row2[1]."'></div>";
            }
            mysqli_close($con);
            ?>
          </div>
      </div>

      <div class="col-md-3 prawy">
          <h3>SKONTAKTUJ SIĘ</h3>
          <a href="wycieczki@wycieczki.pl">napisz do nas</a>
          <p>telefon: 555666777</p>
      </div>

      <div class="col-md-12 stopka">
          <p>Stronę wykonał: Vojcik</p>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" 
          integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" 
          crossorigin="anonymous">
  </script>
  <script src="js/bootstrap.js"></script>
</body>
</html>