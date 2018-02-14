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

$upit = "select k.ime,k.prezime,k.userName,k.email, p.datum, p.studij, p.prosjek "
        . "from korisnik as k join prijava as p on k.ID_korisnik=p.korisnik "
        . "where p.datum<='$danasnjiDatum' "
        . "order by p.prosjek desc";
$korisnici = $baza->selectDB($upit);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $datum = $_POST['datum'];
    $brojMjesta = $_POST['brojMjesta'];
    $vrijeme = date('H:i:s', strtotime($_POST['vrijeme']));

    if (!empty($datum) && !empty($brojMjesta)) {
        $upit = "select k.ime,k.prezime,k.userName,k.email, p.datum, p.studij, p.prosjek "
                . "from korisnik as k join prijava as p on k.ID_korisnik=p.korisnik "
                . "where p.datum<='$datum'"
                . "order by p.prosjek desc "
                . "LIMIT $brojMjesta";
        $korisnici = $baza->selectDB($upit);
        $greska = "Datum zaključavanja je promjenjen na " . $datum;
    } else {
        $greska = "Unesite ispravne vrijednosti";
    }
    //punjenje soba
    $brojD = 10 * 2;
    $brojT = 15 * 3;
    $brojC = 20 * 4;
    $od = '2019-10-1';
    $do = '2020-07-1';
    $brojSobe = 0;
    //$brojSobeT = 0;
   // $brojSobeC = 0;

    $upit2 = "select k.ID_korisnik,k.ime,k.prezime,k.userName,k.email, p.datum, p.studij, p.prosjek "
            . "from korisnik as k join prijava as p on k.ID_korisnik=p.korisnik "
            . "where p.datum<='$datum'"
            . "order by p.prosjek desc "
            . "LIMIT $brojMjesta";
    $korisnici2 = $baza->selectDB($upit2);
    $UkupnoStudenata = $korisnici2->num_rows;
    While($red = mysqli_fetch_array($korisnici2)){
        $upit1 = "select k.ID_korisnik, p.soba1, p.soba2, p.soba3, p.placanje "
                . "from korisnik as k join prijava as p on k.ID_korisnik=p.korisnik "
                . "where k.ID_korisnik=$red[0]";
        $student = $baza->selectDB($upit1);
        $dohvaceneSobe = mysqli_fetch_row($student);
        //ako zeli dvokrevetnu i ima mjesta
        if ($dohvaceneSobe[1] == 3 && $brojD > 0) {
            //tip sobe
            $soba = 3;
            //da li placa sam
            if ($dohvaceneSobe[4] == 1) {
                $placanje = 1;
            } else {
                $placanje = 0;
            }
            $unos = "INSERT INTO unajmljeno "
                    . "values (Default,'$od', '$do', '$placanje','$soba',$dohvaceneSobe[0]) ";
            $podaci = $baza->selectDB($unos);
            $brojD--;
        }
        //ako zeli trokrevetnu
        if ($dohvaceneSobe[1] == 4 && $brojT > 0) {
            //tip sobe
            $soba = 4;
            //da li placa sam
            if ($dohvaceneSobe[4] == 1) {
                $placanje = 1;
            } else {
                $placanje = 0;
            }
            $unos = "INSERT INTO unajmljeno "
                    . "values (Default,'$od', '$do', '$placanje','$soba',$dohvaceneSobe[0]) ";
            $podaci = $baza->selectDB($unos);
            $brojT--;
        }
        //ako zeli cetverokrevetnu
        if ($dohvaceneSobe[1] == 5 && $brojC > 0) {
              //tip sobe
            $soba = 4;
            //da li placa sam
            if ($dohvaceneSobe[4] == 1) {
                $placanje = 1;
            } else {
                $placanje = 0;
            }
            $unos = "INSERT INTO unajmljeno "
                    . "values (Default,'$od', '$do', '$placanje','$soba',$dohvaceneSobe[0]) ";
            $podaci = $baza->selectDB($unos);
            $brojC--;
        }
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
$smarty->display('rangLista.tpl');
$smarty->display('_footer.tpl');
?>


