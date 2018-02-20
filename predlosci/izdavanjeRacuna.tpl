<selection>
    <div id="greske">  {$greska} </div>
</selection>
<section id="sadrzaj">
    <h1>Izdavanje računa </h1>
    <article>
        <form name="kvar" id="kvar" method="POST" enctype='multipart/form-data' action="izdavanjeRacuna.php">

            <label for="biraniKorisnik">Izaberite tip korisnika: </label>
            <select name="korisnici" id="korisnici">
                {foreach from=$korisnici item=korisnik}
                    <option value="{$korisnik.ID_tipKorisnika}">{$korisnik.naziv}</option>
                {/foreach}
            </select><br>

            <label for="kategorija">Datum: </label>
            <input type="date" id="e" name="datum"  size="20" placeholder="ime" readonly value="Date()"><br><br>

            <input name="potvrda" id="potvrda" type="submit" value="Izdaj račune" class="gumb">  

            </article> 
            </section>
            
            <script>
                document.getElementById('e').value = new Date().toISOString().substring(0, 10);
            </script>
