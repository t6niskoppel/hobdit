<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
   ?>
<div class="container text-center">
   <div class="col-sm-10">
      <div class="row text-left">
         <div class="col-sm-13">
            <div class="well">
               <div class="media">
                  <div class="media-left col-sm-2">
                     <div class="well">
                        <p>Postitaja andmed</p>
                        <button type="button" class="btn btn-info">
                        <span class="glyphicon glyphicon-arrow-up"></span></button>
                        <button type="button" class="btn btn-info">
                        <span class="glyphicon glyphicon-arrow-down"></span></button>
                     </div>
                  </div>
                  <div class="media-body">
                     <h4 class="media-heading"><?php echo lang("posting_main_title"); ?>:</h4>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <hr>
      <div class="row">
         <div class="col-sm-2">
            <div class="well">
               <p>Kommenteerija andmed</p>
               <button type="button" class="btn btn-info">
               <span class="glyphicon glyphicon-arrow-up"></span></button>
               <button type="button" class="btn btn-info">
               <span class="glyphicon glyphicon-arrow-down"></span></button>
            </div>
         </div>
         <div class="col-sm-10">
            <div class="media">
               <div class="media-body">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
               </div>
            </div>
         </div>
      </div>
      <hr>
      <div class="row">
         <div class="col-sm-2">
            <div class="well">
               <p>Kommenteerija andmed</p>
               <button type="button" class="btn btn-info">
               <span class="glyphicon glyphicon-arrow-up"></span></button>
               <button type="button" class="btn btn-info">
               <span class="glyphicon glyphicon-arrow-down"></span></button>
            </div>
         </div>
         <div class="col-sm-10">
            <div class="media">
               <div class="media-body">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
               </div>
            </div>
         </div>
      </div>
      <hr>
      <div class="row">
         <div class="col-sm-2">
            <div class="well">
               <p>Kommenteerija andmed</p>
               <button type="button" class="btn btn-info">
               <span class="glyphicon glyphicon-arrow-up"></span></button>
               <button type="button" class="btn btn-info">
               <span class="glyphicon glyphicon-arrow-down"></span></button>
            </div>
         </div>
         <div class="col-sm-10">
            <div class="media">
               <div class="media-body">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
               </div>
            </div>
         </div>
      </div>
	          <?php
        if ($this->session->userdata('isUserLoggedIn')) {
		 echo '<div class="form-group text-left">';
         echo '<label for="comment">'; echo lang("posting_comment");echo':</label>';
         echo '<textarea class="form-control" rows="5" id="comment"></textarea>';
         echo '<button type="submit" class="btn btn-primary">';echo lang("button_submit"); echo'</button></div>';        
        }?>
	
   </div>
