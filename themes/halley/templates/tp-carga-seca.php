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

                <div class="row">
                    <div class="col-lg-4">
                        <img class="img-fluid rounded-top-5 rounded-end-5" src="<?= wp_get_attachment_image_src(100, 'full')[0]; ?>"
                            alt="<?= get_post(100)->post_title; ?>">
                        
                    </div>
                    <div class="col-lg-8 d-grid">
                        <h2 class="text-primary">Por que é simples?</h2>
                        <div>
                            <p class="border-start border-3 ps-3 border-primary">Por mais que a carga seca exija, geralmente, menos protocolos de segurança do que os materiais biológicos com que trabalhamos, existem cargas secas de diferentes níveis de complexidade. A Halley está apta a transportar qualquer tipo, das mais simples às mais complexas.</p>
                        </div>
                        <h2 class="text-primary">Para onde vai a carga?</h2>
                        <div>
                            <p class="border-start border-3 ps-3 border-primary">A carga pode ser transportada entre dois endereços pré-estabelecidos ou armazenada em nossa estrutura própria, com total segurança e cuidado. Também possuímos autorização, equipamentos e pessoal especialmente treinado para atuar em aeroportos, quando for necessário.</p>
                        </div>
                        <div class="d-none">
                            <h2 class="text-primary">Materiais Biológicos de Alta Complexidade</h2>
                            <div class="d-flex border-start border-3 ps-3 border-primary">
                                <img class="img-fluid" src="<?= wp_get_attachment_image_src(88, 'full')[0]; ?>"
                                    alt="<?= get_post(88)->post_title; ?>">

                                    <img class="img-fluid" src="<?= wp_get_attachment_image_src(89, 'full')[0]; ?>"
                                        alt="<?= get_post(89)->post_title; ?>">
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

                <div class="row mt-5 justify-content-center">
                    <div class="col-lg-3 mb-4">
                        <div class="border p-5 rounded-4 text-center border-light border-opacity-50 d-flex flex-column justify-content-center align-items-center h-100">
                            <i class="fa-solid fa-sliders fs-1 text-secondary mb-3"></i>
                            <p class="text-white">Diferenciação e análise dos perfis de cada carga.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div
                            class="border p-5 rounded-4 text-center border-light border-opacity-50 d-flex flex-column justify-content-center align-items-center h-100">
                            <i class="fa-solid fa-plane fs-1 text-secondary mb-3"></i>
                            <p class="text-white">Colaboradores treinados para atuar em aeroportos.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div
                            class="border p-5 rounded-4 text-center border-light border-opacity-50 d-flex flex-column justify-content-center align-items-center h-100">
                            <i class="fa-solid fa-gifts fs-1 text-secondary mb-3"></i>
                            <p class="text-white">Preparo e entrega de kits em caso de brindes e peças promocionais.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div
                            class="border p-5 rounded-4 text-center border-light border-opacity-50 d-flex flex-column justify-content-center align-items-center h-100">
                            <i class="fa-solid fa-user-lock fs-1 text-secondary mb-3"></i>
                            <p class="text-white">Controle de acesso às áreas de armazenagem com senha individual.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div
                            class="border p-5 rounded-4 text-center border-light border-opacity-50 d-flex flex-column justify-content-center align-items-center h-100">
                            <i class="fa-solid fa-calendar-check fs-1 text-secondary mb-3"></i>
                            <p class="text-white">Gerenciamento de estoque com segurança 24h.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div
                            class="border p-5 rounded-4 text-center border-light border-opacity-50 d-flex flex-column justify-content-center align-items-center h-100">
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
            <div class="row">
                <div class="col-lg-4 mb-3">
                    <img src="<?php echo wp_get_attachment_url('103'); ?>" alt="">
                </div>

                <div class="col-lg-4 mb-3">
                    <img src="<?php echo wp_get_attachment_url('102'); ?>" alt="">
                </div>

                <div class="col-lg-4 mb-3">
                    <img src="<?php echo wp_get_attachment_url('101'); ?>" alt="">
                </div>

                <div class="col-lg-4 mb-3">
                    <img src="<?php echo wp_get_attachment_url('106'); ?>" alt="">
                </div>

                <div class="col-lg-4 mb-3">
                    <img src="<?php echo wp_get_attachment_url('105'); ?>" alt="">
                </div>

                <div class="col-lg-4 mb-3">
                    <img src="<?php echo wp_get_attachment_url('104'); ?>" alt="">
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


        <?= get_template_part('template-parts/ft-cta'); ?>
        
    </div>

    <?= get_template_part('template-parts/ft-news'); ?>

</main>

<?php get_footer(); ?>