<?php get_header(); ?>
<section class="single text-center container">
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
  <div class="row">
    <div class="col-sm-4">
      <div class="caja-contacto">
        <p>- OFICINA: miraflores.</p>
        <p>- DIRECCIÓN: Calle Schell 485, Miraflores, Lima 15074, Perú.</p>
        <p>- CENTRAL +51-1 242-1900.</p>
        <p>- WHATSAPP +51-1 996 905 798.</p>
        <p class="mb-0">- CONTACTO Jazmin Sulca.</p>
      </div>
    </div>
    <div class="col-sm-8">
      <div class="caja-contacto">
        <?php echo do_shortcode('[contact-form-7 id="85" title="Single"]'); ?>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>