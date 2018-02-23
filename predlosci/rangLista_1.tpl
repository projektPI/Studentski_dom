
      <div class="container-unos">
          <selection style=" margin-top: 10%; margin-left: 60%;">
    <div id="greske">  {$greska} </div>
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
                     
                     {foreach from=$korisnici item=korisnik}
                         <tr>
                             <td>{$korisnik.ime}</td>
                             <td>{$korisnik.prezime}</td>
                             <td>{$korisnik.userName}</td>
                             <td>{$korisnik.email}</td>
                             <td>{$korisnik.datum}</td>
                             <td>{$korisnik.studij}</td>
                             <td>{$korisnik.prosjek}</td>
                         </tr>
                         {/foreach}
                 </tbody>
             </table><br>
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
