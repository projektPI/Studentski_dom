<?php /* Smarty version 3.1.22-dev/30, created on 2018-02-18 19:04:57
         compiled from "predlosci/rangLista1.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:17460709975a89c049693539_10876689%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b34c475a1f266e7b72a699828bacf00af76aeca' => 
    array (
      0 => 'predlosci/rangLista1.tpl',
      1 => 1518977096,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17460709975a89c049693539_10876689',
  'variables' => 
  array (
    'greska' => 0,
    'korisnici' => 0,
    'korisnik' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/30',
  'unifunc' => 'content_5a89c0496c0ab3_47941013',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a89c0496c0ab3_47941013')) {
function content_5a89c0496c0ab3_47941013 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '17460709975a89c049693539_10876689';
?>
<section class="sadrzaj">
    <article id="greske"> <?php echo $_smarty_tpl->tpl_vars['greska']->value;?>
 </article>
    <article id="ispisKorisnika">
        <h2 style="text-align: center" >Rang lista</h2>
 
        <div id="table-container"> 
            
             <table border="1">
                 <thead>
                     <tr>
                    <th>Ime</th>
                    <th>Prezime</th>
                    <th>Korisničko ime</th>
                    <th>Email</th>
                    <th>Datum</th>
                    <th>Studij</th>
                    <th>Prosjek</th>
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
                             <td><?php echo $_smarty_tpl->tpl_vars['korisnik']->value['datum'];?>
</td>
                             <td><?php echo $_smarty_tpl->tpl_vars['korisnik']->value['studij'];?>
</td>
                             <td><?php echo $_smarty_tpl->tpl_vars['korisnik']->value['prosjek'];?>
</td>
                         </tr>
                         <?php
$_smarty_tpl->tpl_vars['korisnik'] = $foreachItemSav;
}
?>
                 </tbody>
             </table><br>
        </div>
    </article>
</section>
       <?php }
}
?>