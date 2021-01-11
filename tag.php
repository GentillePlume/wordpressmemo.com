<?php get_header(); ?>

<header class="header">

  <div class="container">

    <p class="header__beforetitle">
      this is the
    </p>

    <h1 class="header__title" aria-label="<?php echo "<?php single_cat_title(); ?>" ?>" data-balloon-pos="up"><?php single_tag_title(); ?> category page</h1>

    <p class="header__aftertitle">
      category.php used to display all posts of a specific category
    </p>

  </div>

</header>

<main class="container">

  <section class="section last">

    <h2 class="section__title nomb">Last category post</h2>
    <p class="section__subtitle">This section get last posts of <?php single_tag_title(); ?> category</p>

    <div class="last__list flex-r wrap">
      <?php if(have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

          <?php include( 'includes/postcard.php' ); ?>

      <?php endwhile; ?>
      <?php endif; ?>
    </div>

  </section>

</main>


<?php get_footer(); ?>
