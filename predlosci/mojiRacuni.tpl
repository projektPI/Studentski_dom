<section class="sadrzaj">
    <article id="greske"> {$greska} </article>
    <article id="ispisKorisnika">
 
        <div id="table-container"> 
               <div>
            <h1>Računi</h1>
          </div>
        <hr>
             <table border="1">
                 <thead>
                     <tr>
                    <th>ID računa</th>
                    <th>Datum izdavanja</th>
                    <th>Vrijeme izdavanja</th>
                    <th>Iznos</th>
                    <th>Plaćeno</th>
                    </tr>
                 </thead>
                 <tbody>
                     
                     {foreach from=$korisnici item=korisnik}
                         <tr>
                             <td>{$korisnik.ID_racun}</td>
                             <td>{$korisnik.datum}</td>
                             <td>{$korisnik.vrijeme}</td>
                             <td>{$korisnik.iznos}</td>
                             <td>{if ($korisnik.placeno==0)}ne {/if}</td>
                         </tr>
                         {/foreach}
                 </tbody>
             </table>
        </div>
    </article>
</section>
       