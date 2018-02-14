<?php /* Smarty version 3.1.22-dev/30, created on 2018-02-12 18:00:57
         compiled from "predlosci/podjelaSoba.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:14599708865a81c8490e51d1_31317255%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'afb8e57f46492bf1dbd6299f13fbab03949d9695' => 
    array (
      0 => 'predlosci/podjelaSoba.tpl',
      1 => 1518454855,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14599708865a81c8490e51d1_31317255',
  'variables' => 
  array (
    'greska' => 0,
    'korisnici' => 0,
    'korisnik' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/30',
  'unifunc' => 'content_5a81c849114c66_21767625',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a81c849114c66_21767625')) {
function content_5a81c849114c66_21767625 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '14599708865a81c8490e51d1_31317255';
?>
<section class="sadrzaj">
    <article id="greske"> <?php echo $_smarty_tpl->tpl_vars['greska']->value;?>
 </article>
    <article id="ispisKorisnika">
        <h2 style="text-align: center" >Prikaz po sobama</h2>

        <div id="table-container"> 
            <form name="rang" id="rang" method="POST" enctype='multipart/form-data' action="podjelaSoba.php">
                <label for="kategorija">Odaberi tip sobe za prikaz: </label><br>
                <input type="radio" name="soba" value="jednokrevetna" checked="checked"> Jednokrevetna<br>
                <input type="radio" name="soba" value="dvokrevetna"> Dvokrevetna<br>
                <input type="radio" name="soba" value="trokrevetna"> Trokrevetna<br>
                <input name="potvrda" id="potvrda" type="submit" value="Unesi" class="gumb">  
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
            <form name="rang" id="rang" method="POST" enctype='multipart/form-data' action="podjelaSoba.php">
                <input name="potvrda" id="potvrda" type="submit" value="Podjeli sobe" class="gumb">   

            </form><br>
        </div>
    </article>
</section>
<?php }
}
?>