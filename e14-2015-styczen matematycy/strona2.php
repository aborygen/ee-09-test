<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <img src="baner.jpg" alt="baner">
  </header>
  <nav>
    <span>Menu</span>
    <ul>
      <li><a href="strona1.html">proste działania</a></li>
      <li><a href="strona2.php">potęgowanie</a></li>
    </ul>
  </nav>
  <main>
    <h1>POTĘGOWANIE</h1>
    <form action="strona2.php" method="post">
      <i>Podaj podstawę potęgi: </i> <input type="number" name="a" value="0" onclick="this.select()"> <br>
      <i>Podaj dodatni, całkowity wykładnik potęgi: </i> <input type="number" name="b" value="0" onclick="this.select()"> <br>
      <input type="submit" value="POTĘGOWANIE">
    </form>
    <br>
    <?php
      @$podstawa = $_POST['a'];
      @$wykladnik = $_POST['b'];
        if((empty($podstawa) && empty($wykladnik)) || (empty($podstawa) && !empty($wykladnik))){
          echo "Wpisz podstawę i wykładnik potęgi.";
        }
        else if(!empty($podstawa) && empty($wykladnik)){
          echo "Wynik działania wynosi: 1";
        }
        else{
          if($wykladnik < 0){
            echo "Wykładnik potęgi musi być dodatni.";
          }
          else{
            echo "Wynik działania wynosi: ".pow($podstawa,$wykladnik);
          }
        }
    ?>
  </main>
</body>
</html>