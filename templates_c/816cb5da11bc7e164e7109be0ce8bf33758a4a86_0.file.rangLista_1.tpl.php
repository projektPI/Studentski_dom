<?php /* Smarty version 3.1.22-dev/30, created on 2018-02-23 16:40:33
         compiled from "predlosci/rangLista_1.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:21272520725a9035f1630b45_50292860%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '816cb5da11bc7e164e7109be0ce8bf33758a4a86' => 
    array (
      0 => 'predlosci/rangLista_1.tpl',
      1 => 1519400431,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21272520725a9035f1630b45_50292860',
  'variables' => 
  array (
    'greska' => 0,
    'korisnici' => 0,
    'korisnik' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/30',
  'unifunc' => 'content_5a9035f165df97_20313929',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a9035f165df97_20313929')) {
function content_5a9035f165df97_20313929 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '21272520725a9035f1630b45_50292860';
?>

      <div class="container-unos">
          <selection style=" margin-top: 10%; margin-left: 60%;">
    <div id="greske">  <?php echo $_smarty_tpl->tpl_vars['greska']->value;?>
 </div>
</selection>
        <div class="clanak">
          <form name="naslov" id="rang" method="POST" enctype='multipart/form-data' action="rangLista.php">
            <div>
              <h1>Rang lista</h1>
            </div>
          <hr>
          <div class="input_registracija">
            <label for="kategorija">Promjeni datum zaključavanja: </label>
            <input type="date" name="datum" id="datum"><br/>
            
            <label for="kategorija">Broj mjesta: </label>
            <input type="number" name="brojMjesta" id="brojMjesta"><br/><br>
             </div>
            <div class="clearfix">
            <input name="potvrda" id="potvrda" type="submit" value="Unesi" class="gumb">   
            <input name="reset" id="reset" type="reset" value="Reset" class="gumb">
            </div>
             </form><br>
             <table border="1">
                 <thead>
                     <tr>
                    <th>Ime</th>
                    <th>Prezime</th>
                    <th>Korisničko ime</th>
                    <th>Email</th>
                    <th>Datum prijave</th>
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