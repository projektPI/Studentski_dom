<?php
session_start();
header('Content-Type: text/html; charset=utf-8');
include_once './baza.class.php';
$greska = "";
$table = "";
$baza = new Baza();
$korisnik = array();
$danasnjiDatum = date("Y/m/d");
$danasnjeVrijeme = date("H:i:s");
$datum="";
$brojMjesta="";
//$korisnik=$_SESSION['korisnik'];
$tipKorisnikaPrijava=$_SESSION['tipKorisnika'];

if ($tipKorisnikaPrijava!=2) {
    $greska="Morate biti prijavljeni!";
    header("Location:prijava.php");
}
//dohvati rang lista promjene
$dohvatiVrijednosti=" Select r.datum, r.limit "
        . "from rangLista r "
        . "where r.idRangLista='1'";
$iznos = $baza->selectDB($dohvatiVrijednosti);
$red = mysqli_fetch_row($iznos);
$promjenjeniDatum=$red[0];
$promjenjeniLimit=$red[1];


$upit = "select k.ime,k.prezime,k.userName,k.email, p.datum, p.studij, p.prosjek "
                . "from korisnik as k join prijava as p on k.ID_korisnik=p.korisnik "
                . "where p.datum<='$promjenjeniDatum' and k.tipKorisnika='2'"
                . "order by p.prosjek desc "
                . "LIMIT $promjenjeniLimit";
$korisnici = $baza->selectDB($upit);

require_once 'vanjske_biblioteke/smarty/libs/Smarty.class.php';
require_once 'ukljuciSmarty.php';
$smarty = new Smarty();
$obj = new UkljuciSmarty($smarty);
$smarty->assign('greska', $greska);
$smarty->assign('table', $table);
$smarty->assign(array(
    'naslov' => 'Korisnici',
    'korisnik' => $korisnik,
    'korisnici' => $korisnici
));
$smarty->display('_header.tpl');
$smarty->display('rangLista1.tpl');
$smarty->display('_footer.tpl');
?>


