<!-- SINGLE -->

<?php get_header(); ?>

<main>
   <section class="page-title">
    <div class="container">
      <h1>
        <?php the_title(); ?>
      </h1>
    </div>
  </section>

  <!-- SEÇÃO -->
  <section class="single">

    <div class="container">
      <div class="row">
        <div class="col-lg-8">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
               <?php the_content(); ?>
            <?php endwhile; else: ?>
               <p> <?php _e('Sorry, this page does not exist.'); ?> </p>
            <?php endif; ?>

         </div>

         <div class="col-lg-4">
            menu lateral 
         </div>

      </div>

    </div>

    </div>
  </section>

</main>

<?php get_footer(); ?>
