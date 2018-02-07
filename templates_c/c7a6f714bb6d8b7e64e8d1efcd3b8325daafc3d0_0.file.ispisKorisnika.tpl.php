<?php /* Smarty version 3.1.22-dev/30, created on 2018-02-06 21:05:36
         compiled from "predlosci/ispisKorisnika.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:8276516045a7a0a9004da84_38954256%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7a6f714bb6d8b7e64e8d1efcd3b8325daafc3d0' => 
    array (
      0 => 'predlosci/ispisKorisnika.tpl',
      1 => 1517947535,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8276516045a7a0a9004da84_38954256',
  'variables' => 
  array (
    'greska' => 0,
    'korisnici' => 0,
    'korisnik' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/30',
  'unifunc' => 'content_5a7a0a900818a3_15654968',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a7a0a900818a3_15654968')) {
function content_5a7a0a900818a3_15654968 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '8276516045a7a0a9004da84_38954256';
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
        </div>
    </article>
</section>
       <?php }
}
?>