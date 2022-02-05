<?php 
  /**
   * Template Name: Home template
   * Template Post Type: page
   */
  get_header('wp-content/themes/assignmentone/header-template.php');
?>

<main>
  <?php 
    // if(have_posts()):
    //   while(have_posts()):
    //     the_post();
    //     the_content();
    //   endwhile;
    //  wp_reset_query();
  ?>
  <section class="masthead row" style="background-image: url('<?php the_field('masthead_image'); ?>')">
      <div>
        <h1><?php the_field('masthead_title');?></h1>
        <h2><?php the_field('masthead_sub-heading');?></h1>
      </div>
</section>
      <section class="row-one row">
        <div class="col-sm-12 col-md-6 col-lg-6">
          <h3><?php the_field('title') ?></h3>
          <h3><?php the_field('title') ?></h3>
          <?php the_field('text_content_row_one') ?>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-6">
          <img src="<?php the_field('row_one_image');?>" alt="sample image">
        </div>
      </section>
      <section class="row row-two">
        <section class="row row-three">
          <?php the_field('add_the_form') ?>
        </section>
      </section>
      <section class="row row-four">
        <?php
          $args = array(
            'post_type' => 'post',
            'posts_per_page' => 3,
            'post_status' => 'publish',
            'category_name' => 'test'
          );

          $args_posts = new WP_Query($args);
          if($args_posts->have_posts()):
            while($args_posts->have_posts()):
              $args_posts->the_post();
        ?>

        <article class="col-sm-12 col-md-4 col-lg-4" id="post-<?php the_ID();?>" <?php post_class();?>>
              <?php 
                if(has_post_thumbnail()):
                  the_post_thumbnail('');
                endif;
              ?>
              <header class="entry-header">
                <h3><?php the_title(); ?></h3>
              </header>
              <div class="entry-content">
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>">ReadMore</a>
              </div>
      </article>

      <?php 
        endwhile;
      endif;
      ?>
      </section>
</main>
<div>
  <div>

<?php get_footer(); ?>