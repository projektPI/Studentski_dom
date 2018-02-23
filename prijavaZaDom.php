<?php
session_start();
header('Content-Type: text/html; charset=utf-8');
include_once './baza.class.php';
$greska = "";
$table = "";
$baza = new Baza();
$korisnik = array();

if (!isset($_SESSION['korisnickoIme'])) {
    $greska .= "Morate biti prijavljeni!<br>";
    header("Location:prijava.php");
    //exit();
}
$tipKorisnikaPrijava = $_SESSION['tipKorisnika'];
if ($tipKorisnikaPrijava != 2 && $tipKorisnikaPrijava != 3) {
    $greska = "Samo recepcionar i administrator mogu prostupiti";
    header("Location:prijava.php");
}

$prijavljeniKorisnik = $_SESSION['id_korisnik'];
$tipKorisnika = $_SESSION['tipKorisnika'];
$upit = "select k.*"
        . "from korisnik as k "
        . "where k.ID_korisnik='$prijavljeniKorisnik'";
$korisnici = $baza->selectDB($upit);
$korisnik = mysqli_fetch_array($korisnici);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $soba1 = "";
    $soba2 = "";
    $soba3 = "";
    $studij = "";
    $prosjek = "";
    $subvencija = "";

    $soba1 = $_POST['prviSoba'];
    $soba2 = $_POST['drugiSoba'];
    $subvencijaDohvati = 1;
    $datum = date("Y-m-d");
    $vrijeme = date("H:i:s");
    //provjera jel je vec unijeta prijava za tog studenta
    $upit1 = "select p.*,k.*"
            . "from prijava as p join korisnik as k "
            . "on p.korisnik=k.ID_korisnik "
            . "where p.korisnik='$prijavljeniKorisnik' and k.tipKorisnika='2'";
    $rezultat = $baza->selectDB($upit1);
    if ($rezultat->num_rows != null) {
        $greska .= "Već ste se prijavili za dom!<br>";
    } else {
        if ($tipKorisnika == '2') {
            $studij = $_POST['studij'];
            $prosjek = $_POST['prosjek'];
            $soba3 = $_POST['treciSoba'];
            //$subvencija = $_POST['Subvencija'];
            if (empty($studij) || empty($prosjek) || empty($soba1) || empty($soba2) || empty($soba3)) {
                $greska .= "Popunite sva polja za unos!<br>";
            } else {
                if ($soba1 == $soba2 || $soba2 == $soba3 || $soba3 == $soba1) {
                    $greska .= "Greška kod odabira soba! Moraju biti različite!<br>";
                } else {
                    //sobe dohvacanje ID 1
                    if ($soba1 == "Dvokrevetna soba - 2") {
                        $soba1ID = '3';
                    }
                    if ($soba1 == "Trokrevetna soba - 3") {
                        $soba1ID = '4';
                    }
                    if ($soba1 == "Četverokrevetna soba - 4") {
                        $soba1ID = '5';
                    }
                    if ($soba1 == "Četverokrevetna soba s kupaonom - 5") {
                        $soba2ID = '6';
                    }
                    //sobe dohvacanje ID 2
                    if ($soba2 == "Dvokrevetna soba - 2") {
                        $soba2ID = '3';
                    }
                    if ($soba2 == "Trokrevetna soba - 3") {
                        $soba2ID = '4';
                    }
                    if ($soba2 == "Četverokrevetna soba - 4") {
                        $soba2ID = '5';
                    }
                    if ($soba2 == "Četverokrevetna soba s kupaonom - 5") {
                        $soba2ID = '6';
                    }
                    //sobe dohvacanje ID 3
                    if ($soba3 == "Dvokrevetna soba - 2") {
                        $soba3ID = '3';
                    }
                    if ($soba3 == "Trokrevetna soba - 3") {
                        $soba3ID = '4';
                    }
                    if ($soba3 == "Četverokrevetna soba - 4") {
                        $soba3ID = '5';
                    }
                    if ($soba3 == "Četverokrevetna soba s kupaonom - 5") {
                        $soba3ID = '6';
                    }
                    //checkbox
                    if (isset($_POST['Subvencija'])) {
                        $subvencijaDohvati = '0';
                    }
                    $izmjena = "INSERT INTO prijava values "
                            . "(Default,'$datum', '$studij','$prosjek', '$prijavljeniKorisnik', '$soba1ID','$soba2ID','$soba3ID','$vrijeme','$subvencijaDohvati') ";
                    $podaci = $baza->selectDB($izmjena);
                    if ($podaci == null) {
                        $greska .= "Greška kod unosa!<br>";
                    } else {
                        $greska .= "Uspješno unešeno!<br>";
                    }
                }
            }
        }
        if ($tipKorisnika == '3') {
            //za profesora
            //sobe dohvacanje ID 1
            $soba = 0;
            $datumDo = $_POST['datum'];
            if (empty($datumDo)) {
                $greska = "Unesite datum do kojeg ostajete!<br>";
            } else {
                if ($soba1 == "Jednokrevetna soba - 1") {
                    $soba1ID = '1';
                }
                if ($soba1 == "Jednokrevetna soba s kupaonom - 2") {
                    $soba1ID = '2';
                }
                //sobe dohvacanje ID 2
                if ($soba2 == "Jednokrevetna soba - 1") {
                    $soba2ID = '1';
                }
                if ($soba2 == "Jednokrevetna soba s kupaonom - 2") {
                    $soba2ID = '2';
                }
                //provjera dostupnosti sobe
                $provjeriSobe = "SELECT count(*) as broj1 "
                        . "from unajmljeno "
                        . "where soba='1' and do> current_date";
                $iznos = $baza->selectDB($provjeriSobe);
                $broj1 = mysqli_fetch_assoc($iznos);
                //provjeri broj jednosobne s k
                $provjeriSobe1 = "SELECT count(*) as broj2 "
                        . "from unajmljeno "
                        . "where soba='2' and do> current_date";
                $iznos1 = $baza->selectDB($provjeriSobe1);
                $broj2 = mysqli_fetch_assoc($iznos1);
                
                if ($soba1 == "Jednokrevetna soba - 1" && $broj1['broj1'] < 5) {
                    $soba = 2;
                }
                if ($soba1 == "Jednokrevetna soba s kupaonom - 2" && $broj2['broj2'] < 5) {
                    $soba = 2;
                }
                if ($soba != 0) {
                    $izmjena = "INSERT INTO prijava values "
                            . "(Default,'$datum', null,null, '$prijavljeniKorisnik', '$soba1ID','$soba2ID',null,'$vrijeme','$subvencijaDohvati') ";
                    $podaci = $baza->selectDB($izmjena);
                    if ($podaci == null) {
                        $greska .= "Greška kod unosa!<br>";
                    } else {
                        $greska .= "Uspješno unešeno!<br>";
                    }
                    $unajmi = "INSERT INTO unajmljeno VALUES "
                            . "(default, '$datum','$datumDo','1','$soba', '$prijavljeniKorisnik')";
                    $podaci2 = $baza->selectDB($unajmi);
                } else {
                    $greska .= "Nema slobodne sobe, javite se u SC!<br>";
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
$smarty->assign('tipKorisnika', $tipKorisnika);
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
$smarty->display('prijavaZaDom_1.tpl');
//$smarty->display('_footer.tpl');
?>


