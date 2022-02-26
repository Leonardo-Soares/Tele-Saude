<?php
  /**
   * Template Name: Informativos
   */

  get_header();
?>

<main style="margin-top: 30px;">
  <div class="container">
    <h1>
      <?= get_the_title(); ?>
    </h1>

    <br>
    <?php the_content(); ?>
  </div>
</main>

<?php
  get_footer();
?>