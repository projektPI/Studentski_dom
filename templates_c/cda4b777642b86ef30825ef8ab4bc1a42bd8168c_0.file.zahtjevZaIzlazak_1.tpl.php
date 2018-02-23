<?php /* Smarty version 3.1.22-dev/30, created on 2018-02-23 16:27:01
         compiled from "predlosci/zahtjevZaIzlazak_1.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:12926268375a9032c5cdbe77_86733811%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cda4b777642b86ef30825ef8ab4bc1a42bd8168c' => 
    array (
      0 => 'predlosci/zahtjevZaIzlazak_1.tpl',
      1 => 1519399619,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12926268375a9032c5cdbe77_86733811',
  'variables' => 
  array (
    'greska' => 0,
    'korisnik2' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/30',
  'unifunc' => 'content_5a9032c5d0be38_73585619',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a9032c5d0be38_73585619')) {
function content_5a9032c5d0be38_73585619 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '12926268375a9032c5cdbe77_86733811';
?>

      <div class="container-unos">
          <selection>
    <div id="greske">  <?php echo $_smarty_tpl->tpl_vars['greska']->value;?>
 </div>
</selection>
        <div class="clanak">
          <form name="naslov" id="kvar" method="POST" enctype='multipart/form-data' action="zahtjevZaIzlazak.php">
              <div>
              <h1>Otkazivanje/odjava iz sobe</h1>
            </div>
          <hr>
          <div class="input_registracija">
            <label for="kategorija">Ime: </label>
            <input type="text" id="ime" name="ime"  size="20" placeholder="ime" readonly <?php if (isset($_smarty_tpl->tpl_vars['korisnik2']->value['ime'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['korisnik2']->value['ime'];
}?>"><br>
            <label for="kategorija">Prezime: </label>
            <input type="text" id="prez" name="prez"  size="20" placeholder="prezime" readonly <?php if (isset($_smarty_tpl->tpl_vars['korisnik2']->value['prezime'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['korisnik2']->value['prezime'];
}?>"><br>
            <label for="kategorija">Korisničko ime: </label>
            <input type="text" id="korime" name="korime"  size="20" placeholder="korisničko ime"readonly <?php if (isset($_smarty_tpl->tpl_vars['korisnik2']->value['userName'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['korisnik2']->value['userName'];
}?>"><br>
            <label for="kategorija">Unajmljena soba od: </label>
            <input type="date" id="od" name="od"  size="20" readonly <?php if (isset($_smarty_tpl->tpl_vars['korisnik2']->value['od'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['korisnik2']->value['od'];
}?>"><br>
            <label for="kategorija">Unajmljena soba do: </label>
            <input type="date" id="do" name="do"  size="20" <?php if (isset($_smarty_tpl->tpl_vars['korisnik2']->value['do'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['korisnik2']->value['do'];
}?>"><br><br>
          </div>
            <div class="clearfix">
            <input name="potvrda" id="potvrda" type="submit" value="Promjeni" class="gumb">   
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
<?php }
}
?>