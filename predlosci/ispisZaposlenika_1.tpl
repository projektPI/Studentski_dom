

    <div class="container">
        <selection>
    <div id="greske">  {$greska} </div>
</selection>
      <div class="clanak">
          <div>
            <h1>Ispis zaposlenika</h1>
          </div>
        <hr>
          <table class="ispisKorisnika" border="1" style="margin-left: -20%">
                 <thead>
                     <tr>
                    <th>Ime</th>
                    <th>Prezime</th>
                    <th>Korisničko ime</th>
                    <th>Email</th>
                    <th>Adresa</th>
                    <th>Mjesto</th>
                    <th>Država</th>
                    <th>Telefon</th>
                    <th>Tip korisnika</th>
                    </tr>
                 </thead>
                 <tbody>
                     
                     {foreach from=$korisnici item=korisnik}
                         <tr>
                             <td>{$korisnik.ime}</td>
                             <td>{$korisnik.prezime}</td>
                             <td>{$korisnik.userName}</td>
                             <td>{$korisnik.email}</td>
                             <td>{$korisnik.adresa}</td>
                             <td>{$korisnik.mjesto}</td>
                             <td>{$korisnik.drzava}</td>
                             <td>{$korisnik.telefon}</td>
                             <td>{$korisnik.naziv}</td>
                         </tr>
                         {/foreach}
                 </tbody>
             </table>
      
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
