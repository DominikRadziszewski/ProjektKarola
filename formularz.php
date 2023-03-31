<?php
include 'lacznik.php';

if (isset($_POST['wyslij'])) {
    $imie = $_POST['imie'];
    $wiek = $_POST['wiek'];
    $zamieszkanie = $_POST['zamieszkanie'];
    $zawod = $_POST['zawód'];
    $charakterystyka = $_POST['charakterystaka'];
    $elementy = $_POST['elementy'];
    $opinia = $_POST['opinia'];
    $cel = $_POST['cel'];
    $motywacje = $_POST['motywacje'];
    $watki = $_POST['watki'];
    $zakaz = $_POST['zakaz'];
    $narracja = $_POST['narrator'];
    $gatunek = $_POST['gat'];
    $wulgaryzmy = $_POST['wulgaryzmy'];
   
}

$sql = "INSERT INTO historie (imie, wiek, zamieszkanie, zawod, charakterystyka, elementy, opinia, cel, motywacje, watki, zakaz, narracja, gatunek, wulgaryzmy) VALUES ('$imie', '$wiek', '$zamieszkanie', '$zawod', '$charakterystyka', '$elementy', '$opinia', '$cel', '$motywacje', '$watki', '$zakaz', '$narracja', '$gatunek', '$wulgaryzmy')";

if (mysqli_query($conn, $sql)) {
    echo "Dane zostały dodane do bazy danych";
  } else {
    echo "Błąd: " . $sql . "<br>" . mysqli_error($conn);
  }






?>