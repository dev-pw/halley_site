<section id="js-indo-swiper" class="indo bg-primary u-py-5">
    <div class="container">

        <div class="row gy-4 justify-content-between mb-4 position-relative">
            <div class="col-auto">
                <h2 class="text-white mb-4">Por que tá indo bem?</h2>
                <p class="text-white col-lg-8">Hospitais, laboratórios, armazéns, portos e estradas. Independente do local, essas são algumas razões da sua carga ir sempre bem com a Halley.</p>
            </div>
            <div class="col-lg-2">
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev indo__arrow"></div>
                <div class="swiper-button-next indo__arrow"></div>
            </div>
        </div>

        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="border rounded-4 text-center border-light border-opacity-50 d-flex flex-column justify-content-center align-items-center h-100" style="min-height: 200px">
                        <img src="<?= wp_get_attachment_url('29'); ?>" alt="<?= get_post(29)->post_title; ?>" class="mb-3">
                        <p class="text-white">Certificação Anvisa</p>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="border rounded-4 text-center border-light border-opacity-50 d-flex flex-column justify-content-center align-items-center h-100" style="min-height: 200px">
                        <img src="<?= wp_get_attachment_url('28'); ?>" alt="<?= get_post(28)->post_title; ?>" class="mb-3">
                        <p class="text-white">Veículos Revestidos</p>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="border rounded-4 text-center border-light border-opacity-50 d-flex flex-column justify-content-center align-items-center h-100" style="min-height: 200px">
                        <img src="<?= wp_get_attachment_url('27'); ?>" alt="<?= get_post(27)->post_title; ?>" class="mb-3">
                        <p class="text-white">Carga Seca ou Refrigerada</p>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="border rounded-4 text-center border-light border-opacity-50 d-flex flex-column justify-content-center align-items-center h-100" style="min-height: 200px">
                        <img src="<?= wp_get_attachment_url('26'); ?>" alt="<?= get_post(26)->post_title; ?>" class="mb-3">
                        <p class="text-white">Armazenagem Segura</p>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="border rounded-4 text-center border-light border-opacity-50 d-flex flex-column justify-content-center align-items-center h-100" style="min-height: 200px">
                        <img src="<?= wp_get_attachment_url('91'); ?>" alt="<?= get_post(91)->post_title; ?>" class="mb-3">
                        <p class="text-white"> Clientes Satisfeitos </p>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="border rounded-4 text-center border-light border-opacity-50 d-flex flex-column justify-content-center align-items-center h-100" style="min-height: 200px">
                        <img src="<?= wp_get_attachment_url('90'); ?>" alt="<?= get_post(90)->post_title; ?>" class="mb-3">
                        <p class="text-white"> Proximidade no Atendimento </p>
                    </div>
                </div>

            </div>
            
        </div>

    </div>
</section>

<script>
    jQuery(document).ready(function($) {
        // SWIPER
        const swiper = new Swiper('#js-indo-swiper .swiper', {
            // Optional parameters
            loop: false,
            spaceBetween: 30,

            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
            },

            breakpoints: {
                640: {
                    slidesPerView: 2,
                },
                768: {
                    slidesPerView: 3,
                },
                992: {
                    slidesPerView: 4,
                },
            },

            // Navigation arrows
            navigation: {
                nextEl: '#js-indo-swiper .swiper-button-next',
                prevEl: '#js-indo-swiper .swiper-button-prev',
            },

        });

        var body = $('body');
    });
</script>