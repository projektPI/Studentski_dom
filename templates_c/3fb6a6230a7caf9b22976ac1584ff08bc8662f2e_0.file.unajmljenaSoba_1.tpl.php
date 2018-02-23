<?php /* Smarty version 3.1.22-dev/30, created on 2018-02-23 16:23:49
         compiled from "predlosci/unajmljenaSoba_1.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:14570840355a9032057b3717_67444227%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3fb6a6230a7caf9b22976ac1584ff08bc8662f2e' => 
    array (
      0 => 'predlosci/unajmljenaSoba_1.tpl',
      1 => 1519399428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14570840355a9032057b3717_67444227',
  'variables' => 
  array (
    'greska' => 0,
    'korisnici' => 0,
    'korisnik' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/30',
  'unifunc' => 'content_5a9032057e3de7_36444335',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a9032057e3de7_36444335')) {
function content_5a9032057e3de7_36444335 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '14570840355a9032057b3717_67444227';
?>


    <div class="container">
        <selection>
    <div id="greske">  <?php echo $_smarty_tpl->tpl_vars['greska']->value;?>
 </div>
</selection>
      <div class="clanak">
        <div>
            <h1>Unajmljena soba</h1>
          </div>
          <hr>
        <table border="1">
                 <thead>
                     <tr>
                    <th>Ime i prezime</th>
                    <th>Unajmljeno od</th>
                    <th>Unajmljeno do</th>
                    <th>Tip sobe</th>
                    <th>Subvencija</th>
                    </tr>
                 </thead>
                 <tbody>
                     
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
                         <tr>
                             <td><?php echo $_smarty_tpl->tpl_vars['korisnik']->value['ime'];?>
 <?php echo $_smarty_tpl->tpl_vars['korisnik']->value['prezime'];?>
</td>
                             <td><?php echo $_smarty_tpl->tpl_vars['korisnik']->value['od'];?>
</td>
                             <td><?php echo $_smarty_tpl->tpl_vars['korisnik']->value['do'];?>
</td>
                             <td><?php echo $_smarty_tpl->tpl_vars['korisnik']->value['vrsta'];?>
</td>
                             <?php if (($_smarty_tpl->tpl_vars['korisnik']->value['placanje']==1)) {?><td>ne</td><?php }?>
                              <?php if (($_smarty_tpl->tpl_vars['korisnik']->value['placanje']==0)) {?><td>da</td><?php }?>
                         </tr>
                         <?php
$_smarty_tpl->tpl_vars['korisnik'] = $foreachItemSav;
}
?>
                 </tbody>
             </table>
      
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