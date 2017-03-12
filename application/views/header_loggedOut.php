<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
   ?><!DOCTYPE html>
<html lang="zxx">
   <head>
      <title>Avaleht</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>media/css/bootstrap.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script src="<?php echo base_url(); ?>media/js/bootstrap.js"></script>
	        
	  <!-- Date Picker -->
      <script async type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
      <!-- Include Date Range Picker -->
      <script async type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
      <script async type="text/javascript" src="<?php echo base_url(); ?>media/js/kalender.js"></script>
   </head>
   <body>
      <nav class="navbar navbar-inverse">
         <div class="container-fluid">
               <ul class="nav navbar-nav">
                  <li><a href="<?php echo base_url(); ?>">Home</a></li>
                  <li><a href="<?php echo base_url(); ?>index.php/welcome/kkk">Help</a></li>
                  <li><a href="<?php echo base_url(); ?>index.php/welcome/about">About</a></li>
               </ul>
               <ul class="nav navbar-nav navbar-right">
                  <li><a href="<?php echo base_url(); ?>index.php/welcome/search">Refined search</a></li>
               </ul>
               <form class="navbar-form navbar-right" role="search">
			   	  <label for="search" class="sr-only">Search</label>
                  <div class="form-group input-group">
                     <input type="text" class="form-control" placeholder="Search.." id="search">
                     <span class="input-group-btn">
                     <button class="btn btn-default" type="button">
                     <span class="glyphicon glyphicon-search"></span>
                     </button>
                     </span>
                  </div>
               </form>
               <ul class="nav navbar-nav navbar-right">
                   <li><a href="#"><span class="glyphicon glyphicon-list-alt"></span> Sign Up</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
               </ul>
            </div>
      </nav>
      <div class="modal fade" id="logIn" role="dialog">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
               </div>
               <div class="modal-body">
                  <form class="form-horizontal">
                     <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Email:</label>
                        <div class="col-sm-10">
                           <input type="email" class="form-control" id="email" placeholder="Enter email">
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd">Password:</label>
                        <div class="col-sm-10">
                           <input type="password" class="form-control" id="pwd" placeholder="Enter password">
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                           <div class="checkbox">
							  <label for="rememberMe">
							  <input type="checkbox" id="rememberMe">Remember me</label>
                           </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                           <button type="submit" class="btn btn-default">Submit</button>
                        </div>
                     </div>
                  </form>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
               </div>
            </div>
         </div>
      </div>