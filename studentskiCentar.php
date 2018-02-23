<?php
session_start();
header('Content-Type: text/html; charset=utf-8');
include_once './baza.class.php';
$greska = "";
$table="";
$baza = new Baza();
$korisnik=array();

if (!isset($_SESSION['korisnickoIme'])) {
    $greska.= "Morate biti prijavljeni!<br>";
    header("Location:prijava.php");
    //exit();
}
$tipKorisnikaPrijava=$_SESSION['tipKorisnika'];

if ($tipKorisnikaPrijava!=1) {
    $greska="Samo recepcionar i administrator mogu prostupiti";
    header("Location:prijava.php");
}
$prijavljeniKorisnik = $_SESSION['id_korisnik'];
$upit = "select k.*"
        . "from korisnik as k "
        . "where k.ID_korisnik='$prijavljeniKorisnik'";
$rez = $baza->selectDB($upit);
$korisnik = mysqli_fetch_array($rez);

$upit="select r.*,s.*,k.*"
      . "from racun as r join studentskiCentar as s "
      . "on r.ID_racun=s.racun "
        . "join korisnik as k "
        . "on k.ID_korisnik=r.korisnik "
        . "order by r.datum, k.prezime";
$korisnici=$baza->selectDB($upit);
require_once 'vanjske_biblioteke/smarty/libs/Smarty.class.php';
require_once 'ukljuciSmarty.php';
$smarty = new Smarty();
$obj = new UkljuciSmarty($smarty);
$smarty->assign('greska', $greska);
$smarty->assign('table', $table);
$smarty->assign(array(
   'naslov' =>'Korisnici' ,
   'korisnik'=>$korisnik,
   'korisnici'=>$korisnici
));
if($tipKorisnikaPrijava=='1'){
$smarty->display('_header_a_1.tpl');
}
$smarty->display('studentskiCentar_1.tpl');
?>


