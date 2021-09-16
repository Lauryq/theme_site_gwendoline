<?php get_header(); ?>

<main>
<!-- section description -->
<section id="descritption">

<?php $loop = new WP_Query((array('post_type' => 'description',))); ?>
<?php while ($loop->have_posts()) : $loop->the_post(); ?>
        <h2><?php the_title() ?></h2>
        <?php the_content() ?>
<?php endwhile;
wp_reset_query(); ?>

</section>

<!-- section parcours -->
<section id="parcours">

<?php $loop = new WP_Query((array('post_type' => 'parcours',))); ?>
<?php while ($loop->have_posts()) : $loop->the_post(); ?>
<h2><?php the_title() ?></h2>
<?php the_content() ?>
<?php endwhile;
        wp_reset_query(); ?>

</section>


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
<section id="sponsors">

<?php $loop = new WP_Query((array('post_type' => 'sponsors',))); ?>
<?php while ($loop->have_posts()) : $loop->the_post(); ?>
        <h2><?php the_title() ?></h2>
        <?php the_content() ?>
<?php endwhile;
wp_reset_query(); ?>

</section>

<!-- section devenirsponsors -->
<section id="devenir_sponso">

<?php $loop = new WP_Query((array('post_type' => 'devenir_sponso',))); ?>
<?php while ($loop->have_posts()) : $loop->the_post(); ?>
        <h2><?php the_title() ?></h2>
        <?php the_content() ?>
<?php endwhile;
wp_reset_query(); ?>

</section>


</main>
<?php get_footer(); ?>