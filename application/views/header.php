<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="zxx">
    <head>
        <title><?php echo isset($title) ? $title : 'Default Title'; ?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>media/css/bootstrap.css">
		
		<!-- Kui CDN pole pole saadaval, siis võtab kohalikust failist -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="<?php echo base_url(); ?>media/js/jquery.min.js"><\/script>')</script>
		
        <script src="<?php echo base_url(); ?>media/js/bootstrap.js"></script>
        <!-- Date Picker -->
        <script async type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
        <!-- Include Date Range Picker -->
        <script async type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
        <link rel="stylesheet" href="<?php echo base_url(); ?>media/css/kalender.css"/>     
        <script async type="text/javascript" src="<?php echo base_url(); ?>media/js/kalender.js"></script>
        <!-- Google maps -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>media/css/kaart.css"/>
        <script async type="text/javascript" src="<?php echo base_url(); ?>media/js/kaart.js"></script>
        <script async type="text/javascript" src="<?php echo base_url(); ?>media/js/registreerimine.js"></script>


    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
		<div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>

    </div>
<div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li><a href="<?php echo base_url(); ?>"><?php echo lang("header_home"); ?></a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/welcome/kkk"><?php echo lang("header_help"); ?></a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/welcome/about"><?php echo lang("header_about"); ?></a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
					<li><a href="<?php echo base_url(); ?>index.php/langswitch/switchLanguage/estonian">Eesti</a></li>
					<li><a href="<?php echo base_url(); ?>index.php/langswitch/switchLanguage/english">English</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/welcome/search"><?php echo lang("header_refined_search"); ?></a></li>
                </ul>
                <form class="navbar-form navbar-right" role="search">
                    <label for="search" class="sr-only"><?php echo lang("header_search"); ?></label>
                    <div class="form-group input-group">
                        <input type="text" class="form-control" placeholder="<?php echo lang("header_search"); ?>" id="search">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </span>
                    </div>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <?php
                    if ($this->session->userdata('isUserLoggedIn')) {
                        echo'<li><a href="';
                        echo base_url();
                        echo 'index.php/welcome/account"><span class="glyphicon glyphicon-user"></span> ';
						echo lang("header_my_account");
						echo '</a></li>';
						echo '<li><a href="';
                        echo base_url();
                        echo 'index.php/welcome/logout"><span class="glyphicon glyphicon-log-out"></span> ';
						echo lang("header_log_out");
						echo '</a></li>';
                    } else {
                        echo'<li><a href="';
                        echo base_url();
                        echo 'index.php/welcome/registration"><span class="glyphicon glyphicon-list-alt"></span> ';
						echo lang("header_register");
						echo '</a></li>';
                        echo'<li><a href="';
                        echo base_url();
                        echo 'index.php/welcome/login"><span class="glyphicon glyphicon-log-in"></span> ';
						echo lang("header_log_in");
						echo '</a></li>';
                    }
                    ?>

                </ul>
            </div>
</div>
        </nav>
