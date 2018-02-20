<?php /* Smarty version 3.1.22-dev/30, created on 2018-02-20 18:43:57
         compiled from "predlosci/prijavaZaDom.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3413527325a8c5e5d9b1274_66959343%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e32ea43207a3259fecd29e1df8772d6b9bc1c6d' => 
    array (
      0 => 'predlosci/prijavaZaDom.tpl',
      1 => 1519148634,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3413527325a8c5e5d9b1274_66959343',
  'variables' => 
  array (
    'greska' => 0,
    'korisnik' => 0,
    'tipKorisnika' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/30',
  'unifunc' => 'content_5a8c5e5d9ecd89_10600193',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a8c5e5d9ecd89_10600193')) {
function content_5a8c5e5d9ecd89_10600193 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '3413527325a8c5e5d9b1274_66959343';
?>
<section class="sadrzaj">
    <article id="greske"> <?php echo $_smarty_tpl->tpl_vars['greska']->value;?>
 </article>
    <article id="ispisKorisnika">
        <div class="container">
            <div class="clanak">
                <div id="table-container"> 
                    <form class="formaRegistracija" style="border:1px solid #ccc" method="POST" action="prijavaZaDom.php">
                        <h1>Prijava za dom</h1>
                        <p>Ispunite navedene podatke kako bi se prijavili za dom</p>
                        <hr>
                        <label for="text"><b>Ime</b></label>
                        <input type="text" placeholder="Upisite ime" name="ime" readonly <?php if (isset($_smarty_tpl->tpl_vars['korisnik']->value['ime'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['korisnik']->value['ime'];
}?>"> <br>
                        <label for="text"><b>Prezime</b></label>
                        <input type="text" placeholder="Upisite prezime" name="prezime" readonly <?php if (isset($_smarty_tpl->tpl_vars['korisnik']->value['prezime'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['korisnik']->value['prezime'];
}?>"> <br>
                        <label for="text"><b>Korisničko ime</b></label>
                        <input type="text" placeholder="Upisite kor. ime" name="korIme" readonly <?php if (isset($_smarty_tpl->tpl_vars['korisnik']->value['userName'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['korisnik']->value['userName'];
}?>"> <br>
                        <label for="psw"><b>Lozinka</b></label>
                        <input type="password" placeholder="Upisite Lozinku" name="loz" readonly  <?php if (isset($_smarty_tpl->tpl_vars['korisnik']->value['password'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['korisnik']->value['password'];
}?>"> <br>
                        <label for="email"><b>Email</b></label>
                        <input type="text" placeholder="Upisite Email" name="email" readonly  <?php if (isset($_smarty_tpl->tpl_vars['korisnik']->value['email'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['korisnik']->value['email'];
}?>"> <br>
                        <label for="text"><b>Adresa</b></label>
                        <input type="text" placeholder="Upisite Adresu" name="adresa" readonly  <?php if (isset($_smarty_tpl->tpl_vars['korisnik']->value['adresa'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['korisnik']->value['adresa'];
}?>"> <br>
                        <label for="text"><b>Grad</b></label>
                        <input type="text" placeholder="Upisite Grad" name="grad" readonly  <?php if (isset($_smarty_tpl->tpl_vars['korisnik']->value['mjesto'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['korisnik']->value['mjesto'];
}?>"> <br>
                        <label for="text"><b>Država</b></label>
                        <input type="text" placeholder="Upisite Državu" name="drzava" readonly  <?php if (isset($_smarty_tpl->tpl_vars['korisnik']->value['drzava'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['korisnik']->value['drzava'];
}?>"> <br>
                        <label for="text"><b>Telefonski broj</b></label>
                        <input type="text" placeholder="Upisite Tel. broj" name="broj" readonly  <?php if (isset($_smarty_tpl->tpl_vars['korisnik']->value['telefon'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['korisnik']->value['telefon'];
}?>"> <br>
                        <?php if (($_smarty_tpl->tpl_vars['tipKorisnika']->value=='2')) {?>
                            <label for="text"><b>Iksica</b></label>
                            <input type="text" placeholder="Upisite Iksicu" name="iksica" readonly  <?php if (isset($_smarty_tpl->tpl_vars['korisnik']->value['xica'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['korisnik']->value['xica'];
}?>"> <br>
                            <label for="text"><b>Studij</b></label>
                            <input list="text" placeholder="Upisite Studij" name="studij" ><br>
                            <label for="text"><b>Prosjek</b></label>
                            <input type="number" step="any"  placeholder="Upisite Prosjek" name="prosjek" ><br>
                        <?php }?>
                        <?php if (($_smarty_tpl->tpl_vars['tipKorisnika']->value=='3')) {?>
                        <label for="text"><b>Datum do: </b></label>
                        <input type="date" placeholder="Upisite datum" name="datum"> <br>
                         
                        <?php }?> 
                        <label for="text"><b>Prvi odabir sobe</b></label>
                        <input list="browsers" name="prviSoba" required><br>
                        <label for="text"><b>Drugi odabir sobe</b></label>
                        <input list="browsers" name="drugiSoba" required><br>
                        <?php if (($_smarty_tpl->tpl_vars['tipKorisnika']->value=='2')) {?>
                            <label for="text"><b>Treći odabir sobe</b></label>
                            <input list="browsers" name="treciSoba" ><br>
                            <label for="text"><b>Subvencija</b>
                                <input type="checkbox" checked="checked" name="Subvencija" value="checked">
                            </label>
                        <?php }?>
                        <datalist id="browsers">
                            <?php if (($_smarty_tpl->tpl_vars['tipKorisnika']->value=='2')) {?>
                                <option value="Dvokrevetna soba - 2">
                                <option value="Trokrevetna soba - 3">
                                <option value="Četverokrevetna soba - 4">
                                <option value="Četverokrevetna soba s kupaonom - 5">
                                <?php }?>
                                <?php if (($_smarty_tpl->tpl_vars['tipKorisnika']->value=='3')) {?>
                                <option value="Jednokrevetna soba - 1">
                                <option value="Jednokrevetna soba s kupaonom - 2">
                                <?php }?>
                        </datalist> 

                        <div class="clearfix">
                            <input type="button" class="cancelbtn" value="Otkaži prijavu">
                            <input type="submit" class="prijavaDom" value="Prijavi se za dom">
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </article>
</section>
<?php }
}
?>