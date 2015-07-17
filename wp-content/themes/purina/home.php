<?php get_header(); ?>

<header>
    <h1>Purina!!!</h1>
</header>

<main role="main">
    <!-- section -->
    <section>

        <h2>Featured Products</h2>

        <?php

        $loop = new WP_Query( array( 'post_type' => 'product', 'posts_per_page' => 3 ) ); ?>

        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

            <?php get_template_part('partials/product', 'listview'); ?>

        <?php endwhile;
        wp_reset_query(); ?>

    </section>
    <!-- /section -->
</main>

<?php get_footer(); ?>
