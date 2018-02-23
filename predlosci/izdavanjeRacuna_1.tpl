

<div class="container">
    <selection>
        <div id="greske">  {$greska} </div>
    </selection>
    <div class="clanak">
        <form name="naslov" id="kvar" method="POST" enctype='multipart/form-data' action="izdavanjeRacuna.php">
            <h1>Izdavanje računa </h1>
            <hr>
            <div class="input_registracija">
                <label for="biraniKorisnik">Izaberite tip korisnika: </label>
                <select name="korisnici" id="korisnici" class="input_registracija1">
                    {foreach from=$korisnici item=korisnik}
                        <option value="{$korisnik.ID_tipKorisnika}">{$korisnik.naziv}</option>
                    {/foreach}
                </select><br>
                <label for="kategorija">Datum: </label>
                <input type="date" id="e" name="datum"  size="20" placeholder="ime" readonly value="Date()"><br>
                
            </div>
            <div class="clearfix">
                <input name="potvrda" id="potvrda" type="submit" value="Izdaj račune" class="gumb">  
                <button type="cancel" onclick="window.location = 'index.php';
                                        return false;">Otkaži</button>
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
<script>
                                   document.getElementById('e').value = new Date().toISOString().substring(0, 10);
</script>