<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Warzywniak</title>
  <link rel="stylesheet" href="styl2.css">
</head>
<body>
  <header>
    <h1>Internetowy sklep z eko-warzywami</h1>
  </header>
  <header>
    <ol>
      <li>warzywa</li>
      <li>owoce</li>
      <li><a href="https://terapiasokami.pl/" target="_blank">soki</a></li>
    </ol>
  </header>
  <main>
    <?php
      $con = mysqli_connect('localhost','root','','dane2');
      $sql = "SELECT nazwa, ilosc, opis, cena, zdjecie FROM produkty
      WHERE rodzaje_id = 1 OR rodzaje_id = 2;";
      $qst = mysqli_query($con, $sql);
      while($row =  mysqli_fetch_array($qst)){
        echo '<div class="produkt">
                <img src="'.$row[4].'" alt="warzywniak">
                <h5>'.$row[0].'</h5>
                <p>opis: '.$row[2].'</p>
                <p>na stanie: '.$row[1].'</p>
                <h2>'.$row[3].' zł</h2>
              </div>';
      }   
    ?>
  </main>
  <footer>
    <form action="sklep.php" method="POST">
      <label for="nazwa">Nazwa: </label><input type="text" name="nazwa">
      <label for="cena">Cena: </label><input type="text" name="cena">
      <input type="submit" value="Dodaj produkt">
    </form>
      <?php
        @$nazwa = $_POST['nazwa'];
        @$cena = $_POST['cena'];
        $sql2 = "INSERT INTO produkty(rodzaje_id, producenci_id,".$nazwa.", ilosc, opis,".$cena.", zdjecie) VALUES
        (1,4,'owoc1',10,'',9.99,'owoce.jpg');";
        mysqli_query($con, $sql2);
        mysqli_close($con);
      ?>
    <span>Stronę wykonał: Vojcik</span>
  </footer>
</body>
</html>