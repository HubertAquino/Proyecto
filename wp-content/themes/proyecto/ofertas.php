<?php /* Template Name: Ofertas */
get_header(); ?>
  <section class="container destacado text-center pt-4 pb-3">
    <h3>Ofertas</h3>
    <div class="row mb-2">
      <?php $destinos = new WP_Query([
			  'showposts' => -1,
			  'post_type' => 'destinos'
		  ]);
			while ($destinos->have_posts()) {
				$destinos->the_post(); ?>
        <article class="col-sm-4 text-center">
          <div class=" caja">
            <h4><?php the_title(); ?></h4>
            <?php the_post_thumbnail(); ?>
            <div class="abajo">
              <p>S/ <?php the_field('precio') ?></p>
              <a href="<?php the_permalink(); ?>">Consultar</a>
            </div>
          </div>
        </article>
		<?php } ?>
  </section>
<?php get_footer(); ?>