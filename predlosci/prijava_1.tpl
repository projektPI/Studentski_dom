

    <div class="container">
        <selection>
    <div id="greske">  {$greska} </div>
</selection>
      <div class="clanak">
        <form class="formaRegistracija" method="POST" action="prijava.php">
            <h1>Prijava</h1>
            <hr>
            <div class="input_registracija">
            <label for="text"><b>Korisničko ime</b></label>
            <input type="text" placeholder="Upisite kor. ime" name="korIme" required><br>
            <label for="psw"><b>Lozinka</b></label>
            <input type="password" placeholder="Upisite Lozinku" name="loz" required><br><br>
            </div>
            <div class="clearfix">
                <input type="submit" class="signupbtn" value="Prijavi se">
                 <input type="reset" class="cancelbtn" value="Otkaži" >
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
