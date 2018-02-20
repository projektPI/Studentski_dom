<?php
session_start();
header('Content-Type: text/html; charset=utf-8');
include_once './baza.class.php';
$greska = "";
$baza = new Baza();
$korisnik = array();

if (!isset($_SESSION['korisnickoIme'])) {
    $greska.= "Morate biti prijavljeni!<br>";
    header("Location:prijava.php");
    //exit();
}
$korisnikID = $_SESSION['id_korisnik'];

$upit = "select k.ID_korisnik, k.ime, k.prezime ,k.userName, u.od, u.* "
        . "from korisnik k join unajmljeno as u "
        . "on k.ID_korisnik=u.korisnik "
        . "where k.ID_korisnik='$korisnikID'";
$korisnici = $baza->selectDB($upit);
$korisnik = mysqli_fetch_array($korisnici);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $vrijemeDo = $_POST['do'];

    if (empty($vrijemeDo) || $korisnik[4]>=$vrijemeDo) {
        $greska = "Unesite ispravne vrijednosti";
       
    } else {
         $upit = "UPDATE unajmljeno "
                . "SET do='$vrijemeDo'"
                . "WHERE korisnik='$korisnikID'";
        $korisnikPromjena = $baza->updateDB($upit);
        if ($korisnikPromjena == null) {
            $greska .= "Greška kod unosa!<br>";
        } else {
            $greska .= "Uspješno primjenjen datum!<br>";
            header("Refresh:1");
        }
    }
}

require_once 'vanjske_biblioteke/smarty/libs/Smarty.class.php';
require_once 'ukljuciSmarty.php';
$smarty = new Smarty();
$obj = new UkljuciSmarty($smarty);
$smarty->assign('greska', $greska);
$smarty->assign(array(
    'naslov' => 'Korisnici',
    'korisnik' => $korisnik,
));
$smarty->display('_header.tpl');
$smarty->display('zahtjevZaIzlazak.tpl');
$smarty->display('_footer.tpl');
?>


