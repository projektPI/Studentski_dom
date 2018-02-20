<?php /* Smarty version 3.1.22-dev/30, created on 2018-02-17 21:50:58
         compiled from "predlosci/zahtjevZaIzlazak.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:20421969085a8895b2ca4ea1_94499585%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff85749d9bbfc19673934f2b42e8effbea9c0881' => 
    array (
      0 => 'predlosci/zahtjevZaIzlazak.tpl',
      1 => 1518900657,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20421969085a8895b2ca4ea1_94499585',
  'variables' => 
  array (
    'greska' => 0,
    'korisnik' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/30',
  'unifunc' => 'content_5a8895b2cd7e15_06159444',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a8895b2cd7e15_06159444')) {
function content_5a8895b2cd7e15_06159444 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '20421969085a8895b2ca4ea1_94499585';
?>
<selection>
    <div id="greske">  <?php echo $_smarty_tpl->tpl_vars['greska']->value;?>
 </div>
</selection>
<section id="sadrzaj">
    <h1>Zahtjev za izlazak </h1>
    <article>
        <form name="kvar" id="kvar" method="POST" enctype='multipart/form-data' action="zahtjevZaIzlazak.php">

            <label for="kategorija">Ime: </label>
            <input type="text" id="ime" name="ime"  size="20" placeholder="ime" readonly <?php if (isset($_smarty_tpl->tpl_vars['korisnik']->value['ime'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['korisnik']->value['ime'];
}?>"><br>
            <label for="kategorija">Prezime: </label>
            <input type="text" id="prez" name="prez"  size="20" placeholder="prezime" readonly <?php if (isset($_smarty_tpl->tpl_vars['korisnik']->value['prezime'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['korisnik']->value['prezime'];
}?>"><br>
            <label for="kategorija">Korisničko ime: </label>
            <input type="text" id="korime" name="korime"  size="20" placeholder="korisničko ime"readonly <?php if (isset($_smarty_tpl->tpl_vars['korisnik']->value['userName'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['korisnik']->value['userName'];
}?>"><br>
            <label for="kategorija">Unajmljena soba od: </label>
            <input type="date" id="od" name="od"  size="20" readonly <?php if (isset($_smarty_tpl->tpl_vars['korisnik']->value['od'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['korisnik']->value['od'];
}?>"><br>
            <label for="kategorija">Unajmljena soba do: </label>
            <input type="date" id="do" name="do"  size="20" <?php if (isset($_smarty_tpl->tpl_vars['korisnik']->value['do'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['korisnik']->value['do'];
}?>"><br><br>
            
            <input name="potvrda" id="potvrda" type="submit" value="Promjeni" class="gumb">   
            <input name="reset" id="reset" type="reset" value="Reset" class="gumb">  

    </article> 
</section>
<?php }
}
?>