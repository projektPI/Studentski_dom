<?php

session_start();
header('Content-Type: text/html; charset=utf-8');
include_once './baza.class.php';
$greska = "";
$baza = new Baza();
$korisnik = array();
$korisnik1 = array();

$tipKorisnikaPrijava = "";
if (isset($_SESSION['korisnickoIme'])) {
    $tipKorisnikaPrijava = $_SESSION['tipKorisnika'];
    $korisnikID = $_SESSION['id_korisnik'];
    $upit = "select k.*"
            . "from korisnik as k "
            . "where k.ID_korisnik='$korisnikID'";
    $rez = $baza->selectDB($upit);
    $korisnik = mysqli_fetch_array($rez);
}
//$korisnik = $_SESSION['id_korisnik'];
$upit = "select t.*"
        . "from tip_korisnika as t "
        . "where ID_tipKorisnika=2 or ID_tipKorisnika=3 "
        . "order by naziv";
$korisnici = $baza->selectDB($upit);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ime = $_POST['ime'];
    $prezime = $_POST['prezime'];
    $korIme = $_POST['korIme'];
    $lozinka = $_POST['loz'];
    $email = $_POST['email'];
    $adresa = $_POST['adresa'];
    $grad = $_POST['grad'];
    $drzava = $_POST['drzava'];
    $broj = $_POST['broj'];
    $xica = $_POST['iksica'];
    $tipKorisnika = $_POST['korisnici'];

    $datum = date("Y-m-d");
    $vrijemeOD = date("H:i:s");

    if ($tipKorisnika == '2' && empty($xica)) {
        $greska .= "Morate unesti broj xice!<br>";
    } else {
        if (!preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,4}$/", $email)) {
            $greska .= "Email nije dobro unesen (nesto@nesto.nesto)<br>";
        } else {
            if (!preg_match('/^\d{13}$/', $xica)) {
                $greska .= "Xica mora sadržavati 13 brojki!<br>";
            } else {
                if (!preg_match('/^\d{10}$/', $broj)) {
                    $greska .= "Telefon mora sadržavati 10 brojki!<br>";
                } else {
                    $izmjena = "INSERT INTO korisnik values "
                            . "(Default,'$ime', '$prezime','$korIme', '$lozinka', '$email','$adresa','$grad','$drzava','$broj','$xica', '$tipKorisnika',null) ";
                    $podaci = $baza->selectDB($izmjena);
                    if ($podaci == null) {
                        $greska .= "Greška kod unosa!<br>";
                    } else {
                        $greska .= "Uspješno unešeno!<br>";
                        header("Location: prijava.php");
                    }
                }
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
    'korisnik' => $korisnik,
    'korisnici' => $korisnici
));
if ($tipKorisnikaPrijava == '1') {
    $smarty->display('_header_a_1.tpl');
}
if ($tipKorisnikaPrijava == '2') {
    $smarty->display('_header_s_1.tpl');
}
if ($tipKorisnikaPrijava == '3') {
    $smarty->display('_header_p_1.tpl');
}
if ($tipKorisnikaPrijava == '4') {
    $smarty->display('_header_r_1.tpl');
}
if (empty($tipKorisnikaPrijava)) {
    $smarty->display('_header_1.tpl');
}
$smarty->display('registracija_1.tpl');
//$smarty->display('_footer.tpl');
?>
