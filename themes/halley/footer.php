
<footer>

    <section class="bg-primary u-py-5">
        <div class="container">
            <div class="row justify-content-between gy-4 text-center text-md-start">

                <div class="col-md-6 col-lg-3">
                    <img src="<?php echo wp_get_attachment_url('33'); ?>" alt="" class="img-fluid">
                </div>

                <div class="col-md-6 col-lg-2 text-white">
                    <h3 class="mb-3">Sobre nós</h3>
                    <p class="small m-0">
                        <a href="<?= the_permalink(53); ?>" class="link-light text-decoration-none">Fale com a Halley</a>
                    </p>
                    <p class="small m-0">
                        <a href="<?= the_permalink(52); ?>" class="link-light text-decoration-none">Somos Halley</a>
                    </p>
                </div>

                <div class="col-auto d-none d-lg-block"> <span class="bg-white d-block h-100 opacity-25 rounded-5" style="width: 2px;"></span> </div>
                
                <div class="col-md-6 col-lg-3 text-white">
                    <h3 class="mb-3">Principais Serviços</h3>
                    <p class="small m-0">
                        <a href="<?= the_permalink(68); ?>" class="link-light text-decoration-none">Transporte de Material Biológico</a>
                    </p>
                    <p class="small m-0">
                        <a href="<?= the_permalink(70); ?>" class="link-light text-decoration-none">Transporte de Produtos Farmacêuticos</a>
                    </p>
                    <p class="small m-0">
                        <a href="<?= the_permalink(72); ?>" class="link-light text-decoration-none">Transporte de Carga Seca</a>
                    </p>
                </div>

                <div class="col-auto d-none d-lg-block"> <span class="bg-white d-block h-100 opacity-25 rounded-5" style="width: 2px;"></span> </div>

                <div class="col-md-6 col-lg-3 text-white">
                    <h3 class="mb-3">Horário de Funcionamento</h3>
                    <p class="small m-0">Segunda a Sexta: 8:00 - 18:00</p>
                    <p class="small m-0">Plantão aos finais de semana e feriados</p>
                </div>

            </div>
        </div>

    </section>

    

    <div class="bg-secondary py-4">
        <div class="container position-relative z-1">
            <div class="d-flex gap-4 flex-column flex-lg-row justify-content-between align-items-center text-center text-md-start">
                <div class="btn-rs-white">
                    <?= get_template_part('template-parts/c-redes-sociais'); ?>
                </div>
                <p class="text-white text-center my-3 my-md-0 position-lg-absolute">© Copyright Halley - Todos os direitos reservados</p>
                <div class="footer__planeta">
                    <a href="https://planetaw.ag" target="_blank" rel="noopener noreferrer" title="Planeta W">
                        <img src="<?= wp_get_attachment_url('34'); ?>" alt="Logo Planeta">
                    </a>
                </div>
            </div>
        </div>
    </div>

</footer>
</div><!-- WRAPPER SITE -->

<?php get_template_part("template-parts/modal-retorno"); ?>
<?php get_template_part("template-parts/c-whatsapp"); ?>

<?php wp_footer(); ?>
</body>
</html>