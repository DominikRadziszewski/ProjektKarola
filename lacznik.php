<?php
//Dane logowania
$servername = "localhost";
$username = "root";
$password = "";

//Laczenie
$conn= new mysqli($servername,$username,$password);

//sprawdzanie połączenia
if($conn->connect_error){
    die("Połączenie przerwane ". $conn->connect_error);
}

echo "Połączenie udane";
?>