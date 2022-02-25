<?php
  /**
   * Template Name: Tele-Educação
   */

  get_header();
?>

<main style="margin-top: 30px;">
  <div class="container">
    <h1>
      <?= get_the_title(); ?>
    </h1>

    <?php the_content(); ?>
  </div>
</main>

<?php
  get_footer();
?>