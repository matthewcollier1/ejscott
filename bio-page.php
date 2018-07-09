        <!-- Start Bio Page -->
        <div class="bio-page__header" id="bio">
            <div class="bio-page__circle">
                <img src= <?php echo get_theme_file_uri('/img/headshot.jpg') ?> alt="" srcset="">   
            </div>
            <div class="bio-page__header-title">
                <h1>Biography</h1>
                <h4>General Bio. A little about you</h4>
            </div>
        </div>

        <div class="bio-page">

            
        <?php 
           
            $homepageBio = new WP_Query(array(
                'posts-per-page' => '-1',               
                'post_type' => 'bio',
                'meta_key' => 'bio',
                'order' => 'ASC',
            ));

            while($homepageBio->have_posts()){
                $homepageBio->the_post(); ?>
                <div class="bio-page__bios">
                    <h2>
                        <?php echo the_title(); ?>
                    </h2>
                    <p>
                        <?php echo the_content( more_link_text, strip_teaser ); ?>
                    </p>
                </div>
            <?php }
            ?>
            
</div>

        

        <!-- End Bio Page -->
