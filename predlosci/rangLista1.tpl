<section class="sadrzaj">
    <article id="greske"> {$greska} </article>
    <article id="ispisKorisnika">
        <h2 style="text-align: center" >Rang lista</h2>
 
        <div id="table-container"> 
            
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
        </div>
    </article>
</section>
       