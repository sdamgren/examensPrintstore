<?php get_header(); ?>

    <div class="row">

        <div class="col-xs-12 col-sm-8">

            <div class="row">

                <?php

                if( have_posts() ):

                    while( have_posts() ): the_post(); ?>

                       <?php get_template_part('content', 'search'); ?>

                    <?php endwhile;

                    else: {
                        echo '<h1 class="search-h1">Sorry, no results.</h1>';
                    }

                endif;

                ?>
            </div>

        </div>

    </div>

<?php get_footer(); ?>

