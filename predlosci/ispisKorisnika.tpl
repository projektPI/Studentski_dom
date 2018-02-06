<section class="sadrzaj">
    <article id="greske"> {$greska} </article>
    <article>
        <h2 style="text-align: center" >Korisnici</h2>

        <div id="table-container">
            <table border="1">
            <thead>
                <th>Aktivnost</th>
                <th>Udruga</th>
                <th>Detalji aktivnosti</th>
                <th>Sudionici aktivnosti</th>
            </thead>
            <tbody>
                {$table}
            </tbody>
        </table>
        </div>
            
        <div id="table-container"> 
             <table border="1">
                 <thead>
                     <tr>
                    <th>Ime</th>
                    <th>Prezime</th>
                    <th>User name</th>
                    </tr>
                 </thead>
                 <tbody>
                     
                     {foreach from=$korisnici item=korisnik}
                         <tr>
                             <td>{$korisnik.ime}</td>
                             <td>{$korisnik.prezime}</td>
                             <td>{$korisnik.userName}</td>
                         </tr>
                         {/foreach}
                 </tbody>
             </table>
        </div>
    </article>
</section>
       