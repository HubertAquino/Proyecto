<?php get_header(); ?>
  <section class="banner">
    <div class="banner-imagen"></div>
    <h5>Nuestro tour de viajes ofrece destinos a cualquiera de los 5 continentes, donde te ofrecemos desde paquetes de viaje a cualquier destino del peru y mundo como ofertas de viaje para que te sientas mas comodo o pagues mas barato. No te vas a arrepentir de esto!.</h5>
  </section>
  <section class="container destacado text-center">
    <h3>Buscas lugares para turistear? Mire unas cuantas ofertas de viaje!</h3>
    <div class="row mb-2">
      <?php $destinos = new WP_Query([
			  'showposts' => 6,
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
    </div>
    <div class="text-center boton-todo-papa">
      <a href="https://ismem1.desarrollando.tech/?page_id=67" class="boton-todo">Ver todo</a>
    </div>
  </section>
<?php get_footer(); ?>