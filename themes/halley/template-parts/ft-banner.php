<!-- Start Banner
============================================= -->
<div id="js-banner-swiper" class="c-banner-header">

    <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <?php
            $args = array(
                'post_type' => 'banner-header',
                'posts_per_page' => -1,
                'orderby' => 'menu_order',
                'order' => 'ASC',
                //'post_status' => 'publish',

                'meta_query' => array(
                    'relation' => 'AND', // Ambas as condições devem ser verdadeiras

                    // Condição para a data de início
                    array(
                        'key' => 'data_de_inicio',
                        'value' => date("Y-m-d"), // Define a data de hoje
                        'compare' => '<=', // Exibe posts com data de início menor ou igual a hoje
                        'type' => 'DATE' // Informa que estamos lidando com data
                    ),

                    // Condição para a data de expiração, caso o campo esteja ativo
                    array(
                        'relation' => 'OR', // A expiração é maior que hoje ou o campo de expiração está inativo
                        array(
                            'key' => 'data_de_expiracao',
                            'value' => date("Y-m-d"), // Define a data de hoje
                            'compare' => '>', // Exibe posts com data de expiração maior que hoje
                            'type' => 'DATE' // Informa que estamos lidando com data
                        ),
                        array(
                            'key' => 'o_banner_possui_data_de_expiracao',
                            'value' => 'nao', // Exibe posts onde o campo de expiração está marcado como "não"
                            'compare' => '='
                        ),
                    ),
                ),
            );

            $image = new WP_Query($args);
            if ($image->have_posts()) : while ($image->have_posts()) : $image->the_post();

            $desktop = get_field('banner_desktop');
            $mobile = get_field('banner_mobile');
            $link_externo = get_field('possui_link_externo');
            $link_do_banner = get_field('link_do_banner');
            $target = get_field('destino_do_link');
            $use_page = get_field('usar_link_de_paginas_internas');
            $page_link = get_field('selecione_a_pagina');

            if ($link_externo) {
                if ($use_page === 'true') {
                    $link = 'href="' . get_the_permalink($page_link) . '"';
                } elseif ($link_do_banner) {
                    $link = 'href="' . $link_do_banner . '"';
                } else {
                    $link = '';
                }
            }

            $targ = ($target === '2') ? 'target="_blank"' : '';

            ?>

            <div class="swiper-slide">
                <a <?= $link . $targ; ?> title="<?= get_the_title(); ?>">
                    <picture>
                        <source srcset="<?= $desktop['url']; ?>" media="(min-width: 768px)">
                        <img src="<?= $mobile['url']; ?>" alt="<?= get_the_title(); ?>" class="img-fluid w-100">
                    </picture>
                </a>
            </div>

            <?php endwhile;
            endif;
            wp_reset_postdata(); ?>

        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev text-secondary"></div>
        <div class="swiper-button-next text-secondary"></div>

    </div>

</div>

<script>
    jQuery(document).ready(function($) {
        // SWIPER
        const swiper = new Swiper('#js-banner-swiper .swiper', {
            // Optional parameters
            loop: true,

            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
            },

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

        });

        var body = $('body');
    });
</script>

<!-- End Banner -->

