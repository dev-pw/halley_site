<?php
/**
 * Template Name: Quem Somos
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

</main>

<?php get_footer(); ?>
