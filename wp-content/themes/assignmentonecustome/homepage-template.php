<?php
  get_header();
?>
  <div class="container">
  <?php 
    if(have_post()):
      while(have_posts()):
        the_post();
        the_content();
      endwhile;
    else:
      echo '<p>No content found</p>';
      endif;
  ?>
  </div>

<?php 
  get_footer();
?>