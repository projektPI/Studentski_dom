<?php /* Smarty version 3.1.22-dev/30, created on 2018-02-14 23:24:35
         compiled from "predlosci/mojiRacuni.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3349203425a84b7235aeec0_63767956%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2fe476242cc06aa6dc13c814d41db84cbd7e5e44' => 
    array (
      0 => 'predlosci/mojiRacuni.tpl',
      1 => 1518647068,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3349203425a84b7235aeec0_63767956',
  'variables' => 
  array (
    'greska' => 0,
    'korisnici' => 0,
    'korisnik' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/30',
  'unifunc' => 'content_5a84b7235dc761_32765425',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a84b7235dc761_32765425')) {
function content_5a84b7235dc761_32765425 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '3349203425a84b7235aeec0_63767956';
?>
<section class="sadrzaj">
    <article id="greske"> <?php echo $_smarty_tpl->tpl_vars['greska']->value;?>
 </article>
    <article id="ispisKorisnika">
        <h2 style="text-align: center" >Korisnici</h2>
 
        <div id="table-container"> 
             <table border="1">
                 <thead>
                     <tr>
                    <th>ID računa</th>
                    <th>Datum izdavanja</th>
                    <th>Vrijeme izdavanja</th>
                    <th>Iznos</th>
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
                             <td><?php echo $_smarty_tpl->tpl_vars['korisnik']->value['ID_racun'];?>
</td>
                             <td><?php echo $_smarty_tpl->tpl_vars['korisnik']->value['datum'];?>
</td>
                             <td><?php echo $_smarty_tpl->tpl_vars['korisnik']->value['vrijeme'];?>
</td>
                             <td><?php echo $_smarty_tpl->tpl_vars['korisnik']->value['iznos'];?>
</td>
                             <td><?php echo $_smarty_tpl->tpl_vars['korisnik']->value['placeno'];?>
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