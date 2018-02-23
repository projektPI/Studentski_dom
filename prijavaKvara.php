<?php
session_start();
header('Content-Type: text/html; charset=utf-8');
include_once './baza.class.php';
$greska = "";
$baza = new Baza();

if (!isset($_SESSION['korisnickoIme'])) {
    $greska.= "Morate biti prijavljeni!<br>";
    header("Location:prijava.php");
    //exit();
}
$korisnikID = $_SESSION['id_korisnik'];
$tipKorisnikaPrijava=$_SESSION['tipKorisnika'];
$upit = "select k.*"
        . "from korisnik as k "
        . "where k.ID_korisnik='$korisnikID'";
$korisnici = $baza->selectDB($upit);
$korisnik = mysqli_fetch_array($korisnici);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $opisKvara = $_POST['opisKvara'];
    $brojSobe = $_POST['brojSobe'];
    $datum= date("Y-m-d");
    if (empty($opisKvara) || empty($brojSobe)) {
        $greska.= "Popunite sva polja<br>";
    }
    else{
        $izmjena="INSERT INTO prijavaKvara values ('default', '$opisKvara', '$datum', '$korisnikID', '$brojSobe') ";
        $podaci=$baza->selectDB($izmjena);
        if ($podaci == null) {
         $greska.= "Greška kod prijave!<br>";
        }
        else{
            $greska.= "Uspješno prijavljeno!<br>";
        }
    }
}

require_once 'vanjske_biblioteke/smarty/libs/Smarty.class.php';
require_once 'ukljuciSmarty.php';
$smarty = new Smarty();
$obj = new UkljuciSmarty($smarty);
//prosljeđivanje parametara greške za ispis na ekran
$smarty->assign('greska', $greska);
$smarty->assign(array(
    'naslov' => 'Korisnici',
    'korisnik' => $korisnik
));
/*
if($tipKorisnikaPrijava=='2'){
$smarty->display('_header_s.tpl');
}*/
//prikaži index ili bilo koju drugu stranicu
$smarty->display('_header_s_1.tpl');
$smarty->display('prijavaKvara_1.tpl');
//$smarty->display('_footer.tpl');
?>
