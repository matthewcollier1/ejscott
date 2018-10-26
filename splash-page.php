<div class="splash-page">

<div class="splash-page__image">
<img src= <?php echo get_theme_file_uri("/img/windowflowers.jpg") ?> alt="">
            </div>

            <nav class="splash-page__mobile-nav">
                <button class="nav-toggle">
                    <span class="bar-top"></span>
                    <span class="bar-mid"></span>
                    <span class="bar-bot"></span>
                </button>
                <ul class="splash-page__mobile-nav-links">
                    <li class="menu__items"><a href="#blog">Blog</a></li>
                    <li class="menu__items"><a href="#bio">Bio</a></li>
                    <li class="menu__items"><a href="#events">Events</a></li>
                    <li class="menu__items"><a href="#music">Music</a></li>
                    <li class="menu__items"><a href="#gallery">Gallery</a></li>
                </ul>
            </nav>

<!--              <nav class="splash-page__navigation">
                <ul>
                    <li><a href="#bio">Bio</a></li>
                    <li><a href="#blog">Blog</a></li>
                    <li><a href="#events">Events</a></li>
                    <li><a href="#music">Music</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                </ul>
            </nav>  -->

            <!-- <div class="splash-page__title">
                <img src= <?php /* echo get_theme_file_uri('/img/name.png') */ ?> alt="" srcset="">
            </div>

            <div class="splash-page__sub-title">
                <h2>Actor </h2>
                <h2>Director</h2>
                <h2>Teacher</h2>
            </div>

            <div class="splash-page__reviews">
                <q>
                    <?php /* echo do_shortcode( '[testimonial_rotator id="182"]', ignore_html ) */; ?>
                </q>    
            </div>

            <div class="splash-page__album-download">
                <button>Download My Album For Free Here

                </button>
            </div>
 -->
        <div class="name">
            <h1>Eliza-Jane Scott</h1>
            <h2>Actor. Director. Teacher.</h2>
        </div>

        <div class="reviews">
        <?php echo do_shortcode('[testimonial_rotator id=198]', $ignore_html); ?>
        </div>
</div>