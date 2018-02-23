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
$prijavljeniKorisnik=$_SESSION['id_korisnik'];
$tipKorisnikaPrijava=$_SESSION['tipKorisnika'];

if ($tipKorisnikaPrijava!=2) {
    $greska="Morate biti prijavljeni!";
    header("Location:prijava.php");
}
$upit = "select k.*"
        . "from korisnik as k "
        . "where k.ID_korisnik='$prijavljeniKorisnik'";
$rez = $baza->selectDB($upit);
$korisnik = mysqli_fetch_array($rez);
//dohvati rang lista promjene
$dohvatiVrijednosti=" Select r.datum, r.brojMjesta "
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

if($tipKorisnikaPrijava=='2'){
$smarty->display('_header_s_1.tpl');
}
if($tipKorisnikaPrijava=='3'){
$smarty->display('_header_p_1.tpl');
}
$smarty->display('rangLista1_1.tpl');
//$smarty->display('_footer.tpl');
?>


