<?php 

  function art_load_scripts() {
    wp_enqueue_style('css-output', get_template_directory_uri().'/output.css');
    wp_enqueue_style('google-font', '//fonts.googleapis.com/css2?family=Amiri:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet"');
    wp_enqueue_script('//cdnjs.cloudflare.com/ajax/libs/rellax/1.12.1/rellax.min.js" integrity="sha512-f5HTYZYTDZelxS7LEQYv8ppMHTZ6JJWglzeQmr0CVTS70vJgaJiIO15ALqI7bhsracojbXkezUIL+35UXwwGrQ==');
  }
  add_action('wp_enqueue_scripts', 'art_load_scripts');

  function art_add_theme_support() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5');

    // do not display admin bar in browser window
    show_admin_bar(false);
  }
  add_action('init', 'art_add_theme_support');

  function art_add_sidebar() {
    register_sidebar(array(
      'name' => 'Categories Sidebar',
      'id' => 'categories-sidebar',
      'class' => 'custom',
      'description' => 'Categories Sidebar',
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget' => '</aside>',
      'before_title' => '<h3>',
      'after_title' => '</h3>',
    ));
  }
  add_action('widgets_init', 'art_add_sidebar');
  
?>