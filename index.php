<?php get_header(); ?>

<main>
<!-- section description -->
<?php $loop = new WP_Query((array('post_type' => 'description',))); ?>
<?php while ($loop->have_posts()) : $loop->the_post(); ?>
        <h2><?php the_title() ?></h2>
        <?php the_content() ?>
<?php endwhile;
wp_reset_query(); ?>

<!-- section parcours -->

<?php $loop = new WP_Query((array('post_type' => 'parcours',))); ?>
<?php while ($loop->have_posts()) : $loop->the_post(); ?>
<h2><?php the_title() ?></h2>
<?php the_content() ?>
<?php endwhile;
        wp_reset_query(); ?>


<!-- section actualites -->
<section id='actualites'>

        <?php $loop = new WP_Query((array('post_type' => 'actualites',))); ?>
        <?php while ($loop->have_posts()) : $loop->the_post(); ?>
        <h2><?php the_title() ?></h2>
        <?php the_content() ?>
        <?php endwhile;
wp_reset_query(); ?>

</section>

<!-- section sponsors -->
<?php $loop = new WP_Query((array('post_type' => 'sponsors',))); ?>
<?php while ($loop->have_posts()) : $loop->the_post(); ?>
        <h2><?php the_title() ?></h2>
        <?php the_content() ?>
<?php endwhile;
wp_reset_query(); ?>


</main>
<?php get_footer(); ?>