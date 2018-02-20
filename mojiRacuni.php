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

$prijavljeniKorisnik = $_SESSION['id_korisnik'];
$upit="select r.*"
      . "from racun as r join korisnik as k on k.ID_korisnik=r.korisnik "
      . "where k.ID_korisnik='$prijavljeniKorisnik'";
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
$smarty->display('_header.tpl');
$smarty->display('mojiRacuni.tpl');
$smarty->display('_footer.tpl');
?>


