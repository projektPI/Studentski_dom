<?php /* Smarty version 3.1.22-dev/30, created on 2018-02-21 00:13:19
         compiled from "predlosci/registracija.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:7304476155a8cab8fb9b1e5_89683122%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ac379d153add7922ccef7f590e4000ba89a4d10' => 
    array (
      0 => 'predlosci/registracija.tpl',
      1 => 1519168397,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7304476155a8cab8fb9b1e5_89683122',
  'variables' => 
  array (
    'greska' => 0,
    'korisnici' => 0,
    'korisnik' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/30',
  'unifunc' => 'content_5a8cab8fbc72c9_64515437',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a8cab8fbc72c9_64515437')) {
function content_5a8cab8fbc72c9_64515437 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '7304476155a8cab8fb9b1e5_89683122';
?>
<selection>
    <div id="greske">  <?php echo $_smarty_tpl->tpl_vars['greska']->value;?>
 </div>
</selection>
<div class="container-registracija">

    <div class="clanak">
        <form class="formaRegistracija" style="border:1px solid #ccc" method="POST" action="registracija.php">
            <h1>Registracija</h1>
            <p>Ispunite navedene podatke kako bi se registrirali</p>
            <hr>
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
                    <option selected value="<?php echo $_smarty_tpl->tpl_vars['korisnik']->value['ID_tipKorisnika'];?>
"><?php echo $_smarty_tpl->tpl_vars['korisnik']->value['naziv'];?>
</option>
                <?php
$_smarty_tpl->tpl_vars['korisnik'] = $foreachItemSav;
}
?>
            </select><br><br>


                <input type="reset" class="cancelbtn" value="Cancel" >
                <input type="submit" class="signupbtn" value="Sign Up">
           

        </form>
    </div>
</div><?php }
}
?>