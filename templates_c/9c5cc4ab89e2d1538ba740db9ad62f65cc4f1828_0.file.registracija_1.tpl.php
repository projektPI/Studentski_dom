<?php /* Smarty version 3.1.22-dev/30, created on 2018-02-23 15:59:49
         compiled from "predlosci/registracija_1.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:21267158285a902c6503e165_40131358%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c5cc4ab89e2d1538ba740db9ad62f65cc4f1828' => 
    array (
      0 => 'predlosci/registracija_1.tpl',
      1 => 1519397985,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21267158285a902c6503e165_40131358',
  'variables' => 
  array (
    'greska' => 0,
    'korisnici' => 0,
    'korisnik' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/30',
  'unifunc' => 'content_5a902c6506e556_97010760',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a902c6506e556_97010760')) {
function content_5a902c6506e556_97010760 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '21267158285a902c6503e165_40131358';
?>

    <div class="container-unos">
       <selection style=" margin-top: 10%; margin-left: 60%;">
    <div id="greske">  <?php echo $_smarty_tpl->tpl_vars['greska']->value;?>
 </div>
</selection>
      <div class="clanak">
        <form class="naslov" method="POST" action="registracija.php">
            <h1>Registracija</h1>
            <p>Ispunite navedene podatke kako bi se registrirali</p>
            <hr>
            <div class="input_registracija">
            <label for="text"><b>Ime</b></label>
            <input type="text" placeholder="Upisite ime" name="ime" required> <br>
            <label for="text"><b>Prezime</b></label>
            <input type="text" placeholder="Upisite prezime" name="prezime" required><br>
            <label for="text"><b>Korisničko ime</b></label>
            <input type="text" placeholder="Upisite kor. ime" name="korIme" required><br>
            <label for="psw"><b>Lozinka</b></label>
            <input type="password" placeholder="Upisite Lozinku" name="loz" required><br>
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Upisite Email" name="email" required><br>
            <label for="text"><b>Adresa</b></label>
            <input type="text" placeholder="Upisite Adresu" name="adresa" required><br>
            <label for="text"><b>Grad</b></label>
            <input type="text" placeholder="Upisite Grad" name="grad" required><br>
            <label for="text"><b>Država</b></label>
            <input type="text" placeholder="Upisite Državu" name="drzava" required><br>
            <label for="text"><b>Telefonski broj</b></label>
            <input type="number" placeholder="Upisite Tel. broj" name="broj" required><br>
            <label for="text"><b>Iksica</b></label>
            <input type="number" placeholder="Upisite Iksicu" name="iksica" ><br>
            <label for="text"><b>Tip korisnika</b></label>
            <select class="input_registracija1" name="korisnici" id="korisnici">
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
                    <option selected value="<?php echo $_smarty_tpl->tpl_vars['korisnik']->value['ID_tipKorisnika'];?>
"><?php echo $_smarty_tpl->tpl_vars['korisnik']->value['naziv'];?>
</option>
                <?php
$_smarty_tpl->tpl_vars['korisnik'] = $foreachItemSav;
}
?>
            </select><br><br>
</div>
<div class="clearfix">
                <input type="submit" class="signupbtn" value="Registriraj se">
                <button type="cancel" onclick="window.location='index.php';return false;">Otkaži</button>
</div>

        </form>
          </div>
  </div>
</div><!-- /.container -->


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