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
