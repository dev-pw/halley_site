<?php

error_reporting(E_ALL);
ini_set('display_errors', 'on');

/**
 * Header
 * @package WordPress
 * @subpackage halley-site
 *
 */

 $logo = get_option('options_logo_header');
 $logo_menu = get_option('options_menubar');
 $preload = get_option('options_logo_preload');
?>

<!DOCTYPE html>
<html class="no-js" <?= language_attributes(); ?>>

<head>

   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <?php wp_head(); ?>

</head>

<body>

<!-- Preload -->
<div id="preload">
   <img src="<?= $preload; ?>" width="100">
</div>
<!-- Preload -->

<div class="wrapper-site">

   <header class="l-header-site ">

      <div class="container">

         <div class="row align-items-center">

            <div class="col-auto col-lg-4 btn-rs gap-2 d-none d-lg-flex">
               <?= get_template_part('template-parts/c-redes-sociais'); ?>
            </div>

            <div class="col-auto col-lg-4 l-brand text-center">
               <a href="<?= bloginfo('url'); ?>" title="<?= bloginfo('name') . ' - ' . bloginfo('description'); ?>">
                  <img src="<?= $logo; ?>" alt="<?= bloginfo('name') . ' - ' . bloginfo('description'); ?>" class="w-100">
               </a>
            </div>

            <div class="col-auto col-lg-4 ms-auto">
               <div class="row align-items-center justify-content-end gx-3">

                  <div class="col-auto d-none d-lg-block">
                     <a href="<?= the_permalink(53); ?>" class="btn btn-secondary text-white"> Fale conosco </a>
                  </div>

                  <div class="col-auto s-nav-toggle">
                     <button class="c-nav-toggle js-nav-toggle" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                        <span class="c-nav-toggle__line"></span>
                        <span class="c-nav-toggle__line"></span>
                        <span class="c-nav-toggle__line"></span>
                     </button>
                  </div>

               </div>
            </div>
         </div>

      </div>

   </header>

   <!-- MENU OFFCANVAS -->
   <div class="bg-light c-nav-offcanvas offcanvas offcanvas-end" data-bs-scroll="false" data-bs-backdrop="true" tabindex="-1" id="offcanvasNavbar" aria-labelledby="menuoffcanvasLabel">

      <div class="offcanvas-header px-0">
         <div class="container topbar-container">
            <div class="justify-content-between row">
               <div class="col-10 col-md-7">
                  <a href="<?= bloginfo('url'); ?>" title="<?= bloginfo('name') . ' - ' . bloginfo('description'); ?>">
                     <img src="<?= $logo_menu; ?>" alt="<?= bloginfo('name') . ' - ' . bloginfo('description'); ?>" class="w-100">
                  </a>
               </div>
               <div class="col-auto">
                  <button type="button" class="border-0 ms-auto text-primary bg-transparent" data-bs-dismiss="offcanvas" aria-label="Close"> <i class="fa-solid fa-xmark fs-3"></i> </button>
               </div>
            </div>
         </div>
      </div>

      <div class="offcanvas-body px-0">
         <div class="container">

            <div class="row gy-5 justify-content-center">

               <div id="js-navigation-menu" class="col-12 p-0">
                  <?= get_template_part('template-parts/c-menu-principal'); ?>
               </div>

               <div class="col-12">
                  <div class="gy-4 justify-content-center row btn-rs d-lg-none">
                     <?= get_template_part('template-parts/c-redes-sociais'); ?>
                  </div>
               </div>

            </div>
         </div>
      </div>
   </div>