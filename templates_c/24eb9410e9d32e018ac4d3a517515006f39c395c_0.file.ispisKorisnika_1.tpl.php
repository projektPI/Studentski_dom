<?php /* Smarty version 3.1.22-dev/30, created on 2018-02-23 16:33:06
         compiled from "predlosci/ispisKorisnika_1.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:15051802045a90343268b8f2_51892733%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24eb9410e9d32e018ac4d3a517515006f39c395c' => 
    array (
      0 => 'predlosci/ispisKorisnika_1.tpl',
      1 => 1519399985,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15051802045a90343268b8f2_51892733',
  'variables' => 
  array (
    'greska' => 0,
    'korisnici' => 0,
    'korisnik' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/30',
  'unifunc' => 'content_5a9034326bad70_42190682',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a9034326bad70_42190682')) {
function content_5a9034326bad70_42190682 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '15051802045a90343268b8f2_51892733';
?>


    <div class="container">
        <selection>
    <div id="greske">  <?php echo $_smarty_tpl->tpl_vars['greska']->value;?>
 </div>
</selection>
      <div class="clanak">
          <div>
            <h1>Ispis korisnika</h1>
          </div>
        <hr>
          <table class="ispisKorisnika" border="1" style="margin-left: -20%">
                 <thead>
                     <tr>
                    <th>Ime</th>
                    <th>Prezime</th>
                    <th>Korisničko ime</th>
                    <th>Email</th>
                    <th>Adresa</th>
                    <th>Mjesto</th>
                    <th>Država</th>
                    <th>Telefon</th>
                    <th>Xica</th>
                    <th>Tip korisnika</th>
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
</td>
                             <td><?php echo $_smarty_tpl->tpl_vars['korisnik']->value['prezime'];?>
</td>
                             <td><?php echo $_smarty_tpl->tpl_vars['korisnik']->value['userName'];?>
</td>
                             <td><?php echo $_smarty_tpl->tpl_vars['korisnik']->value['email'];?>
</td>
                             <td><?php echo $_smarty_tpl->tpl_vars['korisnik']->value['adresa'];?>
</td>
                             <td><?php echo $_smarty_tpl->tpl_vars['korisnik']->value['mjesto'];?>
</td>
                             <td><?php echo $_smarty_tpl->tpl_vars['korisnik']->value['drzava'];?>
</td>
                             <td><?php echo $_smarty_tpl->tpl_vars['korisnik']->value['telefon'];?>
</td>
                             <td><?php echo $_smarty_tpl->tpl_vars['korisnik']->value['xica'];?>
</td>
                             <td><?php echo $_smarty_tpl->tpl_vars['korisnik']->value['naziv'];?>
</td>
                         </tr>
                         <?php
$_smarty_tpl->tpl_vars['korisnik'] = $foreachItemSav;
}
?>
                 </tbody>
             </table>
                 <br>
      
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