<?php

header('Content-Type: text/html; charset=utf-8');
include_once './baza.class.php';
$greska = "";
$table = "";
$baza = new Baza();
$korisnik = array();
$danasnjiDatum = date("Y/m/d");
$danasnjeVrijeme = date("H:i:s");

//$korisnik=$_SESSION['korisnik'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $soba = $_POST['soba'];
    //$dvokrevetna=$_POST['dvokrevetna'];
    //$trokrevetna=$_POST['trokrevetna'];

    if ($soba == 'jednokrevetna') {
        echo "jednokrevetna";
        /* $upit = "select k.ime,k.prezime,k.userName,k.email, p.datum, p.studij, p.prosjek "
          . "from korisnik as k join prijava as p on k.ID_korisnik=p.korisnik "
          . "where p.datum<='$datum'"
          . "order by p.prosjek desc "
          . "LIMIT $brojMjesta";
          $korisnici = $baza->selectDB($upit);
          $greska = "Datum zaključavanja je promjenjen na ". $datum;
          }
          else {
          $greska = "Unesite ispravne vrijednosti";
          } */
    }
    if ($soba == 'dvokrevetna') {
        echo "dvokrevetna";
    }
    if ($soba == 'trokrevetna') {
        echo "trokrevetna";
    }
}

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
$smarty->display('podjelaSoba.tpl');
$smarty->display('_footer.tpl');
?>


