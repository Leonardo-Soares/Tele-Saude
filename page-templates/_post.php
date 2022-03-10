<div id="page-post" class="page-content">
  <header>
    <?php
      if ( get_the_post_thumbnail_url() != '' ) :
    ?>
    <div class="post-banner">
      <div class="__image rellax" data-rellax-speed="-8" data-rellax-percentage="0.59">
        <img src="<?= get_the_post_thumbnail_url(); ?>" alt="">
      </div>
    </div>

    <?php
      else :
    ?>

    <div class="post-banner --sm">
      <div class="__image rellax" data-rellax-speed="-8" data-rellax-percentage="0.595">
        <img src="<?= catch_that_image(); ?>" alt="">
      </div>
    </div>

    <?php
      endif;
    ?>
  </header>

  <main>
    <div class="row g-0">
      <div class="col-12 col-lg-10 col-xl-8 col-xxl-6 offset-lg-1 offset-xl-2 offset-xxl-3 px-4 px-sm-5 px-lg-0">
        <div class="block">
          <nav class="breadcrumbs">
            <ul>
              <li>
                <a href="#">
                  Início
                </a>
              </li>

              <li>
                <a href="#">
                  Notícias
                </a>
              </li>

              <li title="<?= get_the_title(); ?>">
                <?= get_the_title(); ?>
              </li>
            </ul>
          </nav><!-- .breadcrumbs -->
        </div><!-- .block -->

        <article>
          <h1>
            <?= get_the_title(); ?>
          </h1>

          <div class="__meta">
            <div>
              Por Instituto Peabiru
            </div>

            <div>
              Publicado em 14/12/2021
            </div>
          </div>

          <?php the_content(); ?>

          <div class="text-center fw-bold">
            ***
          </div>
        </article>




        <?php
          // Posts relacionados
          include_once( _DIR .'/inc/related-posts.php' );
        ?>
      </div>




      <?php
        // Comentários
        include_once( _DIR .'/inc/comments.php' );
      ?>
    </div>
  </main>
  </main><!-- #main -->