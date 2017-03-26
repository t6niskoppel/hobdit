<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
   ?>
<script async type="text/javascript" src="<?php echo base_url(); ?>media/js/registreerimine.js"></script>
<div class="container text-left">
   <div class="col-sm-10">
      <h2>Kasutajaks registreerimine</h2>
      <div class="valError"></div>
      <?php echo form_open('localhost/hobdit/validation/regControll', array('class'=>'jsform')); ?>
      <label for="kasutajanimi">Kasutajanimi:</label>
      <input type="text" class="form-control" name="kasutajanimi" autocomplete="off" autofocus>
      <br>
      <label for="email">Email:</label>
      <input type="text" class="form-control" name="email" data-toggle="tooltip" title="E-maili aadress peab olema valiidne">
      <br>
      <label for="pass1">Salasõna:</label>
      <input type="password" class="form-control" name="pass1" data-toggle="tooltip" title="Salasõna pikkus peab olema vähemalt 8 tähemärki">
      <br>
      <label for="pass2">Korrata salasõna:</label>
      <input type="password" class="form-control" name="pass2" data-toggle="tooltip" title="Kirjuta salasõna uuesti">
      <br>
      <input type="checkbox" name="kasutajatingimus" value="accept"> <b>Kinnitan, et olen lugenud ja nõustun kasutajatingimustega</b><br>
      <br>
      <input type="submit" value="Registreeru" class="btn btn-primary btn-md">
      <?php echo form_close(); ?>
   </div>
</div>
