<?php /* Smarty version 3.1.22-dev/30, created on 2018-02-20 18:32:03
         compiled from "predlosci/azuriranje.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:10546619455a8c5b93817a97_42375570%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '839574db393b9e41cc8c0d6d64a14d2cb0aa5260' => 
    array (
      0 => 'predlosci/azuriranje.tpl',
      1 => 1519147922,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10546619455a8c5b93817a97_42375570',
  'variables' => 
  array (
    'greska' => 0,
    'tipKorisnikaPrijava' => 0,
    'korisnici' => 0,
    'korisnik' => 0,
    'tipovi' => 0,
    'korisnik2' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/30',
  'unifunc' => 'content_5a8c5b9385ad25_02483442',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a8c5b9385ad25_02483442')) {
function content_5a8c5b9385ad25_02483442 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '10546619455a8c5b93817a97_42375570';
?>
<selection>
    <div id="greske">  <?php echo $_smarty_tpl->tpl_vars['greska']->value;?>
 </div>
</selection>
<section id="sadrzaj">
    <h1>Ažuriranje korisnika</h1>
    <article>
        <form name="biraniKorisnik" id="kvar" method="POST" enctype='multipart/form-data' action="azuriranje.php">

            <label for="biraniKorisnik">Izaberite korisnika: </label><br>
            <select name="korisnici" id="korisnici">
                <?php if (($_smarty_tpl->tpl_vars['tipKorisnikaPrijava']->value=='1')) {?>
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
                    <option value="<?php echo $_smarty_tpl->tpl_vars['korisnik']->value['ID_korisnik'];?>
"><?php echo $_smarty_tpl->tpl_vars['korisnik']->value['prezime'];?>
 <?php echo $_smarty_tpl->tpl_vars['korisnik']->value['ime'];?>
</option>
                <?php
$_smarty_tpl->tpl_vars['korisnik'] = $foreachItemSav;
}
?>
                <?php }?>
            </select><br>
        <br>
            <label for="kategorija">Ime: </label>
            <input type="text" id="ime" name="ime"  size="20" placeholder="ime" <?php if (isset($_smarty_tpl->tpl_vars['korisnik']->value['ime'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['korisnik']->value['ime'];
}?>"><br>
            <label for="kategorija">Prezime: </label>
            <input type="text" id="prez" name="prez"  size="20" placeholder="prezime" <?php if (isset($_smarty_tpl->tpl_vars['korisnik']->value['prezime'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['korisnik']->value['prezime'];
}?>"><br>
            <label for="kategorija">Korisničko ime: </label>
            <input type="text" id="korime" name="korime"  size="20" placeholder="korisničko ime" <?php if (isset($_smarty_tpl->tpl_vars['korisnik']->value['userName'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['korisnik']->value['userName'];
}?>"><br>
            <label for="kategorija">Email: </label>
            <input type="email" id="email" name="email"  size="20" placeholder="email"<?php if (isset($_smarty_tpl->tpl_vars['korisnik']->value['email'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['korisnik']->value['email'];
}?>"><br>
            <label for="kategorija">Adresa: </label>
            <input type="text" id="adresa" name="adresa"  size="20" placeholder="adresa"<?php if (isset($_smarty_tpl->tpl_vars['korisnik']->value['adresa'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['korisnik']->value['adresa'];
}?>"><br>
            <label for="kategorija">Mjesto: </label>
            <input type="text" id="mjesto" name="mjesto"  size="20" placeholder="mjesto"<?php if (isset($_smarty_tpl->tpl_vars['korisnik']->value['mjesto'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['korisnik']->value['mjesto'];
}?>"><br>
            <label for="kategorija">Država: </label>
            <input type="text" id="drzava" name="drzava"  size="20" placeholder="država"<?php if (isset($_smarty_tpl->tpl_vars['korisnik']->value['drzava'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['korisnik']->value['drzava'];
}?>"><br>
            <label for="kategorija">Telefon: </label>
            <input type="numbers" id="tel" name="tel"  size="20" placeholder="telefon"<?php if (isset($_smarty_tpl->tpl_vars['korisnik']->value['telefon'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['korisnik']->value['telefon'];
}?>"><br>
            <label for="kategorija">xica: </label>
            <input type="numbers" id="xica" name="xica"  size="20" placeholder="xica"<?php if (isset($_smarty_tpl->tpl_vars['korisnik']->value['xica'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['korisnik']->value['xica'];
}?>"><br>
            <label for="kategorija">Tip korisnika: </label>
            <select name="biraniTip" id="biraniTip">
                <?php
$_from = $_smarty_tpl->tpl_vars['tipovi']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['korisnik2'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['korisnik2']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['korisnik2']->value) {
$_smarty_tpl->tpl_vars['korisnik2']->_loop = true;
$foreachItemSav = $_smarty_tpl->tpl_vars['korisnik2'];
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['korisnik2']->value['ID_tipKorisnika'];?>
"><?php echo $_smarty_tpl->tpl_vars['korisnik2']->value['naziv'];?>
</option>
                    <?php if (isset($_smarty_tpl->tpl_vars['korisnik']->value['ID_tipKorisnika'])) {?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['korisnik']->value['ID_tipKorisnika'];?>
"><?php echo $_smarty_tpl->tpl_vars['korisnik']->value['naziv'];?>
</option>
                    <?php }?>
                <?php
$_smarty_tpl->tpl_vars['korisnik2'] = $foreachItemSav;
}
?>
            </select><br>
            <input name="azuriraj" id="azuriraj" type="submit" value="Ažuriraj" class="gumb">   
            <input name="reset" id="reset" type="reset" value="Reset" class="gumb">  

        </form>
</section>
<?php echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function () {

        dohvatiKorisnika();
        $("#korisnici").on("change", function(){
            dohvatiKorisnika();
        });
        
    });
    
    function dohvatiKorisnika(){
        var korisnikID = $("#korisnici").val();
        
            $.ajax({
                url: 'dohvati_korisnika.php',
                type: 'POST',
                dataType: 'json',
                data: {
                    korisnikID: korisnikID
                },
                success: function (response) {
                    $("#ime").val(response.korisnik.ime);
                    $("#prez").val(response.korisnik.prezime);
                    $("#korime").val(response.korisnik.userName);
                    $("#email").val(response.korisnik.email);
                    $("#adresa").val(response.korisnik.adresa);
                    $("#mjesto").val(response.korisnik.mjesto);
                    $("#drzava").val(response.korisnik.drzava);
                    $("#tel").val(response.korisnik.telefon);
                    $("#xica").val(response.korisnik.xica);
                    $("#biraniTip").val(response.korisnik.ID_tipKorisnika);
                }
            });
    }
    
<?php echo '</script'; ?>
>
<?php }
}
?>