<?php
/**
 * Page default
 * @package WordPress
 * @subpackage halley-site
 *
*/

get_header(); ?>

 <main role="main">
 
    <?= get_template_part('template-parts/c-page-header'); ?>

    <div class="pt-5 u-pb-5">
        <div class="container">

            <?php if (have_posts()):while (have_posts()):the_post(); ?>
            <article id="article-id-<?php the_id(); ?>" <?php post_class(); ?>>
                <div class="entry-content-post">
                    <?php the_content(); ?>
                </div>
            </article>
            <?php endwhile; endif; ?>

        </div>
    </div>

 </main>
 
 <?php get_footer(); ?>