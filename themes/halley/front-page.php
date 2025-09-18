<?php

/**
 * Front-page
 * @package WordPress
 * @subpackage halley-site
 *
 */

 get_header();

 echo '<main class="main">';
  get_template_part("template-parts/ft-banner");
  get_template_part("template-parts/ft-conheca");
  get_template_part("template-parts/ft-indo-bem");
  get_template_part("template-parts/ft-blog");
  get_template_part("template-parts/ft-orcamento");
  get_template_part("template-parts/ft-certificados");
  get_template_part("template-parts/ft-depoimentos");
  get_template_part("template-parts/ft-news");
  get_template_part("template-parts/ft-dados-contato");
 echo '</main>';

get_footer(); ?>
