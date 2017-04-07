<div class="container">
    <div class="col-sm-10">  
        <p><b>Id: </b><?php echo $this->session->userdata['userId'];?></p>
        <p><b><?php echo lang("account_name"); ?>: </b><?php echo $user['Kasutajanimi']; ?></p>
        <p><b>Email: </b><?php echo $user['email']; ?></p>
    </div>