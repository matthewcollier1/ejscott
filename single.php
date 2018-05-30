<?php get_header(); ?>

<div class="single-post__container">

<h1><?php the_title(); ?></h1>
 <?php
if (have_posts()):
  while (have_posts()) : the_post();
    the_content();
  endwhile;
else:
  echo '<p>Sorry, no posts matched your criteria.</p>';
endif;
?> 

<div class="events-page__button">
  <a href="<?php echo site_url( '/')?>">
    <button>Home</button>
  </a>
</div>
    
</div>

<?php get_footer(); ?>