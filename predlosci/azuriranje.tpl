<selection>
    <div id="greske">  {$greska} </div>
</selection>
<section id="sadrzaj">
    <h1>Ažuriranje korisnika</h1>
    <article>
        <form name="biraniKorisnik" id="kvar" method="POST" enctype='multipart/form-data' action="azuriranje.php">

            <label for="biraniKorisnik">Izaberite korisnika: </label><br>
            <select name="korisnici" id="korisnici">
                {foreach from=$korisnici item=korisnik}
                    <option value="{$korisnik.ID_korisnik}">{$korisnik.prezime} {$korisnik.ime}</option>
                {/foreach}
            </select><br>
        <br>
        
            <label for="kategorija">Ime: </label>
            <input type="text" id="ime" name="ime"  size="20" placeholder="ime" {if isset($korisnik.ime)}value="{$korisnik.ime}{/if}"><br>
            <label for="kategorija">Prezime: </label>
            <input type="text" id="prez" name="prez"  size="20" placeholder="prezime" {if isset($korisnik.prezime)}value="{$korisnik.prezime}{/if}"><br>
            <label for="kategorija">Korisničko ime: </label>
            <input type="text" id="korime" name="korime"  size="20" placeholder="korisničko ime" {if isset($korisnik.userName)}value="{$korisnik.userName}{/if}"><br>
            <label for="kategorija">Email: </label>
            <input type="email" id="email" name="email"  size="20" placeholder="email"{if isset($korisnik.email)}value="{$korisnik.email}{/if}"><br>
            <label for="kategorija">Adresa: </label>
            <input type="text" id="adresa" name="adresa"  size="20" placeholder="adresa"{if isset($korisnik.adresa)}value="{$korisnik.adresa}{/if}"><br>
            <label for="kategorija">Mjesto: </label>
            <input type="text" id="mjesto" name="mjesto"  size="20" placeholder="mjesto"{if isset($korisnik.mjesto)}value="{$korisnik.mjesto}{/if}"><br>
            <label for="kategorija">Država: </label>
            <input type="text" id="drzava" name="drzava"  size="20" placeholder="država"{if isset($korisnik.drzava)}value="{$korisnik.drzava}{/if}"><br>
            <label for="kategorija">Telefon: </label>
            <input type="numbers" id="tel" name="tel"  size="20" placeholder="telefon"{if isset($korisnik.telefon)}value="{$korisnik.telefon}{/if}"><br>
            <label for="kategorija">xica: </label>
            <input type="numbers" id="xica" name="xica"  size="20" placeholder="xica"{if isset($korisnik.xica)}value="{$korisnik.xica}{/if}"><br>
            <label for="kategorija">Tip korisnika: </label>
            <select name="biraniTip" id="biraniTip">
                {foreach from=$tipovi item=korisnik2}
                    <option value="{$korisnik2.ID_tipKorisnika}">{$korisnik2.naziv}</option>
                    {if isset($korisnik.ID_tipKorisnika)}
                    <option selected value="{$korisnik.ID_tipKorisnika}">{$korisnik.naziv}</option>{/if}
                {/foreach}
            </select><br>
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
                }
            });
    }
    
</script>
