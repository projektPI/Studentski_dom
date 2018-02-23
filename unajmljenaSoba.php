<?php
session_start();
header('Content-Type: text/html; charset=utf-8');
include_once './baza.class.php';
$greska = "";
$table="";
$baza = new Baza();

if (!isset($_SESSION['korisnickoIme'])) {
    $greska.= "Morate biti prijavljeni!<br>";
    header("Location:prijava.php");
    //exit();
}

$prijavljeniKorisnik = $_SESSION['id_korisnik'];
$tipKorisnikaPrijava=$_SESSION['tipKorisnika'];

$upit = "select k.*"
        . "from korisnik as k "
        . "where k.ID_korisnik='$prijavljeniKorisnik'";
$rez = $baza->selectDB($upit);
$korisnik = mysqli_fetch_array($rez);

$upit="select k.*,u.*,s.* "
      . "from korisnik as k join unajmljeno as u "
      . "on k.ID_korisnik=u.korisnik "
      . "join soba as s "
      . "on u.soba=s.ID_soba "
      . "where k.ID_korisnik='$prijavljeniKorisnik'";
$korisnici=$baza->selectDB($upit);

require_once 'vanjske_biblioteke/smarty/libs/Smarty.class.php';
require_once 'ukljuciSmarty.php';
$smarty = new Smarty();
$obj = new UkljuciSmarty($smarty);
$smarty->assign('greska', $greska);
$smarty->assign('table', $table);
$smarty->assign(array(
   'naslov' =>'Korisnici',
   'korisnik'=>$korisnik,
   'korisnici'=>$korisnici
));
if($tipKorisnikaPrijava=='2'){
$smarty->display('_header_s_1.tpl');
}
if($tipKorisnikaPrijava=='3'){
$smarty->display('_header_p_1.tpl');
}
$smarty->display('unajmljenaSoba_1.tpl');
?>


