<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Wójcik Mateusz">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nasz sklep komputerowy</title>
    <link rel="stylesheet" href="styl8.css">
</head>
<body>
    <div id="banner">
        <div id="menu">
            <a href="index.php">Główna</a>
            <a href="procesory.html">Procesory</a>
            <a href="ram.html">RAM</a>
            <a href="grafika.html">Grafika</a>
        </div>
        <div id="logo">
            <h2>Podzespoły komputerowe</h2>
        </div>
    </div>
    <div id="content">
            <h1>Dzisiejsze promocje</h1>
            <table>
                <tr>
                    <th>NUMER</th>
                    <th>NAZWA PODZESPOŁU</th>
                    <th>OPIS</th>
                    <th>CENA</th>
                </tr>
                <?php
                    $con = mysqli_connect('localhost','root','','sklep1');
                    $sql = mysqli_query($con,"SELECT id, nazwa, opis, cena FROM podzespoly
                    WHERE cena < 1000");
                    while($row = mysqli_fetch_array($sql)){
                        echo "<tr>
                                <td>".$row['id']."</td>
                                <td>".$row['nazwa']."</td>
                                <td>".$row['opis']."</td>
                                <td>".$row['cena']."</td>
                            </tr>";
                    }
                    mysqli_close($con);
                ?>
            </table>
    </div>
    <div id="footer">
        <div id="foot1">
            <img src="grafika/scalak.jpg" alt="promocje na procesory">
        </div>
        <div id="foot2">
            <h4>Nasz Sklep Komputerowy</h4>
            <p>Współpracujemy z hurtownią <a href="http://www.edata.pl/" target="_blank">edata</a></p>
        </div>
        <div id="foot3">
            <p>zadzwoń: 601 602 603</p>
        </div>
        <div id="foot4">
            <p>Stronę wykonał: Wójcik Mateusz</p>
        </div>
    </div>
</body>
</html>