<?php get_header( name ); ?>

<div class="blog-archive">
        <!-- Start Blog Page -->
        <div class="blog-page__header">
            <h1>Blog Archive</h1>
        </div>

        <div class="blog-page">   

<?php $the_query = new WP_Query( 'posts_per_page=-1' ); ?>
 

<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
 
<div class="blog-page__blogs">

    <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
    <?php the_excerpt(__('()')); ?>
               
</div>

    <?php 
    endwhile;
    wp_reset_postdata();
    ?>

</div>

        <div class="blog-page__button">
            <a href="<?php echo site_url( '/')?>">
                <button>Home</button>
            </a>
        </div>
        <!-- End Blog Page -->
</div>

</div>
<?php get_footer( name ); ?>