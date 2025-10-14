<section class="u-py-5" style="background: url(<?= wp_get_attachment_image_src(86, 'full')[0]; ?>) no-repeat center/cover;">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 text-end text-white">
                <h2 class="h5"> Depoimentos </h2>
                <p class="h2"> Quem conhece, recomenda </p>
            </div>

            <div class="col-lg-9">
                <?= do_shortcode('[trustindex no-registration=google]'); ?>
            </div>

        </div>
    </div>
</section>