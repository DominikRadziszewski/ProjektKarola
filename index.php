<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>TWOJA HISTORIA</title>
<link rel="stylesheet" type="text/css" href="styl.css">
</head>
<body id="prosze">
<?php include_once "head.php"; ?>
<div id="wybor">
<form action="" method="$_POST">
<br>
<h1>WYGLĄD</h1>
<label name="zdj">ZDJĘCIE GŁÓWNEGO BOHATERA(NIE WYMAGANE) </label><input type="file" name="bohaterek"
       accept="image/png, image/jpeg">
<br>
<label name="chara">CHARAKTERYSTYCZNE ELEMNTY UBIORU(NIE WYMAGANE)</label>
<input type="file" name="ubiór"
       accept="image/png, image/jpeg">
<br>
<h1>OPIS POSTACI</h1>
IMIĘ I NAZWISKO<br><input type="text" name="imie" value="" class="bohater"/><br>
WIEK<br><input type="number" name="wiek" value="" class="bohater"/><br>
MIEJSCE ZAMIESZKANIA<br><input type="text" name="zamieszkanie" value="" class="bohater"/><br>
ZAWÓD<br><input type="text" name="zawód" value="" class="bohater"/><br>
KRÓTKA CHARAKTERYSTYKA<br><textarea name="charakterystaka" class="char"></textarea><br>
ELEMENTY OSOBOWOŚCI<br><textarea name="elementy" class="char"></textarea><br>
KRÓTKA OPINIA<br><textarea name="opinia" class="char"></textarea><br>
<br>

<h1>ELEMENTY FABUŁY</h1>
CEL<br><input type="text" name="cel" value="" class="cel"/><br>
MOTYWACJE<br><input type="text" name="motywacje" value="" class="cel"/><br>
WĄTKI DO PORUSZENIA<br><textarea name="watki" class="char"></textarea><br>
WĄTKI KTÓRYCH NIE PORUSZAĆ<br><textarea name="zakaz" class="char"></textarea><br>

RODZAJ NARRACJI<br>
 <input type="text" name="narrator" value="" list="narr" class="wybor"/>
  <datalist id="narr" >
    <option value="Powieść auktorialna">Powieść auktorialna</option>
    <option value="Powieść pierwszoosobowa">Powieść pierwszoosobowa</option>
	  </datalist>
  <br>
<label name="wybor">CHARAKTER OPOWIEŚCI</label><br>
 <input type="text" name="gat" value="" list="id_wybor" class="wybor"/>
  <datalist id="id_wybor" >
    <option value="Horror" id="gatunek" >Horror</option>
    <option value="Komedia" id="gatunek">Komedia</option>
    <option value="Inspirująca" id="gatunek">Inspirująca</option>
    <option value="Science-Fiction" id="gatunek">Science-Fiction</option>
    <option value="Romantyczna" id="gatunek">Romantyczna</option>
	<option value="Fantastyczna" id="gatunek">Fantastyczna</option>
	<option value="Kryminalna" id="gatunek">Kryminalna</option>
  </datalist><br>
 <label name="bohater">WULGARYZMY</label><br>
<label><input type="radio" name="wulgaryzmy" > Tak</label>
<label><input type="radio" name="wulgaryzmy"> Nie</label>
<br>
<input type="submit" value="Wyślij">
</form>
</div>
</body>
</html>