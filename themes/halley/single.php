<?php
/**
 * Single default
 *
 * @package WordPress
 * @subpackage halley-site
 *
 */

get_header(); 

$id_post = get_the_ID();
$post_type = get_post_type();

$args = array(
  'post_type' => '' . $post_type . '',
  'posts_per_page' => 2,
  'post__not_in' => array($id_post),
);

$nextPost = new WP_Query($args);

?>
  
<main role="main">

	<?= get_template_part('template-parts/c-page-header'); ?>

	<div class="pt-5 u-pb-5">

		<div class="container">
			<div class="row gy-4 justify-content-center">

				<section class="col-lg-10 col-xl-8">

					<div class="bg-light rounded-4 gx-3 mb-5 p-2 row">

						<div class="col-auto c-post-metadata" style="font-size: 15px;">
							<i class="icon-calendar-days me-1 text-dark"></i>
							<span class="small"> <?= get_the_date('d/m/Y'); ?> </span>
						</div>

						<?php if (get_the_category()): ?>
						<div class="col-auto c-post-metadata" style="font-size: 15px;">
							<i class="icon-folder-1 me-1 text-dark"></i>
							<?php the_category(', '); ?>
						</div>
						<?php endif; ?>

					</div>

					<?php if (have_posts()): while (have_posts()): the_post(); ?>
					<article id="article-id-<?php the_id(); ?>" <?php post_class(); ?>>
						<div class="entry-content-post">
							<?php the_content(); ?>
						</div>
					</article>
					<?php endwhile; endif; ?>

				</section>

				<aside class="col-lg-10 col-xl-8">

					<hr class="border-primary">

					<div class="mt-4">
						<p class="fs-5 fw-bold lh-base my-4 text-primary">Veja também</p>
						
            <div class="row gy-5">

							<?php if ($nextPost->have_posts()) : while($nextPost->have_posts()) : $nextPost->the_post();
							echo '<article class="col-sm-6">';
							get_template_part('template-parts/c-card-post');
							echo '</article>';
              endwhile; endif; wp_reset_postdata(); ?>

						</div>

					</div>

				</aside>

			</div>
		</div>
	</div>

</main>

<?php get_footer(); ?>
