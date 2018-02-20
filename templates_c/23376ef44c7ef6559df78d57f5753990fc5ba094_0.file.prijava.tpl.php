<?php /* Smarty version 3.1.22-dev/30, created on 2018-02-18 18:16:10
         compiled from "predlosci/prijava.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:4729187935a89b4da63c822_75177509%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23376ef44c7ef6559df78d57f5753990fc5ba094' => 
    array (
      0 => 'predlosci/prijava.tpl',
      1 => 1518974150,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4729187935a89b4da63c822_75177509',
  'variables' => 
  array (
    'greska' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/30',
  'unifunc' => 'content_5a89b4da663360_34078395',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a89b4da663360_34078395')) {
function content_5a89b4da663360_34078395 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '4729187935a89b4da63c822_75177509';
?>
<selection>
    <div id="greske">  <?php echo $_smarty_tpl->tpl_vars['greska']->value;?>
 </div>
</selection>
<div class="container-registracija">

    <div class="clanak">
        <form class="formaRegistracija" style="border:1px solid #ccc" method="POST" action="prijava.php">
            <h1>Prijava</h1>
            <hr>
            <label for="text"><b>Korisničko ime</b></label>
            <input type="text" placeholder="Upisite kor. ime" name="korIme" required><br>
            <label for="psw"><b>Lozinka</b></label>
            <input type="password" placeholder="Upisite Lozinku" name="loz" required><br><br>
            
                <input type="reset" class="cancelbtn" value="Cancel" >
                <input type="submit" class="signupbtn" value="Sign Up">
           

        </form>
    </div>
</div><?php }
}
?>