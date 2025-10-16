<?php
/**
 * Template Name: Quem Somos
 * Template Post Type: page
 * @package WordPress
 * @subpackage halley-site
 *
*/

get_header();
$img = has_post_thumbnail() ? get_post_thumbnail_id($post->ID) : 110;

?>

<main>

    <?php get_template_part('template-parts/c-page-header'); ?>

    <div class="u-py-5">
        <div class="container">

            <p class="text-center  mb-4">Somos pessoas que armazenam e transportam cargas de clientes exigentes, com toda atenção necessária. Ou seja, trabalhamos guiados por um alto padrão de qualidade.</p>

            <div class="row">
                <div class="col-lg-8">
                    <div class="entry-content-post">
                        <?= the_content(); ?>
                    </div>
                </div>
                <div class="col-lg-4">
                    <img src="<?= wp_get_attachment_image_src($img, 'full')[0]; ?>" class="w-100 rounded-4" alt="<?= get_post(110)->post_title; ?>">
                </div>
            </div>

        </div>

        <section class="bg-primary u-py-5 my-5">
            <div class="container">

                <h2 class="mb-4 text-white text-center">Nossos Números </h2>
            
                <div class="row gy-4 text-white mt-5">

                    <div class="col-md-6 col-lg-3">
                        <div class="border p-4 rounded-5 text-center border-light border-opacity-50 d-flex flex-column justify-content-center align-items-center h-100">
                            <p class="text-secondary fs-1 fw-bolder">110</p>
                            <p>Remessas Diárias de Materiais Biológicos em 2017</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="border p-4 rounded-5 text-center border-light border-opacity-50 d-flex flex-column justify-content-center align-items-center h-100">
                            <p class="text-secondary fs-1 fw-bolder">480</p>
                            <p>Equipamentos Cirúrgicos Transportados em 2021</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="border p-4 rounded-5 text-center border-light border-opacity-50 d-flex flex-column justify-content-center align-items-center h-100">
                            <p class="text-secondary fs-1 fw-bolder">700</p>
                            <p>Kg de Equipamentos Pesados: Média Mensal</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="border p-4 rounded-5 text-center border-light border-opacity-50 d-flex flex-column justify-content-center align-items-center h-100">
                            <p class="text-secondary fs-1 fw-bolder">65</p>
                            <p>Mil Doses de Anestésico para Covid em 2021</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="container my-5">

            <div>
                <div class="row gy-4">
                    <div class="col-lg-6">
                        <img src="<?= wp_get_attachment_url('111'); ?>" class="w-100 rounded-4" alt="<?= get_post(111)->post_title; ?>">
                    </div>

                    <div class="col-lg-6">
                        <p>Acreditamos na Força do Trabalho em Conjunto.</p>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="bg-light p-5 h-100 text-center">
                            <i class="fa-solid fa-bullseye text-primary display-3 fw-bolder"></i>
                            <h3 class="text-primary mb-3">Missão</h3>
                            <p class="text-start">Oferecer serviços de transporte e gerenciamento logístico com excelência, zelando pelo desenvolvimento de melhores métodos logísticos, visando a satisfação dos clientes, colaboradores, sócios e parceiros estratégicos.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="bg-light p-5 h-100 text-center">
                            <i class="fa-solid fa-binoculars text-primary display-3 fw-bolder"></i>
                            <h3 class="text-primary mb-3">Visão</h3>
                            <p class="text-start">Dedicação e eficiência no ramo de gerenciamento logístico e transporte com abrangência nacional.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="bg-light p-5 h-100 text-center">
                            <i class="fa-solid fa-gem text-primary display-3 fw-bolder"></i>
                            <h3 class="text-primary mb-3">Valores</h3>
                            <p class="text-start">Oferecer serviços de transporte e gerenciamento logístico com excelência, zelando pelo desenvolvimento de melhores métodos logísticos, visando a satisfação dos clientes, colaboradores, sócios e parceiros estratégicos.</p>
                            <p class="text-start">• Conduta ética<br>• Melhoria contínua<br>• Valorização do capital intelectual<br>• Responsabilidade socioambiental<br>• Comprometimento</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="u-py-5 my-5">
            <div class="cta container position-relative z-1">
                <div class="row">

                    <div class="col-md-6 p-0">
                        <img src="<?= wp_get_attachment_url('113'); ?>" class="w-100 rounded-4" alt="<?= get_post(113)->post_title; ?>">
                    </div>

                    <div class="col-md-6 bg-primary text-white">

                        <div class="cta__px p-5 h-100 d-flex flex-column justify-content-center align-items-start">
                            <h2 class="mb-3">Valorizamos um Ótimo Atendimento.</h2>
                            <p> Na Halley, nosso atendimento é próximo e atencioso, pois não existe resposta automática. O cliente liga e tem contato direto com a equipe de entrega e com a diretoria, caso seja necessário para resolver o trabalho de forma mais eficiente. A filosofia é não se distanciar, seguindo junto com o cliente, indo cada vez mais longe e valorizando a parceria. </p>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="container my-5">

            <div>
                <h2>Uma Empresa de Pessoas para Pessoas.</h2>
                <p>Fácil acesso aos diretores, sempre que necessário, é mais um ponto forte da Halley. Nosso foco é resolver a logística, o transporte e armazenagem de forma rápida e eficiente.</p>
                <div>
                    <img src="<?= wp_get_attachment_url('112'); ?>" class="w-100 rounded-4" alt="<?= get_post(112)->post_title; ?>">
                    <p>Marcio Mantello</p>
                    <span>Diretor Executivo</span>
                    "O principal motivo de os clientes continuarem com a gente é a dedicação. Ele liga e fala com uma pessoa. A gente trata todos com exclusividade.”
                </div>
            </div>

        </section>

    </div>

</main>

<?php get_footer(); ?>
