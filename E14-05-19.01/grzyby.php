<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Vojcik">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="styl5.css">
  <title>Grzybobranie</title>
</head>
<body>
    <aside>
      <a href="borowik.jpg"><img src="borowik-miniatura.jpg" alt="Grzybobranie"></a>
    </aside>
    <header>
      <h1>Idziemy na grzyby!</h1>
    </header>
    <section>
        <?php
          $con = mysqli_connect('localhost','root','','dane2');
          $sql0 = "SELECT nazwa_pliku, potoczna FROM grzyby";
          $qst0 = mysqli_query($con, $sql0);
            while($row0 = mysqli_fetch_array($qst0)){
              echo '<img src ="'.$row0[0].'" title="'.$row0[1].'">';
            }
        ?>
    </section>
    <section>
      <h2>Grzyby jadalne</h2>
        <?php
          $sql1 = "SELECT nazwa, potoczna FROM grzyby WHERE jadalny = 1";
          $qst1 = mysqli_query($con, $sql1);
            while($row1 = mysqli_fetch_array($qst1)){
              echo '<p>'.$row1[0].' ('.$row1[1].')</p>';
            }
        ?>
      <h2>Polecamy do sosów</h2>
        <?php
          $sql2 = "SELECT g.nazwa, g.potoczna, r.nazwa AS rodzina FROM grzyby AS g
                    JOIN rodzina AS r ON g.rodzina_id = r.id
                    WHERE potrawy_id = 1";
          $qst2 = mysqli_query($con, $sql2);
          echo '<ol>';
            while($row2 = mysqli_fetch_array($qst2)){
              echo '<li>'.$row2[0].' ('.$row2[1].'), rodzina: '.$row2[2].'</li>';
            }
          echo '</ol>';
          mysqli_close($con);
        ?>
    </section>
    <footer>
      <p>Autor: Vojcik</p>
    </footer>
</body>
</html>