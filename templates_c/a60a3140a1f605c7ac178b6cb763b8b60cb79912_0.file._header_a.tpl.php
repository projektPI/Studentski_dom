<?php /* Smarty version 3.1.22-dev/30, created on 2018-02-21 16:26:10
         compiled from "predlosci/_header_a.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3717070035a8d8f92bfacb5_80314874%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a60a3140a1f605c7ac178b6cb763b8b60cb79912' => 
    array (
      0 => 'predlosci/_header_a.tpl',
      1 => 1519224740,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3717070035a8d8f92bfacb5_80314874',
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/30',
  'unifunc' => 'content_5a8d8f92c1bb20_80251376',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a8d8f92c1bb20_80251376')) {
function content_5a8d8f92c1bb20_80251376 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '3717070035a8d8f92bfacb5_80314874';
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
                    <li><a href="rangLista.php" >Rang lista</a></li>
                    <li><a href="azuriranje.php" >Ažuriranje korisnika</a></li>
                    <li><a href="ispisKorisnika.php" >Ispis korisnika</a></li>
                    <li><a href="ispisZaposlenika.php" >Ispis zaposlenika</a></li>
                    <li><a href="studentskiCentar.php" >SC računi</a></li>
                </ul>
            </nav>
        </aside>
<?php }
}
?>