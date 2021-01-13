<a class="categorycard flex-r wrap h-centered is-light border-5 p-1-xs p-2-s p-3-m mb-1-xs" href="<?php echo get_category_link( $category->term_id ) ?>">
  <div class="categorycard__logo flex-c h-centered">
    <img class="categorycard__logo_img" src="<?php bloginfo('template_url'); ?>/images/categories/<?php echo $category->name; ?>" alt="category logo"/>
  </div>
  <p class="uppercase bold is-7-xs is-6-m">
    <?php echo $category->name; ?>
  </p>
</a>
