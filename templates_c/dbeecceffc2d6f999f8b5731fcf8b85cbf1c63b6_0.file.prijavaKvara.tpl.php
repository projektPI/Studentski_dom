<?php /* Smarty version 3.1.22-dev/30, created on 2018-02-06 17:28:25
         compiled from "predlosci/prijavaKvara.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:15987932665a79d7a943e1c8_57018108%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dbeecceffc2d6f999f8b5731fcf8b85cbf1c63b6' => 
    array (
      0 => 'predlosci/prijavaKvara.tpl',
      1 => 1517934505,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15987932665a79d7a943e1c8_57018108',
  'variables' => 
  array (
    'greska' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/30',
  'unifunc' => 'content_5a79d7a9467ff5_46806350',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a79d7a9467ff5_46806350')) {
function content_5a79d7a9467ff5_46806350 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '15987932665a79d7a943e1c8_57018108';
?>
<selection>
    <div id="greske">  <?php echo $_smarty_tpl->tpl_vars['greska']->value;?>
 </div>
</selection>
<section id="sadrzaj">
    <h1>Prijava kvara</h1>
    <article>
        <form name="kvar" id="kvar" method="POST" enctype='multipart/form-data' action="prijavaKvara.php">

            <label for="kategorija">Unesite opis kvara: </label><br>
            <textarea rows="4" cols="50" type="text" name="opisKvara" id="opisKvara"  placeholder="opis kvara..."></textarea><br/><br>
            <label for="kategorija">Unesite broj sobe: </label><br>
            <input type="number" name="brojSobe" id="brojSobe"  placeholder="broj sobe"><br/><br>
            
            <input name="potvrda" id="potvrda" type="submit" value="Prijavi" class="gumb">   
            <input name="reset" id="reset" type="reset" value="Reset" class="gumb">  

        </form>
    </article> 
</section>
       <?php }
}
?>