<h3 class="entry-header">
        <?php the_title( sprintf('<h1 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?>  <!--Hämtar titeln och gör så man kan trycka på titeln och komma till post -->
</h3>
<div class="thumbnail-img"><?php the_post_thumbnail('small'); ?></div>

<hr>