<?php /* Smarty version 3.1.22-dev/30, created on 2018-02-18 16:48:22
         compiled from "predlosci/biljezenjeGostiju.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:12784206385a89a0462b85b7_98224204%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df2eee5ee961bb7850f2b03b6eda603ffb4b9101' => 
    array (
      0 => 'predlosci/biljezenjeGostiju.tpl',
      1 => 1518968900,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12784206385a89a0462b85b7_98224204',
  'variables' => 
  array (
    'greska' => 0,
    'korisnici' => 0,
    'korisnik' => 0,
    'korisnici1' => 0,
    'korisnik1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/30',
  'unifunc' => 'content_5a89a0462f3b86_53673736',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a89a0462f3b86_53673736')) {
function content_5a89a0462f3b86_53673736 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '12784206385a89a0462b85b7_98224204';
?>
<selection>
    <div id="greske">  <?php echo $_smarty_tpl->tpl_vars['greska']->value;?>
 </div>
</selection>
<section id="sadrzaj">
    <h1>Bilježenje gostiju</h1>
    <article>
        <form name="kvar" id="kvar" method="POST" enctype='multipart/form-data' action="biljezenjeGostiju.php">

            <label for="kategorija">Unesite broj sobe: </label><br>
            <input type="number" name="brojSobe" id="brojSobe"  placeholder="broj sobe"><br/><br>
            <label for="kategorija">Unesite posjetitelja/e: </label><br>
            <textarea rows="3" cols="30" type="text" name="posjetitelj1" id="posjetitelj1"  placeholder="posjetitelj/i"></textarea><br/><br>
            <label for="kategorija">Vrijeme dolaska:  </label><br>
            <input type="time" name="vrijemeDolaska" id="vrijemeDolaska"  placeholder="vrijeme dolaska"><br/><br>
            <label for="biraniKorisnik">Izaberite stanara: </label><br>
            <select name="korisnici" id="korisnici">
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
            </select><br><br>

            <input name="potvrda" id="potvrda" type="submit" value="Prijavi" class="gumb">   
            <input name="reset" id="reset" type="reset" value="Reset" class="gumb">  

        </form>
        <h1>Bilježenje odlazaka</h1>
        <form name="kvar" id="kvar" method="POST" enctype='multipart/form-data' action="biljezenjeGostiju1.php">
            <label for="biraniKorisnik">Izaberite posjetitelja: </label><br>
            <select name="korisnici1" id="korisnici1">
                <?php
$_from = $_smarty_tpl->tpl_vars['korisnici1']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['korisnik1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['korisnik1']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['korisnik1']->value) {
$_smarty_tpl->tpl_vars['korisnik1']->_loop = true;
$foreachItemSav = $_smarty_tpl->tpl_vars['korisnik1'];
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['korisnik1']->value['ID_evidencija'];?>
"><?php echo $_smarty_tpl->tpl_vars['korisnik1']->value['posjetitelj'];?>
</option>
                <?php
$_smarty_tpl->tpl_vars['korisnik1'] = $foreachItemSav;
}
?>
            </select><br><br>
            <label for="kategorija">Broj sobe: </label><br>
            <input type="number" name="soba" id="soba"  placeholder="broj sobe" readonly <?php if (isset($_smarty_tpl->tpl_vars['korisnik1']->value['soba'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['korisnik1']->value['soba'];
}?>"><br>
            <label for="kategorija">Posjetitelj/i: </label><br>
            <input type="text" size="35" name="posjetitelj" id="posjetitelj"  placeholder="posjetitelj/i" readonly  <?php if (isset($_smarty_tpl->tpl_vars['korisnik1']->value['posjetitelj'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['korisnik1']->value['posjetitelj'];
}?>"></input><br/><br>
            <label for="kategorija">Vrijeme dolaska:  </label><br>
            <input type="time" name="od" id="od"  placeholder="vrijeme dolaska" readonly <?php if (isset($_smarty_tpl->tpl_vars['korisnik1']->value['od'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['korisnik1']->value['od'];
}?>" ><br/><br>
            <label for="kategorija">Unesite vrijeme odlaska:  </label><br>
            <input type="time" name="vrijemeOdlaska" id="vrijemeOdlaska"  placeholder="vrijeme odlaska"><br/><br>


            <input name="potvrda" id="potvrda" type="submit" value="Prijavi" class="gumb">   
            <input name="reset" id="reset" type="reset" value="Reset" class="gumb">  

        </form>
    </article> 
</section>
<?php echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function () {

        dohvatiKorisnika1();
        $("#korisnici1").on("change", function(){
            dohvatiKorisnika1();
        });
        
    });
    
    function dohvatiKorisnika1(){
        var korisnikID = $("#korisnici1").val();
        //var prikazanPosjetitelj= $("#korisnik1.posjetitelj").val();
        
            $.ajax({
                url: 'dohvati_korisnika1.php',
                type: 'POST',
                dataType: 'json',
                data: {
                    korisnikID: korisnikID
                },
                success: function (response) {
                    $("#soba").val(response.korisnik1.soba);
                    $("#posjetitelj").val(response.korisnik1.posjetitelj);
                    $("#od").val(response.korisnik1.od);
                }
            });
    }
    
<?php echo '</script'; ?>
><?php }
}
?>