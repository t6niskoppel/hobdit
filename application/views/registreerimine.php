<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
   ?>

<div class="container text-left">
   <div class="col-sm-10">
      <h2>Kasutajaks registreerimine</h2>
      <br>
        <div id="errors"></div>
      <br>
      <div class="form-group">
         <label for="kasutajanimi">Kasutajanimi:</label>
         <input type="text" class="form-control" id="kasutajanimi" autofocus>
         <br>
         <label for="email">Email:</label>
         <input type="text" class="form-control" id="email">
         <br>
         <label for="pass">Salasõna:</label>
         <input type="password" class="form-control" id="pass">
         <br>
         <label for="passKorrata">Korrata salasõna:</label>
         <input type="password" class="form-control" id="passKorrata">
         <br>
         <input type="checkbox" id="kasutajatingimus" value="accept"> <label for="kasutajatingimus">Kinnitan, et olen lugenud ja nõustun kasutajatingimustega</label><br>
         <br>
         <button type="submit" value="Submit" class="btn btn-primary btn-md">Registreeru</button>
      </div>
   </div>
</div>
