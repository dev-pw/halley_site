<section class="bg-secondary u-py-5">
  <div class="container position-relative">

    <div class="row gy-4">

      <div class="col-lg-6">

        <h2 class="text-white">Quer boas noticias?</h2>
        <p class="text-white"> Sempre que tivermos uma novidade, vamos avisar você </p>

        <form class="form_news" data-action-caminho="<?= get_template_directory_uri() ?>" data-action="newsletter/inserir" method="POST">
          <div class="form-floating mb-3">
            <input type="email" class="form-control text-white bg-transparent rounded-0" name="email" id="email" placeholder="Email">
            <label for="email" class="text-white">E-mail</label>

            <button type="submit" class="btn btn-primary mt-3">
              Quero receber novidades
              <!-- SPINNER -->
              <span class="spinner ms-1" style="display: none">
                <div class="spinner-border spinner-border-sm ml-2" role="status">
                  <span class="sr-only"></span>
                </div>
              </span>
              <!-- SPINNER -->
            </button>
          </div>
        </form>

      </div>

      <img src="<?= wp_get_attachment_image_src(67, 'full')[0]; ?>" class="news-img" alt="<?= get_post(67)->post_title; ?>" fetchpriority="low" loading="lazy">

    </div>

  </div>
</section>