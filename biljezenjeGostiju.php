<?php

header('Content-Type: text/html; charset=utf-8');
include_once './baza.class.php';
$greska = "";
$baza = new Baza();

if (!isset($_SESSION['korisnickoIme'])) {
    $greska .= "Morate biti prijavljeni!<br>";
    //header("Location:index.php");
    //exit();
}
$korisnik = $_SESSION['id_korisnik'];

$upit = "select k.ID_korisnik,k.prezime,k.ime from korisnik as k order by 2";
$korisnici = $baza->selectDB($upit);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $posjetitelj = $_POST['posjetitelj'];
    $brojSobe = $_POST['brojSobe'];
    $stanar= $_POST['korisnici'];
    $datum = date("Y-m-d");
    $vrijemeOD = date("H:i:s");
    if (empty($posjetitelj) || empty($brojSobe)) {
        $greska .= "Popunite sva polja<br>";
    } else {
        $izmjena = "INSERT INTO evidencija values (Default,'$stanar', '$brojSobe','$posjetitelj', '$vrijemeOD', null, '$datum') ";
        $podaci = $baza->selectDB($izmjena);
        if ($podaci == null) {
            $greska .= "Greška kod unosa!<br>";
        } else {
            $greska .= "Uspješno unešeno!<br>";
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
));
$smarty->display('_header.tpl');
$smarty->display('biljezenjeGostiju.tpl');
$smarty->display('_footer.tpl');
?>
