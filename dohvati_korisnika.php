<?php 

include_once './baza.class.php';

$baza = new Baza();
$korisnikID = $_POST['korisnikID'];

$upit2 = "";
$upit2="select k.ime,k.prezime,k.userName,k.email,k.adresa,k.mjesto,k.drzava,k.telefon,k.xica,t.ID_tipKorisnika,k.tipKorisnika,t.naziv "
        . "from korisnik as k join tip_korisnika as t on k.tipKorisnika=t.ID_tipKorisnika where k.ID_korisnik='$korisnikID'";
        
$podaci = $baza->selectDB($upit2);
$podaci = $podaci->fetch_assoc();

echo json_encode(array('korisnik' => $podaci));


//kod koji ide u tpl na dno
//i dodas selectu id="korisnici"
