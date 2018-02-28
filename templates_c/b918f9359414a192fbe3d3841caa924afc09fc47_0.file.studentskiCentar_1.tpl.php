<?php /* Smarty version 3.1.22-dev/30, created on 2018-02-26 16:40:57
         compiled from "predlosci/studentskiCentar_1.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:18522728285a942a896ace92_86711002%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b918f9359414a192fbe3d3841caa924afc09fc47' => 
    array (
      0 => 'predlosci/studentskiCentar_1.tpl',
      1 => 1519659655,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18522728285a942a896ace92_86711002',
  'variables' => 
  array (
    'greska' => 0,
    'korisnici' => 0,
    'korisnik' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/30',
  'unifunc' => 'content_5a942a896dfb26_88685290',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a942a896dfb26_88685290')) {
function content_5a942a896dfb26_88685290 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '18522728285a942a896ace92_86711002';
?>


    <div class="container">
        <selection>
    <div id="greske">  <?php echo $_smarty_tpl->tpl_vars['greska']->value;?>
 </div>
</selection>
      <div class="clanak">
          <div>
            <h1>Računi subvencioniranih studenata</h1>
          </div>
        <hr>
          <table class="ispisKorisnika" border="1" style="margin-left: -20%">
                 <thead>
                     <tr>
                    <th>Korisnik</th>
                    <th>Datum izdavanja</th>
                    <th>Vrijeme izdavanja</th>
                    <th>Iznos</th>
                    <th>Obrađeno</th>
                    <th>Plaćeno</th>
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
                             <td><?php echo $_smarty_tpl->tpl_vars['korisnik']->value['prezime'];?>
 <?php echo $_smarty_tpl->tpl_vars['korisnik']->value['ime'];?>
</td>
                             <td><?php echo $_smarty_tpl->tpl_vars['korisnik']->value['datum'];?>
</td>
                             <td><?php echo $_smarty_tpl->tpl_vars['korisnik']->value['vrijeme'];?>
</td>
                             <td><?php echo $_smarty_tpl->tpl_vars['korisnik']->value['iznos'];?>
</td>
                             <td><?php if (($_smarty_tpl->tpl_vars['korisnik']->value['obradjeno']==0)) {?>ne <?php }?></td>
                             <td><?php if (($_smarty_tpl->tpl_vars['korisnik']->value['placeno']==0)) {?>ne <?php }?></td>
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