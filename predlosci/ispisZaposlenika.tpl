<section class="sadrzaj">
    <article id="greske"> {$greska} </article>
    <article id="ispisKorisnika">
        <h2 style="text-align: center" >Korisnici</h2>
 
        <div id="table-container"> 
             <table border="1">
                 <thead>
                     <tr>
                    <th>Ime</th>
                    <th>Prezime</th>
                    <th>Korisničko ime</th>
                    <th>Email</th>
                    <th>Adresa</th>
                    <th>Mjesto</th>
                    <th>Država</th>
                    <th>Telefon</th>
                    <th>Tip korisnika</th>
                    </tr>
                 </thead>
                 <tbody>
                     
                     {foreach from=$korisnici item=korisnik}
                         <tr>
                             <td>{$korisnik.ime}</td>
                             <td>{$korisnik.prezime}</td>
                             <td>{$korisnik.userName}</td>
                             <td>{$korisnik.email}</td>
                             <td>{$korisnik.adresa}</td>
                             <td>{$korisnik.mjesto}</td>
                             <td>{$korisnik.drzava}</td>
                             <td>{$korisnik.telefon}</td>
                             <td>{$korisnik.naziv}</td>
                         </tr>
                         {/foreach}
                 </tbody>
             </table>
        </div>
    </article>
</section>
       