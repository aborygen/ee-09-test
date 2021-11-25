<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Video On Demand</title>
  <link rel="stylesheet" href="styl3.css">
</head>
<body>
  <header>
    <h1>Internetowa wypożyczalnia filmów</h1>
  </header>
  <header>
    <table>
      <tr>
        <td>Kryminał</td>
        <td>Horror</td>
        <td>Przygodowy</td>
      </tr>
      <tr>
        <td>20</td>
        <td>30</td>
        <td>20</td>
      </tr>
    </table>
  </header>
  <section>
    <h3>Polecamy</h3>
    <?php
      $con = mysqli_connect('localhost','root','','dane3');
      $sql = "SELECT id, nazwa, opis, zdjecie FROM produkty
              WHERE id IN (18, 22, 23, 25);";
      $qst = mysqli_query($con,$sql);
      while ($row = mysqli_fetch_array($qst)) {
        echo '<div class="film">
                <h4>'.$row[0].'. '.$row[1].'</h4>
                <img src="'.$row[3].'" alt="film">
                <p>'.$row[2].'</p>
              </div>';
      }
    ?>
  </section>
  <section>
    <h3>Filmy fantastyczne</h3>
    <?php
      $sql2 = "SELECT id, nazwa, opis, zdjecie FROM produkty
                WHERE Rodzaje_id = 12;";
      $qst2 = mysqli_query($con,$sql2);
      while ($row = mysqli_fetch_array($qst2)) {
      echo '<div class="film">
              <h4>'.$row[0].'. '.$row[1].'</h4>
              <img src="'.$row[3].'" alt="film">
              <p>'.$row[2].'</p>
            </div>';
      }
    ?>
  </section>
  <footer>
    <form action="video.php" method="post">
      <label for="id">Usuń film nr.: </label><input type="number" name="id">
      <input type="submit" value="Usuń film">
    </form>
      <?php
        @$id = $_POST['id'];
        $sql3 = "DELETE FROM produkty WHERE id='$id';";
        mysqli_query($con,$sql3);
        mysqli_close($con);
      ?>
    <span>Stronę wykonał: <a href="mailto:ja@poczta.com">Vojcik</a></span>
  </footer>
</body>
</html>