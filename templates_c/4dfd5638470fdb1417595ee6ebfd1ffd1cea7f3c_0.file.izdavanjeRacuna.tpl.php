<?php /* Smarty version 3.1.22-dev/30, created on 2018-02-22 14:48:12
         compiled from "predlosci/izdavanjeRacuna.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:8440303175a8eca1cae2183_09209500%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4dfd5638470fdb1417595ee6ebfd1ffd1cea7f3c' => 
    array (
      0 => 'predlosci/izdavanjeRacuna.tpl',
      1 => 1519307107,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8440303175a8eca1cae2183_09209500',
  'variables' => 
  array (
    'greska' => 0,
    'korisnici' => 0,
    'korisnik' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/30',
  'unifunc' => 'content_5a8eca1cb25cc5_35191165',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a8eca1cb25cc5_35191165')) {
function content_5a8eca1cb25cc5_35191165 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '8440303175a8eca1cae2183_09209500';
?>
<selection>
    <div id="greske">  <?php echo $_smarty_tpl->tpl_vars['greska']->value;?>
 </div>
</selection>
<section id="sadrzaj">
    <h1>Izdavanje računa </h1>
    <article>
        <form name="kvar" id="kvar" method="POST" enctype='multipart/form-data' action="izdavanjeRacuna.php">

            <label for="biraniKorisnik">Izaberite tip korisnika: </label>
            <select name="korisnici" id="korisnici">
                <?php
$_from = $_smarty_tpl->tpl_vars['korisnici']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['korisnik'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['korisnik']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['korisnik']->value) {
$_smarty_tpl->tpl_vars['korisnik']->_loop = true;
$foreachItemSav = $_smarty_tpl->tpl_vars['korisnik'];
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['korisnik']->value['ID_tipKorisnika'];?>
"><?php echo $_smarty_tpl->tpl_vars['korisnik']->value['naziv'];?>
</option>
                <?php
$_smarty_tpl->tpl_vars['korisnik'] = $foreachItemSav;
}
?>
            </select><br>

            <label for="kategorija">Datum: </label>
            <input type="date" id="e" name="datum"  size="20" placeholder="ime" readonly value="Date()"><br><br>

            <input name="potvrda" id="potvrda" type="submit" value="Izdaj račune" class="gumb">  
        </form>
            </article> 
            </section>
            
            <?php echo '<script'; ?>
>
                document.getElementById('e').value = new Date().toISOString().substring(0, 10);
            <?php echo '</script'; ?>
>
<?php }
}
?>