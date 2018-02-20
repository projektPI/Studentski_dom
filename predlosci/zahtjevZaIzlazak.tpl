<selection>
    <div id="greske">  {$greska} </div>
</selection>
<section id="sadrzaj">
    <h1>Zahtjev za izlazak </h1>
    <article>
        <form name="kvar" id="kvar" method="POST" enctype='multipart/form-data' action="zahtjevZaIzlazak.php">

            <label for="kategorija">Ime: </label>
            <input type="text" id="ime" name="ime"  size="20" placeholder="ime" readonly {if isset($korisnik.ime)}value="{$korisnik.ime}{/if}"><br>
            <label for="kategorija">Prezime: </label>
            <input type="text" id="prez" name="prez"  size="20" placeholder="prezime" readonly {if isset($korisnik.prezime)}value="{$korisnik.prezime}{/if}"><br>
            <label for="kategorija">Korisničko ime: </label>
            <input type="text" id="korime" name="korime"  size="20" placeholder="korisničko ime"readonly {if isset($korisnik.userName)}value="{$korisnik.userName}{/if}"><br>
            <label for="kategorija">Unajmljena soba od: </label>
            <input type="date" id="od" name="od"  size="20" readonly {if isset($korisnik.od)}value="{$korisnik.od}{/if}"><br>
            <label for="kategorija">Unajmljena soba do: </label>
            <input type="date" id="do" name="do"  size="20" {if isset($korisnik.do)}value="{$korisnik.do}{/if}"><br><br>
            
            <input name="potvrda" id="potvrda" type="submit" value="Promjeni" class="gumb">   
            <input name="reset" id="reset" type="reset" value="Reset" class="gumb">  

    </article> 
</section>
