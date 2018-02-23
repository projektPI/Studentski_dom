<?php /* Smarty version 3.1.22-dev/30, created on 2018-02-21 16:00:37
         compiled from "predlosci/_header_s.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:8573494335a8d899568dd27_16183564%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc27480d3d9be9b55732b7e5c6d43da32b255152' => 
    array (
      0 => 'predlosci/_header_s.tpl',
      1 => 1519225235,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8573494335a8d899568dd27_16183564',
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/30',
  'unifunc' => 'content_5a8d89956b5070_84910694',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a8d89956b5070_84910694')) {
function content_5a8d89956b5070_84910694 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '8573494335a8d899568dd27_16183564';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Studentski dom</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="application-name" content="Studentski dom">
        <meta name="authors" content="Petar Crnjak, Anja Slobodnjak, Ivana Puja, Nada Cvitković">
        <meta name="description" content="Datum izrade: 1.2.2018"> 
        <link rel="stylesheet" type="text/css" href="css/dizajn.css" media="screen" rel="stylesheet"/>
        <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"><?php echo '</script'; ?>
>
    </head>
    <body>
        <div id="header">
            <figure>
                <h1 id="pocetak">Studentski dom</h1>

                <ul id="odjava">
                    <li> <a  href='odjava.php ' > Odjava</a> </li> 
                </ul>
            </figure>   
        </div>

        <aside><nav>
                <ul>
                    <li><a href="index.php" >Početna stranica</a></li>
                    <li><a href="prijava.php" >Prijava</a></li>
                    <li><a href="registracija.php" >Registracija</a></li>
                    <li><a href="prijavaZaDom.php" >PrijavaZaDom</a></li>
                    <li><a href="rangLista1.php" >Rang lista</a></li>
                    <li><a href="azuriranje.php">Moji podaci </a></li>
                    <li><a href="mojiRacuni.php" >Moji računi</a></li>
                    <li><a href="prijavaKvara.php" >Prijava kvara</a></li>
                    <li><a href="zahtjevZaIzlazak.php" >Zahtjev za izlazak </a></li>
                </ul>
            </nav>
        </aside>
<?php }
}
?>