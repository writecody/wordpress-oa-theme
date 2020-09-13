<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body>

<div class="container">

  <div class="parallelogram">
    <h1>artists</h1>
  </div>

  <?php if(have_posts()):
    
      while(have_posts()): the_post();
        
      $artist = 
      get_post_meta(get_the_ID(), 'Artist', true);

      ?>

      <div class="artist-list">
        <a class="artist-link" href="<?php the_permalink(); ?>">
          <?php echo $artist; ?>
        </a>
      </div>

      <?php endwhile;

    endif;

  ?>

  <?php get_footer(); ?>