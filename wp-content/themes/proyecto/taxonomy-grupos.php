<?php get_header(); ?>
<section class="container destacado pt-5 pb-5">
	<h1 class="text-center mb-3"><?php echo single_cat_title(); ?></h1>
	<div class="row">
		<?php while (have_posts()) { the_post(); ?>
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
</section>
<?php get_footer(); ?>