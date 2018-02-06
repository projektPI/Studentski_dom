<?php
header('Content-Type: text/html; charset=utf-8');
include_once './baza.class.php';
$greska = "";
$baza = new Baza();

require_once 'vanjske_biblioteke/smarty/libs/Smarty.class.php';
require_once 'ukljuciSmarty.php';
$smarty = new Smarty();
$obj = new UkljuciSmarty($smarty);
//prosljeđivanje parametara greške za ispis na ekran
$smarty->assign('greska', $greska);
//prikaži header
$smarty->display('_header.tpl');
//prikaži index ili bilo koju drugu stranicu
$smarty->display('index.tpl');
//prikaži footer
$smarty->display('_footer.tpl');
?>


