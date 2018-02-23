<?php /* Smarty version 3.1.22-dev/30, created on 2018-02-22 21:41:58
         compiled from "predlosci/_header_a_1.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:10614424675a8f2b1640ff82_30243080%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a9dbbfeab5a285ae260dbccca01f2477011ca0a' => 
    array (
      0 => 'predlosci/_header_a_1.tpl',
      1 => 1519332114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10614424675a8f2b1640ff82_30243080',
  'variables' => 
  array (
    'korisnik' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/30',
  'unifunc' => 'content_5a8f2b16437367_74407540',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a8f2b16437367_74407540')) {
function content_5a8f2b16437367_74407540 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '10614424675a8f2b1640ff82_30243080';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Studentski centar</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/piprojektSvijetla.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><?php echo '<script'; ?>
 src="../../assets/js/ie8-responsive-file-warning.js"><?php echo '</script'; ?>
><![endif]-->
    <?php echo '<script'; ?>
 src="../../assets/js/ie-emulation-modes-warning.js"><?php echo '</script'; ?>
>

  
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Studentski centar</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#about"><?php echo $_smarty_tpl->tpl_vars['korisnik']->value['ime'];?>
 <?php echo $_smarty_tpl->tpl_vars['korisnik']->value['prezime'];?>
</a ></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <div class="clear"></div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="index.php">Početna stranica <span class="sr-only">(current)</span></a></li>
            <li><a href="rangLista.php" >Rang lista</a></li>
                    <li><a href="azuriranje.php" >Ažuriranje korisnika</a></li>
                    <li><a href="ispisKorisnika.php" >Ispis korisnika</a></li>
                    <li><a href="ispisZaposlenika.php" >Ispis zaposlenika</a></li>
                    <li><a href="studentskiCentar.php" >SC računi</a></li>
            <li><a href="odjava.php">Odjava</a></li>
            </ul>
        </div><?php }
}
?>