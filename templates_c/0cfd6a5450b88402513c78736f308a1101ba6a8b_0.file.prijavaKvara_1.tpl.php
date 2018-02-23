<?php /* Smarty version 3.1.22-dev/30, created on 2018-02-23 17:01:07
         compiled from "predlosci/prijavaKvara_1.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:6859195095a903ac3176444_03152212%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0cfd6a5450b88402513c78736f308a1101ba6a8b' => 
    array (
      0 => 'predlosci/prijavaKvara_1.tpl',
      1 => 1519401665,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6859195095a903ac3176444_03152212',
  'variables' => 
  array (
    'greska' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/30',
  'unifunc' => 'content_5a903ac319fed4_72279046',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a903ac319fed4_72279046')) {
function content_5a903ac319fed4_72279046 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '6859195095a903ac3176444_03152212';
?>


<div class="container">
    <selection>
        <div id="greske">  <?php echo $_smarty_tpl->tpl_vars['greska']->value;?>
 </div>
    </selection>
    <div class="clanak">
        <form name="naslov" id="kvar" method="POST" enctype='multipart/form-data' action="prijavaKvara.php">
            <h1>Prijava kvara</h1>
            <hr>
            <div class="input_registracija">
                <label for="kategorija">Unesite opis kvara: </label>
                <textarea rows="4" cols="50" type="text" name="opisKvara" id="opisKvara"  placeholder="opis kvara..."></textarea><br/><br><br><br><br>  
                <label for="kategorija">Unesite broj sobe: </label>
                <input type="number" name="brojSobe" id="brojSobe"  placeholder="broj sobe"><br/><br>
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