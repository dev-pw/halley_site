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
                <p class="mb-5 text-center">A Halley está autorizada e capacitada para o transporte de materiais biológicos de alta
                    complexidade. Geralmente são materiais para exames médicos, análises clínicas ou pesquisas
                    científicas. Externamente, a caixa branca é o aspecto que se destaca. Mas a grande diferença
                    está no interior da caixa.</p>

                <div class="row">
                    <div class="col-lg-4">
                        <img class="img-fluid rounded-top-5 rounded-end-5" src="<?= wp_get_attachment_image_src(87, 'full')[0]; ?>"
                            alt="<?= get_post(87)->post_title; ?>">
                        
                    </div>
                    <div class="col-lg-8 d-grid">
                        <h2 class="text-primary">Por que é diferente?</h2>
                        <div>
                            <p class="border-start border-3 ps-3 border-primary">As cargas podem ser nocivas à saúde, por isso exigem certificações sanitárias, como a
                                da Anvisa. Também é necessário o uso de técnicas apropriadas de manuseio,
                                armazenagem e transporte. Para proteger as caixas com total segurança, usamos travas
                                especiais, materiais absorventes de proteção, gelo seco ou gel packs.</p>
                        </div>
                        <h2 class="text-primary">Para onde vai a carga?</h2>
                        <div>
                            <p class="border-start border-3 ps-3 border-primary">Os destinos mais comuns são clínicas, laboratórios, universidades e centros de
                                pesquisa. Temos parceiros homologados para coleta e entrega dos materiais em todos
                                os estados do Brasil.</p>
                        </div>
                        <div class="">
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
                <h2 class="text-white mb-4 text-center">Cuidados Especiais</h2>
                <p class="text-white text-center">A preparação dos itens começa na retirada e passa por uma rígida conferência entre produto e notas fiscais. Após esse processo, separamos as embalagens, checamos volume, peso e dimensões, fotografamos e enviamos todo o material para o cliente acompanhar.</p>

                <div class="row mt-5">
                    <div class="col-lg-3 mb-4">
                        <div class="border p-5 rounded-4 text-center border-light border-opacity-50 d-flex flex-column justify-content-center align-items-center h-100">
                            <i class="fa-solid fa-star fs-1 text-secondary mb-3"></i>
                            <p class="text-white">Certificações sanitárias, incluindo Anvisa.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div
                            class="border p-5 rounded-4 text-center border-light border-opacity-50 d-flex flex-column justify-content-center align-items-center h-100">
                            <i class="fa-solid fa-square-check fs-1 text-secondary mb-3"></i>
                            <p class="text-white">Políticas de higiene e limpeza, cumprindo as exigências dos Órgãos Regulatórios.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div
                            class="border p-5 rounded-4 text-center border-light border-opacity-50 d-flex flex-column justify-content-center align-items-center h-100">
                            <i class="fa-solid fa-boxes-stacked fs-1 text-secondary mb-3"></i>
                            <p class="text-white">Disponibilização de suprimentos e caixas validadas.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div
                            class="border p-5 rounded-4 text-center border-light border-opacity-50 d-flex flex-column justify-content-center align-items-center h-100">
                            <i class="fa-solid fa-tower-cell fs-1 text-secondary mb-3"></i>
                            <p class="text-white">Rastreabilidade e monitoramento da carga em tempo real.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div
                            class="border p-5 rounded-4 text-center border-light border-opacity-50 d-flex flex-column justify-content-center align-items-center h-100">
                            <i class="fa-solid fa-snowflake fs-1 text-secondary mb-3"></i>
                            <p class="text-white">Veículo com sistema de refrigeração.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div
                            class="border p-5 rounded-4 text-center border-light border-opacity-50 d-flex flex-column justify-content-center align-items-center h-100">
                            <i class="fa-solid fa-temperature-low fs-1 text-secondary mb-3"></i>
                            <p class="text-white">Temperaturas e humidade controladas e monitoradas 24 horas.</p>
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
                            <p class="text-white">Gerenciamento de estoque e controle de validade.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <?= get_template_part('template-parts/ft-certificados'); ?>

        <div class="container">
            <h2 class="text-center text-primary mb-5">Nosso Trabalho é a Sua Tranquilidade</h2>
            <div class="row">
                <div class="col-lg-4 mb-3">
                    <img src="<?php echo wp_get_attachment_url('97'); ?>" alt="">
                    <p class="text-center">Armazenagem de medicamentos anvisa</p>
                </div>

                <div class="col-lg-4 mb-3">
                    <img src="<?php echo wp_get_attachment_url('96'); ?>" alt="">
                    <p class="text-center">Armazenagem de medicamentos anvisa</p>
                </div>

                <div class="col-lg-4 mb-3">
                    <img src="<?php echo wp_get_attachment_url('95'); ?>" alt="">
                    <p class="text-center">Armazenagem de medicamentos anvisa</p>
                </div>

                <div class="col-lg-4 mb-3">
                    <img src="<?php echo wp_get_attachment_url('94'); ?>" alt="">
                    <p class="text-center">Empresa top of business 2015</p>
                </div>

                <div class="col-lg-4 mb-3">
                    <img src="<?php echo wp_get_attachment_url('93'); ?>" alt="">
                    <p class="text-center">Logística hospitalar</p>
                </div>

                <div class="col-lg-4 mb-3">
                    <img src="<?php echo wp_get_attachment_url('92'); ?>" alt="">
                    <p class="text-center">Armazenagem de medicamentos anvisa</p>
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