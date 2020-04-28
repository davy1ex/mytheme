<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body>
<!-- header -->
<header>
    <!-- <div class="header__wrapper"> -->
        <div class="header__section">
            <div class="header__item">  
                <a href="/<?php home_url(); ?>"><?php bloginfo('name'); ?></a>
            </div>
            <!-- <div class="header__item">
                <a href="/wordpress">Home</a>
            </div> -->
            <div class="header__item">            
                <a href="#">Better</a>
            </div>
        </div>
    
        <div class="header__section right__section">
            <div class="header__item">
                <a href="/wordpress/username">Username</a>
            </div>
        </div>
    <!-- </div> -->
</header>
<!-- header -->