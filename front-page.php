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

        <div class="introduction__content w-half-m text-justify is-7-xs is-6-m">
          This website is a WordPress theme with usual code pieces for display and get usual things.
          To show the code of elements, click on the orange button, or hover your mouse.
          <br />
          For a better content management, ACF <i>(Advanced Custom Fields)</i> is used.
        </div>

        <div class="introduction__illustration content-centered w-half-m mt-3-xs mt-0-m">
          <img class="introduction__illustration_img border-5" src="<?php bloginfo('template_url'); ?>/images/front-page/introduction.gif" alt="illustration"/>
        </div>

      </div>

    </section>

    <section class="section news">

      <div class="container flex-c">

        <h2 class="section__title">Last posts</h2>
        <p class="section__subtitle">This section get the last 4 posts</p>

        <div class="news__list flex-r wrap">

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

        <div class="buttons">
          <button class="button is-blue is-bordered">Blog page</button>
          <button class="button is-orange is-bordered" onclick="popupSwitch('lastnews')">Get 4 last post</button>
          <button class="button is-orange is-bordered" onclick="popupSwitch('postcard')">Show post card</button>
        </div>

      </div>

      <?php include get_template_directory() . '/includes/popup/lastnews/lastnews.php'; ?>
      <?php include get_template_directory() . '/includes/popup/postcard/postcard.php'; ?>

    </section>

    <section class="section yachts">

      <div class="container flex-c">

        <h2 class="section__title nomb">Last yachts</h2>
        <p class="section__subtitle">This section get the last 4 yacht posts (Custom Post Type)</p>

        <div class="yachts__list flex-r wrap">

          <?php
           $args = array(
               'post_type' => 'yacht',
               'posts_per_page' => 4,
               'orderby' => 'menu_order',
               'order' => 'ASC',
           );
          ?>

          <?php $the_query = new WP_Query($args); ?>

         <?php if ($the_query->have_posts()) : ?>
             <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

               <?php include( 'includes/yachtcard.php' ); ?>

             <?php endwhile; ?>
           <?php else : ?>

             <p>
               empty
             </p>

           <?php endif; ?>

        </div>

        <div class="buttons">
          <a class="button is-blue is-bordered" href="<?php bloginfo('url'); ?>/yachts">All the yachts</a>
          <button class="button is-orange is-bordered" onclick="popupSwitch('lastyachts')">Get 4 last CPT</button>
          <button class="button is-orange is-bordered" onclick="popupSwitch('yachtcard')">Show yacht card</button>
        </div>

      </div>

      <?php include get_template_directory() . '/includes/popup/lastyachts/lastyachts.php'; ?>
      <?php include get_template_directory() . '/includes/popup/yachtcard/yachtcard.php'; ?>

    </section>

    <section class="section startertheme is-blue">

      <div class="container flex-r wrap space-between h-centered">

        <div class="startertheme__content">
          <h2 class="section__title is-white nomb">WordPress Starter theme</h2>
          <p class="section__subtitle is-white nomb">Get the WordPress Starter theme to begin develop your own theme without wasting time.</p>
        </div>

          <a class="startertheme__cta button is-white is-large has-icon" href="https://github.com/GentillePlume/WordPress-starter-theme" target="_blank">
            <span class="icon">
              <i class="fab fa-github"></i>
            </span>
            Get it
          </a>

      </div>

    </section>

    <section class="section contribute">

      <div class="container">

        <h2 class="section__title">Contribute</h2>
        <!-- <p class="section__subtitle">Get the WordPress Starter theme to begin develop your own theme without wasting time.</p> -->

        <div class="contribute__content is-7-xs is-6-m w-full-xs w-half-m">

          <div class="contribute__content_stats flex-r wrap mb-1-xs">
            <img class="contribute__content_stats_stat" src="https://img.shields.io/github/last-commit/GentillePlume/wordpressmemo.com?style=for-the-badge" alt="github repository stat"/>
            <img class="contribute__content_stats_stat" src="https://img.shields.io/github/contributors/GentillePlume/wordpressmemo.com?style=for-the-badge" alt="github repository stat"/>
          </div>

          WordPress Memo is a collaborative project developed for help WordPress developers to work faster. If you want to add or modify site content, just go on github voilà.
        </div>

        <div class="contribute__contributors w-full-xs w-half-m">

        </div>

      </div>

    </section>


  </main>

<?php get_footer() ?>
