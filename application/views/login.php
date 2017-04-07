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
    <form action="" method="post">
        <div class="form-group has-feedback">
            <input type="email" class="form-control" name="email" placeholder="Email" required="" value="">
            <?php echo form_error('email','<span class="help-block">','</span>'); ?>
        </div>
        <div class="form-group">
          <input type="password" class="form-control" name="parool" placeholder="Parool" required="">
          <?php echo form_error('parool','<span class="help-block">','</span>'); ?>
        </div>
        <div class="form-group">
            <input type="submit" name="loginSubmit" class="btn btn-primary btn-block" value="Submit"/>
        </div>
    </form>
    <p class="footInfo">Pole kasutajat? <a href="<?php echo base_url(); ?>index.php/welcome/registration">Registreeri</a></p>
</div>