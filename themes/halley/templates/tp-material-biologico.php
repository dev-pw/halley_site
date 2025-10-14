<?php
/**
 * Template Name: Transporte Material Biológico
 * Template Post Type: page
 * @package WordPress
 * @subpackage halley-site
 *
*/

get_header();

?>

<main>

    <?php get_template_part('template-parts/c-page-header'); ?>

    <div class="u-py-5">
        <div class="container">

            <div class="entry-content-post">
                <?= the_content(); ?>
            </div>

        </div>

    </div>

    <?= get_template_part('template-parts/ft-certificados'); ?>

</main>

<?php get_footer(); ?>
