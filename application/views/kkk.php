<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
   ?> 
<div class="container text-left">
   <div class="col-sm-10">
      <div class="form-group">
         <h3>Korduma Kippuvad Küsimused:</h3>
         <br>
         <h4>Küsimus: Kui teen valiku a kas siis juhtub b?</h4>
         <p>Vastus: Ei, siis juhtub hoopis c.</p>
         <br>        
         <h4>Küsimus: Kui teen valiku a kas siis juhtub b?</h4>
         <p>Vastus: Ei, siis juhtub hoopis c.</p>
         <br>
         <h4>Küsimus: Kui teen valiku a kas siis juhtub b?</h4>
         <p>Vastus: Ei, siis juhtub hoopis c.</p>
         <br>
         <h4>Küsimus: Kui teen valiku a kas siis juhtub b?</h4>
         <p>Vastus: Ei, siis juhtub hoopis c.</p>
         <br>
         <h4>Küsimus: Kui teen valiku a kas siis juhtub b?</h4>
         <p>Vastus: Ei, siis juhtub hoopis c.</p>
         <br>
      </div>
      <div class="form-group">
         <label for="comment">Kas ei leidnud siit vastust? Küsige julgelt!</label>
         <textarea class="form-control" rows="3" id="comment" placeholder="Kirjutage siia"></textarea>
         <button type="Submit">Saada</button>
      </div>
   </div>
   <div class="col-sm-2 well">
      <p>Kategooriad</p>
      <div class="list-group">
         <a href="<?php echo base_url(); ?>index.php/welcome/category" class="list-group-item">Kategooria 1</a>
         <a href="<?php echo base_url(); ?>index.php/welcome/category" class="list-group-item">Kategooria 2</a>
         <a href="<?php echo base_url(); ?>index.php/welcome/category" class="list-group-item">Kategooria 3</a>
      </div>
   </div>
</div>