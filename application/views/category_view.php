<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?> 
<div class="container text-center">    
 
    <div class="col-sm-10">
   
      <div class="row">
        <div class="col-sm-12">
          <div class="jumbotron">
            <h1>kategooria</h1>
          </div>
        </div>
      </div>
    <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#newPost">Uus postitus</button>
        <div class="modal fade" id="newPost" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Uus postitus</h4>
        </div>
        <div class="modal-body">
            <div class="form-group">
         <label for="usr">pealkiri:</label>
             <input type="text" class="form-control" id="usr">
        </div>
        <div class="form-group">
            <label for="comment">Sisu:</label>
             <textarea class="form-control" rows="5" id="comment"></textarea>
             <button type="button" class="btn btn-success">submit</button>
        </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
     <?php
        
        for ($x = 1; $x <= 10; $x++) {
            echo "<div class=\"row\">
                <div class=\"col-sm-2\">
                    <div class=\"well\">
                        <button type=\"button\" class=\"btn btn-info\">
                            <span class=\"glyphicon glyphicon-arrow-up\"></button>
                        <button type=\"button\" class=\"btn btn-info\">
                            <span class=\"glyphicon glyphicon-arrow-down\"></button>
                    </div>
                </div>
                <a href=\""; echo base_url(); echo "index.php/welcome/post_view\">
                <div class=\"col-sm-10\">
                    <div class=\"well\">
                        <h2>postitus $x</h2>
                    </div>
                </div>
                </a>
          </div>";
        } ?>
      
  </div>
  <div class="col-sm-2 well">
      <div class="list-group">
        <a href="<?php echo base_url(); ?>index.php/welcome/category" class="list-group-item">Kategooria 1</a>
        <a href="<?php echo base_url(); ?>index.php/welcome/category" class="list-group-item">Kategooria 2</a>
        <a href="<?php echo base_url(); ?>index.php/welcome/category" class="list-group-item">Kategooria 3</a>
      </div>
    </div>
</div>