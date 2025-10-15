<?php
/**
 * 404
 *
 * @package WordPress
 * @subpackage halley-site
 *
 */

get_header(); ?>

<main role="main">

  <?= get_template_part('template-parts/c-page-header'); ?>

  <section class="u-py-5">
    <div class="container">
      
      <div class="bg-primary p-5 rounded-3 shadow-sm text-white text-center col-lg-7 mx-auto">
        <h2 class="h1"> Opps. Página não encontrada! </h2>
        <p class="mb-4"> Parece que a página que você acessou não existe. </p>
        <p> <a href="<?= get_site_url(); ?>" class="btn btn-secondary text-white"> Voltar ao site</a> </p>
      </div>

    </div>

  </section>

</main>

<?php get_footer(); ?>
