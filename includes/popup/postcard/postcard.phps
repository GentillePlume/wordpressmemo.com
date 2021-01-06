<article class="postcard border-5 shadow">

  <div class="postcard__thumbnail bg-center bg-cover border-5" style="background-image: url('<?php the_post_thumbnail_url(); ?>')"></div>

  <div class="postcard__content p-2-xs p-2-m">

    <p class="postcard__title bold is-6-xs">
      <?php the_title(); ?>
    </p>

    <div class="postcard__excerpt is-7-xs mt-1-xs text-justify">
      <?php the_excerpt(); ?>
    </div>

    <a class="button is-bordered is-blue w-full is-small-xs mt-3-xs" href="<?php the_permalink(); ?>">More</a>

  </div>

</article>
