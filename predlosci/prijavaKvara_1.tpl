

<div class="container">
    <selection>
        <div id="greske">  {$greska} </div>
    </selection>
    <div class="clanak">
        <form name="naslov" id="kvar" method="POST" enctype='multipart/form-data' action="prijavaKvara.php">
            <h1>Prijava kvara</h1>
            <hr>
            <div class="input_registracija">
                <label for="kategorija">Unesite opis kvara: </label>
                <textarea rows="4" cols="50" type="text" name="opisKvara" id="opisKvara"  placeholder="opis kvara..."></textarea><br/><br><br><br><br>  
                <label for="kategorija">Unesite broj sobe: </label>
                <input type="number" name="brojSobe" id="brojSobe"  placeholder="broj sobe"><br/><br>
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
