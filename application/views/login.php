<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
   ?> 
<div class="container">
    <?php
    if(!empty($success_msg)){
        echo '<p class="statusMsg">'.$success_msg.'</p>';
    }elseif(!empty($error_msg)){
        echo '<p class="statusMsg">'.$error_msg.'</p>';}
    ?>
    <form method="post">
        <div class="form-group has-feedback">
			<label class="col-md-2 control-label text-left" for="log_in_email">Email:</label>
            <input type="email" id="log_in_email" class="form-control" name="email" placeholder="Email" required="" value="">
            <?php echo form_error('email','<span class="help-block">','</span>'); ?>
        </div>
        <div class="form-group">
		  <label class="col-md-2 control-label text-left" for="log_in_password"><?php echo lang("log_in_password"); ?>:</label>
          <input type="password" id="log_in_password" class="form-control" name="parool" placeholder="<?php echo lang("log_in_password"); ?>" required="">
          <?php echo form_error('parool','<span class="help-block">','</span>'); ?>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" name="loginSubmit" value="<?php echo lang("button_submit"); ?>">
        </div>
    </form>
    <p class="footInfo"><?php echo lang("log_in_no_user"); ?> <a href="<?php echo base_url(); ?>index.php/welcome/registration"><?php echo lang("log_in_register"); ?></a></p>
</div>