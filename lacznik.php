<?php
//Dane logowania
$servername = "localhost";
$username = "root";
$password = "";
$db="karol";

//Laczenie
$conn=new mysqli($servername,$username,$password,$db);
      if($conn->connect_error){
        die("Nieudane połączenie z baza dancyh: " . $conn->connect_error);
      }

?>