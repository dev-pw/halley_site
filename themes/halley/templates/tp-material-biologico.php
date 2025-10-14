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

        <div class="entry-content-post">
            <div class="u-py-5">
                <div class="container">


                    <h2>Transporte de Material Biológico: <br> Tá indo bem.</h2>
                    <p>A Halley está autorizada e capacitada para o transporte de materiais biológicos de alta
                        complexidade. Geralmente são materiais para exames médicos, análises clínicas ou pesquisas
                        científicas. Externamente, a caixa branca é o aspecto que se destaca. Mas a grande diferença
                        está no interior da caixa.</p>

                    <div class="row">
                        <div class="col-lg-6">
                            <img class="img-fluid" src="<?= wp_get_attachment_image_src(87, 'full')[0]; ?>"
                                alt="<?= get_post(87)->post_title; ?>">
                            <div class="d-flex">
                                <p>Materiais Biológicos de Alta Complexidade</p>
                                <img class="img-fluid" src="<?= wp_get_attachment_image_src(88, 'full')[0]; ?>"
                                    alt="<?= get_post(88)->post_title; ?>">
                                <img class="img-fluid" src="<?= wp_get_attachment_image_src(89, 'full')[0]; ?>"
                                    alt="<?= get_post(89)->post_title; ?>">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <h2>Por que é diferente?</h2>
                            <div>
                                <p>As cargas podem ser nocivas à saúde, por isso exigem certificações sanitárias, como a
                                    da Anvisa. Também é necessário o uso de técnicas apropriadas de manuseio,
                                    armazenagem e transporte. Para proteger as caixas com total segurança, usamos travas
                                    especiais, materiais absorventes de proteção, gelo seco ou gel packs.</p>
                            </div>
                            <h2>Para onde vai a carga?</h2>
                            <div>
                                <p>Os destinos mais comuns são clínicas, laboratórios, universidades e centros de
                                    pesquisa. Temos parceiros homologados para coleta e entrega dos materiais em todos
                                    os estados do Brasil.</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-primary u-py-5">
                <div class="container">
                    <h2 class="text-white mb-4">Cuidados Especiais</h2>
                    <p class="text-white">A preparação dos itens começa na retirada e passa por uma rígida conferência entre produto e notas fiscais. Após esse processo,  separamos as embalagens, checamos volume, peso e dimensões, fotografamos e enviamos todo o material para o cliente acompanhar.</p>

                    <div class="row mt-5">
                        <div class="col-lg-3">
                            <div
                                class="border p-5 rounded-4 text-center border-light border-opacity-50 d-flex flex-column justify-content-center align-items-center h-100">
                                <img src="<?php echo wp_get_attachment_url('29'); ?>" alt="" class="mb-3">
                                <p class="text-white">Certificações sanitárias, incluindo Anvisa.</p>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div
                                class="border p-5 rounded-4 text-center border-light border-opacity-50 d-flex flex-column justify-content-center align-items-center h-100">
                                <img src="<?php echo wp_get_attachment_url('28'); ?>" alt="" class="mb-3">
                                <p class="text-white">Políticas de higiene e limpeza, cumprindo as exigências dos Órgãos Regulatórios.</p>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div
                                class="border p-5 rounded-4 text-center border-light border-opacity-50 d-flex flex-column justify-content-center align-items-center h-100">
                                <img src="<?php echo wp_get_attachment_url('27'); ?>" alt="" class="mb-3">
                                <p class="text-white">Disponibilização de suprimentos e caixas validadas.</p>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div
                                class="border p-5 rounded-4 text-center border-light border-opacity-50 d-flex flex-column justify-content-center align-items-center h-100">
                                <img src="<?php echo wp_get_attachment_url('26'); ?>" alt="" class="mb-3">
                                <p class="text-white">Rastreabilidade e monitoramento da carga em tempo real.</p>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div
                                class="border p-5 rounded-4 text-center border-light border-opacity-50 d-flex flex-column justify-content-center align-items-center h-100">
                                <img src="<?php echo wp_get_attachment_url('26'); ?>" alt="" class="mb-3">
                                <p class="text-white">Veículo com sistema de refrigeração.</p>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div
                                class="border p-5 rounded-4 text-center border-light border-opacity-50 d-flex flex-column justify-content-center align-items-center h-100">
                                <img src="<?php echo wp_get_attachment_url('26'); ?>" alt="" class="mb-3">
                                <p class="text-white">Temperaturas e humidade controladas e monitoradas 24 horas.</p>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div
                                class="border p-5 rounded-4 text-center border-light border-opacity-50 d-flex flex-column justify-content-center align-items-center h-100">
                                <img src="<?php echo wp_get_attachment_url('26'); ?>" alt="" class="mb-3">
                                <p class="text-white">Controle de acesso às áreas de armazenagem com senha individual.</p>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div
                                class="border p-5 rounded-4 text-center border-light border-opacity-50 d-flex flex-column justify-content-center align-items-center h-100">
                                <img src="<?php echo wp_get_attachment_url('26'); ?>" alt="" class="mb-3">
                                <p class="text-white">Gerenciamento de estoque e controle de validade.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <?= get_template_part('template-parts/ft-certificados'); ?>

            <div class="container">
                <h2>Nosso Trabalho é a Sua Tranquilidade</h2>
                <div class="row">
                    <div class="col-lg-4">
                        <img src="<?php echo wp_get_attachment_url('26'); ?>" alt="" class="mb-3">
                        <p>armazenagem de medicamentos anvisa</p>
                    </div>

                    <div class="col-lg-4">
                        <img src="<?php echo wp_get_attachment_url('26'); ?>" alt="" class="mb-3">
                        <p>armazenagem de medicamentos anvisa</p>
                    </div>

                    <div class="col-lg-4">
                        <img src="<?php echo wp_get_attachment_url('26'); ?>" alt="" class="mb-3">
                        <p>armazenagem de medicamentos anvisa</p>
                    </div>

                    <div class="col-lg-4">
                        <img src="<?php echo wp_get_attachment_url('26'); ?>" alt="" class="mb-3">
                        <p>empresa top of business 2015</p>
                    </div>

                    <div class="col-lg-4">
                        <img src="<?php echo wp_get_attachment_url('26'); ?>" alt="" class="mb-3">
                        <p>logística hospitalar</p>
                    </div>

                    <div class="col-lg-4">
                        <img src="<?php echo wp_get_attachment_url('26'); ?>" alt="" class="mb-3">
                        <p>armazenagem de medicamentos anvisa</p>
                    </div>

                    <div class="col-lg-12">
                        <p>"A partir do momento em que a gente lida com algo de alta complexidade como material biológico, todas as outras tarefas se tornam mais simples."</p>
                        <div>
                            <img src="" alt="">
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

        </div>


    </div>


</main>

<?php get_footer(); ?>