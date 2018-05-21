<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo $title; ?></title>
        
        <!-- css & font -->
        <!--<link rel="stylesheet" href="<?php /* echo base_url("assets/css/bootstrap.min.css");*/?>"> -->
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" href="/assets/css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
    </head>
    <body>
        <!-- Menu -->
        <nav class="navbar navbar-default">
            <div class="container">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                    <a class="navbar-brand" href="index.html">M.F.C.</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo base_url("home/accueil"); ?>">Accueil</a></li>
                        <li><a href="<?php echo base_url("home/ecole");?>">L'école</a></li>
                        <li><a href="<?php echo base_url("home/formation");?>">Formations</a></li>
                        <li><a href="<?php echo base_url("home/inscription");?>">Inscription</a></li>
                        <li><a href="<?php echo base_url("home/contact");?>">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid bleu">
        </div>