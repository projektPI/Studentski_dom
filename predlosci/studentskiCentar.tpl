<section class="sadrzaj">
    <article id="greske"> {$greska} </article>
    <article id="ispisKorisnika">
        <h2 style="text-align: center" >Računi</h2>
 
        <div id="table-container"> 
             <table border="1">
                 <thead>
                     <tr>
                    <th>ID računa</th>
                    <th>Datum izdavanja</th>
                    <th>Vrijeme izdavanja</th>
                    <th>Iznos</th>
                    <th>Obrađeno</th>
                    <th>Plaćeno</th>
                    <th>Korsinik</th>
                    </tr>
                 </thead>
                 <tbody>
                     
                     {foreach from=$korisnici item=korisnik}
                         <tr>
                             <td>{$korisnik.ID_racun}</td>
                             <td>{$korisnik.datum}</td>
                             <td>{$korisnik.vrijeme}</td>
                             <td>{$korisnik.iznos}</td>
                             <td>{if ($korisnik.obradjeno==0)}ne {/if}</td>
                             <td>{if ($korisnik.placeno==0)}ne {/if}</td>
                             <td>{$korisnik.prezime} {$korisnik.ime}</td>
                         </tr>
                         {/foreach}
                 </tbody>
             </table>
        </div>
    </article>
</section>
       