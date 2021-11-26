<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Organizer</title>
  <link rel="stylesheet" href="styl6.css">
</head>
<body>
  <header>
    <h2>MÓJ ORGANIZER</h2>
  </header>
  <header>
    <form action="organizer.php" method="post">
      <label for="wpis">Wpis wydarzenia: </label>
      <input type="text" name="wpis">
      <input type="submit" value="ZAPISZ">
    </form>
    <?php
      $wpis = $_POST['wpis'];
      $con = mysqli_connect('localhost','root','','egzamin6');
      $sql = "UPDATE zadania SET '$wpis' = 'Wycieczka: Karkonosze' WHERE dataZadania = '2020-08-27';";
      $qst = mysqli_query($con,$sql);
    ?>
  </header>
  <header>
    <img src="logo2.png" alt="Mój organizer">
  </header>
  <main>
    <?php
      $sql2 = "SELECT dataZadania, miesiac, wpis FROM zadania WHERE miesiac = 'sierpien';";
      $qst2 = mysqli_query($con,$sql2);
      while($row = mysqli_fetch_array($qst2)){
        echo '<article class="day">
                <h6>'.$row[0].', '.$row[1].'</h6>
                <p>'.$row[2].'</p>
              </article>';
      }
    ?>
  </main>
  <footer>
    <?php
      $sql3 = "SELECT miesiac, rok FROM zadania WHERE dataZadania = '2020-08-01';";
      $qst3 = mysqli_query($con,$sql3);
      while($row = mysqli_fetch_array($qst3)){
        echo '<h1>miesiąc: '.$row[0].', rok: '.$row[1].'</h1>';
      }
      mysqli_close($con)
    ?>
    <p>Stronę wykonał: Vojcik</p>
  </footer>
</body>
</html>