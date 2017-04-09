<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?> 
<div class="container text-center">
    <div class="col-sm-10">
        <div class="row">
            <div class="col-sm-12">
                <div class="jumbotron">
                    <p>kategooria</p>
                </div>
            </div>
        </div>
        <?php 
            if(isset($success_msg)){
                echo $success_msg;
            }else if(isset($error_msg)){
                echo $error_msg;
            }
        ?>
        <?php
        if ($this->session->userdata('isUserLoggedIn')) {
            echo '<button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#newPost">';echo lang("category_new_post");echo '</button>';
        }
            ?>
            <div class="modal fade" id="newPost" role="dialog">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title"><?php echo lang("category_new_post"); ?></h4>
                        </div>
                        <div class="modal-body">
                            <form method="post">
                                <div class="form-group">
                                    <label class="col-md-2 control-label text-left" for="title"><?php echo lang("category_new_post_title"); ?></label>
                                    <input type="text" id="title" class="form-control" name="title" placeholder="<?php echo lang("category_new_post_title"); ?>" required="">

                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label text-left" for="text"><?php echo lang("category_new_post_text"); ?></label>
                                    <textarea id="text" class="form-control" rows="6" name="text" placeholder="<?php echo lang("category_new_post_text"); ?>" required="" ></textarea>

                                </div>                                
                                <div class="form-group">
                                <input type="submit" class="btn btn-primary" name="new_postSubmit" value="<?php echo lang("button_submit"); ?>">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                </div>
        <div class="spacer"> </div>
                <?php
                for ($x = 1; $x <= 10; $x++) {
                    echo "<div class=\"row\">
                 <div class=\"col-sm-2\">
                     <div class=\"well\">
                         <button type=\"button\" class=\"btn btn-info\">
                             <span class=\"glyphicon glyphicon-arrow-up\"></span></button>
                         <button type=\"button\" class=\"btn btn-info\">
                             <span class=\"glyphicon glyphicon-arrow-down\"></span></button>
                     </div>
                 </div>
                 <a href=\"";
                    echo base_url();
                    echo "index.php/welcome/post_view\">
                 <div class=\"col-sm-10\">
                     <div class=\"well\">
                         <h2>postitus $x</h2>
                     </div>
                 </div>
                 </a>
           </div>";
                }
                ?>
        </div>