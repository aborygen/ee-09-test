<!DOCTYPE html>
<?php
    $hour = time()+3600;
    setcookie('ciastko','0',$hour);
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odloty samolotów</title>
    <link rel="stylesheet" href="styl6.css">
</head>
<body>
    <div id="banner1">
        <h2>Odloty z lotniska</h2>
    </div>
    <div id="banner2">
        <img src="galeria/zad6.png" alt="logotyp">
    </div>
    <div id="main">
        <h4>tabela odlotów</h4>
        <table>
            <tr>
                <th>lp.</th>
                <th>numer rejsu</th>
                <th>czas</th>
                <th>kierunek</th>
                <th>status</th>
            </tr>
            <?php
                $con = mysqli_connect('localhost','root','','egzamin');
                $qst = "SELECT id, nr_rejsu, czas, kierunek, status_lotu FROM odloty ORDER BY czas DESC";
                $sql = mysqli_query($con,$qst);
                while($row = mysqli_fetch_array($sql)){
                    echo "<tr> <td>".$row[0].
                        "</td> <td>".$row[1].
                        "</td> <td>".$row[2].
                        "</td> <td>".$row[3].
                        "</td> <td>".$row[4].
                        "</td> </tr>";
                }
            ?>
        </table>
    </div>
    <div id="foot1"><a href="galeria/kw1.jpg" target="_blank">Pobierz obraz</a></div>
    <div id="foot2">
        <?php
        if(isset($_COOKIE['ciastko']))
            echo('<p><b>Miło nam, że nas znowu odwiedziłeś</b></p>');
        else
            echo('<p><i>Dzień dobry! Sprawdź regulamin naszej strony</i></p>');
        ?>
    </div>
    <div id="foot3">
        Autor: Vojcik
    </div>
</body>
</html>