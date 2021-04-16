<?php get_header(); ?>
<div class="post-view">
  <?php
  while (have_posts()) {
    the_post(); ?>
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
    <p>By <strong><?php the_author(); ?></strong></p>
  <?php  }
  ?>
</div>
<?php get_footer() ?>