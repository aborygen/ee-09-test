<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>piłka nożna</title>
  <link rel="stylesheet" href="styl2.css">
</head>
<body>
  <div id="banner">
    <h3>Reprezentacja polski w piłce nożnej</h3>
    <img src="obraz1.jpg" alt="reprezentacja">
  </div>
  <div id="bleft">
    <form action="liga.php" method="post">
      <select name="role" id="">
        <option value="1">Bramkarze</option>
        <option value="2">Obrońcy</option>
        <option value="3">Pomocnicy</option>
        <option value="4">Napastnicy</option>
      </select>
      <input type="submit" value="Zobacz">
    </form>
    <img src="zad2.png" alt="piłka">
    <p>Autor: Vojcik</p>
  </div>
  <div id="bright">
    <ol>
      <?php
        @$position = $_POST['role'];
        $con = mysqli_connect('localhost','root','','egzamin2');
        $sql1 = 'SELECT imie, nazwisko FROM zawodnik WHERE pozycja_id ="'.$position.'"';
        $qst1 = mysqli_query($con, $sql1);
        while($row = mysqli_fetch_array($qst1)){
          echo "<li><p>".$row[0]." ".$row[1]."</p></li>";
        }
      ?>
    </ol>
  </div>
  <div id="main">
    <h3>Liga mistrzów</h3>
  </div>
  <div id="liga">
    <?php
      $sql2 = "SELECT zespol, punkty, grupa FROM liga ORDER BY punkty DESC;";
      $qst2 = mysqli_query($con, $sql2);
      while($row2 = mysqli_fetch_array($qst2)){
        echo '<div class="info">
                <h2>'.$row2[0].'</h2>
                <h1>'.$row2[1].'</h1>
                <p>grupa: '.$row2[2].'</p>
              </div>';
      }
      mysqli_close($con);
    ?>
  </div>
</body>
</html>