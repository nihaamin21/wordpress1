<?php
// Registeration Sidebar nav
function twentysixteen_widgets_init() {
	// $(document).ready(function () {
	// 	$('#oms-ham').on('click', function () {
	// 		$('#oms-sidebar').toggleClass('active');
	// 	});
	// });
	
	register_sidebar(
		array(
			'name'          => __( 'custom-sidebar', 'twentysixteen' ),
			'id'            => 'sidebar',
			'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'twentysixteen' ),
			'before_widget' => '<div id="%1$s" class="panel panel-default %2$s">',
			'after_widget'  => '</div></div>',
            'before_title'  => '<div class="panel-heading"><div class="panel-body">',
			'after_title'   => '</div>',
		)
    );
    
	register_sidebar(
		array(
			'name'          => __( 'Block Sidebar', 'twentysixteen' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'twentysixteen' ),
			'before_widget' => '<div id="%1$s" class="panel panel-default %2$s">',
			'after_widget'  => '</div></div>',
            'before_title'  => '<div class="panel-heading"><div class="panel-body">',
			'after_title'   => '</div>',
		)
    );
    
    register_sidebar(
		array(
			'name'          => __( 'Pages Sidebar', 'twentysixteen' ),
			'id'            => 'sidebar-2',
			'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'twentysixteen' ),
			'before_widget' => '<div id="%1$s" class="panel panel-default %2$s">',
			'after_widget'  => '</div></div>',
            'before_title'  => '<div class="panel-heading"><div class="panel-body">',
			'after_title'   => '</div>',
		)
    );
    
    register_sidebar(
		array(
			'name'          => __( 'Single post Sidebar', 'twentysixteen' ),
			'id'            => 'sidebar-3',
			'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'twentysixteen' ),
			'before_widget' => '<div id="%1$s" class="panel panel-default %2$s">',
			'after_widget'  => '</div></div>',
            'before_title'  => '<div class="panel-heading"><div class="panel-body">',
			'after_title'   => '</div>',
		)
	);
	
}
add_action( 'widgets_init', 'twentysixteen_widgets_init' );
