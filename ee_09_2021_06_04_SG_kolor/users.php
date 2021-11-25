<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Panele administratora</title>
  <link rel="stylesheet" href="styl4.css">
</head>
<body>
  <header>
    <h3>Portal Społecznościowy - panel administratora</h3>
  </header>
  <section>
    <h4>Użytkownicy</h4>
    <?php
      $con = mysqli_connect('localhost','root','','dane4');
      $sql = "SELECT id, imie, nazwisko, rok_urodzenia, zdjecie FROM osoby LIMIT 30;";
      $qst = mysqli_query($con, $sql);
      $wiek = 0;
      while ($row = mysqli_fetch_array($qst)){
        $wiek = (date("Y")-$row[3]);
        echo $row[0].'. '.$row[1].' '.$row[2].', '.$wiek.' lat<br>';
      }
    ?>
    <a href="settings.html">Inne ustawienia</a>
  </section>
  <section>
    <h4>Podaj id użytkownika</h4>
    <form action="users.php" method="post">
      <input type="number" name="id">
      <input type="submit" value="ZOBACZ">
    </form>
    <hr>
    <?php
      @$id = $_POST['id'];
      $sql2 = "SELECT o.imie, o.nazwisko, o.rok_urodzenia, o.opis, o.zdjecie, hobby.nazwa FROM osoby AS o 
                JOIN hobby ON hobby.id = o.Hobby_id 
                WHERE o.id ='$id'";
      $qst2 = mysqli_query($con,$sql2);
      while ($row = mysqli_fetch_array($qst2)){
        echo "<h2>".$id.'. '.$row[0].' '.$row[1]."</h2>";
        echo '<img src="'.$row[4].'" alt="'.$id.'">';
        echo '<p>Rok urodzenia: '.$row[2].'</p>';
        echo '<p>Opis: '.$row[3].'</p>';
        echo '<p>Hobby: '.$row[5].'</p>';
      }
      mysqli_close($con);
    ?>
  </section>
  <footer>
    <span>Stronę wykonał: Vojcik</span>
  </footer>
</body>
</html>