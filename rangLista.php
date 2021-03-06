<?php
session_start();
header('Content-Type: text/html; charset=utf-8');
include_once './baza.class.php';
$greska = "";
$table = "";
$baza = new Baza();
$korisnik = array();
$danasnjiDatum = date("Y/m/d");
$danasnjeVrijeme = date("H:i:s");
$datum="";
$brojMjesta="";

$korisnikID = $_SESSION['id_korisnik'];
$tipKorisnikaPrijava=$_SESSION['tipKorisnika'];

if ($tipKorisnikaPrijava!=1) {
    $greska="Samo recepcionar i administrator mogu prostupiti<br>";
    header("Location:prijava.php");
}
$upit = "select k.*"
        . "from korisnik as k "
        . "where k.ID_korisnik='$korisnikID'";
$rez = $baza->selectDB($upit);
$korisnik = mysqli_fetch_array($rez);

$upit = "select k.ime,k.prezime,k.userName,k.email, p.datum, p.studij, p.prosjek "
        . "from korisnik as k join prijava as p on k.ID_korisnik=p.korisnik "
        . "where p.datum<='$danasnjiDatum' and k.tipKorisnika='2'"
        . "order by p.prosjek desc";
$korisnici = $baza->selectDB($upit);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //$vrijeme="00:00:00";
    $datum = $_POST['datum'];
    $brojMjesta = $_POST['brojMjesta'];

    //provjeri jel postoji rang lista
    $provjeri = "select r.*"
           . "from rangLista as r";
$izv = $baza->selectDB($provjeri);
 if ($izv->num_rows == 0) {
    if (empty($brojMjesta)) {
        $greska = "Unesite broj mjesta!<br>";
    } else {
        //ako nije unesen novi onda se zakljuca na danasnji
        if(empty($datum)){
         $datum=$danasnjiDatum;   
         $upit = "select k.ime,k.prezime,k.userName,k.email, p.datum, p.studij, p.prosjek "
                . "from korisnik as k join prijava as p on k.ID_korisnik=p.korisnik "
                . "where p.datum<='$datum' and k.tipKorisnika='2' "
                . "order by p.prosjek desc "
                . "LIMIT $brojMjesta";
        $korisnici = $baza->selectDB($upit);
        $greska = "Datum zaključavanja je promjenjen na " . $datum;
        $izmjena="insert into rangLista values "
                . "(1, '$datum','$brojMjesta')";
        $podaci=$baza->selectDB($izmjena);
        }
        //uneseni datum se unosi
        else{
            $upit = "select k.ime,k.prezime,k.userName,k.email, p.datum, p.studij, p.prosjek "
                . "from korisnik as k join prijava as p on k.ID_korisnik=p.korisnik "
                . "where p.datum<='$datum' and k.tipKorisnika='2' "
                . "order by p.prosjek desc "
                . "LIMIT $brojMjesta";
        $korisnici = $baza->selectDB($upit);
        $greska = "Datum zaključavanja je promjenjen na " . $datum;
        $izmjena="insert into rangLista values "
                . "(1, '$datum','$brojMjesta')";
        $podaci=$baza->selectDB($izmjena);
        }
        
    //punjenje soba
    $brojD = 5 * 2;
    $brojT = 5 * 3;
    $brojC = 10 * 4;
    $brojCk = 5 * 4;
    $od = '2017-10-1';
    $do = '2018-07-1';
    $brojSobe = 0;
    
    //$brojSobeT = 0;
   // $brojSobeC = 0;

    $upit2 = "select k.ID_korisnik,k.ime,k.prezime,k.userName,k.email, p.datum, p.studij, p.prosjek "
            . "from korisnik as k join prijava as p on k.ID_korisnik=p.korisnik "
            . "where p.datum<='$datum' and k.tipKorisnika='2' "
            . "order by p.prosjek desc "
            . "LIMIT $brojMjesta";
    $korisnici2 = $baza->selectDB($upit2);
    $UkupnoStudenata = $korisnici2->num_rows;
    While($red = mysqli_fetch_array($korisnici2)){
        $dobivenaSoba=false;
        $upit1 = "select k.ID_korisnik, p.soba1, p.soba2, p.soba3, p.placanje "
                . "from korisnik as k join prijava as p on k.ID_korisnik=p.korisnik "
                . "where k.ID_korisnik=$red[0] and k.tipKorisnika='2' ";
        $student = $baza->selectDB($upit1);
        $dohvaceneSobe = mysqli_fetch_row($student);
        //prvi izbor
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
            $dobivenaSoba=true;
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
            $dobivenaSoba=true;
        }
        //ako zeli cetverokrevetnu
        if ($dohvaceneSobe[1] == 5 && $brojC > 0) {
              //tip sobe
            $soba = 5;
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
            $dobivenaSoba=true;
        }
        //ako zeli cetverokrevetnu s k
        if ($dohvaceneSobe[1] == 6 && $brojCk > 0) {
              //tip sobe
            $soba = 6;
            //da li placa sam
            if ($dohvaceneSobe[4] == 1) {
                $placanje = 1;
            } else {
                $placanje = 0;
            }
            $unos = "INSERT INTO unajmljeno "
                    . "values (Default,'$od', '$do', '$placanje','$soba',$dohvaceneSobe[0]) ";
            $podaci = $baza->selectDB($unos);
            $brojCk--;
            $dobivenaSoba=true;
        }
        if($dobivenaSoba==false){
            echo $dohvaceneSobe[0];
            echo "+, ";
        }
        //drugi izbor
        // 
        if($dobivenaSoba==false){
        if ($dohvaceneSobe[2] == 3 && $brojD > 0) {
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
            $dobivenaSoba=true;
        }
        //ako zeli trokrevetnu
        if ($dohvaceneSobe[2] == 4 && $brojT > 0) {
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
            $dobivenaSoba=true;
        }
        //ako zeli cetverokrevetnu
        if ($dohvaceneSobe[2] == 5 && $brojC > 0) {
              //tip sobe
            $soba = 5;
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
            $dobivenaSoba=true;
        }
        //ako zeli cetverokrevetnu s k
        if ($dohvaceneSobe[2] == 6 && $brojCk > 0) {
              //tip sobe
            $soba = 6;
            //da li placa sam
            if ($dohvaceneSobe[4] == 1) {
                $placanje = 1;
            } else {
                $placanje = 0;
            }
            $unos = "INSERT INTO unajmljeno "
                    . "values (Default,'$od', '$do', '$placanje','$soba',$dohvaceneSobe[0]) ";
            $podaci = $baza->selectDB($unos);
            $brojCk--;
            $dobivenaSoba=true;
        }
        }
        //treci izbor
        if($dobivenaSoba==false){
        if ($dohvaceneSobe[3] == 3 && $brojD > 0) {
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
            $dobivenaSoba=true;
        }
        //ako zeli trokrevetnu
        if ($dohvaceneSobe[3] == 4 && $brojT > 0) {
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
            $dobivenaSoba=true;
        }
        //ako zeli cetverokrevetnu
        if ($dohvaceneSobe[3] == 5 && $brojC > 0) {
              //tip sobe
            $soba = 5;
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
            $dobivenaSoba=true;
        }
        //ako zeli cetverokrevetnu s k
        if ($dohvaceneSobe[3] == 6 && $brojCk > 0) {
              //tip sobe
            $soba = 6;
            //da li placa sam
            if ($dohvaceneSobe[4] == 1) {
                $placanje = 1;
            } else {
                $placanje = 0;
            }
            $unos = "INSERT INTO unajmljeno "
                    . "values (Default,'$od', '$do', '$placanje','$soba',$dohvaceneSobe[0]) ";
            $podaci = $baza->selectDB($unos);
            $brojCk--;
            $dobivenaSoba=true;
        }
        }
        //AKO NISTA NE DOBIJE OD IZABRANIH
        if($dobivenaSoba==false && $brojD>0){
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
            $dobivenaSoba=true;
        }
        if($dobivenaSoba==false && $brojT>0){
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
            $dobivenaSoba=true;
        }
        if($dobivenaSoba==false && $brojCk>0){
               //tip sobe
            $soba = 6;
            //da li placa sam
            if ($dohvaceneSobe[4] == 1) {
                $placanje = 1;
            } else {
                $placanje = 0;
            }
            $unos = "INSERT INTO unajmljeno "
                    . "values (Default,'$od', '$do', '$placanje','$soba',$dohvaceneSobe[0]) ";
            $podaci = $baza->selectDB($unos);
            $brojCk--;
            $dobivenaSoba=true;
        }
        if($dobivenaSoba==false && $brojC>0){
               //tip sobe
            $soba = 5;
            //da li placa sam
            if ($dohvaceneSobe[4] == 1) {
                $placanje = 1;
            } else {
                $placanje = 0;
            }
            $unos = "INSERT INTO unajmljeno "
                    . "values (Default,'$od', '$do', '$placanje','$soba',$dohvaceneSobe[0]) ";
            $podaci = $baza->selectDB($unos);
            $brojCk--;
            $dobivenaSoba=true;
        }
    }
    }
}
else{
    $greska="Rang lista je već postavljena!<br>";
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

if($tipKorisnikaPrijava=='1'){
$smarty->display('_header_a_1.tpl');
}
$smarty->display('rangLista_1.tpl');
//$smarty->display('_footer.tpl');
?>


