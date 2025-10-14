<?php

$img = has_post_thumbnail() ? get_post_thumbnail_id($post->ID) : 59;

?>

<article <?= post_class(); ?>>
                    
    <img src="<?= wp_get_attachment_image_src($img, 'full')[0]; ?>" class="rounded-3 mb-4 img-fluid w-100" alt="<?= the_title(); ?>">

    <div class="text-secondary small mb-3">
        <span> <?= get_the_date('d \d\e m, Y'); ?> </span>
        <span> <?= the_category(); ?> </span>
    </div>
    
    <h2 class="h5">
        <a href="<?php the_permalink(); ?>" class="text-decoration-none">
            <?= the_title(); ?>
        </a>
    </h2>

    <div class="small text-primary mt-2 text-limit">
        <?= get_the_excerpt(); ?>
    </div>

</article>