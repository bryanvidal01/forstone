<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css">
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/libs/jQuery.js" charset="utf-8"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/functions.js" charset="utf-8"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/events.js" charset="utf-8"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <?php wp_head(); ?>
  </head>

  <div class="header">
      <div class="container">
          <div class="row">
              <div class="col-sm-4 col-xs-2">
                  <div class="button-mobile">
                      <div class="barre"></div>
                      <div class="barre"></div>
                      <div class="barre"></div>
                  </div>
              </div>
              <div class="col-md-6 col-sm-4 col-xs-8">
                  <a href="<?php echo get_site_url(); ?>" class="container-logo">
                      <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" class="logo" alt="">
                  </a>
              </div>

              <div class="col-md-6 col-sm-4 col-xs-2 text-right">
                  <div class="switch-lang">
                      <ul>
                          <li>
                              <a href="#">
                                  EN
                              </a>
                          </li>
                          <li>
                              <a href="#" class="active">
                                  FR
                              </a>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
          <div class="col-sm-12">
              <div class="menu">
                  <ul>
                      <li>
                          <a href="#" class="active">
                              Accueil
                          </a>
                      </li>
                      <li>
                          <a href="#">L'équipe</a>
                      </li>
                      <li>
                          <a href="#">Compétences</a>
                      </li>
                      <li>
                          <a href="#">Nos métiers</a>
                      </li>
                      <li>
                          <a href="#">Références</a>
                      </li>
                      <li>
                          <a href="#">Contact</a>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
  </div>

  <body <?php body_class(); ?>>
