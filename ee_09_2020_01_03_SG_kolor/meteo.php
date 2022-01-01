<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prognoza pogody Poznań</title>
  <link rel="stylesheet" href="styl4.css">
</head>
<body>
  <header>
    <p>maj, 2019r.</p>
  </header>
  <header>
    <h2>Prognoza dla Poznania</h2>
  </header>
  <header>
    <img src="logo.png" alt="prognoza">
  </header>
  <section>
    <a href="kwerendy.txt">Kwerendy</a>
  </section>
  <section>
    <img src="obraz.jpg" alt="Polska, Poznań">
  </section>
  <main>
    <table>
      <tr>
        <th>Lp.</th>
        <th>DATA</th>
        <th>NOC - TEMPERATURA</th>
        <th>DZIEŃ - TEMPERATURA</th>
        <th>OPADY [mm/h]</th>
        <th>CIŚNIENIE [hPa]</th>
      </tr>
      <?php
        $con = mysqli_connect('localhost','root','','prognoza');
        $sql = "SELECT * FROM pogoda WHERE miasta_id = 2 ORDER BY data_prognozy DESC";
        $qst = mysqli_query($con, $sql);
        $liczbaporzadkowa = 1;
        while ($row = mysqli_fetch_array($qst)){
          echo '<tr>
                  <td>'.$liczbaporzadkowa.'</td>
                  <td>'.$row[2].'</td>
                  <td>'.$row[3].'</td>
                  <td>'.$row[4].'</td>
                  <td>'.$row[5].'</td>
                  <td>'.$row[6].'</td>
                </tr>';
              $liczbaporzadkowa++;
        }
        mysqli_close($con);
      ?>
    </table>
  </main>
  <footer>
    <p>Stronę wykonał: Vojcik</p>
  </footer>
</body>
</html>