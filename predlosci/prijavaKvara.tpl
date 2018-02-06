<selection>
    <div id="greske">  {$greska} </div>
</selection>
<section id="sadrzaj">
    <h1>Prijava kvara</h1>
    <article>
        <form name="kvar" id="kvar" method="POST" enctype='multipart/form-data' action="prijavaKvara.php">

            <label for="kategorija">Unesite opis kvara: </label><br>
            <textarea rows="4" cols="50" type="text" name="opisKvara" id="opisKvara"  placeholder="opis kvara..."></textarea><br/><br>
            <label for="kategorija">Unesite broj sobe: </label><br>
            <input type="number" name="brojSobe" id="brojSobe"  placeholder="broj sobe"><br/><br>
            
            <input name="potvrda" id="potvrda" type="submit" value="Prijavi" class="gumb">   
            <input name="reset" id="reset" type="reset" value="Reset" class="gumb">  

        </form>
    </article> 
</section>
       