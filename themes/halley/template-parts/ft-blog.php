<?php 

// Define os parâmetros da consulta
$args = array(
    'post_type'      => 'post',
    'posts_per_page' => 6
);

// Executa a consulta
$blog = new WP_Query($args);

?>

<section class="u-py-5">
    <div class="container">

        <div class="row gy-4 justify-content-between align-items-center">
            <div class="col-lg-2">
                <span class="fs-6 text-secondary">Novidades</span>
                <h2 class="h3 text-primary">Fique por dentro</h2>
            </div>

            <div class="col-lg-6">
                <p class="p-0 m-0">Entregamos as melhores soluções logísticas, sempre respeitando as particularidades e necessidades exclusivas da sua operação.</p>
            </div>

            <div class="col-lg-2">
                <a href="<?= the_permalink( get_option('page_for_posts') );?>" class="btn btn-outline-primary">Ver todos</a>
            </div>
        </div>

        <div class="swiper blog mt-5">
            <div class="swiper-wrapper">
                <?php if ($blog->have_posts()) : while ($blog->have_posts()) : $blog->the_post(); ?>

                <div class="swiper-slide pb-1">
                    <?= get_template_part('template-parts/c-card-post'); ?>
                </div>

                <?php endwhile;  else :
                echo '<p>Não há notícias cadastradas no momento.</p>';
                endif; wp_reset_postdata(); ?>
                
            </div>

            <div class="swiper-pagination position-relative mt-5"></div>

        </div>

    </div>
</section>

<script>

jQuery(document).ready(function($) {
    
    // SWIPER
    var swiper = new Swiper(".blog", {
            
        spaceBetween: 20,

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },

        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            576: {
                slidesPerView: 2,
            },
            992: {
                slidesPerView: 3,
            },
            1400: {
                slidesPerView: 4,
            }
        },
    });

});

</script>