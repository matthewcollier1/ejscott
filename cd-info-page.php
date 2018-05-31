 <!-- Start Cd Info Page -->
 <div class="cd-info-page__header">
            <h1>CD Info</h1>
        </div>


        <div class="cd-info-page">

            <div class="cd-info-page__cover">
                <img src="<?php echo get_theme_file_uri("/img/cd.jpg") ?>" />
            </div>

            <div class="cd-info-page__info">
                <p>
                <?php    
                $cdInfo = new WP_Query(array(
                        'post_type' => 'cd-info',
                        'meta-key' => 'cd_info'
                    ));

                    while($cdInfo->have_posts()){
                        $cdInfo->the_post();
                        echo the_content( more_link_text, strip_teaser );
                    }

                    ?>
                </p>
            </div>

        </div>

        <div class="cd-info__button">
            <button>CD Download

            </button>
        </div>
        <!-- End Cd Info Page -->