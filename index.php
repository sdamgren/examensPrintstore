<?php get_header(); ?>

    <div class="row">

    <div class="col-xs-12 col-sm-8">

    <?php
    if (have_posts() ):

        while( have_posts() ): the_post(); ?>

            <?php get_template_part('content', get_post_format()); ?>

       <?php endwhile; ?>

        <div class="col-xs-6 text-left">
            <?php next_posts_link('Older Posts'); ?> <!-- Går till äldre posts -->
        </div>

        <div class="col-xs-6 text-right">
            <?php previous_posts_link('Newer Posts'); ?> <!-- Går till nya posts -->
        </div>
        </div>
    </div>
</div>
       <?php endif;

    ?>

    </div>

    <div class="col-xs-12 col-sm-4">
        <?php get_sidebar(); ?>
    </div>

    </div>


<?php get_footer(); ?> <!-- Hämtar sidfot -->