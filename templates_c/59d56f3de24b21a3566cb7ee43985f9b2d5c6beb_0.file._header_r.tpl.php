<?php /* Smarty version 3.1.22-dev/30, created on 2018-02-21 16:22:33
         compiled from "predlosci/_header_r.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:12321632935a8d8eb9d9b0c8_60916637%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59d56f3de24b21a3566cb7ee43985f9b2d5c6beb' => 
    array (
      0 => 'predlosci/_header_r.tpl',
      1 => 1519224582,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12321632935a8d8eb9d9b0c8_60916637',
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/30',
  'unifunc' => 'content_5a8d8eb9dbbff9_11624288',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a8d8eb9dbbff9_11624288')) {
function content_5a8d8eb9dbbff9_11624288 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '12321632935a8d8eb9d9b0c8_60916637';
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
                    <li><a href="biljezenjeGostiju.php" >Bilježenje vanjskih gostiju</a></li>
                    <li><a href="izdavanjeRacuna.php" >Izdavanje računa </a></li>

                </ul>
            </nav>
        </aside>
<?php }
}
?>