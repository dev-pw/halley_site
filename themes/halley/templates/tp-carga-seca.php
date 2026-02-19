<?php

/**
 * Template Name: Transporte Carga Seca
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

            <p class="mb-5 text-center">A Halley tem experiência em logística e transporte de carga seca, de diversos tipos, desde sua fundação. É muito frequente transportarmos itens críticos, de diferentes tamanhos. As cargas variam de produtos delicados, como vinhos ou brindes promocionais, até peças robustas e extremamente pesadas para uso em portos e empresas de infraestrutura.</p>

            <div class="row gy-4">

                <div class="col-md-6 mx-auto col-lg-4">
                    <img class="img-fluid rounded-top-5 rounded-end-5" src="<?= wp_get_attachment_image_src(133, 'full')[0]; ?>" alt="<?= get_post(133)->post_title; ?>">
                </div>

                <div class="col-lg-8 d-grid">

                    <div class="mb-4">
                        <h2 class="text-primary mb-4">Por que é simples?</h2>
                        <p class="border-start border-3 ps-3 border-primary">Por mais que a carga seca exija, geralmente, menos protocolos de segurança do que os materiais biológicos com que trabalhamos, existem cargas secas de diferentes níveis de complexidade. A Halley está apta a transportar qualquer tipo, das mais simples às mais complexas.</p>
                    </div>

                    <div class="mb-4">
                        <h2 class="text-primary mb-4">Para onde vai a carga?</h2>
                        <p class="border-start border-3 ps-3 border-primary">A carga pode ser transportada entre dois endereços pré-estabelecidos ou armazenada em nossa estrutura própria, com total segurança e cuidado. Também possuímos autorização, equipamentos e pessoal especialmente treinado para atuar em aeroportos, quando for necessário.</p>
                    </div>

                    <div class="d-none">
                        <h2 class="text-primary">Materiais Biológicos de Alta Complexidade</h2>
                        <div class="d-flex border-start border-3 ps-3 border-primary">
                            <img class="img-fluid" src="<?= wp_get_attachment_image_src(88, 'full')[0]; ?>" alt="<?= get_post(88)->post_title; ?>">
                            <img class="img-fluid" src="<?= wp_get_attachment_image_src(89, 'full')[0]; ?>" alt="<?= get_post(89)->post_title; ?>">
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="bg-primary u-py-5">
        <div class="container">
            <h2 class="text-white mb-4 text-center">Transportamos com todo cuidado</h2>
            <p class="text-white text-center">Identificado o tipo de carga, realizamos o recebimento, a conferência do material, a separação por Nota Fiscal e o envio até o seu destino final.</p>

            <div class="row gy-4 mt-5">

                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="border p-5 rounded-4 text-center border-light border-opacity-50 d-flex flex-column justify-content-center align-items-center h-100">
                        <i class="fa-solid fa-sliders fs-1 text-secondary mb-3"></i>
                        <p class="text-white">Diferenciação e análise dos perfis de cada carga.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="border p-5 rounded-4 text-center border-light border-opacity-50 d-flex flex-column justify-content-center align-items-center h-100">
                        <i class="fa-solid fa-plane fs-1 text-secondary mb-3"></i>
                        <p class="text-white">Colaboradores treinados para atuar em aeroportos.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="border p-5 rounded-4 text-center border-light border-opacity-50 d-flex flex-column justify-content-center align-items-center h-100">
                        <i class="fa-solid fa-gifts fs-1 text-secondary mb-3"></i>
                        <p class="text-white">Preparo e entrega de kits em caso de brindes e peças promocionais.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="border p-5 rounded-4 text-center border-light border-opacity-50 d-flex flex-column justify-content-center align-items-center h-100">
                        <i class="fa-solid fa-user-lock fs-1 text-secondary mb-3"></i>
                        <p class="text-white">Controle de acesso às áreas de armazenagem com senha individual.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="border p-5 rounded-4 text-center border-light border-opacity-50 d-flex flex-column justify-content-center align-items-center h-100">
                        <i class="fa-solid fa-calendar-check fs-1 text-secondary mb-3"></i>
                        <p class="text-white">Gerenciamento de estoque com segurança 24h.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="border p-5 rounded-4 text-center border-light border-opacity-50 d-flex flex-column justify-content-center align-items-center h-100">
                        <i class="fa-solid fa-truck-fast fs-1 text-secondary mb-3"></i>
                        <p class="text-white">Análise crítica da frota com plano mensal de manutenção.</p>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <?= get_template_part('template-parts/ft-certificados'); ?>

    <div class="container">
        <h2 class="text-center text-primary mb-5">A Halley está aqui para Entregar Bem</h2>
        <div class="row gy-4">
            <div class="col-md-6 col-lg-4">
                <img src="<?= wp_get_attachment_url('103'); ?>" class="w-100 rounded-4" alt="<?= get_post(103)->post_title; ?>">
            </div>

            <div class="col-md-6 col-lg-4">
                <img src="<?= wp_get_attachment_url('102'); ?>" class="w-100 rounded-4" alt="<?= get_post(102)->post_title; ?>">
            </div>

            <div class="col-md-6 col-lg-4">
                <img src="<?= wp_get_attachment_url('101'); ?>" class="w-100 rounded-4" alt="<?= get_post(101)->post_title; ?>">
            </div>

            <div class="col-md-6 col-lg-4">
                <img src="<?= wp_get_attachment_url('106'); ?>" class="w-100 rounded-4" alt="<?= get_post(106)->post_title; ?>">
            </div>

            <div class="col-md-6 col-lg-4">
                <img src="<?= wp_get_attachment_url('105'); ?>" class="w-100 rounded-4" alt="<?= get_post(105)->post_title; ?>">
            </div>

            <div class="col-md-6 col-lg-4">
                <img src="<?= wp_get_attachment_url('104'); ?>" class="w-100 rounded-4" alt="<?= get_post(104)->post_title; ?>">
            </div>

            <div class="col-lg-12 d-none">
                <p class="text-center">"A partir do momento em que a gente lida com algo de alta complexidade como material biológico, todas as outras tarefas se tornam mais simples."</p>
                <div>
                    <img src="<?php echo wp_get_attachment_url('98'); ?>" alt="">
                    <div>
                        <p>RODOLFO LOPEZ</p>
                        <span>Farmacêutico</span>
                    </div>
                </div>
            </div>


        </div>

    </div>

    <?= get_template_part('template-parts/ft-cta'); ?>
    <?= get_template_part('template-parts/ft-news'); ?>

</main>

<?php get_footer(); ?>