<?php get_header(); ?>
<div class="post-list">
  <?php
  while (have_posts()) {
    the_post(); ?>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php the_content(); ?>
    <p><?php the_author(); ?></p>
    <hr>
  <?php  }
  ?>
</div>
<?php get_footer() ?>