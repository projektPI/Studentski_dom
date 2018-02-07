<?php
header('Content-Type: text/html; charset=utf-8');
include_once './baza.class.php';
$greska = "";
$baza = new Baza();

if (!isset($_SESSION['korisnickoIme'])) {
    $greska.= "Morate biti prijavljeni!<br>";
    //header("Location:index.php");
    //exit();
}
$korisnik = $_SESSION['id_korisnik'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $opisKvara = $_POST['opisKvara'];
    $brojSobe = $_POST['brojSobe'];
    $datum= date("Y-m-d H:i:s");
    if (empty($opisKvara) || empty($brojSobe)) {
        $greska.= "Popunite sva polja<br>";
    }
    else{
        $izmjena="INSERT INTO prijavaKvara values ('$opisKvara', '$brojSobe', '$datum', '$korsinik') ";
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
//prosljeđivanje parametara greške za ispis na ekran
$smarty->assign('greska', $greska);
//prikaži header
$smarty->display('_header.tpl');
//prikaži index ili bilo koju drugu stranicu
$smarty->display('prijavaKvara.tpl');
//prikaži footer
$smarty->display('_footer.tpl');
?>
