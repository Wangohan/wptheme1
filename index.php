<?php get_header(); ?>
    <div class="container site-content">
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); // Начало цикла ?>
        <h1><?php the_title(); ?></h1>
        <?php the_content();  ?>
        <?php endwhile; // Конец цикла ?>
    </div>
<?php get_footer(); ?>