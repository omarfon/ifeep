<?php
/*
Template Name: blog
*/
 ?>

<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-lg-8">
      <?php $temp_query = $wp_query; ?>
        <?php if (have_posts()) :
          while (have_posts()) : the_post();
        ?>
              <h2><?php the_title(); ?></h2>
              <?php the_content(); ?>
              <p><?php the_author(); ?></p>
        <?php endwhile; ?>
      <?php else : ?>
        <p><?php __('No Posts Found'); ?></p>
      <?php endif; ?>
    </div>

    <div class="col-lg-4">
      <aside>
        <?php get_sidebar(); ?>
      </aside>
    </div>
  </div>
</div>





<?php get_footer(); ?>
