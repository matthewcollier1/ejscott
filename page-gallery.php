<?php get_header( name ); ?>

        <div class="gallery-page__header">
            <h1>Gallery</h1>
        </div>

<div class="gallery-page">
<div class="gallery-page__gallery">
<?php
if (have_posts()):
  while (have_posts()) : the_post();
    the_content();
  endwhile;
else:
  echo '<p>Sorry, no posts matched your criteria.</p>';
endif;
?> 
</div>
</div>
Gallery Only

        <div class="events-page__button">
        <a href="<?php echo site_url( '/')?>">
            <button>Home</button>
        </a>
        </div>

<?php get_footer( name );?>

