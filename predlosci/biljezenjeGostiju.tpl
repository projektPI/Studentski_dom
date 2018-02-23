<selection>
    <div id="greske">  {$greska} </div>
</selection>
<section id="sadrzaj">
    <h1>Bilježenje gostiju</h1>
    <article>
        <form name="kvar" id="kvar" method="POST" enctype='multipart/form-data' action="biljezenjeGostiju.php">
<hr>
            <div class="input_registracija">
            <label for="kategorija">Unesite broj sobe: </label><br>
            <input type="number" name="brojSobe" id="brojSobe"  placeholder="broj sobe"><br/><br>
            <label for="kategorija">Unesite posjetitelja/e: </label><br>
            <textarea rows="3" cols="30" type="text" name="posjetitelj1" id="posjetitelj1"  placeholder="posjetitelj/i"></textarea><br/><br>
            <label for="kategorija">Vrijeme dolaska:  </label><br>
            <input type="time" name="vrijemeDolaska" id="vrijemeDolaska"  placeholder="vrijeme dolaska"><br/><br>
            <label for="biraniKorisnik">Izaberite stanara: </label><br>
            <select name="korisnici" id="korisnici">
                {foreach from=$korisnici item=korisnik}
                    <option value="{$korisnik.ID_korisnik}">{$korisnik.prezime} {$korisnik.ime}</option>
                {/foreach}
            </select><br><br>
            </div>
            <div class="clearfix">
            <input name="potvrda" id="potvrda" type="submit" value="Prijavi" class="gumb">   
            <input name="reset" id="reset" type="reset" value="Reset" class="gumb">  
 </div>
        </form>
        <h1>Bilježenje odlazaka</h1>
        <form name="kvar" id="kvar" method="POST" enctype='multipart/form-data' action="biljezenjeGostiju1.php">
            <label for="biraniKorisnik">Izaberite posjetitelja: </label><br>
            <select name="korisnici1" id="korisnici1">
                {foreach from=$korisnici1 item=korisnik1}
                    <option value="{$korisnik1.ID_evidencija}">{$korisnik1.posjetitelj}</option>
                {/foreach}
            </select><br><br>
            <label for="kategorija">Broj sobe: </label><br>
            <input type="number" name="soba" id="soba"  placeholder="broj sobe" readonly {if isset($korisnik1.soba)}value="{$korisnik1.soba}{/if}"><br>
            <label for="kategorija">Posjetitelj/i: </label><br>
            <input type="text" size="35" name="posjetitelj" id="posjetitelj"  placeholder="posjetitelj/i" readonly  {if isset($korisnik1.posjetitelj)}value="{$korisnik1.posjetitelj}{/if}"></input><br/><br>
            <label for="kategorija">Vrijeme dolaska:  </label><br>
            <input type="time" name="od" id="od"  placeholder="vrijeme dolaska" readonly {if isset($korisnik1.od)}value="{$korisnik1.od}{/if}" ><br/><br>
            <label for="kategorija">Unesite vrijeme odlaska:  </label><br>
            <input type="time" name="vrijemeOdlaska" id="vrijemeOdlaska"  placeholder="vrijeme odlaska"><br/><br>


            <input name="potvrda" id="potvrda" type="submit" value="Prijavi" class="gumb">   
            <input name="reset" id="reset" type="reset" value="Reset" class="gumb">  

        </form>
    </article> 
</section>
<script type="text/javascript">
    $(document).ready(function () {

        dohvatiKorisnika1();
        $("#korisnici1").on("change", function(){
            dohvatiKorisnika1();
        });
        
    });
    
    function dohvatiKorisnika1(){
        var korisnikID = $("#korisnici1").val();
        //var prikazanPosjetitelj= $("#korisnik1.posjetitelj").val();
        
            $.ajax({
                url: 'dohvati_korisnika1.php',
                type: 'POST',
                dataType: 'json',
                data: {
                    korisnikID: korisnikID
                },
                success: function (response) {
                    $("#soba").val(response.korisnik1.soba);
                    $("#posjetitelj").val(response.korisnik1.posjetitelj);
                    $("#od").val(response.korisnik1.od);
                }
            });
    }
    
</script>