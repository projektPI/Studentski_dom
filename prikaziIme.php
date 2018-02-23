<?php
include_once './baza.class.php';
$baza = new Baza();
$korisnikID = $_SESSION['id_korisnik'];
$upit = "select k.ID_korisnik, k.ime, k.prezime ,k.userName, u.od, u.* "
        . "from korisnik k join unajmljeno as u "
        . "on k.ID_korisnik=u.korisnik "
        . "where k.ID_korisnik='$korisnikID'";
$korisnici = $baza->selectDB($upit);
$korisnik = mysqli_fetch_array($korisnici);
?>