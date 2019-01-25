<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css">
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/libs/jQuery.js" charset="utf-8"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/libs/jquery.cookie.js" charset="utf-8"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/functions.js" charset="utf-8"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/events.js" charset="utf-8"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <?php wp_head(); ?>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-133244680-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-133244680-1');
    </script>


  </head>

  <body <?php body_class(); ?>>
      <?php
      the_post();
      $currentId = get_the_id(); ?>

      <div class="header">
          <div class="container">
              <div class="row">
                  <div class="col-sm-4 hidden-md hidden-lg col-xs-2">
                      <div class="button-mobile">
                          <div class="barre"></div>
                          <div class="barre"></div>
                          <div class="barre"></div>
                      </div>
                  </div>
                  <div class="col-md-6 col-sm-4 col-xs-8">
                      <a href="<?php echo get_site_url(); ?>" class="container-logo">
                          <div class="visible-md visible-lg">
                              <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" class="logo" alt="">
                          </div>
                          <div class="visible-xs visible-sm">
                              <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo-mobile.png" class="logo" alt="">
                          </div>
                      </a>
                  </div>

                  <div class="col-md-6 col-sm-4 col-xs-2 text-right">
                      <div class="switch-lang">
                          <ul>
                              <li>
                                  <a href="?lang=en" <?php echo (isset($_GET['lang']) && $_GET['lang'] == "en") ? 'class="active"' : ""; ?>>
                                      EN
                                  </a>
                              </li>
                              <li>
                                  <a href="?lang=fr" <?php echo (!isset($_GET['lang']) || $_GET['lang'] != "en") ? 'class="active"' : ""; ?>>
                                      FR
                                  </a>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
              <div class="col-sm-12">
                  <div class="menu">
                      <?php echo wp_nav_menu([
                          'menu'=>'principal',
                          'menu_class'=>''
                      ]); ?>

                  </div>
              </div>
          </div>
      </div>

      <div class="cookie-message">
          <div class="container">
              <div class="row">
                  <div class="col-md-10 text-center">
                      Ce site utilise des cookies, merci de les accepter

                      <a href="#" class="button-red validate-cookie">
                          Accepter les cookies
                      </a>
                      <a href="<?php echo get_site_url(); ?>/mentions-legales/" class="button-red-border">
                          En savoir plus
                      </a>
                  </div>
              </div>
          </div>
      </div>
