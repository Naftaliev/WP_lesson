<?php
   add_action( 'wp_enqueue_scripts', 'style_theme');
   add_action( 'wp_footer', 'scripts_theme');

   function style_theme() {
      wp_enqueue_style( 'style', get_stylesheet_uri() );
      wp_enqueue_style( 'script1', get_template_directory_uri() . '/assets/css/default.css',  );
      wp_enqueue_style( 'script2', get_template_directory_uri() . '/assets/css/layout.css',  );
      wp_enqueue_style( 'script3', get_template_directory_uri() . '/assets/css/media-queries.css',  );
   }

   function scripts_theme() {
      wp_enqueue_script( 'init', get_template_directory_uri() . '/assets/js/init.js', );
      wp_enqueue_script( 'init', get_template_directory_uri() . '/assets/js/doubletaptogo.js', );
      wp_enqueue_script( 'init', get_template_directory_uri() . '/assets/js/jquery.flexslider.js', );
   }
