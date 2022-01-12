<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wycieczki krajoznawcze</title>
    <link rel="stylesheet" type="text/css" href="styl4.css">
</head>
<body>
    <div id="banner">
        <h1>WITAMY W BIURZE PODRÓŻY</h1>
    </div>
    <div id="dane">
        <h3>ARCHIWUM WYCIECZEK</h3>
        <?php
            $con = mysqli_connect('localhost','root','','egzamin4');
            $qst = "SELECT id, cel, cena FROM wycieczki WHERE dostepna = '0';";
            $sql = mysqli_query($con,$qst);
            while($row = mysqli_fetch_array($sql)){
                echo $row[0].'. '.$row[1].', cena: '.$row[2].'<br>';
            }
        ?>
    </div>
    <div id="lewy">
        <h3>NAJTANIEj...</h3>
        <table>
            <tr>
                <td>Włochy</td>
                <td>od 1200 zł</td>
            </tr>
            <tr>
                <td>Francja</td>
                <td>od 1200 zł</td>
            </tr>
            <tr>
                <td>Hiszpania</td>
                <td>od 1400 zł</td>
            </tr>
        </table>
    </div>
    <div id="srodkowy">
        <h3>TU BYLIŚMY</h3>
        <?php
            $qst2 = "SELECT nazwaPliku, podpis FROM zdjecia ORDER BY podpis DESC;";
            $sql2 = mysqli_query($con,$qst2);
            while($row2 = mysqli_fetch_array($sql2)){
                echo "<img src='grafika/".$row2[0]."' alt='".$row2[1]."'>";
            }
            mysqli_close($con);
        ?>
    </div>
    <div id="prawy">
        <h3>SKONTAKTUJ SIĘ</h3>
        <a href="wycieczki@wycieczki.pl">napisz do nas</a>
        <p>telefon: 555666777</p>
    </div>
    <div id="footer">
        <p>Stronę wykonał: Vojcik</p>
    </div>
</body>
</html>