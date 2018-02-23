<?php /* Smarty version 3.1.22-dev/30, created on 2018-02-23 17:22:34
         compiled from "predlosci/azuriranje_1.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:14761617545a903fca9ffe56_61475442%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '725ee9a8a5c7f0711c65646cf1a7f62cef6db753' => 
    array (
      0 => 'predlosci/azuriranje_1.tpl',
      1 => 1519402952,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14761617545a903fca9ffe56_61475442',
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
  'unifunc' => 'content_5a903fcaa531f6_57378842',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a903fcaa531f6_57378842')) {
function content_5a903fcaa531f6_57378842 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '14761617545a903fca9ffe56_61475442';
?>

    <div class="container-unos">
        <selection>
    <div id="greske">  <?php echo $_smarty_tpl->tpl_vars['greska']->value;?>
 </div>
</selection>
      <div class="clanak">
        <form name="naslov" id="kvar" method="POST" enctype='multipart/form-data' action="azuriranje.php">
            <div>
            <h1>Ažuriranje korisnika</h1>
          </div>
        <hr>
        <div class="input_registracija">
            <?php if (($_smarty_tpl->tpl_vars['tipKorisnikaPrijava']->value=='1')) {?>
            <label for="biraniKorisnik">Izaberite korisnika: </label>
            <select name="korisnici" id="korisnici" class="input_registracija1">
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
            <?php if (($_smarty_tpl->tpl_vars['tipKorisnikaPrijava']->value=='1')) {?>
            <label for="kategorija">Ime: </label>
            <input type="text" id="ime" name="ime"  size="20" placeholder="ime" <?php if (isset($_smarty_tpl->tpl_vars['korisnik']->value['ime'])) {?> value="<?php echo $_smarty_tpl->tpl_vars['korisnik']->value['ime'];
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
            <select name="biraniTip" id="biraniTip" class="input_registracija1">
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
            <?php }?>
            <?php if (($_smarty_tpl->tpl_vars['tipKorisnikaPrijava']->value!='1')) {?>
               <label for="kategorija">Ime: </label>
            <input type="text" id="ime" name="ime"  size="20" placeholder="ime" <?php if (isset($_smarty_tpl->tpl_vars['korisnik2']->value['ime'])) {?> value="<?php echo $_smarty_tpl->tpl_vars['korisnik2']->value['ime'];
}?>"><br>
            <label for="kategorija">Prezime: </label>
            <input type="text" id="prez" name="prez"  size="20" placeholder="prezime" <?php if (isset($_smarty_tpl->tpl_vars['korisnik2']->value['prezime'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['korisnik2']->value['prezime'];
}?>"><br>
            <label for="kategorija">Korisničko ime: </label>
            <input type="text" id="korime" name="korime"  size="20" placeholder="korisničko ime" <?php if (isset($_smarty_tpl->tpl_vars['korisnik2']->value['userName'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['korisnik2']->value['userName'];
}?>"><br>
            <label for="psw">Lozinka</b></label>
            <input type="password" placeholder="Lozinka" name="lozinka"  <?php if (isset($_smarty_tpl->tpl_vars['korisnik2']->value['password'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['korisnik2']->value['password'];
}?>"><br>
            <label for="kategorija">Email: </label>
            <input type="email" id="email" name="email"  size="20" placeholder="email"<?php if (isset($_smarty_tpl->tpl_vars['korisnik2']->value['email'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['korisnik2']->value['email'];
}?>"><br>
            <label for="kategorija">Adresa: </label>
            <input type="text" id="adresa" name="adresa"  size="20" placeholder="adresa"<?php if (isset($_smarty_tpl->tpl_vars['korisnik2']->value['adresa'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['korisnik2']->value['adresa'];
}?>"><br>
            <label for="kategorija">Mjesto: </label>
            <input type="text" id="mjesto" name="mjesto"  size="20" placeholder="mjesto"<?php if (isset($_smarty_tpl->tpl_vars['korisnik2']->value['mjesto'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['korisnik2']->value['mjesto'];
}?>"><br>
            <label for="kategorija">Država: </label>
            <input type="text" id="drzava" name="drzava"  size="20" placeholder="država"<?php if (isset($_smarty_tpl->tpl_vars['korisnik2']->value['drzava'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['korisnik2']->value['drzava'];
}?>"><br>
            <label for="kategorija">Telefon: </label>
            <input type="numbers" id="tel" name="tel"  size="20" placeholder="telefon"<?php if (isset($_smarty_tpl->tpl_vars['korisnik2']->value['telefon'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['korisnik2']->value['telefon'];
}?>"><br>
            <?php if (($_smarty_tpl->tpl_vars['tipKorisnikaPrijava']->value!='3')) {?>
            <label for="kategorija">xica: </label>
            <input type="numbers" id="xica" name="xica"  size="20" placeholder="xica"<?php if (isset($_smarty_tpl->tpl_vars['korisnik2']->value['xica'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['korisnik2']->value['xica'];
}?>"><br>
            <?php }?>
            <label for="kategorija">Tip korisnika: </label>
             <input type="text" id="drzava" name="tip"  size="20" placeholder="država" readonly <?php if (isset($_smarty_tpl->tpl_vars['korisnik2']->value['naziv'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['korisnik2']->value['naziv'];
}?>"><br>
            
            <?php }?>
             </div>
              <div class="clear"></div>
             <div class="clearfix">
            <input name="azuriraj" id="azuriraj" type="submit" value="Ažuriraj" class="gumb">   
            <button type="cancel" onclick="window.location='index.php';return false;">Otkaži</button>
        </div>
           
        </form>
  </div>
  </div>
</div><!-- /.container -->
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
><?php }
}
?>