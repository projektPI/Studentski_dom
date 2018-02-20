<?php
session_start();
header('Content-Type: text/html; charset=utf-8');
include_once './baza.class.php';
$greska = "";
$baza = new Baza();
$korisnik = array();
$korisnik1 = array();

if (!isset($_SESSION['korisnickoIme'])) {
    $greska .= "Morate biti prijavljeni!<br>";
    header("Location:prijava.php");
    exit();
}
$korisnik = $_SESSION['id_korisnik'];
$tipKorisnikaPrijava=$_SESSION['tipKorisnika'];

if ($tipKorisnikaPrijava!=1 && $tipKorisnikaPrijava!=4) {
    $greska="Samo recepcionar i administrator mogu prostupiti";
    header("Location:prijava.php");
}

$upit = "select k.ID_korisnik,k.prezime,k.ime "
        . "from korisnik as k join tip_korisnika as t "
        . "on k.tipKorisnika=t.ID_tipKorisnika "
        . "where t.ID_tipKorisnika=2 or t.ID_tipKorisnika=3 "
        . "order by 2";
$korisnici = $baza->selectDB($upit);
$upit1 = "select e.* from evidencija as e "
        . "where e.provjera=0";
$korisnici1 = $baza->selectDB($upit1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $posjetitelj = "";
    $brojSobe = "";
    $stanar = "";
    $stanar1 = "";
    $posjetitelj1 = "";

    $posjetitelj = $_POST['posjetitelj1'];
    $brojSobe = $_POST['brojSobe'];
    $stanar = $_POST['korisnici'];
    $datum = date("Y-m-d");
    $vrijemeOD = $_POST['vrijemeDolaska'];
    if (empty($posjetitelj) || empty($brojSobe)) {
        $greska .= "Popunite sva polja za unos gosta!<br>";
    } else {
        $izmjena = "INSERT INTO evidencija values (Default,'$stanar', '$brojSobe','$posjetitelj', '$vrijemeOD', null, '$datum',0) ";
        $podaci = $baza->selectDB($izmjena);
        if ($podaci == null) {
            $greska .= "Greška kod unosa!<br>";
        } else {
            $greska .= "Uspješno unešeno!<br>";
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
    'korisnici' => $korisnici,
    'korisnik1' => $korisnik1,
    'korisnici1' => $korisnici1,
));
$smarty->display('_header.tpl');
$smarty->display('biljezenjeGostiju.tpl');
$smarty->display('_footer.tpl');
?>
