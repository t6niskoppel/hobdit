<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
   ?>

<div class="container text-left">
   <div class="col-sm-10">
      <h2>Kasutajaks registreerimine</h2>
      <br><b>
        <div id="errors" />
      </b><br>
      <div class="form-group">
         <label for="kasutajanimi">Kasutajanimi:</label>
         <input type="text" class="form-control" id="kasutajanimi" autofocus>
         <br>
         <label for="email">Email:</label>
         <input type="text" class="form-control" id="email">
         <br>
         <label for="pass1">Salasõna:</label>
         <input type="password" class="form-control" id="pass1">
         <br>
         <label for="passs">Korrata salasõna:</label>
         <input type="password" class="form-control" id="pass2">
         <br>
         <input type="checkbox" id="kasutajatingimus" value="accept"> <b>Kinnitan, et olen lugenud ja nõustun kasutajatingimustega</b><br>
         <br>
         <button type="submit" value="Submit" class="btn btn-primary btn-md">Registreeru</button>
      </div>
   </div>
</div>
<?php
 ?>
