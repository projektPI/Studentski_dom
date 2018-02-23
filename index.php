<?php
session_start();
header('Content-Type: text/html; charset=utf-8');
include_once './baza.class.php';
$greska = "";
$baza = new Baza();
$korisnik=array();
$tipKorisnikaPrijava="";

if (isset($_SESSION['korisnickoIme'])) {
    $tipKorisnikaPrijava=$_SESSION['tipKorisnika'];
$id=$_SESSION['id_korisnik'];
$upit="select k.* from "
        . "korisnik as k "
      . "where k.ID_korisnik='$id'";
$rez=$baza->selectDB($upit);
$korisnik = mysqli_fetch_array($rez);
}
require_once 'vanjske_biblioteke/smarty/libs/Smarty.class.php';
require_once 'ukljuciSmarty.php';
$smarty = new Smarty();
$obj = new UkljuciSmarty($smarty);
$smarty->assign('greska', $greska);
$smarty->assign(array(
   'naslov' =>'Korisnici' ,
   'korisnik'=>$korisnik
));
if($tipKorisnikaPrijava=='1'){
$smarty->display('_header_a_1.tpl');
}
if($tipKorisnikaPrijava=='2'){
$smarty->display('_header_s_1.tpl');
}
if($tipKorisnikaPrijava=='3'){
$smarty->display('_header_p_1.tpl');
}
if($tipKorisnikaPrijava=='4'){
$smarty->display('_header_r_1.tpl');
}
if(empty($tipKorisnikaPrijava)){
   $smarty->display('_header_1.tpl'); 
}
$smarty->display('pocetna.tpl');
?>


