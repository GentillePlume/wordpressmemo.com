<?php get_header() ?>

  <header class="header">

    <div class="container">

      <p class="header__beforetitle">
        welcome on
      </p>

      <h1 class="header__title" aria-label="<?php echo "<?php echo get_bloginfo('name'); ?>" ?>" data-balloon-pos="up"><?php echo get_bloginfo( 'name' ); ?></h1>

      <p class="header__aftertitle">
        All this site was made with WordPress using the usual code.
      </p>

    </div>

  </header>

  <main>

    <section class="section introduction">

      <div class="container flex-r h-centered wrap">

        <h2 class="section__title">Introduction</h2>

        <div class="introduction__content w-half-m text-justify">
          This website is a WordPress theme with usual code pieces for display and get usual things.
          To show the code of elements, click on the orange button, or hover your mouse.
          <br />
          For a better content management, ACF <i>(Advanced Custom Fields)</i> is used.
        </div>

        <div class="introduction__illustration content-centered w-half-m">
          <img class="introduction__illustration_img border-5" src="<?php bloginfo('template_url'); ?>/images/front-page/introduction.gif" alt="illustration"/>
        </div>

      </div>

    </section>

    <section class="section news">

      <div class="container flex-c">

        <h2 class="section__title">Last news</h2>
        <p class="section__subtitle">This section get the last 4 posts</p>

        <div class="news__list flex-r">

          <?php
           $args = array(
               'post_type' => 'post',
               'posts_per_page' => 4,
               'orderby' => 'date',
               'order' => 'DESC',
           );
          ?>

          <?php $the_query = new WP_Query($args); ?>

         <?php if ($the_query->have_posts()) : ?>
             <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

               <?php include( 'includes/postcard.php' ); ?>

             <?php endwhile; ?>
           <?php else : ?>

             <p>
               empty
             </p>

           <?php endif; ?>

        </div>

        <div class="buttons flex-r v-centered mt-3-xs">
          <button class="button is-blue is-bordered mr-3-xs">Blog page</button>
          <button class="button is-orange is-bordered mr-3-xs" onclick="popupSwitch('lastnews')">Get 4 last post code</button>
          <button class="button is-orange is-bordered mr-3-xs" onclick="popupSwitch('postcard')">Post card code</button>
        </div>

      </div>

      <?php include get_template_directory() . '/includes/popup/lastnews/lastnews.php'; ?>
      <?php include get_template_directory() . '/includes/popup/postcard/postcard.php'; ?>

    </section>


  </main>

<?php get_footer() ?>
