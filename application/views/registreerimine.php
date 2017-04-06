<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
   ?>
<div class="container">
    <form action="" method="post">
        <div class="form-group">
            <input type="text" class="form-control" name="kasutajanimi" placeholder="Kasutajanimi" required="" value="<?php echo !empty($user['name'])?$user['name']:''; ?>">
          <?php echo form_error('kasutajanimi','<span class="help-block">','</span>'); ?>
        </div>
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email" required="" value="<?php echo !empty($user['email'])?$user['email']:''; ?>">
          <?php echo form_error('email','<span class="help-block">','</span>'); ?>
        </div>
        <div class="form-group">
          <input type="password" class="form-control" name="parool" placeholder="Parool" required="">
          <?php echo form_error('parool','<span class="help-block">','</span>'); ?>
        </div>
        <div class="form-group">
          <input type="password" class="form-control" name="korda_parool" placeholder="Korda parooli" required="">
          <?php echo form_error('korda_parool','<span class="help-block">','</span>'); ?>
        </div>
        <div class="form-group">
            <input type="submit" name="regSubmit" class="btn btn-primary btn-block" value="Submit"/>
        </div>
    </form>
    <p class="footInfo">Already have an account? <a href="<?php echo base_url(); ?>welcome/login">Login here</a></p>              
</div>
