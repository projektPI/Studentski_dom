<selection>
    <div id="greske">  {$greska} </div>
</selection>
<section id="sadrzaj">
    <article>
        <form name="biraniKorisnik" id="kvar" method="POST" enctype='multipart/form-data' action="azuriranje.php">
            <div>
            <h1>Ažuriranje korisnika</h1>
          </div>
            <hr>
            {if ($tipKorisnikaPrijava=='1')}
            <label for="biraniKorisnik">Izaberite korisnika: </label><br>
            <select name="korisnici" id="korisnici">
                {foreach from=$korisnici item=korisnik}
                    <option value="{$korisnik.ID_korisnik}">{$korisnik.prezime} {$korisnik.ime}</option>
                {/foreach}
                {/if}
            </select><br>
        <br>
            {if ($tipKorisnikaPrijava=='1')}
            <label for="kategorija">Ime: </label>
            <input type="text" id="ime" name="ime"  size="20" placeholder="ime" {if isset($korisnik3.ime)} value="{$korisnik3.ime}{/if}"><br>
            <label for="kategorija">Prezime: </label>
            <input type="text" id="prez" name="prez"  size="20" placeholder="prezime" {if isset($korisnik3.prezime)}value="{$korisnik3.prezime}{/if}"><br>
            <label for="kategorija">Korisničko ime: </label>
            <input type="text" id="korime" name="korime"  size="20" placeholder="korisničko ime" {if isset($korisnik3.userName)}value="{$korisnik3.userName}{/if}"><br>
            <label for="kategorija">Email: </label>
            <input type="email" id="email" name="email"  size="20" placeholder="email"{if isset($korisnik3.email)}value="{$korisnik3.email}{/if}"><br>
            <label for="kategorija">Adresa: </label>
            <input type="text" id="adresa" name="adresa"  size="20" placeholder="adresa"{if isset($korisnik3.adresa)}value="{$korisnik3.adresa}{/if}"><br>
            <label for="kategorija">Mjesto: </label>
            <input type="text" id="mjesto" name="mjesto"  size="20" placeholder="mjesto"{if isset($korisnik3.mjesto)}value="{$korisnik3.mjesto}{/if}"><br>
            <label for="kategorija">Država: </label>
            <input type="text" id="drzava" name="drzava"  size="20" placeholder="država"{if isset($korisnik3.drzava)}value="{$korisnik3.drzava}{/if}"><br>
            <label for="kategorija">Telefon: </label>
            <input type="numbers" id="tel" name="tel"  size="20" placeholder="telefon"{if isset($korisnik3.telefon)}value="{$korisnik3.telefon}{/if}"><br>
            <label for="kategorija">xica: </label>
            <input type="numbers" id="xica" name="xica"  size="20" placeholder="xica"{if isset($korisnik3.xica)}value="{$korisnik3.xica}{/if}"><br>
            <label for="kategorija">Tip korisnika: </label>
            <select name="biraniTip" id="biraniTip">
                {foreach from=$tipovi item=korisnik2}
                    <option value="{$korisnik2.ID_tipKorisnika}">{$korisnik2.naziv}</option>
                    {if isset($korisnik.ID_tipKorisnika)}
                    <option value="{$korisnik.ID_tipKorisnika}">{$korisnik.naziv}</option>
                    {/if}
                {/foreach}
            </select><br>
            {/if}
            {if ($tipKorisnikaPrijava!='1')}
               <label for="kategorija">Ime: </label>
            <input type="text" id="ime" name="ime"  size="20" placeholder="ime" {if isset($korisnik2.ime)} value="{$korisnik2.ime}{/if}"><br>
            <label for="kategorija">Prezime: </label>
            <input type="text" id="prez" name="prez"  size="20" placeholder="prezime" {if isset($korisnik2.prezime)}value="{$korisnik2.prezime}{/if}"><br>
            <label for="kategorija">Korisničko ime: </label>
            <input type="text" id="korime" name="korime"  size="20" placeholder="korisničko ime" {if isset($korisnik2.userName)}value="{$korisnik2.userName}{/if}"><br>
            <label for="psw">Lozinka</b></label>
            <input type="password" placeholder="Lozinka" name="lozinka"  {if isset($korisnik2.password)}value="{$korisnik2.password}{/if}"><br>
            <label for="kategorija">Email: </label>
            <input type="email" id="email" name="email"  size="20" placeholder="email"{if isset($korisnik2.email)}value="{$korisnik2.email}{/if}"><br>
            <label for="kategorija">Adresa: </label>
            <input type="text" id="adresa" name="adresa"  size="20" placeholder="adresa"{if isset($korisnik2.adresa)}value="{$korisnik2.adresa}{/if}"><br>
            <label for="kategorija">Mjesto: </label>
            <input type="text" id="mjesto" name="mjesto"  size="20" placeholder="mjesto"{if isset($korisnik2.mjesto)}value="{$korisnik2.mjesto}{/if}"><br>
            <label for="kategorija">Država: </label>
            <input type="text" id="drzava" name="drzava"  size="20" placeholder="država"{if isset($korisnik2.drzava)}value="{$korisnik2.drzava}{/if}"><br>
            <label for="kategorija">Telefon: </label>
            <input type="numbers" id="tel" name="tel"  size="20" placeholder="telefon"{if isset($korisnik2.telefon)}value="{$korisnik2.telefon}{/if}"><br>
            <label for="kategorija">xica: </label>
            <input type="numbers" id="xica" name="xica"  size="20" placeholder="xica"{if isset($korisnik2.xica)}value="{$korisnik2.xica}{/if}"><br>
            <label for="kategorija">Tip korisnika: </label>
             <input type="text" id="drzava" name="tip"  size="20" placeholder="država" readonly {if isset($korisnik2.naziv)}value="{$korisnik2.naziv}{/if}"><br>
            
            {/if}
            <input name="azuriraj" id="azuriraj" type="submit" value="Ažuriraj" class="gumb">   
            <input name="reset" id="reset" type="reset" value="Reset" class="gumb">  

        </form>
</section>
<script type="text/javascript">
    $(document).ready(function () {

        dohvatiKorisnika();
        $("#korisnici").on("change", function(){
            dohvatiKorisnika();
        });
        
    });
    
    function dohvatiKorisnika(){
        var korisnikID = $("#korisnici").val();
        
            $.ajax({
                url: 'dohvati_korisnika.php',
                type: 'POST',
                dataType: 'json',
                data: {
                    korisnikID: korisnikID
                },
                success: function (response) {
                    $("#ime").val(response.korisnik.ime);
                    $("#prez").val(response.korisnik.prezime);
                    $("#korime").val(response.korisnik.userName);
                    $("#email").val(response.korisnik.email);
                    $("#adresa").val(response.korisnik.adresa);
                    $("#mjesto").val(response.korisnik.mjesto);
                    $("#drzava").val(response.korisnik.drzava);
                    $("#tel").val(response.korisnik.telefon);
                    $("#xica").val(response.korisnik.xica);
                    $("#biraniTip").val(response.korisnik.ID_tipKorisnika);
                }
            });
    }
    
</script>
