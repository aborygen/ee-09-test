<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista przyjaciół</title>
  <link rel="stylesheet" href="styl.css">
</head>
<body>
  <header>
    <h1>Portal Społecznościowy - moje konto</h1>
  </header>
  <main>
    <h2>Moje zainteresowania</h2>
    <ul>
      <li>muzyka</li>
      <li>film</li>
      <li>komputery</li>
    </ul>
    <h2>Moi znajomi</h2>
    <?php
      $con = mysqli_connect('localhost','root','','dane');
      $sql = "SELECT imie, nazwisko, opis, zdjecie FROM osoby WHERE Hobby_id = 1 OR Hobby_id = 2 OR Hobby_id = 6";
      $qst = mysqli_query($con, $sql);
      while($row = mysqli_fetch_array($qst)){
        echo '<div class ="photo"><img src="'.$row[3].'" alt="przyjaciel"></div>
              <div class ="desc"><h3>'.$row[0].' '.$row[1].'</h3><p>Ostatni wpis: '.$row[2].'</p></div>
              <div class ="line"></div>';
      }
      mysqli_close($con);
    ?>
  </main>
  <footer>
      Stronę wykonał: Vojcik
  </footer>
  <footer>
      <a href="mailto:ja@portal.pl">napisz do mnie</a>
  </footer>
</body>
</html>