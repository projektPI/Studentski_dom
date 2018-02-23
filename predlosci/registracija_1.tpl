
    <div class="container-unos">
       <selection style=" margin-top: 10%; margin-left: 60%;">
    <div id="greske">  {$greska} </div>
</selection>
      <div class="clanak">
        <form class="naslov" method="POST" action="registracija.php">
            <h1>Registracija</h1>
            <p>Ispunite navedene podatke kako bi se registrirali</p>
            <hr>
            <div class="input_registracija">
            <label for="text"><b>Ime</b></label>
            <input type="text" placeholder="Upisite ime" name="ime" required> <br>
            <label for="text"><b>Prezime</b></label>
            <input type="text" placeholder="Upisite prezime" name="prezime" required><br>
            <label for="text"><b>Korisničko ime</b></label>
            <input type="text" placeholder="Upisite kor. ime" name="korIme" required><br>
            <label for="psw"><b>Lozinka</b></label>
            <input type="password" placeholder="Upisite Lozinku" name="loz" required><br>
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Upisite Email" name="email" required><br>
            <label for="text"><b>Adresa</b></label>
            <input type="text" placeholder="Upisite Adresu" name="adresa" required><br>
            <label for="text"><b>Grad</b></label>
            <input type="text" placeholder="Upisite Grad" name="grad" required><br>
            <label for="text"><b>Država</b></label>
            <input type="text" placeholder="Upisite Državu" name="drzava" required><br>
            <label for="text"><b>Telefonski broj</b></label>
            <input type="number" placeholder="Upisite Tel. broj" name="broj" required><br>
            <label for="text"><b>Iksica</b></label>
            <input type="number" placeholder="Upisite Iksicu" name="iksica" ><br>
            <label for="text"><b>Tip korisnika</b></label>
            <select class="input_registracija1" name="korisnici" id="korisnici">
                {foreach from=$korisnici item=korisnik}
                    <option selected value="{$korisnik.ID_tipKorisnika}">{$korisnik.naziv}</option>
                {/foreach}
            </select><br><br>
</div>
<div class="clearfix">
                <input type="submit" class="signupbtn" value="Registriraj se">
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
