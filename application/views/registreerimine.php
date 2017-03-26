<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
   ?>
<div class="container text-left">
   <div class="col-sm-10">
      <h2>Kasutajaks registreerimine</h2>
      <div class="valError"></div>
      <?php echo form_open('localhost/hobdit/validation/regControll', array('class'=>'jsform')); ?>
      <label for="kasutajanimi">Kasutajanimi:</label>
      <input type="text" class="form-control" id="kasutajanimi" name="kasutajanimi" autocomplete="off" autofocus>
      <br>
      <label for="emailReg">Email:</label>
      <input type="text" class="form-control" id="emailReg" name="email" data-toggle="tooltip" title="E-maili aadress peab olema valiidne">
      <br>
      <label for="pass1">Salasõna:</label>
      <input type="password" class="form-control" id="pass1" name="pass1" data-toggle="tooltip" title="Salasõna pikkus peab olema vähemalt 8 tähemärki">
      <br>
      <label for="pass2">Korrata salasõna:</label>
      <input type="password" class="form-control" id="pass2" name="pass2" data-toggle="tooltip" title="Kirjuta salasõna uuesti">
      <br>
	  <label for="kasutajatingimus">
      <input type="checkbox" name="kasutajatingimus" id="kasutajatingimus" value="accept"> Kinnitan, et olen lugenud ja nõustun kasutajatingimustega</label><br>
      <br>
      <input type="submit" value="Registreeru" class="btn btn-primary btn-md">
      <?php echo form_close(); ?>
   </div>
</div>
