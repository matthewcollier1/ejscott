 <!-- Start Events Page -->
 <div class="events-page__header" id="events">
            <h1>Events</h1>
        </div>
        <div class="events-page">

            <div class="events-page__events">
               
 <?php 
            $today = date('Ymd');
            $homepageEvents = new WP_Query(array(
                'posts_per_page' => 3,
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
                    <img src="<?php the_field('event_picture');?>"  />
                    <a href="#" class="event-summary__date">
                        <span class="event-summary__month"><?php 
                            $eventDate = new DateTime(get_field('event_date'));
                            echo $eventDate->format('M');
                        ?></span>
                        <span class="event-summary__day">
                            <?php echo $eventDate->format('d'); ?>
                        </span>
                        
                    </a>
                    
                    <div class="event-summary__content">
                        <h5 class="event-summary__title"><a href="<?php the_permalink() ?>" class="nu gray"><?php the_title();?></a></h5>
                        <p><?php echo wp_trim_words(get_the_content(), 18); ?> <a href='<?php the_permalink() ?>'>Learn more</a></p>
                    </div>
                </div>
            <?php }
        ?>
                </div>
               
            </div>

        </div>

       

        <div class="events-page__button">
        <a href="<?php echo site_url( '/events')?>">
            <button>Event Archive

            </button>
        </a>
        </div>
        <!-- End Events Page -->