<?php

session_start();
header('Content-Type: text/html; charset=utf-8');
include_once './baza.class.php';
$greska = "";
$korisnici1 = "";
$baza = new Baza();
$korisnik = array();

if (!isset($_SESSION['korisnickoIme'])) {
    $greska .= "Morate biti prijavljeni!<br>";
    header("Location:prijava.php");
    //exit();
}
$tipKorisnikaPrijava = $_SESSION['tipKorisnika'];
$korisnikID = $_SESSION['id_korisnik'];
$upit = "select k.*"
        . "from korisnik as k "
        . "where k.ID_korisnik='$korisnikID'";
$rez = $baza->selectDB($upit);
$korisnik = mysqli_fetch_array($rez);

//za obicnog
$upit2 = "select k.ID_korisnik,k.prezime,k.ime,k.*,t.* "
        . "from korisnik as k join tip_korisnika as t "
        . "on k.tipKorisnika=t.ID_tipKorisnika "
        . "where k.ID_korisnik='$korisnikID'"
        . "order by 2";
$rez = $baza->selectDB($upit2);
$korisnik2 = mysqli_fetch_array($rez);
//za admina
$upit = "select k.ID_korisnik,k.prezime,k.ime "
        . "from korisnik as k join tip_korisnika as t "
        . "on k.tipKorisnika=t.ID_tipKorisnika "
        . "where k.tipKorisnika='2' or '3' or '4'"
        . "order by 2";
$korisnici = $baza->selectDB($upit);
$korisnik3 = mysqli_fetch_array($korisnici);

$upit2 = "select t.ID_tipKorisnika,t.naziv "
        . "from tip_korisnika as t "
        . "order by 2 desc";
$tipovi = $baza->selectDB($upit2);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ime = $_POST['ime'];
    $prezime = $_POST['prez'];
    $korisnickoIme = $_POST['korime'];
    
    $email = $_POST['email'];
    $adresa = $_POST['adresa'];
    $mjesto = $_POST['mjesto'];
    $drzava = $_POST['drzava'];
    $telefon = $_POST['tel'];
    //ako smo admin
    if ($tipKorisnikaPrijava == '1') {
        $odabraniKorisnik = $_POST['korisnici'];
        $xica = $_POST['xica'];
        $tipKorisnika = $_POST['biraniTip'];
        if (empty($ime) || empty($prezime) || empty($korisnickoIme) || empty($email) || empty($adresa) || empty($mjesto) || empty($drzava) || empty($telefon) || empty($xica) || empty($tipKorisnika)) {
            $greska .= "Popunite sva polja!<br>";
        } else {
            $izmjena = "UPDATE korisnik "
                    . "SET ime='$ime', prezime='$prezime', userName='$korisnickoIme', email='$email', adresa='$adresa', mjesto='$mjesto', drzava='$drzava', telefon='$telefon', xica='$xica', tipKorisnika='$tipKorisnika' "
                    . "WHERE ID_korisnik = '$odabraniKorisnik'";
            $podaci = $baza->updateDB($izmjena);
            if ($podaci == null) {
                $greska .= "Greška kod izmjene!<br>";
            } else {
                $greska .= "Uspješno izmjenjeno!<br>";
            }
        }
    } else {
        //za obicnog korisnika
        $lozinka = $_POST['lozinka'];
         if (empty($ime) || empty($prezime) || empty($korisnickoIme) || empty($lozinka) || empty($email) || empty($adresa) || empty($mjesto) || empty($drzava) || empty($telefon)) {
            $greska .= "Popunite sva polja!<br>";
        } else {
            if(isset($xica)){
                 $xica = $_POST['xica'];
                 $izmjena = "UPDATE korisnik "
                    . "SET ime='$ime', prezime='$prezime', userName='$korisnickoIme', password='$lozinka', email='$email', adresa='$adresa', mjesto='$mjesto', drzava='$drzava', telefon='$telefon', xica='$xica' "
                    . "WHERE ID_korisnik = '$korisnikID'";
            $podaci = $baza->updateDB($izmjena);
            if ($podaci == null) {
                $greska .= "Greška kod izmjene!<br>";
            } else {
                $greska .= "Uspješno izmjenjeno!<br>";
                header("Refresh:1");
            }
            }
            else{
            $izmjena = "UPDATE korisnik "
                    . "SET ime='$ime', prezime='$prezime', userName='$korisnickoIme', password='$lozinka', email='$email', adresa='$adresa', mjesto='$mjesto', drzava='$drzava', telefon='$telefon' "
                    . "WHERE ID_korisnik = '$korisnikID'";
            $podaci = $baza->updateDB($izmjena);
            if ($podaci == null) {
                $greska .= "Greška kod izmjene!<br>";
            } else {
                $greska .= "Uspješno izmjenjeno!<br>";
                header("Refresh:1");
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
$smarty->assign('tipKorisnikaPrijava', $tipKorisnikaPrijava);
$smarty->assign(array(
    'naslov' => 'Korisnici',
    'korisnik' => $korisnik,
    'korisnici' => $korisnici,
    'korisnici1' => $korisnici1,
    'tipovi' => $tipovi,
    'korisnik2' => $korisnik2,
    'korisnik3' => $korisnik3
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
   $smarty->display('_header._1.tpl'); 
}
$smarty->display('azuriranje_1.tpl');
//$smarty->display('_footer.tpl');
?>


