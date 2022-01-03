<?php
  $con = mysqli_connect('localhost','root','','ratownictwo');
  @$ratownicy = $_POST['ratownicy'];
  @$dyspozytor = $_POST['dyspozytor'];
  @$adres = $_POST['adres'];
  @$godzina = date("H:i:s");
  mysqli_query($con, "INSERT INTO zgloszenia (ratownicy_id, dyspozytorzy_id, adres, pilne, czas_zgloszenia)
                VALUES ($ratownicy, $dyspozytor, '".$adres."', 0, '".$godzina."');");
  mysqli_close($con);
?>