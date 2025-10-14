<section class="u-py-5">
    <div class="cta container position-relative z-1">
        <div class="row">

            <div class="col-md-6 p-0">
                <img src="<?= wp_get_attachment_image_src(85, 'full')[0]; ?>" class="img-fluid w-100 h-100" alt="<?= get_post(85)->post_title; ?>">
            </div>

            <div class="col-md-6 bg-primary text-white">

                <div class="cta__px p-5 h-100 d-flex flex-column justify-content-center align-items-start">
                    <h2>Chegou bem</h2>
                    <p> Quando se combina conhecimento técnico, infraestrutura, cuidado e muito trabalho, sua carga chega ao destino do jeito que merece: muito bem. </p>
                    <a href="<?= the_permalink(53); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-secondary text-white mt-3"> Vem pra Halley </a>
                </div>
            </div>
        </div>

        <img src="<?= wp_get_attachment_image_src(84, 'full')[0]; ?>" class="cta__img d-none d-lg-block" alt="<?= get_post(84)->post_title; ?>">
    </div>
</section>