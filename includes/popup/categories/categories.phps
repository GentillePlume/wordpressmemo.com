<?php
$categories = get_categories( array(
  'orderby' => 'name',
  'parent'  => 0
) );

foreach ( $categories as $category ) {

  if ($category->name == 'Non classé'){

  } else{
    include( 'includes/categorycard.php' );
  }

}
?>
