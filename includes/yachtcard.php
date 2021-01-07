<a class="yachtcard border-5 shadow flex-c bg-center bg-cover has-overlay border-5 p-2-m bg-norepeat" style="background-image: url('<?php the_post_thumbnail_url(); ?>')" href="<?php the_permalink(); ?>">

  <div class="yachtcard__overlay is-overlay"></div>

    <p class="yachtcard__title uppercase is-6-xs is-4-l mt-10-xs is-white">
      <?php the_title(); ?>
    </p>

    <p class="yachtcard__slogan is-7-xs is-white uppercase">
      <?php the_field('yacht__slogan') ?>
    </p>

</a>
