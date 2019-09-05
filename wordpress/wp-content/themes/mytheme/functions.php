<?php
  add_theme_support('post-thumbnails');
  add_theme_support('menus');

  register_sidebar(
    array(
        'before_widget' => '<div class="widget>',
        'after_widget' =>  '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
      )
  );

  function new_excerpt_more($more) {
	return '';
  }
  add_filter('excerpt_more', 'new_excerpt_more');
