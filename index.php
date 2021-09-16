<?php get_header(); ?>

<main>
<!-- section description -->
<?php $loop = new WP_Query((array('post_type' => 'description',))); ?>
<?php while ($loop->have_posts()) : $loop->the_post(); ?>
        <h1><?php the_title() ?></h1><br>
        <?php the_content() ?>
<?php endwhile;
wp_reset_query(); ?>

<!-- section parcours -->
<?php $loop = new WP_Query((array('post_type' => 'parcours',))); ?>
<?php while ($loop->have_posts()) : $loop->the_post(); ?>
        <h1><?php the_title() ?></h1><br>
        <?php the_content() ?>
<?php endwhile;
wp_reset_query(); ?>

<!-- section actualites -->
<?php $loop = new WP_Query((array('post_type' => 'actualites',))); ?>
<?php while ($loop->have_posts()) : $loop->the_post(); ?>
        <h1><?php the_title() ?></h1><br>
        <?php the_content() ?>
<?php endwhile;
wp_reset_query(); ?>

<!-- section sponsors -->
<?php $loop = new WP_Query((array('post_type' => 'sponsors',))); ?>
<?php while ($loop->have_posts()) : $loop->the_post(); ?>
        <h1><?php the_title() ?></h1><br>
        <?php the_content() ?>
<?php endwhile;
wp_reset_query(); ?>


</main>
<?php get_footer(); ?>