<selection>
    <div id="greske">  {$greska} </div>
</selection>
<div class="container-registracija">

    <div class="clanak">
        <form class="formaRegistracija" style="border:1px solid #ccc" method="POST" action="registracija.php">
            <h1>Registracija</h1>
            <p>Ispunite navedene podatke kako bi se registrirali</p>
            <hr>
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
            <select name="korisnici" id="korisnici">
                {foreach from=$korisnici item=korisnik}
                    <option selected value="{$korisnik.ID_tipKorisnika}">{$korisnik.naziv}</option>
                {/foreach}
            </select><br><br>


                <input type="reset" class="cancelbtn" value="Cancel" >
                <input type="submit" class="signupbtn" value="Sign Up">


        </form>
    </div>
</div>