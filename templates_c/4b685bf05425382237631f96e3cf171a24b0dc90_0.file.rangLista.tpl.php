<?php /* Smarty version 3.1.22-dev/30, created on 2018-02-12 18:11:04
         compiled from "predlosci/rangLista.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1458810575a81caa89cef86_38620428%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b685bf05425382237631f96e3cf171a24b0dc90' => 
    array (
      0 => 'predlosci/rangLista.tpl',
      1 => 1518455462,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1458810575a81caa89cef86_38620428',
  'variables' => 
  array (
    'greska' => 0,
    'korisnici' => 0,
    'korisnik' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/30',
  'unifunc' => 'content_5a81caa8a039c6_14806992',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a81caa8a039c6_14806992')) {
function content_5a81caa8a039c6_14806992 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '1458810575a81caa89cef86_38620428';
?>
<section class="sadrzaj">
    <article id="greske"> <?php echo $_smarty_tpl->tpl_vars['greska']->value;?>
 </article>
    <article id="ispisKorisnika">
        <h2 style="text-align: center" >Korisnici</h2>
 
        <div id="table-container"> 
             <form name="rang" id="rang" method="POST" enctype='multipart/form-data' action="rangLista.php">

            <label for="kategorija">Promjeni datum zaključavanja: </label>
            <input type="date" name="datum" id="datum"><br/>
            <label for="kategorija">Promjeni vrijeme zaključavanja: </label>
            <input type="time" name="vrijeme" id="vrijeme" ><br/>
            <label for="kategorija">Broj mjesta: </label>
            <input type="number" name="brojMjesta" id="brojMjesta"><br/><br>
            
            <input name="potvrda" id="potvrda" type="submit" value="Unesi" class="gumb">   
            <input name="reset" id="reset" type="reset" value="Reset" class="gumb">

             </form><br>
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
           <input type="button" value="Podjela soba" class="homebutton" id="btnHome" 
onClick="document.location.href='podjelaSoba.php'" />
        </div>
    </article>
</section>
       <?php }
}
?>