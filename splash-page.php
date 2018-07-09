<div class="splash-page">

<div class="splash-page__image">
<img src= <?php echo get_theme_file_uri("/img/backgroundimage.png") ?> alt="">
            </div>

            <nav class="splash-page__navigation">
                <ul>
                    <li><a href="#bio">Bio</a></li>
                    <li><a href="#blog">Blog</a></li>
                    <li><a href="#events">Events</a></li>
                    <li><a href="#music">Music</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                </ul>
            </nav>

            <div class="splash-page__title">
                <img src= <?php echo get_theme_file_uri('/img/name.png') ?> alt="" srcset="">
            </div>

            <div class="splash-page__sub-title">
                <h2>Actor</h2>
                <h2>Director</h2>
                <h2>Teacher</h2>
            </div>

            <div class="splash-page__reviews">
                <q>
                    <?php echo do_shortcode( '[testimonial_rotator id="182"]', ignore_html ); ?>
                </q>    
            </div>

            <div class="splash-page__album-download">
                <button>Download My Album For Free Here

                </button>
            </div>

</div>