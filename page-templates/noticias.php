<?php
  /**
   * Template Name: Notícias
   */

  get_header();
?>

<main id="noticais" style="margin-top: 30px;">
  <div class="container">
    <h1>
      <?= get_the_title(); ?>
    </h1>

    <?php 
    // the query
    $the_query = new WP_Query( array(
      'category_name' => 'Notícias',
      'posts_per_page' => 3,
    )); 
    ?>



<div class="row row-cols-1 row-cols-md-2 g-4">
  <?php if ( $the_query->have_posts() ) : ?>
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <div class="col-lg-4">
      <div class="card" style="max-width: 300px">
        <a href="<?= get_the_permalink(); ?>" title="<?= get_the_title(); ?>" class="d-flex justify-content-center" style="height: 200px;">
          <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo the_title(); ?>"  class="card-img-top">
        </a>
        <div class="card-body p-0">
          <h5 class="card-title pt-2">
          <a style="color: black !important;" href="<?= get_the_permalink(); ?>">
            <?php the_title(); ?>
          </a>
          </h5>

          <?php the_excerpt(); ?>
          
        </div>
      </div>
    </div>


    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>

  <?php else : ?>
    <p><?php __('No News'); ?></p>
  <?php endif; ?>



  </div>
</main>

<?php
  get_footer();
?>