<?php
session_start();
header('Content-Type: text/html; charset=utf-8');
include_once './baza.class.php';
$greska = "";
$baza = new Baza();

if (!isset($_SESSION['korisnickoIme'])) {
    $greska .= "Morate biti prijavljeni!<br>";
    header("Location:prijava.php");
    //exit();
}

//$korisnik = $_SESSION['korisnik'];
$tipKorisnikaPrijava = $_SESSION['tipKorisnika'];
if ($tipKorisnikaPrijava != 1 && $tipKorisnikaPrijava != 4) {
    $greska = "Samo recepcionar i administrator mogu prostupiti";
    header("Location:prijava.php");
}

$upit = "select t.* "
        . "from tip_korisnika as t "
        . "where ID_tipKorisnika='2' or ID_tipKorisnika='3' "
        . "order by 2";
$korisnici = $baza->selectDB($upit);
$upit = "select k.ID_korisnik,k.prezime,k.ime "
        . "from korisnik as k join tip_korisnika as t "
        . "on k.tipKorisnika=t.ID_tipKorisnika "
        . "where t.ID_tipKorisnika=2 or t.ID_tipKorisnika=3 "
        . "order by 2";
$rez = $baza->selectDB($upit);
$korisnik = mysqli_fetch_array($rez);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $podaci = "";
    $korisnik1 = "";
    $odabraniTip = $_POST['korisnici'];
    $datumTrenutni = date("Y-m-d");
    $vrijeme = date("H:i:s");
    $upisanStudent = 0;
    $obavjest=0;
    $upit = "SELECT k.ID_korisnik,u.do,s.cijena FROM "
            . "Tip_korisnika t join korisnik k "
            . "on t.ID_tipKorisnika=k.tipKorisnika "
            . "join unajmljeno u "
            . "on k.ID_korisnik=u.korisnik "
            . "join soba s "
            . "on u.soba=s.ID_soba "
            . "where u.do>='$datumTrenutni' and "
            . "t.ID_tipKorisnika='$odabraniTip'";
    // . "and r.datum<'$datum'";
    $rezultat = $baza->selectDB($upit);
    if ($rezultat->num_rows == 0) {
        $greska .= "Ne postoji ni jedan korisnik za poslati račun!<br>";
    } else {
        if ($odabraniTip == '2') {
            //prolazi po redu svima kojima treba poslati racun
            while ($red = mysqli_fetch_array($rezultat)) {
                $korisnik1 = $red[0];
                $iznos = $red[2];
                $datum = date('Y-m-d');
                $datumUvecani = date('Y-m-d', strtotime('+1 months'));
                //daj najveci datum pojedinog racuna
                $provjera1 = "SELECT datum "
                        . "FROM racun "
                        . "WHERE datum=(SELECT MAX(datum) from racun "
                        . "WHERE korisnik='$korisnik1')";
                $izlaz1 = $baza->selectDB($provjera1);
                $red1 = mysqli_fetch_array($izlaz1);
                
                $date1 = $red1[0];
                $datumUzeti = date('Y-m-d', strtotime("+1 month", strtotime($date1)));
                //provjeri najveci datum + 1 mjesec s danasnjim
                if ($datumUzeti <= $datum) {
                        $izmjena = "INSERT INTO racun "
                                . "VALUES(default, '$datumTrenutni', '$vrijeme', '$iznos', 0, '$korisnik1')";
                        $podaci = $baza->selectDB($izmjena);
                        $upisanStudent = 1;
                        //dohvati id racuna
                        $sql="SELECT r.ID_racun from "
                                . "racun as r join korisnik as k "
                                . "on r.korisnik=k.ID_korisnik "
                                . "join unajmljeno as u "
                                . "on u.korisnik=k.ID_korisnik "
                                . "where r.datum='$datumTrenutni' and r.korisnik='$korisnik1' and u.placanje='0'";
                        $select=$baza->selectDB($sql);
                        //stavi u bazu sc
                        while($id = mysqli_fetch_array($select)){
                        $izmjena1 = "INSERT INTO studentskicentar "
                                . "VALUES(default, '0','$id[0]]')";
                        $podaci1 = $baza->selectDB($izmjena1);
                        }
                    }
            }
            if ($upisanStudent == 0) {
                $greska .= "Greška kod unosa, nije nijedan izdan račun!<br>";
            } else {
                $greska .= "Uspješno izdani računi za studente!<br>";
            }
        }
        if ($odabraniTip == '3') {
            //prolazi po redu svima kojima treba poslati racun
            while ($red = mysqli_fetch_array($rezultat)) {
                $korisnik1 = $red[0];
                $iznos = $red[2];
                $datumUvecani = date('Y-m-d', strtotime('+0 day'));
                //jel vec ima racun
                $provjera = "SELECT r.datum,r.*"
                        . "FROM racun as r "
                        . "WHERE r.datum >= '$datumUvecani' and r.korisnik='$korisnik1'";
                $izlaz = $baza->selectDB($provjera);
                $red = mysqli_fetch_array($izlaz);
                if ($red[0] >= $datumUvecani) {
                    if($obavjest==0){
                         $greska .= "Račun je već izdan za današnji dan!<br>";
                         $obavjest=1;
                    }
                }
                if ($izlaz->num_rows == 0) {
                    $izmjena = "INSERT INTO racun "
                            . "VALUES(default, '$datumTrenutni', '$vrijeme', '$iznos', 0, '$korisnik1')";
                    $podaci = $baza->selectDB($izmjena);
                }
            }
            if ($podaci == null) {
                $greska .= "Greška kod unosa, nije nijedan izdan račun!<br>";
            } else {
                $greska .= "Uspješno izdani računi za profesore!<br>";
            }
        }
    }
}
require_once 'vanjske_biblioteke/smarty/libs/Smarty.class.php';
require_once 'ukljuciSmarty.php';
$smarty = new Smarty();
$obj = new UkljuciSmarty($smarty);
$smarty->assign('greska', $greska);
$smarty->assign(array(
    'naslov' => 'Korisnici',
    'korisnici' => $korisnici,
    'korisnik' => $korisnik
));

if($tipKorisnikaPrijava=='1'){
$smarty->display('_header_a_1.tpl');
}
if($tipKorisnikaPrijava=='4'){
$smarty->display('_header_r_1.tpl');
}
$smarty->display('izdavanjeRacuna_1.tpl');
//$smarty->display('_footer.tpl');
?>


