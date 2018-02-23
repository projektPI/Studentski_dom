
      <div class="container-unos">
          <selection>
    <div id="greske">  {$greska} </div>
</selection>
        <div class="clanak">
          <form name="naslov" id="kvar" method="POST" enctype='multipart/form-data' action="zahtjevZaIzlazak.php">
              <div>
              <h1>Otkazivanje/odjava iz sobe</h1>
            </div>
          <hr>
          <div class="input_registracija">
            <label for="kategorija">Ime: </label>
            <input type="text" id="ime" name="ime"  size="20" placeholder="ime" readonly {if isset($korisnik2.ime)}value="{$korisnik2.ime}{/if}"><br>
            <label for="kategorija">Prezime: </label>
            <input type="text" id="prez" name="prez"  size="20" placeholder="prezime" readonly {if isset($korisnik2.prezime)}value="{$korisnik2.prezime}{/if}"><br>
            <label for="kategorija">Korisničko ime: </label>
            <input type="text" id="korime" name="korime"  size="20" placeholder="korisničko ime"readonly {if isset($korisnik2.userName)}value="{$korisnik2.userName}{/if}"><br>
            <label for="kategorija">Unajmljena soba od: </label>
            <input type="date" id="od" name="od"  size="20" readonly {if isset($korisnik2.od)}value="{$korisnik2.od}{/if}"><br>
            <label for="kategorija">Unajmljena soba do: </label>
            <input type="date" id="do" name="do"  size="20" {if isset($korisnik2.do)}value="{$korisnik2.do}{/if}"><br><br>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
