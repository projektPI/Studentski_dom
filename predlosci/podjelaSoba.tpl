<section class="sadrzaj">
    <article id="greske"> {$greska} </article>
    <article id="ispisKorisnika">
        <h2 style="text-align: center" >Prikaz po sobama</h2>

        <div id="table-container"> 
            <form name="rang" id="rang" method="POST" enctype='multipart/form-data' action="podjelaSoba.php">
                <label for="kategorija">Odaberi tip sobe za prikaz: </label><br>
                <input type="radio" name="soba" value="jednokrevetna" checked="checked"> Jednokrevetna<br>
                <input type="radio" name="soba" value="dvokrevetna"> Dvokrevetna<br>
                <input type="radio" name="soba" value="trokrevetna"> Trokrevetna<br>
                <input name="potvrda" id="potvrda" type="submit" value="Unesi" class="gumb">  
            </form><br>
            <table border="1">
                <thead>
                    <tr>
                        <th>Ime</th>
                        <th>Prezime</th>
                        <th>Korisničko ime</th>
                        <th>Email</th>
                        <th>Datum</th>
                        <th>Studij</th>
                        <th>Prosjek</th>
                    </tr>
                </thead>
                <tbody>

                    {foreach from=$korisnici item=korisnik}
                        <tr>
                            <td>{$korisnik.ime}</td>
                            <td>{$korisnik.prezime}</td>
                            <td>{$korisnik.userName}</td>
                            <td>{$korisnik.email}</td>
                            <td>{$korisnik.datum}</td>
                            <td>{$korisnik.studij}</td>
                            <td>{$korisnik.prosjek}</td>
                        </tr>
                    {/foreach}
                </tbody>
            </table><br>
            <form name="rang" id="rang" method="POST" enctype='multipart/form-data' action="podjelaSoba.php">
                <input name="potvrda" id="potvrda" type="submit" value="Podjeli sobe" class="gumb">   

            </form><br>
        </div>
    </article>
</section>
