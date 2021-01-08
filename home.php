<?php get_header(); ?>

<header class="header">

  <div class="container">

    <p class="header__beforetitle">
      this is the
    </p>

    <h1 class="header__title" aria-label="<?php echo "<?php single_post_title(); ?>" ?>" data-balloon-pos="up">Blog page</h1>

    <p class="header__aftertitle">
      home.php used to display all posts
    </p>

  </div>

</header>

<main>
  <section class="section categories">

    <div class="container flex-r wrap">

      <h2 class="section__title nomb">By categories</h2>
      <p class="section__subtitle">This section get all the categories</p>

      <div class="categories__list flex-r wrap w-full">

        <?php
        $categories = get_categories( array(
          'orderby' => 'name',
          'parent'  => 0
        ) );

        foreach ( $categories as $category ) {

          if ($category->name == 'Non classé'){

          } else{
            include( 'includes/categorycard.php' );
          }

        }
        ?>

      </div>

      <div class="buttons flex-r v-centered mt-3-xs w-full">
        <!-- <button class="button is-blue is-bordered mr-3-xs">Blog page</button> -->
        <button class="button is-orange is-bordered mr-3-xs" onclick="popupSwitch('categories')">Get categories</button>
        <button class="button is-orange is-bordered mr-3-xs" onclick="popupSwitch('categorycard')">Show category card</button>
      </div>

      <?php include get_template_directory() . '/includes/popup/categories/categories.php'; ?>
      <?php include get_template_directory() . '/includes/popup/categorycard/categorycard.php'; ?>

    </div>

  </section>

  <section class="section posts">

    <div class="container flex-r wrap">

      <h2 class="section__title nomb">All posts</h2>
      <p class="section__subtitle">This section get all posts by date</p>

      <div class="posts__list flex-r wrap w-full">

        <?php if(have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>

              <?php include( 'includes/postcard.php' ); ?>

            <?php endwhile; ?>
        <?php endif; ?>

      </div>



    </div>

  </section>

</main>



<?php get_footer(); ?>
