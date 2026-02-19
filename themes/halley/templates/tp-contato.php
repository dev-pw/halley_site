<?php
/**
 * Template Name: Contato
 * Template Post Type: page
 * @package WordPress
 * @subpackage halley-site
 *
*/

get_header();

$email = get_option('options_info_1');
$endereco = get_option('options_info_2');
$maps = get_option('options_info_4');
$rota_maps = get_option('options_info_5');
$rota_waze = get_option('options_info_6');

$telefone = get_option('options_info_3');
$tel_url = str_replace(array('(', ')', '-', ' '), '', $telefone);
$telefone2 = get_option('options_info_7');
$tel_url2 = str_replace(array('(', ')', '-', ' '), '', $telefone2);
$whatsapp = get_option('options_rs_5');
$whats_url = str_replace(array('(', ')', '-', ' '), '', $whatsapp);

?>

<main>

    <?php get_template_part('template-parts/c-page-header'); ?>

    <div class="u-py-5">
        <div class="container">
            <div class="row gy-4 justify-content-center">

                <div class="col-lg-4">
                    <div class="border border-4 border-primary bg-light rounded p-4 d-flex flex-column text-center align-items-center h-100">
                        <span class="fs-2 icon-location_on mb-3 text-primary"></span>
                        <h2 class="h5 mb-3 text-primary">Ponto de Partida</h2>
                        <a class="text-decoration-none small col-lg-9" href="<?= $maps; ?>" target="_blank" title="Localização"><?= $endereco; ?></a>
                        <div class="row gx-2 gx-md-4 mt-4">
                            <div class="col-6">
                                <a class="btn btn-primary px-4" href="<?= $rota_maps; ?>" target="_blank" title="Como chegar pelo Google Maps">Maps</a>
                            </div>
                            <div class="col-6">
                                <a class="btn btn-primary px-4" href="<?= $rota_waze; ?>" target="_blank" title="Como chegar pelo Waze">Waze</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="border border-4 border-primary bg-light rounded p-4 d-flex flex-column text-center align-items-center h-100">
                        <span class="fs-2 icon-call mb-3 text-primary"></span>
                        <h2 class="h5 mb-3 text-primary">Fale Conosco</h2>
                        <div>
                            <a href="https://wa.me/55<?= $whats_url; ?>" class="text-decoration-none mb-2 small" target="_blank"><span class="icon-whatsapp text-primary me-2"></span><?= $whatsapp; ?></a>
                        </div>
                        <div>
                            <a href="tel:+55<?= $tel_url; ?>" class="text-decoration-none small"><span class="icon-call text-primary me-2"></span><?= $telefone; ?></a>
                        </div>
                        <div>
                            <a href="tel:+55<?= $tel_url2; ?>" class="text-decoration-none small"><span class="icon-call text-primary me-2"></span><?= $telefone2; ?></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="border border-4 border-primary bg-light rounded p-4 d-flex flex-column text-center align-items-center h-100">
                        <span class="fs-2 icon-mail-envelope-open mb-3 text-primary"></span>
                        <h2 class="h5 mb-3 text-primary">E-mail</h2>
                        <div>
                            <a href="mailto: <?= $email; ?>" class="text-decoration-none small"><span class="icon-phone text-primary me-2"></span><?= $email; ?></a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="bg-light flex-column-reverse flex-lg-row mt-5 mx-0 rounded-3 row border border-4 border-primary">
                <div class="col-lg-5 p-0 s-mapa-contato">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.3386628485155!2d-46.61841615817891!3d-23.55627736860583!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59f9adb65883%3A0xe37da38c315d2e10!2sHalley%20Log%C3%ADstica%20e%20Transporte%20LTDA!5e0!3m2!1spt-BR!2sbr!4v1759862740506!5m2!1spt-BR!2sbr" width="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-lg-7">
                    <article class="p-xl-5 px-3 py-4">
                        <h2 class="h5 mb-3 text-primary">Formulário de Contato</h2>


                        <form class="forms-contato form_contato" data-action-caminho="<?= get_template_directory_uri() ?>" data-action="contato/inserir" method="POST">
                            
                        <input type="hidden" name="website">


                            <div class="row g-2">
                                <div class="col-xl-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control border-primary text-dark rounded" id="nome" placeholder="nome" name="nome" wfd-id="id0">
                                        <label for="nome" class="fw-bold small text-primary form-label">Nome *<span class="aviso_label text-danger px-2" id="aviso_label_nome" style="display:none"> </span></label>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control border-primary text-dark rounded" id="email" placeholder="e-mail" name="email" wfd-id="id1">
                                        <label for="email" class="fw-bold small text-primary form-label">E-mail *<span class="aviso_label text-danger px-2" id="aviso_label_nome" style="display:none"> </span></label>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control border-primary text-dark rounded tel_mask" id="telefone" placeholder="telefone" name="tel" maxlength="15" wfd-id="id2">
                                        <label for="telefone" class="fw-bold small text-primary form-label">Telefone *<span class="aviso_label text-danger px-2" id="aviso_label_nome" style="display:none"> </span></label>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control border-primary text-dark rounded" id="empresa" placeholder="Empresa" name="empresa" wfd-id="id1">
                                        <label for="empresa" class="fw-bold small text-primary form-label">Empresa *<span class="aviso_label text-danger px-2" id="aviso_label_nome" style="display:none"> </span></label>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                  <div class="form-floating mb-3">
                                    <select class="form-select border-primary" id="floatingSelect" name="servico" aria-label="Floating label select example">
                                      <option selected> -- Selecione a opção --</option>
                                      <option value="Logística">Logística</option>
                                      <option value="Transporte">Transporte</option>
                                      <option value="Armazenagem">Armazenagem</option>
                                    </select>
                                    <label for="floatingSelect" class="text-primary">Tipo de Serviço:</label>
                                  </div>
                                </div>
                                <div class="col">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control border-primary text-dark rounded" id="assunto" placeholder="Assunto" name="assunto" wfd-id="id3">
                                        <label for="assunto" class="fw-bold small text-primary form-label">Assunto *<span class="aviso_label text-danger px-2" id="aviso_label_nome" style="display:none"> </span></label>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control border-primary text-dark rounded" placeholder="Deixe sua mensagem" id="mensagem" name="mensagem" style="height: 300px"></textarea>
                                        <label for="mensagem" class="fw-bold small text-primary form-label">Deixe sua mensagem *<span class="aviso_label text-danger px-2" id="aviso_label_nome" style="display:none"> </span></label>
                                    </div>
                                </div>

                                <div class="d-non2e">
                                    <script src="https://www.google.com/recaptcha/api.js" async="" defer=""></script>
                                    <div>
                                        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                                        <div class="g-recaptcha" data-sitekey="6LclqG0sAAAAAAzr2dbsE0pAeYffegVbUk-ob-kr" style="margin:10px 0px;"></div>
                                    </div>
                                </div>

                                <div class="col-xl-12 d-flex justify-content-center justify-content-md-end">
                                    <button type="submit" class="btn btn-primary w-100">
                                        Enviar
                                        <!-- SPINNER -->
                                        <span class="spinner ms-1" style="display: none">
                                            <div class="spinner-border spinner-border-sm ml-2" role="status">
                                                <span class="sr-only"></span>
                                            </div>
                                        </span>
                                        <!-- SPINNER -->
                                    </button>
                                </div>
                            </div>
                        </form>
                    </article>
                </div>
            </div>
        </div>

    </div>

</main>

<?php get_footer(); ?>
