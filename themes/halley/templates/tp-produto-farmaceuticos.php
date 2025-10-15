<?php

/**
 * Template Name: Transporte Produtos Farmacêuticos
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
                <p class="mb-5 text-center">Assim como para os materiais biológicos, a Halley está autorizada e preparada para o transporte de medicamentos e correlatos. Realizamos a triagem dos produtos farmacêuticos em nossa área de armazenagem e deixamos tudo pronto para a saída, que muitas vezes é imediata, no caso desse tipo de carga.</p>

                <div class="row">
                    <div class="col-lg-4">
                        <img class="img-fluid rounded-top-5 rounded-end-5" src="<?= wp_get_attachment_image_src(107, 'full')[0]; ?>"
                            alt="<?= get_post(107)->post_title; ?>">
                        
                    </div>
                    <div class="col-lg-8 d-grid">
                        <h2 class="text-primary">Por que é diferente?</h2>
                        <div>
                            <p class="border-start border-3 ps-3 border-primary">Medicamentos são produtos sensíveis. Dependendo do medicamento, pode ser armazenado em temperatura ambiente ou refrigerado. As caixas combinam gel pack, plástico-bolha e divisórias. Em alguns casos, também inclui o s-pack, um tipo de isopor para conter a temperatura e evitar a movimentação do medicamento dentro da caixa.</p>
                        </div>
                        <h2 class="text-primary">Para onde vai a carga?</h2>
                        <div>
                            <p class="border-start border-3 ps-3 border-primary">Os destinos mais comuns são clínicas ou hospitais onde os medicamentos são utilizados. Em certas situações, como de tratamento em Home Care, a entrega é no próprio endereço do paciente.</p>
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
                <h2 class="text-white mb-4 text-center">Cuidados com Medicamentos</h2> 
                <p class="text-white text-center">Colaboradores treinados e qualificados. Equipamentos calibrados e validados. Análise crítica da frota com plano mensal de manutenção.</p>

                <div class="row mt-5 justify-content-center">
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
                            <i class="fa-solid fa-snowflake fs-1 text-secondary mb-3"></i>
                            <p class="text-white">Veículo com sistema de refrigeração.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div
                            class="border p-5 rounded-4 text-center border-light border-opacity-50 d-flex flex-column justify-content-center align-items-center h-100">
                            <i class="fa-solid fa-temperature-low fs-1 text-secondary mb-3"></i>
                            <p class="text-white">Temperaturas adequadas para cada tipo de medicamento.</p>
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
                    <img src="<?php echo wp_get_attachment_url('96'); ?>" alt="">
                    <p class="text-center">Armazenagem de medicamentos anvisa</p>
                </div>

                <div class="col-lg-4 mb-3">
                    <img src="<?php echo wp_get_attachment_url('95'); ?>" alt="">
                    <p class="text-center">Armazenagem de medicamentos anvisa</p>
                </div>

                <div class="col-lg-4 mb-3">
                    <img src="<?php echo wp_get_attachment_url('93'); ?>" alt="">
                    <p class="text-center">logística hospitalar</p>
                </div>

                <div class="col-lg-4 mb-3">
                    <img src="<?php echo wp_get_attachment_url('101'); ?>" alt="">
                    <p class="text-center">transporte seguro de carga seca</p>
                </div>

                <div class="col-lg-4 mb-3">
                    <img src="<?php echo wp_get_attachment_url('108'); ?>" alt="">
                    <p class="text-center">Logística hospitalar</p>
                </div>

                <div class="col-lg-4 mb-3">
                    <img src="<?php echo wp_get_attachment_url('106'); ?>" alt="">
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