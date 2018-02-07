<?php
header('Content-Type: text/html; charset=utf-8');
include_once './baza.class.php';
$greska = "";
$korisnici1="";
$baza = new Baza();
$korisnik=array();

//$korisnik=$_SESSION['korisnik'];
$upit = "select k.ID_korisnik,k.prezime,k.ime from korisnik as k join tip_korisnika as t on k.tipKorisnika=t.ID_tipKorisnika where k.tipKorisnika='2' order by 2";
$korisnici=$baza->selectDB($upit);

$upit2="select t.ID_tipKorisnika,t.naziv from tip_korisnika as t order by 2 desc";
$tipovi=$baza->selectDB($upit2);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $odabraniKorisnik = $_POST['korisnici'];
    $ime = $_POST['ime'];
    $prezime = $_POST['prez'];
    $korisnickoIme = $_POST['korime'];
    $email = $_POST['email'];
    $adresa = $_POST['adresa'];
    $mjesto = $_POST['mjesto'];
    $drzava = $_POST['drzava'];
    $telefon = $_POST['tel'];
    $xica = $_POST['xica'];
    $tipKorisnika = $_POST['biraniTip'];
    if (empty($ime) || empty($prezime) || empty($korisnickoIme) || empty($email) || empty($adresa) || empty($mjesto) || empty($drzava) || empty($telefon) || empty($xica) || empty($tipKorisnika)) {
        $greska.= "Popunite sva polja!<br>";
    }
    else{
        $izmjena="UPDATE korisnik "
                . "SET ime='$ime', prezime='$prezime', userName='$korisnickoIme', email='$email', adresa='$adresa', mjesto='$mjesto', drzava='$drzava', telefon='$telefon', xica='$xica', tipKorisnika='$tipKorisnika' "
                . "WHERE ID_korisnik = '$odabraniKorisnik'";
        $podaci=$baza->selectDB($izmjena);
        if ($podaci == null) {
         $greska.= "Greška kod izmjene!<br>";
        }
        else{
            $greska.= "Uspješno izmjenjeno!<br>";
        }
    }
}


require_once 'vanjske_biblioteke/smarty/libs/Smarty.class.php';
require_once 'ukljuciSmarty.php';
$smarty = new Smarty();
$obj = new UkljuciSmarty($smarty);
$smarty->assign('greska', $greska);
$smarty->assign(array(
   'naslov' =>'Korisnici' ,
   'korisnik'=>$korisnik,
   'korisnici'=>$korisnici,
   'korisnici1'=>$korisnici1,
   'tipovi'=>$tipovi
));
$smarty->display('_header.tpl');
$smarty->display('azuriranje.tpl');
$smarty->display('_footer.tpl');
?>


