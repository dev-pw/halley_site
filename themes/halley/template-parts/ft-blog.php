<?php 

// Define os parâmetros da consulta
$args = array(
    'post_type'     => 'post',     // tipo de post
    'posts_per_page'=> 3          // número de posts (pode ser -1 para todos)
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
                <p class="p-0 m-0">Entregamos as melhores soluções logísticas para você, sempre considerando as particularidades de ntregamos as melhores soluções logísticas para você</p>
            </div>

            <div class="col-lg-2">
                <a href="<?= the_permalink( get_option('page_for_posts') );?>" class="btn btn-outline-primary">Ver todos</a>
            </div>
        </div>

        <div class="row gy-4 mt-4">

            <?php if ($blog->have_posts()) : while ($blog->have_posts()) : $blog->the_post(); 
            $img = has_post_thumbnail() ? get_post_thumbnail_id($post->ID) : 59;
            ?>

            <div class="col-lg-4">
                <article <?= post_class(); ?>>
                    
                    <img src="<?= wp_get_attachment_image_src($img, 'full')[0]; ?>" class="rounded-3 mb-4 img-fluid w-100" alt="<?= the_title(); ?>">

                    <div class="text-secondary small mb-3">
                        <span> <?= get_the_date('d \d\e m, Y'); ?> </span>
                    </div>
                    
                    <h2 class="h5">
                        <a href="<?php the_permalink(); ?>" class="text-decoration-none">
                            <?= the_title(); ?>
                        </a>
                    </h2>

                    <div class="small text-primary mt-2 text-limit">
                        <?= get_the_excerpt(); ?>
                    </div>

                </article>
            </div>

            <?php endwhile;  else :
            echo '<p>Não há notícias cadastradas no momento.</p>';
            endif; wp_reset_postdata(); ?>
            
        </div>
    </div>
</section>