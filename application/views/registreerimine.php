<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
   ?>
<div class="container">
    <form method="post">
        <div class="form-group">
          <label class="col-md-2 control-label text-left" for="register_username"><?php echo lang("registration_username"); ?>:</label>
		  <input type="text" id="register_username" class="form-control" name="kasutajanimi" placeholder="<?php echo lang("registration_username"); ?>" required="" value="<?php echo !empty($user['name'])?$user['name']:''; ?>">
          <?php echo form_error('kasutajanimi','<span class="help-block">','</span>'); ?>
        </div>
        <div class="form-group">
		  <label class="col-md-2 control-label text-left" for="register_email">Email:</label>
          <input type="email" id="register_email" class="form-control" name="email" placeholder="Email" required="" value="<?php echo !empty($user['email'])?$user['email']:''; ?>">
          <?php echo form_error('email','<span class="help-block">','</span>'); ?>
        </div>
        <div class="form-group">
		  <label class="col-md-2 control-label text-left" for="register_password"><?php echo lang("registration_password"); ?>:</label>
          <input type="password" id="register_password" class="form-control" name="parool" placeholder="<?php echo lang("registration_password"); ?>" required="">
          <?php echo form_error('parool','<span class="help-block">','</span>'); ?>
        </div>
        <div class="form-group">
		  <label class="col-md-2 control-label text-left" for="register_password_repeat"><?php echo lang("registration_password_repeat"); ?>:</label>
          <input type="password" id="register_password_repeat" class="form-control" name="korda_parool" placeholder="<?php echo lang("registration_password_repeat"); ?>" required="">
          <?php echo form_error('korda_parool','<span class="help-block">','</span>'); ?>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" name="regSubmit" value="<?php echo lang("button_submit"); ?>">
        </div>
    </form>
	<!-- already have an account? -->
    <p class="footInfo"><?php echo lang("registration_already_user"); ?> <a href="<?php echo base_url(); ?>index.php/welcome/login"><?php echo lang("registration_already_user_log"); ?></a></p>              
</div>
