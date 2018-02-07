<?php /* Smarty version 3.1.22-dev/30, created on 2018-02-07 18:35:24
         compiled from "predlosci/biljezenjeGostiju.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2834415865a7b38dc2bc710_09481734%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df2eee5ee961bb7850f2b03b6eda603ffb4b9101' => 
    array (
      0 => 'predlosci/biljezenjeGostiju.tpl',
      1 => 1518024904,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2834415865a7b38dc2bc710_09481734',
  'variables' => 
  array (
    'greska' => 0,
    'korisnici' => 0,
    'korisnik' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/30',
  'unifunc' => 'content_5a7b38dc2eb484_76857978',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a7b38dc2eb484_76857978')) {
function content_5a7b38dc2eb484_76857978 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '2834415865a7b38dc2bc710_09481734';
?>
<selection>
    <div id="greske">  <?php echo $_smarty_tpl->tpl_vars['greska']->value;?>
 </div>
</selection>
<section id="sadrzaj">
    <h1>Bilježenje gostiju</h1>
    <article>
        <form name="kvar" id="kvar" method="POST" enctype='multipart/form-data' action="biljezenjeGostiju.php">

            <label for="kategorija">Unesite broj sobe: </label><br>
            <input type="number" name="brojSobe" id="brojSobe"  placeholder="broj sobe"><br/><br>
            <label for="kategorija">Unesite posjetitelja/e: </label><br>
            <textarea rows="3" cols="30" type="text" name="posjetitelj" id="posjetitelj"  placeholder="posjetitelj/i"></textarea><br/><br>
            <label for="biraniKorisnik">Izaberite stanara: </label><br>
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
                    <option value="<?php echo $_smarty_tpl->tpl_vars['korisnik']->value['ID_korisnik'];?>
"><?php echo $_smarty_tpl->tpl_vars['korisnik']->value['prezime'];?>
 <?php echo $_smarty_tpl->tpl_vars['korisnik']->value['ime'];?>
</option>
                <?php
$_smarty_tpl->tpl_vars['korisnik'] = $foreachItemSav;
}
?>
            </select><br><br>
            
            <input name="potvrda" id="potvrda" type="submit" value="Prijavi" class="gumb">   
            <input name="reset" id="reset" type="reset" value="Reset" class="gumb">  

        </form>
    </article> 
</section>
       <?php }
}
?>