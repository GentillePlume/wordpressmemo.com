<a class="yachtcard border-5 shadow flex-c bg-center bg-cover has-overlay border-5 p-2-m bg-norepeat" style="background-image: url('<?php the_post_thumbnail_url(); ?>')" href="<?php the_permalink(); ?>">

  <div class="yachtcard__overlay is-overlay"></div>

  <!-- <div class="postcard__content p-2-xs p-2-m"> -->

    <p class="yachtcard__title uppercase is-6-xs is-4-l mt-10-xs is-white">
      <?php the_title(); ?>
    </p>

    <p class="yachtcard__slogan is-7-xs is-white uppercase">
      <?php the_field('yacht__slogan') ?>
    </p>

    <!-- <div class="postcard__excerpt is-7-xs mt-1-xs text-justify">
      <?php echo wp_trim_words(get_the_excerpt(), 15, '...'); ?>
    </div> -->

  <!-- </div> -->

  <!-- <a class="postcard__cta button is-bordered is-blue w-full is-small-xs mt-auto mb-2 mh-auto" href="<?php the_permalink(); ?>">More</a> -->

</a>
