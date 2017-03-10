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
   </head>
   <body>
      <nav class="navbar navbar-inverse">
         <!--TODO: check javascripti kohta, kui pole lubatud siis burger ei tööta-->
         <div class="container-fluid">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#burgerMenu">
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
            </div>
            <div class="collapse navbar-collapse" id="burgerMenu">
               <ul class="nav navbar-nav">
                  <li><a href="<?php echo base_url(); ?>">Avaleht</a></li>
                  <li><a href="<?php echo base_url(); ?>index.php/welcome/kkk">KKK</a></li>
                  <li><a href="<?php echo base_url(); ?>index.php/welcome/about">Info</a></li>
               </ul>
               <ul class="nav navbar-nav navbar-right">
                  <li><a href="<?php echo base_url(); ?>index.php/welcome/search">Täpsem otsing</a></li>
                  <!-- <li><a href="#">Täpsem otsing</a></li> -->
               </ul>
               <form class="navbar-form navbar-right" role="search">
                  <div class="form-group input-group">
					 <label for="search" class="sr-only">Search</label>
                     <input type="text" class="form-control" placeholder="Search..." id="search">
                     <span class="input-group-btn">
                     <button class="btn btn-default" type="button">
                     <span class="glyphicon glyphicon-search"></span>
                     </button>
					 </span>
                  </div>
               </form>
               <ul class="nav navbar-nav navbar-right">
                  <li>
                     <div class="btn-group"></div>
                  </li>
                  <li><button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                     My account <span class="caret"></span></button>
                  </li>
               </ul>
               <ul class="dropdown-menu" role="menu">
                  <li><a href="#">My Posts</a></li>
                  <li><a href="#">Settings</a></li>
               </ul>
            </div>
         </div>
      </nav>