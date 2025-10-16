<?php
/**
 * Template Name: Quem Somos
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

            <p class="text-center  mb-4">Somos pessoas que armazenam e transportam cargas de clientes exigentes, com toda atenção necessária. Ou seja, trabalhamos guiados por um alto padrão de qualidade.</p>

            <div class="row">
                <div class="col-lg-8">
                    <h2 class="text-primary">Partimos de um Sonho.</h2>
                    <p>“Se a gente já sabe, já tem o know how de fazer algo bem difícil, todas as outras acabam sendo mais fáceis.”</p>
                    <p>A história da Halley teve início em 1994. Já a trajetória profissional de Marcio Mantello começou alguns anos antes, como courier, passando por analista de importação, chegando até prestador de serviços para a Halley. As 2 histórias se cruzaram, Marcio tornou-se inicialmente sócio da empresa e, desde 1998, é o proprietário. Sob a nova direção, foi possível realizar um sonho: focar no setor de entrega de materiais biológicos, sem abrir mão do transporte de carga seca. Foi assim que, em mais de 2 décadas, a Halley acompanhou a evolução do mercado de logística e transporte, com a conquista de certificações e de clientes fiéis. E hoje, continua seguindo muito bem nessa estrada.</p>
                </div>
                <div class="col-lg-4">
                    <img src="<?= wp_get_attachment_url('110'); ?>" class="w-100 rounded-4" alt="<?= get_post(110)->post_title; ?>">
                </div>
            </div>

            <div>
                <h2 class="mb-4">Nossos Números​</h2>
            
                <div class="row">
                    <div class="col-lg-3 h-100">
                        <div class="border rounded-top-5 rounded-end-5 p-4 text-center">
                            <p class="text-primary fs-1 fw-bolder">110</p>
                            <p>Remessas Diárias de Materiais Biológicos em 2017</p>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <p>480</p>
                        <p>Equipamentos Cirúrgicos Transportados em 2021</p>
                    </div>

                    <div class="col-lg-3">
                        <p>700</p>
                        <p>Kg de Equipamentos Pesados: Média Mensal</p>
                    </div>

                    <div class="col-lg-3">
                        <p>65</p>
                        <p>Mil Doses de Anestésico para Covid em 2021</p>
                    </div>
                </div>
            </div>

            <div>
                <div class="row">
                    <div class="col-lg-6">
                        <img src="<?= wp_get_attachment_url('111'); ?>" class="w-100 rounded-4" alt="<?= get_post(111)->post_title; ?>">
                    </div>
                    <div class="col-lg-6">
                        <p>Acreditamos na Força do Trabalho em Conjunto.</p>
                    </div>

                    <div class="col-lg-4">
                        <div>
                            <h4>Missão</h4>
                            <p>Oferecer serviços de transporte e gerenciamento logístico com excelência, zelando pelo desenvolvimento de melhores métodos logísticos, visando a satisfação dos clientes, colaboradores, sócios e parceiros estratégicos.</p>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div>
                            <h4>Visão</h4>
                            <p>Dedicação e eficiência no ramo de gerenciamento logístico e transporte com abrangência nacional.</p>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div>
                            <h4>Valores</h4>
                            <p>Oferecer serviços de transporte e gerenciamento logístico com excelência, zelando pelo desenvolvimento de melhores métodos logísticos, visando a satisfação dos clientes, colaboradores, sócios e parceiros estratégicos.</p>
                            <p>• Conduta ética<br>• Melhoria contínua<br>• Valorização do capital intelectual<br>• Responsabilidade socioambiental<br>• Comprometimento</p>
                        </div>
                    </div>
                </div>
            </div>


            <div>
                <div class="row">
                    <div class="col-lg-6">
                        <h2>Valorizamos um Ótimo Atendimento.</h2>
                        <p>Na Halley, nosso atendimento é próximo e atencioso, pois não existe resposta automática. O cliente liga e tem contato direto com a equipe de entrega e com a diretoria, caso seja necessário para resolver o trabalho de forma mais eficiente. A filosofia é não se distanciar, seguindo junto com o cliente, indo cada vez mais longe e valorizando a parceria.</p>
                    </div>
                    <div class="col-lg-6">
                        <img src="<?= wp_get_attachment_url('113'); ?>" class="w-100 rounded-4" alt="<?= get_post(113)->post_title; ?>">
                    </div>
                    
                </div>
            </div>


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

        </div>

    </div>

</main>

<?php get_footer(); ?>
