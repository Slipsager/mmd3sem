<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
register_sidebar( $args ); 

function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'home right sidebar',
		'id'            => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
