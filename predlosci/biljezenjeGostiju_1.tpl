

<div class="container">
    <selection>
        <div id="greske">  {$greska} </div>
    </selection>
    <div class="clanak">
        <form name="naslov" id="kvar" method="POST" enctype='multipart/form-data' action="biljezenjeGostiju.php">
            <h1>Prijava vanjskih gostiju</h1>
            <hr>
            <div class="input_registracija">
                <label for="kategorija">Unesite broj sobe: </label>
                <input type="number" name="brojSobe" id="brojSobe"  placeholder="broj sobe">
                <label for="kategorija">Unesite posjetitelja/e: </label>
                <textarea class="input_registracija1" rows="3" cols="30" type="text" name="posjetitelj1" id="posjetitelj1"  placeholder="posjetitelj/i"></textarea><br><br><br>
                <label for="kategorija">Vrijeme dolaska:  </label>
                <input type="time" name="vrijemeDolaska" id="vrijemeDolaska"  placeholder="vrijeme dolaska">
                <label for="biraniKorisnik">Izaberite stanara: </label>
                <select name="korisnici" class="input_registracija1">
                    {foreach from=$korisnici item=korisnik}
                        <option value="{$korisnik.ID_korisnik}">{$korisnik.prezime} {$korisnik.ime}</option>
                    {/foreach}
                </select><br>
            </div>
            <div class="clearfix">
                <input name="potvrda" id="potvrda" type="submit" value="Prijavi" class="gumb">   
                <input name="reset" id="reset" type="reset" value="Reset" class="gumb">  
            </div>
        </form>
        <h1>Bilježenje odlazaka</h1>
        <form name="kvar" id="kvar" method="POST" enctype='multipart/form-data' action="biljezenjeGostiju1.php">
            <hr>
            <div class="input_registracija">
                <label for="biraniKorisnik">Izaberite posjetitelja/e: </label>
                <select name="korisnici1" class="input_registracija1">
                    {foreach from=$korisnici1 item=korisnik1}
                        <option value="{$korisnik1.ID_evidencija}">{$korisnik1.posjetitelj}</option>
                    {/foreach}
                </select><br>
                <label for="kategorija">Broj sobe: </label>
                <input type="number" name="soba" id="soba"  placeholder="broj sobe" readonly {if isset($korisnik1.soba)}value="{$korisnik1.soba}{/if}"><br>
                <label for="kategorija">Posjetitelj/i: </label>
                <input type="text" size="35" name="posjetitelj" id="posjetitelj"  placeholder="posjetitelj/i" readonly  {if isset($korisnik1.posjetitelj)}value="{$korisnik1.posjetitelj}{/if}"></input><br>
                <label for="kategorija">Vrijeme dolaska:  </label>
                <input type="time" name="od" id="od"  placeholder="vrijeme dolaska" readonly {if isset($korisnik1.od)}value="{$korisnik1.od}{/if}" >
                <label for="kategorija">Unesite vrijeme odlaska:  </label>
                <input type="time" name="vrijemeOdlaska" id="vrijemeOdlaska"  placeholder="vrijeme odlaska"><br/><br>

            </div>
            <div class="clearfix">
                <input name="potvrda" id="potvrda" type="submit" value="Prijavi" class="gumb">   
                <input name="reset" id="reset" type="reset" value="Reset" class="gumb">  
            </div>
        </form>
    </div><!-- /.container -->

</div>
</div>
</div>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="../../dist/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
