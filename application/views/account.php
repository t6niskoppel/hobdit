<div class="container">
    <div class="col-sm-10">  
        <p><strong>Id: </strong><?php echo $this->session->userdata['userId'];?></p>
        <p><strong><?php echo lang("account_name"); ?>: </strong><?php echo $user['Kasutajanimi']; ?></p>
        <p><strong>Email: </strong><?php echo $user['email']; ?></p>
    </div>