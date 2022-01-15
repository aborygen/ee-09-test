<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Vojcik">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="styl.css">
  <title>Hurtownia papiernicza</title>
</head>
<body>
    <header>
      <h1>Wn naszej hurtowni kupisz najtaniej</h1>
    </header>
    <section>
      <h3>Ceny wybranych artykułów w hurtowni:</h3>
      <table>
        <?php
          $con = mysqli_connect('localhost','root','','sklep') or die('Błąd połączenia z bazą danych');
          
          $sql = 'SELECT nazwa, cena FROM towary LIMIT 4;';
          $qst = mysqli_query($con, $sql);
            while($row = mysqli_fetch_array($qst)){
              echo '<tr>
                      <td>'.$row[0].'</td>
                      <td>'.$row[1].'</td>
                    </tr>';
            }
        ?>
      </table>
    </section>
    <section>
      <h3>Ile będą kosztować Twoje zakupy?</h3>
      <form action="index.php" method="post">
        wybierz artykuł
        <select name="nazwa" id="">
          <option value="Zeszyt 60 kartek">Zeszyt 60 kartek</option>
          <option value="Zeszyt 32 kartki">Zeszyt 32 kartki</option>
          <option value="Cyrkiel">Cyrkiel</option>
          <option value="Linijka 30 cm">Linijka 30 cm</option>
          <option value="Ekierka">Ekierka</option>
          <option value="Linijka 50 cm">Linijka 50 cm</option>
        </select><br>
        liczba sztuk: <input type="number" name="liczba"><br>
        <input type="submit" value="OBLICZ">
      </form>
      <?php
        if(!empty($_POST['liczba'])){
          $liczba = $_POST['liczba'];
          $nazwa = $_POST['nazwa'];
          
          $sql = 'SELECT cena FROM towary WHERE nazwa = "'.$nazwa.'";';
          $qst = mysqli_query($con,$sql);
          while($row = mysqli_fetch_array($qst)){
            $total = $row[0] * $liczba;
            echo round($total,1);
          }
        }
        mysqli_close($con);
      ?>
    </section>
    <section>
      <img src="zakupy2.png" alt="hurtownia">
      <h3>Kontakt</h3>
      <p>telefon:<br>11122233<br>e-mail:<br><a href="mailto:hurt@wp.pl">hurt@wp.pl</a></p>
    </section>
    <footer>
      <h4>Witrynę wykonał Vojcik</h4>
    </footer>
</body>
</html>