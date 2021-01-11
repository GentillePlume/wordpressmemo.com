<article class="postcard border-5 shadow flex-c">

  <div class="postcard__thumbnail bg-center bg-cover border-5" style="background-image: url('<?php the_post_thumbnail_url(); ?>')"></div>

  <div class="postcard__content p-2-xs p-2-m">

    <p class="postcard__title bold is-6-xs">
      <?php the_title(); ?>
    </p>

    <div class="postcard__categories flex-r wrap mt-1-xs">

      <?php foreach((get_the_category()) as $category) : ?>

        <a class="button is-light is-small is-bordered" href="<?php echo get_category_link($category->term_id) ?>">
          <?php echo $category->name; ?>
        </a>

      <?php endforeach; ?>

    </div>

    <div class="postcard__excerpt is-7-xs mt-1-xs text-justify">
      <?php echo wp_trim_words(get_the_excerpt(), 15, '...'); ?>
    </div>

  </div>

  <a class="postcard__cta button is-bordered is-blue w-full is-small-xs mt-auto mb-2 mh-auto" href="<?php the_permalink(); ?>">More</a>

</article>
