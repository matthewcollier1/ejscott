<?php get_header( name ); ?>

<div class="events-page__container">
 <!-- Start Events Page -->
 <div class="events-page__header">
    <h1>Event</h1>
 </div>

        <div class="events-page">

            <div class="events-page__events">


 <?php 
            $today = date('Ymd');
            $homepageEvents = new WP_Query(array(
                'posts_per_page' => 1,
                'post_type' => 'event',
                'meta_key' => 'event_date',
                'orderby' => 'meta_value_num',
                'order' => 'DESC',
                //Only show upcoming events
                /* 'meta_query' => array( 
                    array(
                        'key' => 'event_date',
                        'compare' => '>=',
                        'value' => $today,
                        'type' => 'numeric'
                    )
                ) */

            ));

            while($homepageEvents->have_posts()){
                $homepageEvents->the_post(); ?>
                <div class="event-summary">
                    <a href="#" class="event-summary__date">
                        <span class="event-summary__month"><?php 
                            $eventDate = new DateTime(get_field('event_date'));
                            echo $eventDate->format('M');
                        ?></span>
                        <span class="event-summary__day">
                            <?php echo $eventDate->format('d'); ?>
                        </span>
                        
                    </a>
                    <img src="<?php the_field('event_picture');?>"  />
                    <div class="event-summary__content">
                    <h5 class="event-summary__title"><a href="<?php the_permalink() ?>" class="nu gray"><?php the_title();?></a></h5>
                    <p><?php echo the_content( more_link_text, strip_teaser ); ?></p>
                    </div>
                </div>
            <?php }
        ?>

        </div>
        </div>
        </div>

                <div class="events-page__button">
        <a href="<?php echo site_url( '/')?>">
            <button>Home</button>
        </a>
        </div>
        <!-- End Events Page -->
        </div>

<?php get_footer( name ); ?>