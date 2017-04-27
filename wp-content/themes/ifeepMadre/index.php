 <?php get_header(); ?>
 <div class="container">
   <div class="col-xs-12 col-md-8">
      <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
      <?php endwhile; ?>
    <?php else : ?>
      <p><?php __('No Posts Found'); ?></p>
    <?php endif; ?>

   </div>
   <div class="col-xs-12 col-md-4">

   </div>

 </div>

<?php get_footer(); ?>
