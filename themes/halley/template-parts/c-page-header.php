<?php

// Página específica (page)
if (is_page()) {
    $title = get_the_title();
}
// Página inicial do blog
elseif (is_home()) {
    $title = get_the_title(get_option('page_for_posts'));
}
// Página de erro 404
elseif (is_404()) {
    $title = 'Página não encontrada';
}
// Página de pesquisa
elseif (is_search() || (is_search() && get_post_type()) ) {
    $title = 'Pesquisa';
}
// Página de arquivo (categorias, tags, custom post types)
elseif (is_archive() || is_category()) {
    $title = get_the_archive_title();
}
elseif (is_single() && get_post_type() === 'post') {
    $title = 'Notícia';
}
// Para qualquer outro caso (incluindo custom post types)
else {
    $title = get_the_title();
}

?>

<header class="u-py-5" style="background: url(<?= wp_get_attachment_image_src(57, 'full')[0]; ?>) no-repeat center/cover;">
    <div class="container">
        <h1 class="text-white text-center mb-0"> <?= $title; ?> </h1>
    </div>
</header>

<div class="container mt-3">
    <?php get_template_part("template-parts/c-breadcrumbs"); ?>
</div>