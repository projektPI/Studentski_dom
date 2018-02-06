<?php
header('Content-Type: text/html; charset=utf-8');
include_once './baza.class.php';
$greska = "";
$table="";
$baza = new Baza();
$korisnik=array();

//$korisnik=$_SESSION['korisnik'];
$upit = "select ime,prezime,userName from korisnik";
$podaci = $baza->selectDB($upit);
if ($podaci->num_rows != 0) {
    while ($red = $podaci->fetch_array()) {
        $table.= "<tr>";
        $table.= "<td>".$red['ime']."</td>";
        $table.= "<td>".$red['prezime']."</td>";
        $table.= "<td>".$red['userName']."</td>";
        $table.= "</tr>";
    }
} else {
    $greska.= "Nemate ni jedan izdan racun";
}

$upit1="select ime,prezime,userName from korisnik";
$korisnici=$baza->selectDB($upit);
/*dodijeli($smarty,array(
   'naslov' =>'Korisnici' ,
   'korisnik'=>$korisnik,
   'korisnici'=>$korisnici
));*/

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


