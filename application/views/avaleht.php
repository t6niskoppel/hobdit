<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
   ?> 
<div class="container text-center">
   <div class="col-sm-10">        
      <?php
         for ($i = 1; $i <= 3; $i++) {
         echo "<div class=\"panel panel-default\">
         <div class=\"panel-heading\">kategooria $i</div>
             <div class=\"panel-body\">
         ";
         
         for ($x = 1; $x <= 4; $x++) {
             echo "<div class=\"row\">
                 <div class=\"col-sm-2\">
                     <div class=\"well\">
                         <button type=\"button\" class=\"btn btn-info\">
                             <span class=\"glyphicon glyphicon-arrow-up\"></span></button>
                         <button type=\"button\" class=\"btn btn-info\">
                             <span class=\"glyphicon glyphicon-arrow-down\"></span></button>
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
         } echo "</div></div>";
         } 
         ?>
   </div>
