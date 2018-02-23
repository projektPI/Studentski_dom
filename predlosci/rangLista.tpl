<section style=" margin-top: 10%; margin-left: 60%;">
    <article id="greske" > 
        {$greska} </article>
   </section>     
    <article id="ispisKorisnika">
        <h2 style="text-align: center" >Korisnici</h2>
 
        <div id="table-container"> 
             <form name="rang" id="rang" method="POST" enctype='multipart/form-data' action="rangLista.php">

            <label for="kategorija">Promjeni datum zaključavanja: </label>
            <input type="date" name="datum" id="datum"><br/>
            <label for="kategorija">Promjeni vrijeme zaključavanja: </label>
            <input type="time" name="vrijeme" id="vrijeme" ><br/>
            <label for="kategorija">Broj mjesta: </label>
            <input type="number" name="brojMjesta" id="brojMjesta"><br/><br>
            
            <input name="potvrda" id="potvrda" type="submit" value="Unesi" class="gumb">   
            <input name="reset" id="reset" type="reset" value="Reset" class="gumb">

             </form><br>
             <table border="1">
                 <thead>
                     <tr>
                    <th>Ime</th>
                    <th>Prezime</th>
                    <th>Korisničko ime</th>
                    <th>Email</th>
                    <th>Datum prijave</th>
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
        </div>
    </article>

       