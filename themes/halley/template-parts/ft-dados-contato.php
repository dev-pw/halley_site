<?php

$email = get_option('options_info_1');
$endereco = get_option('options_info_2');
$telefone = get_option('options_info_3');
$tel_url = str_replace(array('(', ')', '-', ' '), '', $telefone);
$telefone2 = get_option('options_info_7');
$tel_url2 = str_replace(array('(', ')', '-', ' '), '', $telefone2);

?>

<section class="u-py-5">
    <div class="container">
        
        <div class="row justify-content-center justify-content-lg-between gy-4 position-relative">

            <img src="<?= wp_get_attachment_url('99'); ?>" class="img-fluid position-absolute w-25 d-none d-lg-block" style="top: 35px; left: 19%" alt="Linhas">
            <img src="<?= wp_get_attachment_url('99'); ?>" class="img-fluid position-absolute w-25 d-none d-lg-block" style="top: 35px; right: 19%" alt="Linhas">

            <div class="col-md-6 col-lg-3 text-center ">
                <div class="d-flex justify-content-center align-itens-center rounded-4 bg-secondary p-4 mx-auto" style="width: 75px; height: 75px;">
                    <img src="<?= wp_get_attachment_url('35'); ?>" class="" alt="">
                </div>
                <h3 class="text-secondary mt-4">Ponto de Partida</h3>
                <p class="text-primary"> <?= $endereco; ?> </p>
            </div>
            
            <div class="col-md-6 col-lg-3 text-center ">
                <div class="d-flex justify-content-center align-itens-center rounded-4 bg-secondary p-4 mx-auto" style="width: 75px; height: 75px;">
                    <img src="<?= wp_get_attachment_url('38'); ?>" class="" alt="">
                </div>
                <h3 class="text-secondary mt-4">Alô, como tá indo?</h3>
                <div class="text-primary">
                    <a href="tel:+55<?= $tel_url; ?>" class="text-decoration-none">
                        <span class="icon-call text-primary me-2"></span><?= $telefone; ?>
                    </a>
                    <br>
                    <a href="tel:+55<?= $tel_url2; ?>" class="text-decoration-none">
                        <span class="icon-call text-primary me-2"></span><?= $telefone2; ?>
                    </a>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 text-center ">
                <div class="d-flex justify-content-center align-itens-center rounded-4 bg-secondary p-4 mx-auto" style="width: 75px; height: 75px;">
                    <img src="<?= wp_get_attachment_url('37'); ?>" class="" alt="">
                </div>
                <h3 class="text-secondary mt-4">Já Chegou!</h3>
                <p class="text-primary">
                    <a href="mailto:atendimento@halleylog.com.br" class="text-decoration-none"> atendimento@halleylog.com.br</a> </p>
            </div>

        </div>
    </div>
</section>

