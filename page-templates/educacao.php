<?php
  /**
   * Template Name: Educação
   */

  get_header();
?>

<main style="margin-top: 30px;">
  <div class="container">
    <h1>
      <?= get_the_title(); ?>
    </h1>

    <?php the_content(); ?>

    <div class="text-center mt-2 mb-2">
      <a href=""> <button class="btn btn-primary"> Acessar Cursos </button></a>
    </div>
  </div>
</main>

<?php
  get_footer();
?>