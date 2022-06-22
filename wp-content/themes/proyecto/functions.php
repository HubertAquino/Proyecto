<?php
add_action("init", "codigo_inicial");
function codigo_inicial() {
	register_post_type("destinos", [
		"public" => true,
		"label" => "Destinos",
		'supports' => [
			'title',
      'comments',
      'author',
      'thumbnail',
      'custom-fields',
      'post-formats',
		]
	]);

	register_nav_menus([
		'principal' => 'Menú principal'
	]);
}
add_action( 'init', 'crear_destinos_taxonomy' );
function crear_destinos_taxonomy() {
  register_taxonomy(
    'Categoría',
    'destinos',
    [
      'label' => __( 'Categoría' ),
      'rewrite' => array( 'slug' => 'categoria' ),
      'hierarchical' => true,
      'show_admin_column' => true,
		]
  );
}
add_theme_support( 'post-thumbnails' );
?>