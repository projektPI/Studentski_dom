<?php /* Smarty version 3.1.22-dev/30, created on 2018-02-23 17:11:53
         compiled from "predlosci/izdavanjeRacuna_1.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:17414738905a903d49bab124_20764780%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e3372afd8a5bb2f653d91861c5f57e4276e4940' => 
    array (
      0 => 'predlosci/izdavanjeRacuna_1.tpl',
      1 => 1519402312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17414738905a903d49bab124_20764780',
  'variables' => 
  array (
    'greska' => 0,
    'korisnici' => 0,
    'korisnik' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/30',
  'unifunc' => 'content_5a903d49bd8975_11150527',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a903d49bd8975_11150527')) {
function content_5a903d49bd8975_11150527 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '17414738905a903d49bab124_20764780';
?>


<div class="container">
    <selection>
        <div id="greske">  <?php echo $_smarty_tpl->tpl_vars['greska']->value;?>
 </div>
    </selection>
    <div class="clanak">
        <form name="naslov" id="kvar" method="POST" enctype='multipart/form-data' action="izdavanjeRacuna.php">
            <h1>Izdavanje računa </h1>
            <hr>
            <div class="input_registracija">
                <label for="biraniKorisnik">Izaberite tip korisnika: </label>
                <select name="korisnici" id="korisnici" class="input_registracija1">
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
                <input type="date" id="e" name="datum"  size="20" placeholder="ime" readonly value="Date()"><br>
                
            </div>
            <div class="clearfix">
                <input name="potvrda" id="potvrda" type="submit" value="Izdaj račune" class="gumb">  
                <button type="cancel" onclick="window.location = 'index.php';
                                        return false;">Otkaži</button>
            </div>
        </form>

    </div><!-- /.container -->

</div>
</div>
</div>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>window.jQuery || document.write('<?php echo '<script'; ?>
 src="../../assets/js/vendor/jquery.min.js"><\/script>')<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../../dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<?php echo '<script'; ?>
 src="../../assets/js/ie10-viewport-bug-workaround.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php echo '<script'; ?>
>
                                   document.getElementById('e').value = new Date().toISOString().substring(0, 10);
<?php echo '</script'; ?>
><?php }
}
?>