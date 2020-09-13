<?php get_header(); ?>

  <?php if(have_posts()):
  
    while(have_posts()): the_post();
    
      $artist = 
      get_post_meta(get_the_ID(), 'Artist', true);

      $size = get_post_meta(get_the_ID(), 'Size', true);

      $price = get_post_meta(get_the_ID(), 'Price', true);
  
      ?>

      <a href="<?php the_permalink(); ?>" class="link-to-info">
        <img><?php the_post_thumbnail(); ?></img>
        <h2><?php the_title(); ?></h2>
      </a>

      <div class="work-info">
        <p><?php echo $size; ?></p>
        <p><?php echo $artist; ?></p>
        <p><?php echo $price; ?></p>
      </div>

      <!-- <a class="buy-button" href="http://art.local/?asp_action=show_pp&product_id=23">BUY</a> -->
    
    <?php endwhile; ?>

    <div class="pagination">
      <span><?php previous_posts_link('Previous'); ?></span>
      <span><?php next_posts_link('Next'); ?></span>
    </div>

  <?php endif;

?>

<?php get_footer(); ?>