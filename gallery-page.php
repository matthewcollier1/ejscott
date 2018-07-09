<div class="gallery-page__header" id="gallery">
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

        <div class="events-page__button">
        <a href="<?php echo site_url( '/gallery')?>">
            <button>Full Gallery

            </button>
        </a>
        </div>


