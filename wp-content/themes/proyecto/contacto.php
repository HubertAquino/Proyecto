<?php /* Template Name: Contacto */
get_header(); ?>
<section class="container pt-5 pb-5 contacto">
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
        <?php echo do_shortcode('[contact-form-7 id="8" title="Contacto"]'); ?>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>