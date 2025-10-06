<div class="d-flex gap-2 justify-content-center">

    <?php if (!empty(get_option('options_rs_1'))) : ?>
    <a href="<?= get_option('options_rs_1'); ?>" title="Facebook" target="_blank" rel="noopener noreferrer">
        <i class="fa-brands fa-facebook-f"></i>
    </a>
    <?php endif; ?>

    <?php if (!empty(get_option('options_rs_2'))) : ?>
    <a href="<?= get_option('options_rs_2'); ?>" title="Instagram" target="_blank" rel="noopener noreferrer">
        <i class="fa-brands fa-instagram"></i>
    </a>
    <?php endif; ?>

    <?php if (!empty(get_option('options_rs_3'))) : ?>
    <a href="<?= get_option('options_rs_3'); ?>" title="Youtube" target="_blank" rel="noopener noreferrer">
        <i class="fa-brands fa-youtube"></i>
    </a>
    <?php endif; ?>

    <?php if (!empty(get_option('options_rs_4'))) : ?>
    <a href="<?= get_option('options_rs_4'); ?>" title="Linkedin" target="_blank" rel="noopener noreferrer">
        <i class="fa-brands fa-linkedin-in"></i>
    </a>
    <?php endif; ?>

</div>
