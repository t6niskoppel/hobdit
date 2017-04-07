<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
   ?> 
<div class="container text-left">
   <div class="col-sm-10">
      <div class="form-group">
		 <h2><?php echo lang("about_title"); ?></h2>
         <h3><?php echo lang("help_q1"); ?></h3>
		 <p><?php echo lang("help_q1_a"); ?></p>
		 <h3><?php echo lang("help_q1"); ?></h3>
		 <p><?php echo lang("help_q1_a"); ?></p>
		 <h3><?php echo lang("help_q1"); ?></h3>
		 <p><?php echo lang("help_q1_a"); ?></p>
	  </div>
      <div class="form-group">
         <label for="comment"><?php echo lang("help_more_help"); ?></label>
         <textarea class="form-control" rows="3" id="comment" placeholder="<?php echo lang("help_more_help_comment_placeholder"); ?>"></textarea>
         <button type="submit" class="btn btn-primary"><?php echo lang("button_submit"); ?></button>
      </div>
   </div>