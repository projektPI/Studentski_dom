<?php 

include_once './baza.class.php';

$baza = new Baza();
$korisnikID = $_POST['korisnikID'];
//$posjetitelj = $_POST['posjetitelj'];
$upit2 = "";

$upit2 = "select e.* from evidencija as e "
        . "where e.provjera=0 "
        . "and e.ID_evidencija='$korisnikID'";
            
        /*. "as k join evidencija as e "
        . "on k.ID_korisnik=e.korisnik "
        . "where e.provjera=0 ";*/

$podaci = $baza->selectDB($upit2);
$podaci = $podaci->fetch_assoc();

echo json_encode(array('korisnik1' => $podaci));

?>
