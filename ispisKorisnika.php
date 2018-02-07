<?php
header('Content-Type: text/html; charset=utf-8');
include_once './baza.class.php';
$greska = "";
$table="";
$baza = new Baza();
$korisnik=array();

//$korisnik=$_SESSION['korisnik'];

$upit="select k.ime,k.prezime,k.userName,k.email,k.adresa,k.mjesto,k.drzava,k.telefon,k.xica,t.naziv "
        . "from korisnik as k join tip_korisnika as t on k.tipKorisnika=t.ID_tipKorisnika "
        . "where k.tipKorisnika='2'"
        . "order by 2";
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
$smarty->display('ispisKorisnika.tpl');
$smarty->display('_footer.tpl');
?>


