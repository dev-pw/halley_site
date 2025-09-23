<section class="ft-blog">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <span class="fs-6 text-secondary">Novidades</span>
                <h2>Fique por dentro</h2>
            </div>

            <div>
                <p class="p-0 m-0">Entregamos as melhores soluções logísticas para você, sempre considerando as particularidades de ntregamos as melhores soluções logísticas para você</p>
            </div>

            <div>
                <a href="" class="btn btn-outline-primary">Ver todos</a>
            </div>
        </div>
        <div class="row">
            <?php
                // Define os parâmetros da consulta
                $args = array(
                    'category_name' => 'noticias', // slug da categoria
                    'post_type'     => 'post',     // tipo de post
                    'post_status'   => 'publish',  // apenas posts publicados
                    'posts_per_page'=> 3          // número de posts (pode ser -1 para todos)
                );

                // Executa a consulta
                $query = new WP_Query($args);

                // Verifica se há posts
                if ($query->have_posts()) :
                    echo '<div class="noticias-lista">';
                    while ($query->have_posts()) : $query->the_post(); ?>
                    <div class="col-lg-4">

                        <article class="noticia-item">
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <p class="data"><?php echo get_the_date(); ?></p>
                            <div class="resumo">
                                <?php the_excerpt(); ?>
                            </div>
                        </article>
                    </div>
                        

                    <?php endwhile;
                    echo '</div>';
                    // Reseta os dados globais do post
                    wp_reset_postdata();
                else :
                    echo '<p>Não há notícias no momento.</p>';
                endif;
                ?>
            
        </div>
    </div>
</section>