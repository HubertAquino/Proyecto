<?php get_header(); ?>
<section class="single text-center">
	<h2><?php the_title(); ?></h2>
	<?php the_post_thumbnail(); ?>
  <p class="mb-5"><?php the_field('descripcion') ?></p>
  <h5 class="mb-2">Incluye:</h5>
  <div class="fondito mb-4">
    <?php the_field('incluye') ?>
  </div>
  <h5 class="mb-2">Hoteles:</h5>
  <div class="fondito mb-4">
    <?php the_field('hoteles') ?>
  </div>
</section>
<?php get_footer(); ?>