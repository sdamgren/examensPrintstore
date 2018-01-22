<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> <!-- Hämtar du en post med sitt id -->


    <header class="entry-header">
        <?php the_title( sprintf('<h1 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?>  <!--Hämtar titeln och gör så man kan trycka på titeln och komma till post -->

    <!-- <small>Posted on: <?php the_time('F j, Y'); ?>, in <?php the_category(); ?></small> Skriver ut datum och kategori. -->
    </header>

<div class="row">

    		<?php if( has_post_thumbnail() ): ?>

        			<div class="col-xs-12 col-sm-4">
            				<div class="thumbnail"><?php the_post_thumbnail('medium'); ?></div>
            			</div>
        		<div class="col-xs-12 col-sm-8">
            				<?php the_content(); ?>
            			</div>

        		<?php else: ?>

        			<div class="col-xs-12">
            				<?php the_content(); ?>
            			</div>

        		<?php endif; ?>
    	</div>

</article>