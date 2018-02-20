<?php /* Smarty version 3.1.22-dev/30, created on 2018-02-21 00:00:28
         compiled from "predlosci/studentskiCentar.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:19333451045a8ca88cb3c008_31279197%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f4e3ec22bfb1593b9465f83ab13dbcef52e790a' => 
    array (
      0 => 'predlosci/studentskiCentar.tpl',
      1 => 1519167599,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19333451045a8ca88cb3c008_31279197',
  'variables' => 
  array (
    'greska' => 0,
    'korisnici' => 0,
    'korisnik' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/30',
  'unifunc' => 'content_5a8ca88cb6d7b8_91256174',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a8ca88cb6d7b8_91256174')) {
function content_5a8ca88cb6d7b8_91256174 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '19333451045a8ca88cb3c008_31279197';
?>
<section class="sadrzaj">
    <article id="greske"> <?php echo $_smarty_tpl->tpl_vars['greska']->value;?>
 </article>
    <article id="ispisKorisnika">
        <h2 style="text-align: center" >Računi</h2>
 
        <div id="table-container"> 
             <table border="1">
                 <thead>
                     <tr>
                    <th>ID računa</th>
                    <th>Datum izdavanja</th>
                    <th>Vrijeme izdavanja</th>
                    <th>Iznos</th>
                    <th>Obrađeno</th>
                    <th>Plaćeno</th>
                    <th>Korsinik</th>
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
                             <td><?php echo $_smarty_tpl->tpl_vars['korisnik']->value['ID_racun'];?>
</td>
                             <td><?php echo $_smarty_tpl->tpl_vars['korisnik']->value['datum'];?>
</td>
                             <td><?php echo $_smarty_tpl->tpl_vars['korisnik']->value['vrijeme'];?>
</td>
                             <td><?php echo $_smarty_tpl->tpl_vars['korisnik']->value['iznos'];?>
</td>
                             <td><?php if (($_smarty_tpl->tpl_vars['korisnik']->value['obradjeno']==0)) {?>ne <?php }?></td>
                             <td><?php if (($_smarty_tpl->tpl_vars['korisnik']->value['placeno']==0)) {?>ne <?php }?></td>
                             <td><?php echo $_smarty_tpl->tpl_vars['korisnik']->value['prezime'];?>
 <?php echo $_smarty_tpl->tpl_vars['korisnik']->value['ime'];?>
</td>
                         </tr>
                         <?php
$_smarty_tpl->tpl_vars['korisnik'] = $foreachItemSav;
}
?>
                 </tbody>
             </table>
        </div>
    </article>
</section>
       <?php }
}
?>