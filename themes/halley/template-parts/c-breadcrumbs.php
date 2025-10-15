<?php
/**
 * Breadcrumbs plugin Yoast SEO
 */
?>


<div class="d-inline-flex fs-6">
    <i class="fa-solid fa-house me-2 text-primary" style="margin-top: 2px;"></i>
    <?php if (function_exists('yoast_breadcrumb')) {
        yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
    } ?>
</div>
