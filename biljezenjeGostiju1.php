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
    //header("Location:index.php");
    //exit();
}
$korisnik = $_SESSION['id_korisnik'];
$tipKorisnikaPrijava = $_SESSION['tipKorisnika'];

if ($tipKorisnikaPrijava != 1 && $tipKorisnikaPrijava != 4) {
    $greska = "Samo recepcionar i administrator mogu prostupiti";
    header("refresh:1; url=prijava.php");
}

$upit = "select k.ID_korisnik,k.prezime,k.ime "
        . "from korisnik as k join tip_korisnika as t "
        . "on k.tipKorisnika=t.ID_tipKorisnika "
        . "where t.ID_tipKorisnika=2 or t.ID_tipKorisnika=3 "
        . "order by 2";
$korisnici = $baza->selectDB($upit);
$upit1 = "select k.ID_korisnik,k.prezime,k.ime, e.*,e.od "
        . "from korisnik as k join evidencija as e "
        . "on k.ID_korisnik=e.korisnik "
        . "where e.provjera=0 "
        . "order by e.od";
$korisnici1 = $baza->selectDB($upit1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $posjetitelj = "";
    $brojSobe = "";
    $ID_evidencija = "";
    $stanar1 = "";
    $posjetitelj1 = "";
    $do = "";

    $ID_evidencija = $_POST['korisnici1'];
    $posjetitelj1 = $_POST['posjetitelj'];
    $vrijemeOD = $_POST['od'];
    $dolazak = $_POST['vrijemeOdlaska'];
    $do = date("H:i:s", strtotime($dolazak));
    if (isset($stanar1)) {
        if (empty($dolazak)) {
            $greska .= "Popunite sva polja za odlazak gosta!<br>";
        } else {
            if ($vrijemeOD < $dolazak) {
                $izmjena1 = "update evidencija "
                        . "set do='$do', provjera='1' "
                        . "where ID_evidencija='$ID_evidencija' and posjetitelj='$posjetitelj1'";
                $podaci1 = $baza->updateDB($izmjena1);
                if ($podaci1 == null) {
                    $greska .= "Greška kod unosa!<br>";
                } else {
                    $greska .= "Uspješno unešeno!<br>";
                   // header("Refresh:1");
                }
            }
            else
            {
                $greska .= "Vrijeme odlaska mora biti vece!<br>";
            }
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
