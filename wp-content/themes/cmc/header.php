<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
     <meta name="apple-mobile-web-app-capable" content="yes">
     <title>CMC | <?php the_title(); ?></title>
     <!-- Seo Link Here -->
     <meta name="description" content="">
     <meta name="author" content="SitePoint">
     <meta property="og:title" content="">
     <meta property="og:type" content="website">
     <meta property="og:url" content="">
     <meta property="og:description" content="">
     <meta property="og:image" content="">
     <!-- DNS Prefetch -->
     <link rel="preconnect" href="https://www.gstatic.com" crossorigin>
     <link rel="dns-prefetch" href="https://www.gstatic.com" crossorigin>
     <link rel="preconnect" href="https://www.google-analytics.com" crossorigin>
     <link rel="dns-prefetch" href="https://www.google-analytics.com" crossorigin>
     <link rel="preconnect" href="https://www.google.com" crossorigin>
     <link rel="dns-prefetch" href="https://www.google.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;1,600&display=swap" rel="stylesheet">
     <?php the_field('google_tagmanager_code_head', 'option'); ?>
     <?php wp_head(); ?> 
</head>

<body>
     <!-- Desktop Header Start Here -->
     <div class="whats-new">
          <a href="<?php the_field('url', 'option') ?>"><img src="<?php the_field('image', 'option') ?>" alt="Whats New Icon"></a>
     </div>
     <header class="d-none d-lg-block">
          <div class="container">
               <div class="row">
                    <div class="col-md-4">
                         <div class="cmc-logo">
                              <a href="/">
                                   <picture>
                                        <img src="<?php the_field('logo', 'options'); ?>" alt="<?php the_field('logo_alt', 'options'); ?>" class="img-fluid">
                                   </picture>
                              </a>
                         </div>
                    </div>
                    <div class="col-md-8">
			 <div class="upper-links">
                                       <a href="<?php the_field('email_link', 'option'); ?>"><img src="<?php the_field('email_label', 'options'); ?>" alt="Email"></a>
                              <a href="<?php the_field('faq_page_link', 'options'); ?>" target="_blank"><?php the_field('faq_page_label', 'options'); ?></a>
                              <!-- <a href="#">Contact us</a> -->
                              <!-- <a href="#" onclick="return false;">Translate</a> -->
                              <div id="google_translate_element"></div>
                              <button class="font-plus" id="increase-btn">A+</button>
                              <button class="font-plus" id="decrease-btn">A-</button>
                              <button class="font-plus" id="normal-btn">A</button>
                         </div>
                         <div class="row">
                              <div class="col-md-5">
                                   <?php get_template_part('templates-part/search-form'); ?>
                              </div>
                              <div class="col-md-4 col-6">
                                   <div class="book-appointment">
                                        <a class="blue-btn-hover" href="<?php the_field('book_an_appointment_button_link', 'options'); ?>" target="_blank"><?php the_field('book_an_appointment_button_label', 'options'); ?></a>
                                   </div>
                              </div>
                              <div class="col-md-3 col-6">
                                   <div class="give-cmc">
                                        <a class="blue-btn-hover" href="<?php the_field('give_to_cmc_button_link', 'options'); ?>" target="_blank"><?php the_field('give_to_cmc_button_label', 'options'); ?></a>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark-blue" id="sticky-header">
               <div class="container">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                         <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                         </button>
                         <?php
                         wp_nav_menu([
                              'menu'            => 'primary',
                              'theme_location'  => 'primary',
                              'container'       => 'false',
                              'container_id'    => 'bs4navbar',
                              'menu_id'         => false,
                              'menu_class'      => 'navbar-nav',
                              'depth'           => 2,
                              'fallback_cb'     => 'bs4navwalker::fallback',
                              'walker'          => new bs4navwalker()
                         ]);
                         ?>
                    </div>
               </div>
          </nav>
     </header>
     <!-- Desktop Header End Here -->
     <!-- Mobile Header Start Here -->
     <header class="d-block d-lg-none mobile-header">
          <div class="container-fluid">
               <div class="row align-items-center mb-3">
                    <div class="col-6">
                         <div class="cmc-logo">
                              <a href="/">
                                   <picture>
                                        <img src="<?php the_field('logo', 'options'); ?>" alt="<?php the_field('logo_alt', 'options'); ?>" class="img-fluid">
                                   </picture>
                              </a>
                         </div>
                    </div>
                    <div class="col-6">
                         <div class="row align-items-center">
                              <div class="col-6 p-0 text-end">
                                    <div id="google_translate_element2"></div>
                              </div>
                              <div class="col-6">
                                   <nav class="navbar navbar-expand-lg navbar-dark">
                                        <div class="container">
                                             <button class="navbar-toggler collapsed" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                                                  <span class="icon-bar top-bar"></span>
                                                  <span class="icon-bar middle-bar"></span>
                                                  <span class="icon-bar bottom-bar"></span>
                                             </button>
                                             <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
                                                  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
                                                       X
                                                  </button>
                                                  <?php
                                                  wp_nav_menu([
                                                       'menu'            => 'primary',
                                                       'theme_location'  => 'primary',
                                                       'container'       => 'false',
                                                       'container_id'    => 'bs4navbar',
                                                       'menu_id'         => false,
                                                       'menu_class'      => 'navbar-nav',
                                                       'depth'           => 2,
                                                       'fallback_cb'     => 'bs4navwalker::fallback',
                                                       'walker'          => new bs4navwalker()
                                                  ]);
                                                  ?>
                                             </div>
                                        </div>
                                   </nav>
                              </div>
                         </div>
                    </div>
               </div>
               <div class="row align-items-center mb-3">
                    <div class="col-5 pe-0">
                         <?php get_template_part('templates-part/search-form'); ?>
                    </div>
                    <div class="col-4 pe-0">
                         <div class="book-appointment">
                              <a href="<?php the_field('book_an_appointment_button_link', 'options'); ?>" target="_blank"><?php the_field('book_an_appointment_button_label', 'options'); ?></a>
                         </div>
                    </div>
                    <div class="col-3">
                         <div class="give-cmc">
                              <a href="<?php the_field('give_to_cmc_button_link', 'options'); ?>" target="_blank"><?php the_field('give_to_cmc_button_label', 'options'); ?></a>
                         </div>
                    </div>
               </div>
          </div>
     </header>
     <!-- Mobile Header End Here -->
