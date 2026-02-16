<?php

$categories = get_the_category();
$cat = '';

if (count($categories) > 1) {
    for ($i = 0; $i < count($categories); $i++) {
        $cat .= $categories[$i]->cat_name;
        if ($i < count($categories) - 1) {
            $cat .= ', ';
        }
    }
} else {
    $cat = $categories[0]->cat_name;
}
has_post_thumbnail() ? $img = get_post_thumbnail_id($post->ID) : $img = 128;

?>

<article <?= post_class('h-100 shadow-sm rounded-3'); ?>>
    <figure class="mb-0">
        <?= wp_get_attachment_image( $img, 'full', '', ["class" => "rounded-3 mb-4 img-fluid w-100"]) ?>
    </figure>

    <div class="pt-2 pb-4 px-3">
        <div class="row gx-2 align-items-center mb-3 text-secondary small">
            <div class="col-auto" style="font-size: 13px;"><span class="icon-calendar me-1"></span> <?= get_the_date('m/d/Y'); ?></div>
            <div class="col-auto"><span class="d-block bg-secondary rounded-circle" style="width: 8px; height: 8px;"></span></div>
            <div class="col-auto" style="font-size: 13px;"><span class="icon-folder me-1"></span><?= $cat; ?></div>
        </div>

        <h2 class="h5">
            <a href="<?php the_permalink(); ?>" class="text-decoration-none">
                <?= the_title(); ?>
            </a>
        </h2>

        <a href="<?php the_permalink(); ?>" class="text-decoration-none small text-primary mt-2 text-limit">
            <?= get_the_excerpt(); ?>
        </a>

    </div>

</article>