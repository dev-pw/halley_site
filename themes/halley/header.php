<?php

error_reporting(E_ALL);
ini_set('display_errors', 'on');

/**
 * Header
 * @package WordPress
 * @subpackage halley-site
 *
 */
?>

<!DOCTYPE html>
<html class="no-js" lang="<?= language_attributes(); ?>">

<head>

   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <?php wp_head();?>

</head>

<body>

<div class="wrapper-site">

  <header class="l-header-site ">

     <div class="container">

        <div class="row align-items-center">

           <div class="col-auto l-brand">
              <a href="">
                <a href=""></a>
              </a>
           </div>

           <div class="col-auto ms-auto">
              <div class="row align-items-center justify-content-end gx-3">

                  

                 <div class="col-auto d-none d-lg-block">
                   <a href="https://wa.me/55" class="btn-orcamento" target="_blank">solicitar orçamento</a>
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
<div class="bg-light w-100 c-nav-offcanvas offcanvas offcanvas-end" data-bs-scroll="false" data-bs-backdrop="true" tabindex="-1" id="offcanvasNavbar" aria-labelledby="menuoffcanvasLabel">

   <div class="offcanvas-header px-0">
      <div class="container topbar-container">
         <div class="align-items-center justify-content-end row">
            <div class="col-auto">
               <button type="button" class="border-0 ms-auto text-primary bg-transparent" data-bs-dismiss="offcanvas" aria-label="Close"> <i class="fa-solid fa-xmark fs-1"></i> </button>
            </div>
         </div>
      </div>
   </div>

   <div class="offcanvas-body px-0">
      <div class="container">

         <div class="row mb-5">
            <div class="col-10 col-md-7 col-lg-5 mx-auto text-center">
               <a href="">
                <img src="" alt="">
               </a>
            </div>
         </div>

         <div class="row gy-5 justify-content-center">

            <div class="col-12 p-0">
            </div>

            <div class="col-12">
               <div class="gy-4 justify-content-center row btn-rs d-lg-none">
                
               </div>
            </div>

            <div class="col-12 text-center d-lg-none">
               <a href="https://wa.me/55" class="btn-orcamento" target="_blank">solicitar orçamento</a>
            </div>
            
         </div>
      </div>
   </div>
</div>
