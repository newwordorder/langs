<?php
/**
* Template Name: Home
*
* @package understrap
*/

get_header();

?>

<?php 

$backgroundImage = get_field('background_image');

$image = $backgroundImage['background_image'];
$imageOverlay = $backgroundImage['image_overlay'];
$backgroundEffect = $backgroundImage['background_effect'];

$introText = get_field('intro_text');
$hidePageTitle = get_field('hide_page_title');

?>

<section id="sub-header" class="parallax-container page-header page-header--home bg-effect--<?php echo $backgroundEffect ?> imagebg videobg" data-overlay="5" >



  <?php if( !empty($image) ):

    // vars
    $url = $image['url'];
    $alt = $image['alt'];

  ?>
    <div class="background-image-holder">
      <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>"/>
    </div>
  <?php endif; ?>

<div class="container pos-vertical-center"  style="z-index:1020;">
  <div class="row justify-content-center">
    <div class="col-md-10 text-center">

      <h1 class="h6  <?php if( $hidePageTitle == 'yes' ): echo 'd-none'; endif; ?>"><?php the_title(); ?></h1>
      <?php if ($introText): ?>
        <h1 class="page-title page-title--home"><?php echo $introText; ?></h1>
      <?php endif; ?>
    </div>
  </div>
</div>



</section>


<?php get_template_part( 'page-templates/blocks' ); ?>

<?php get_footer();
