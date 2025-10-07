
<footer>

    <section class="bg-primary u-py-5">
        <div class="container">
            <div class="row justify-content-between gy-4 d-flex flex-column flex-xl-row align-items-center align-items-xl-start text-center text-xl-start">

                <div class="col-md-6 col-xl-3">
                    <img src="<?php echo wp_get_attachment_url('33'); ?>" alt="" class="d-block mx-auto w-50 mb-4">
                </div>

                <div class="col-md-6 col-lg-2 text-white">
                    <h3 class="mb-4">Sobre nós</h3>
                    <p class="small m-0">
                        <a href="#" class="link-light text-decoration-none">Fale com a Halley</a>
                    </p>
                    <p class="small m-0">
                        <a href="#" class="link-light text-decoration-none">Logística</a>
                    </p>
                    <p class="small m-0">
                        <a href="#" class="link-light text-decoration-none">Somos Halley</a>
                    </p>
                </div>

                <div class="col-md-6 col-lg-3 text-white">
                    <h3 class="mb-4">Principais Serviços</h3>
                    <p class="small m-0">
                        <a href="#" class="link-light text-decoration-none">Transporte de Material Biológico</a>
                    </p>
                    <p class="small m-0">
                        <a href="#" class="link-light text-decoration-none">Transporte de Produtos Farmacêuticos</a>
                    </p>
                    <p class="small m-0">
                        <a href="#" class="link-light text-decoration-none">Transporte de Carga Seca</a>
                    </p>
                </div>

                <div class="col-md-6 col-lg-3 text-white">
                    <h3 class="mb-4">Horário de Funcionamento</h3>
                    <p class="small m-0">Segunda a Sexta: 8:00 - 18:00</p>
                    <p class="small m-0">Plantão aos finais de semana e feriados</p>
                </div>

            </div>
        </div>

    </section>

    

    <div class="bg-secondary py-2">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center flex-wrap">
                <div class="btn-rs-white">
                    <?= get_template_part('template-parts/c-redes-sociais'); ?>
                </div>
                <p class="text-white text-center m-0">© Copyright Halley - Todos os direitos reservados</p>
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

<?php wp_footer(); ?>
</body>
</html>