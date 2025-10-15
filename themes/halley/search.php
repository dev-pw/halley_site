<?php
/**
 * Search - Página de resultado de busca
 *
 * @package WordPress
 * @subpackage iesapm
 *
 */

?>

<?php get_header(); ?>

<main role="main">

    <?= get_template_part('template-parts/c-page-header'); ?>

    <section class="u-py-5">
        <div class="container">

            <div class="mb-5">
                <?php get_search_form(); ?>
            </div>

            <p class="text-primary fw-bold mb-5"> <?php _e('Você pesquisou por:') ?> <span class="fw-normal"><?= get_search_query(); ?></span> </p>

            <?php if ( have_posts() ) : ?>
            <ul class="list-unstyled c-list-search">

                <?php while ( have_posts() ) : the_post(); ?>
                <li id="post-<?php the_ID();?>" <?php post_class('item');?>>

                    <a href="<?php the_permalink();  ?>" title="<?php the_title(); ?>" class="text-decoration-none">
                        <h2 class="fs-5"><?php the_title(); ?></h2>
                    </a>

                    <?php if(has_category()) : ?>

                    <div class="d-flex mb-3">
                        <div class="col-auto c-post-metadata">
                            <span class="icon-price-tag me-1 small text-dark"></span>
                            <?php the_category(', '); ?>
                        </div>
                    </div>

                    <?php endif; ?>

                    <a href="<?php the_permalink();  ?>" title="<?php the_title(); ?>" class="text-decoration-none text-limit">
                        <?php the_excerpt(); ?>
                    </a>

                </li>
                <?php endwhile; ?>

            </ul>

            <div class="area-paginacao d-flex justify-content-center col-12 mt-5">
                <?php
                global $wp_query;
                paging_nav(); ?>
            </div>

            <?php else: ?>

            <div>
                <p class="c-bloco-mensagem mb-4">Não foram encontrados resultados!</p>
                <a href="<?php bloginfo('url'); ?>" title="Página inicial" class="btn btn-primary">Home</a>
            </div>

            <?php endif; ?>



        </div>
    </section>

</main>

<?php get_footer(); ?>
