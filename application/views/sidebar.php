<div class='wrapper text-center'>
   <p><?php echo lang("sidebar_categories"); ?></p>
   <div class="btn-group-vertical">
     <?php
       foreach ($categories as $value) {
         echo '<a href="'.base_url().'index.php/welcome/category" class="btn btn-primary">'.$value['Kategooria'].'</a>';
       }
      ?>
   </div>
</div>
</div>
