<?php

$whats = get_option('options_rs_5');
$zap = str_replace(array('(', ')', '-', ' '), '', $whats);
?>

<section class="whatsapp">
    <a href="https://wa.me/55<?= $zap; ?>" class="text-decoration-none text-white" target="_blank" rel="noopener noreferrer">
        <i class="fa-brands fa-whatsapp fs-2"></i>
    </a>
</section>


<style>
    .whatsapp a{
        background: #25d366;
        position: fixed;
        bottom: 20px;
        right: 20px;
        border-radius: 50px;
        width: 55px;
        height: 55px;
        display: flex;
        align-items: center;
        justify-content: center; 
        box-shadow: 0px 0px 10px #00000050;
        transition: all .3s ease-in-out;
    }

    .whatsapp a:hover{
        background: #15a44a;
    }
</style>