

    <div class="container-unos">
        <selection style=" margin-top: 10%; margin-left: 60%;">
    <div id="greske">  {$greska} </div>
</selection>
      <div class="clanak">
        <form class="naslov" method="POST" action="prijavaZaDom.php">
                        <h1>Prijava za dom</h1>
                        <p>Ispunite navedene podatke kako bi se prijavili za dom</p>
                        <hr>
                        <div class="input_registracija">
                        <label for="text"><b>Ime</b></label>
                        <input type="text" placeholder="Upisite ime" name="ime" readonly {if isset($korisnik.ime)}value="{$korisnik.ime}{/if}"> <br>
                        <label for="text"><b>Prezime</b></label>
                        <input type="text" placeholder="Upisite prezime" name="prezime" readonly {if isset($korisnik.prezime)}value="{$korisnik.prezime}{/if}"> <br>
                        <label for="text"><b>Korisničko ime</b></label>
                        <input type="text" placeholder="Upisite kor. ime" name="korIme" readonly {if isset($korisnik.userName)}value="{$korisnik.userName}{/if}"> <br>
                        <label for="psw"><b>Lozinka</b></label>
                        <input type="password" placeholder="Upisite Lozinku" name="loz" readonly  {if isset($korisnik.password)}value="{$korisnik.password}{/if}"> <br>
                        <label for="email"><b>Email</b></label>
                        <input type="text" placeholder="Upisite Email" name="email" readonly  {if isset($korisnik.email)}value="{$korisnik.email}{/if}"> <br>
                        <label for="text"><b>Adresa</b></label>
                        <input type="text" placeholder="Upisite Adresu" name="adresa" readonly  {if isset($korisnik.adresa)}value="{$korisnik.adresa}{/if}"> <br>
                        <label for="text"><b>Grad</b></label>
                        <input type="text" placeholder="Upisite Grad" name="grad" readonly  {if isset($korisnik.mjesto)}value="{$korisnik.mjesto}{/if}"> <br>
                        <label for="text"><b>Država</b></label>
                        <input type="text" placeholder="Upisite Državu" name="drzava" readonly  {if isset($korisnik.drzava)}value="{$korisnik.drzava}{/if}"> <br>
                        <label for="text"><b>Telefonski broj</b></label>
                        <input type="text" placeholder="Upisite Tel. broj" name="broj" readonly  {if isset($korisnik.telefon)}value="{$korisnik.telefon}{/if}"> <br>
                        {if ($tipKorisnika=='2')}
                            <label for="text"><b>Iksica</b></label>
                            <input type="text" placeholder="Upisite Iksicu" name="iksica" readonly  {if isset($korisnik.xica)}value="{$korisnik.xica}{/if}"> <br>
                            <label for="text"><b>Studij</b></label>
                            <input list="text" placeholder="Upisite Studij" name="studij" ><br>
                            <label for="text"><b>Prosjek</b></label>
                            <input type="number" step="any" min="2" max="5" placeholder="Upisite Prosjek" name="prosjek" ><br>
                        {/if}
                        {if ($tipKorisnika=='3')}
                        <label for="text"><b>Datum do: </b></label>
                        <input type="date" placeholder="Upisite datum" name="datum"> <br>
                         
                        {/if} 
                        <label for="text"><b>Prvi odabir sobe</b></label>
                        <input list="browsers" name="prviSoba" required><br>
                        <label for="text"><b>Drugi odabir sobe</b></label>
                        <input list="browsers" name="drugiSoba" required><br>
                        {if ($tipKorisnika=='2')}
                            <label for="text"><b>Treći odabir sobe</b></label>
                            <input list="browsers" name="treciSoba" ><br>
                            <label for="text"><b>Subvencija</b>
                                <input type="checkbox" checked="checked" name="Subvencija" value="checked">
                            </label>
                        {/if}
                        <datalist id="browsers">
                            {if ($tipKorisnika=='2')}
                                <option value="Dvokrevetna soba - 2">
                                <option value="Trokrevetna soba - 3">
                                <option value="Četverokrevetna soba - 4">
                                <option value="Četverokrevetna soba s kupaonom - 5">
                                {/if}
                                {if ($tipKorisnika=='3')}
                                <option value="Jednokrevetna soba - 1">
                                <option value="Jednokrevetna soba s kupaonom - 2">
                                {/if}
                        </datalist> 
</div>
                        <div class="clearfix">
                            <input type="submit" class="prijavaDom" value="Prijavi se za dom">
                            <button type="cancel" onclick="window.location='index.php';return false;">Otkaži</button>
                        </div>

                    </form>
    </div>
 
  </div>
</div><!-- /.container -->
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
