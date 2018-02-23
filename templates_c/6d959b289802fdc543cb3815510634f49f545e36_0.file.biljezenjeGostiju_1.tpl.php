<?php /* Smarty version 3.1.22-dev/30, created on 2018-02-23 17:14:43
         compiled from "predlosci/biljezenjeGostiju_1.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:8300740115a903df3232b04_75946684%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d959b289802fdc543cb3815510634f49f545e36' => 
    array (
      0 => 'predlosci/biljezenjeGostiju_1.tpl',
      1 => 1519402481,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8300740115a903df3232b04_75946684',
  'variables' => 
  array (
    'greska' => 0,
    'korisnici' => 0,
    'korisnik' => 0,
    'korisnici1' => 0,
    'korisnik1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/30',
  'unifunc' => 'content_5a903df3267e13_75509788',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a903df3267e13_75509788')) {
function content_5a903df3267e13_75509788 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '8300740115a903df3232b04_75946684';
?>


<div class="container">
    <selection>
        <div id="greske">  <?php echo $_smarty_tpl->tpl_vars['greska']->value;?>
 </div>
    </selection>
    <div class="clanak">
        <form name="naslov" id="kvar" method="POST" enctype='multipart/form-data' action="biljezenjeGostiju.php">
            <h1>Prijava vanjskih gostiju</h1>
            <hr>
            <div class="input_registracija">
                <label for="kategorija">Unesite broj sobe: </label>
                <input type="number" name="brojSobe" id="brojSobe"  placeholder="broj sobe">
                <label for="kategorija">Unesite posjetitelja/e: </label>
                <textarea class="input_registracija1" rows="3" cols="30" type="text" name="posjetitelj1" id="posjetitelj1"  placeholder="posjetitelj/i"></textarea><br><br><br>
                <label for="kategorija">Vrijeme dolaska:  </label>
                <input type="time" name="vrijemeDolaska" id="vrijemeDolaska"  placeholder="vrijeme dolaska">
                <label for="biraniKorisnik">Izaberite stanara: </label>
                <select name="korisnici" class="input_registracija1">
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
                </select><br>
            </div>
            <div class="clearfix">
                <input name="potvrda" id="potvrda" type="submit" value="Prijavi" class="gumb">   
                <input name="reset" id="reset" type="reset" value="Reset" class="gumb">  
            </div>
        </form>
        <h1>Bilježenje odlazaka</h1>
        <form name="kvar" id="kvar" method="POST" enctype='multipart/form-data' action="biljezenjeGostiju1.php">
            <hr>
            <div class="input_registracija">
                <label for="biraniKorisnik">Izaberite posjetitelja/e: </label>
                <select name="korisnici1" class="input_registracija1">
                    <?php
$_from = $_smarty_tpl->tpl_vars['korisnici1']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['korisnik1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['korisnik1']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['korisnik1']->value) {
$_smarty_tpl->tpl_vars['korisnik1']->_loop = true;
$foreachItemSav = $_smarty_tpl->tpl_vars['korisnik1'];
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['korisnik1']->value['ID_evidencija'];?>
"><?php echo $_smarty_tpl->tpl_vars['korisnik1']->value['posjetitelj'];?>
</option>
                    <?php
$_smarty_tpl->tpl_vars['korisnik1'] = $foreachItemSav;
}
?>
                </select><br>
                <label for="kategorija">Broj sobe: </label>
                <input type="number" name="soba" id="soba"  placeholder="broj sobe" readonly <?php if (isset($_smarty_tpl->tpl_vars['korisnik1']->value['soba'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['korisnik1']->value['soba'];
}?>"><br>
                <label for="kategorija">Posjetitelj/i: </label>
                <input type="text" size="35" name="posjetitelj" id="posjetitelj"  placeholder="posjetitelj/i" readonly  <?php if (isset($_smarty_tpl->tpl_vars['korisnik1']->value['posjetitelj'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['korisnik1']->value['posjetitelj'];
}?>"></input><br>
                <label for="kategorija">Vrijeme dolaska:  </label>
                <input type="time" name="od" id="od"  placeholder="vrijeme dolaska" readonly <?php if (isset($_smarty_tpl->tpl_vars['korisnik1']->value['od'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['korisnik1']->value['od'];
}?>" >
                <label for="kategorija">Unesite vrijeme odlaska:  </label>
                <input type="time" name="vrijemeOdlaska" id="vrijemeOdlaska"  placeholder="vrijeme odlaska"><br/><br>

            </div>
            <div class="clearfix">
                <input name="potvrda" id="potvrda" type="submit" value="Prijavi" class="gumb">   
                <input name="reset" id="reset" type="reset" value="Reset" class="gumb">  
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
<?php }
}
?>