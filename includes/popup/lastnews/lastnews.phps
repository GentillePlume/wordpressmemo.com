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
     Not post to display
   </p>

 <?php endif; ?>
