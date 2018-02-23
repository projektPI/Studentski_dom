

    <div class="container">
        <selection>
    <div id="greske">  {$greska} </div>
</selection>
      <div class="clanak">
        <div>
            <h1>Unajmljena soba</h1>
          </div>
          <hr>
        <table border="1">
                 <thead>
                     <tr>
                    <th>Ime i prezime</th>
                    <th>Unajmljeno od</th>
                    <th>Unajmljeno do</th>
                    <th>Tip sobe</th>
                    <th>Subvencija</th>
                    </tr>
                 </thead>
                 <tbody>
                     
                     {foreach from=$korisnici item=korisnik}
                         <tr>
                             <td>{$korisnik.ime} {$korisnik.prezime}</td>
                             <td>{$korisnik.od}</td>
                             <td>{$korisnik.do}</td>
                             <td>{$korisnik.vrsta}</td>
                             {if ($korisnik.placanje==1)}<td>ne</td>{/if}
                              {if ($korisnik.placanje==0)}<td>da</td>{/if}
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
