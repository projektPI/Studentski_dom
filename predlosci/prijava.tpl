<selection>
    <div id="greske">  {$greska} </div>
</selection>
<div class="container-registracija">

    <div class="clanak">
        <form class="formaRegistracija" style="border:1px solid #ccc" method="POST" action="prijava.php">
            <h1>Prijava</h1>
            <hr>
            <label for="text"><b>Korisničko ime</b></label>
            <input type="text" placeholder="Upisite kor. ime" name="korIme" required><br>
            <label for="psw"><b>Lozinka</b></label>
            <input type="password" placeholder="Upisite Lozinku" name="loz" required><br><br>
            
                <input type="reset" class="cancelbtn" value="Cancel" >
                <input type="submit" class="signupbtn" value="Sign Up">
           

        </form>
    </div>
</div>