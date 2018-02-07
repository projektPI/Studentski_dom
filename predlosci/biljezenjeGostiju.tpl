<selection>
    <div id="greske">  {$greska} </div>
</selection>
<section id="sadrzaj">
    <h1>Bilježenje gostiju</h1>
    <article>
        <form name="kvar" id="kvar" method="POST" enctype='multipart/form-data' action="biljezenjeGostiju.php">

            <label for="kategorija">Unesite broj sobe: </label><br>
            <input type="number" name="brojSobe" id="brojSobe"  placeholder="broj sobe"><br/><br>
            <label for="kategorija">Unesite posjetitelja/e: </label><br>
            <textarea rows="3" cols="30" type="text" name="posjetitelj" id="posjetitelj"  placeholder="posjetitelj/i"></textarea><br/><br>
            <label for="biraniKorisnik">Izaberite stanara: </label><br>
            <select name="korisnici" id="korisnici">
                {foreach from=$korisnici item=korisnik}
                    <option value="{$korisnik.ID_korisnik}">{$korisnik.prezime} {$korisnik.ime}</option>
                {/foreach}
            </select><br><br>
            
            <input name="potvrda" id="potvrda" type="submit" value="Prijavi" class="gumb">   
            <input name="reset" id="reset" type="reset" value="Reset" class="gumb">  

        </form>
    </article> 
</section>
       