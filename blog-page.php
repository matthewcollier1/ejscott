        <!-- Start Blog Page -->
        <div class="blog-page__header">
            <h1>Blog</h1>
        </div>

        <div class="blog-page">

            

<?php $the_query = new WP_Query( 'posts_per_page=3' ); ?>
 

<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
 
<div class="blog-page__blogs">
<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
 

<?php the_excerpt(__('(more…)')); ?>

</div>                
 

<?php 
endwhile;
wp_reset_postdata();
?>
</div>

        <div class="blog-page__button">
            <a href="<?php echo site_url( '/blog')?>">
                <button>Blog Archive</button>
            </a>
        </div>
        <!-- End Blog Page -->