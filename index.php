<?php get_header(); ?>

<main>

        <?php $loop = new WP_Query((array('post_type' => 'parcours'))); ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <h1 class="coucou"><?php the_title() ?></h1><br>
        <?php the_content() ?>
        <?php endwhile; wp_reset_query(); ?>
        
</main>
<?php get_footer(); ?>