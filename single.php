<?php get_header() ?>

<header class="header">

  <div class="container">

    <p class="header__beforetitle">
      this is the
    </p>

    <h1 class="header__title" data-balloon-pos="up">Post page</h1>

    <p class="header__aftertitle">
      single.php used to display all posts of a specific category
    </p>

  </div>

</header>

<main class="container flex-r wrap mt-10-xs">

  <div class="post w-80">

    <div class="post__thumbnail bg-cover bg-center has-overlay flex-c v-start h-end p-2-xs p-3-l mb-3-xs" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
      <div class="is-overlay post__thumbnail_overlay"></div>

      <h2 class="bold is-4-xl is-white" aria-label="<?php echo "<?php the_title() ?>" ?>" data-balloon-pos="up"><?php the_title() ?></h2>

      <p class="is-white is-7-xs" aria-label="<?php echo "<?php get_the_date() ?>" ?>" data-balloon-pos="up">
        <?php echo get_the_date() ?>
      </p>

      <div class="post__thumbnail_categories flex-r wrap mt-1-xs">

        <?php foreach((get_the_category()) as $category) : ?>

          <a class="button is-light is-small is-bordered" href="<?php echo get_category_link($category->term_id) ?>">
            <?php echo $category->name; ?>
          </a>

        <?php endforeach; ?>

      </div>

    </div>

    <div class="bold mb-3-xs" aria-label="<?php echo "<?php the_excerpt() ?>" ?>" data-balloon-pos="up">
      <?php the_excerpt() ?>
    </div>

    <div class="is-7-xs is-6-xl text-justify" aria-label="<?php echo "<?php the_content() ?>" ?>" data-balloon-pos="up">
      <?php the_content() ?>
    </div>

    <div class="post__author is-blue mt-3-xs p-1-xs p-3-s border-10 flex-r h-centered">

      <div class="post__author_image bg-cover bg-center bordermax mr-2-xs" style="background-image: url('<?php echo get_avatar_url(get_the_author_ID()); ?>')" aria-label="<?php echo "<?php echo get_avatar_url( get_the_author_ID() ) ?>" ?>" data-balloon-pos="up"></div>

        <div class="post__author_informations flex-c">
          <p class="post__author_informations_name is-white is-7-xs is-6-s bold" aria-label="<?php echo "<?php the_author() ?>" ?>" data-balloon-pos="up"><?php the_author() ?></p>
          <p class="post__author_informations_description is-white is-7-xs is-7-s" aria-label="<?php echo "<?php echo get_the_author_meta( 'user_description' ) ?>" ?>" data-balloon-pos="up"><?php echo get_the_author_meta( 'user_description' ) ?></p>
        </div>

      </div>

  </div>


  <aside class="w-20">

    <?php get_sidebar( 'primary' ); ?>

  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-1') ) : ?>
  <?php endif; ?>


  </aside>

</main>




<?php get_footer() ?>
