<?php get_header(); ?>

<h1><?php bloginfo('name') ?></h1>
<h2><?php bloginfo('description') ?></h2>

<!--filtro para poner los post de orden ascendente y solo la categoria 4-->
<?php// query_posts( 'order=Asc&cat=4' ); ?>

<!--Para reiniciar las variables-->
<?php rewind_posts(); ?>

<!--The Loop de WP-->
<?php query_posts( 'order=Asc' ); ?>

<?php if (have_posts()): while ( have_posts() ): the_post(); ?>
	<h1><a href=" <?php the_permalink(); ?> "><?php the_title(); ?></a></h1>
	<?php the_excerpt(); ?>
	<?php the_category(); ?>
	<?php the_author(); ?>
	<?php the_date(); ?>

<?php endwhile; ?>
<?php else: ?>
<?php endif; ?>

<?php get_footer(); ?>