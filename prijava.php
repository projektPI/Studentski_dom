<?php
session_start();
ob_start();
header('Content-Type: text/html; charset=utf-8');
include_once './baza.class.php';
$greska = "";
$baza = new Baza();
$korisnik = array();
$korisnik1 = array();

/*if (isset($_SESSION['korisnickoIme'])) {
    $greska .= "Već ste prijavljeni!<br>";
    header("Refresh:1, url=index.php");
    //exit();
}*/
//$korisnik = $_SESSION['id_korisnik'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $korIme = $_POST['korIme'];
    $lozinka = $_POST['loz'];
    
    $datum = date("Y-m-d");
    $vrijemeOD = date("H:i:s");
   
        $izmjena = "SELECT k.*, t.* from "
                . "korisnik as k join tip_Korisnika as t "
                . "on t.ID_tipKorisnika=k.tipKorisnika "
                . "where k.userName='$korIme' and k.password='$lozinka'";
        $podaci = $baza->selectDB($izmjena);
        if ($podaci->num_rows != 1) {
            $greska .= "Nepostojeći korisnik!<br>";
        } else {
            $podaci = mysqli_fetch_array($podaci);
            $greska .= "Uspješno ste prijavljeni!<br>";
             $_SESSION['tipKorisnika'] = $podaci['tipKorisnika'];
             $_SESSION['id_korisnik'] = $podaci['ID_korisnik'];
             $_SESSION['korisnickoIme'] = $podaci['userName'];
            header("Location: index.php");
        }
}
require_once 'vanjske_biblioteke/smarty/libs/Smarty.class.php';
require_once 'ukljuciSmarty.php';
$smarty = new Smarty();
$obj = new UkljuciSmarty($smarty);
$smarty->assign('greska', $greska);
$smarty->assign(array(
    'naslov' => 'Korisnici',
    'korisnik' => $korisnik
));
$smarty->display('_header.tpl');
$smarty->display('prijava.tpl');
$smarty->display('_footer.tpl');
ob_end_flush();
?>
