<!DOCTYPE html>
<html lang="ja">
<head>
<html lang="ja">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <title>OJT</title>
     <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
     <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/footer_article.css">
     <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/header_main.css">
    <script src="https://kit.fontawesome.com/9e1bf99b51.js" crossorigin="anonymous"></script>
  </head>
<body>
<header>
<?php 
  wp_nav_menu( array( 
    'theme_location' => 'footer-menu',
    'menu_class'      => 'header_menu',
  ) ); 
?>
    <!-- <ul class="header_menu">
        <li class="nav_menu">

        </li>
        <li class="nav_menu">Menu2</li>
        <li class="nav_menu">Menu3</li>
        <li class="nav_menu">Menu4</li>
    </ul> -->
    
</header>