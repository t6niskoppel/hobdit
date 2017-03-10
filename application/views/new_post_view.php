<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
   ?> 
<div class="container text-left">
   <div class="col-sm-10">
      <div class="form-group">
         <label for="usr">Pealkiri:</label>
         <input type="text" class="form-control" id="usr">
      </div>
      <div class="form-group">
         <label for="comment">Sisu:</label>
         <textarea class="form-control" rows="5" id="comment"></textarea>
         <button>submit</button>
      </div>
   </div>
   <div class="col-sm-2 well">
      <div class="list-group">
         <a href="<?php echo base_url(); ?>index.php/welcome/category" class="list-group-item">Kategooria 1</a>
         <a href="<?php echo base_url(); ?>index.php/welcome/category" class="list-group-item">Kategooria 2</a>
         <a href="<?php echo base_url(); ?>index.php/welcome/category" class="list-group-item">Kategooria 3</a>
      </div>
   </div>
</div>