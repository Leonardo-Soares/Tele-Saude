<?php
  /**
   * Template Name: Consultoria
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
    <div class="text-center mt-2 mb-2">
      <a href=""> <button class="btn btn-primary"> Acessar Consultorias </button></a>
    </div>
  </div>
</main>

<?php
  get_footer();
?>