<?php /* Smarty version 3.1.22-dev/30, created on 2018-02-23 15:49:03
         compiled from "predlosci/prijava_1.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:5035428265a9029dfbcdcd7_01135397%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f68529bad2bee6bcb22fc2e406265ca24ef9c29' => 
    array (
      0 => 'predlosci/prijava_1.tpl',
      1 => 1519397273,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5035428265a9029dfbcdcd7_01135397',
  'variables' => 
  array (
    'greska' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/30',
  'unifunc' => 'content_5a9029dfbf56c5_49968031',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a9029dfbf56c5_49968031')) {
function content_5a9029dfbf56c5_49968031 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '5035428265a9029dfbcdcd7_01135397';
?>


    <div class="container">
        <selection>
    <div id="greske">  <?php echo $_smarty_tpl->tpl_vars['greska']->value;?>
 </div>
</selection>
      <div class="clanak">
        <form class="formaRegistracija" method="POST" action="prijava.php">
            <h1>Prijava</h1>
            <hr>
            <div class="input_registracija">
            <label for="text"><b>Korisničko ime</b></label>
            <input type="text" placeholder="Upisite kor. ime" name="korIme" required><br>
            <label for="psw"><b>Lozinka</b></label>
            <input type="password" placeholder="Upisite Lozinku" name="loz" required><br><br>
            </div>
            <div class="clearfix">
                <input type="submit" class="signupbtn" value="Prijavi se">
                 <input type="reset" class="cancelbtn" value="Otkaži" >
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