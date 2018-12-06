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


<!--
<div class="scroller" style="position:absolute; border-radius:100%; top:30%; right:20%; height: 40px; width:40px; background-color: #FABCA2;"></div>
<div class="scroller" style="position:absolute; border-radius:100%; top:80%; right:70%; height: 80px; width:80px; background-color: #FABCA2;"></div>
<div class="scroller" style="position:absolute; border-radius:100%; top:90%; right:10%; height: 120px; width:120px; background-color: #FABCA2;"></div>
<div class="scroller" style="position:absolute; border-radius:100%; top:40%; right:50%; height: 40px; width:40px; background-color: #FABCA2;"></div>
<div class="scroller" style="position:absolute; border-radius:100%; top:30%; right:80%; height: 70px; width:70px; background-color: #FABCA2;"></div>
<div class="scroller" style="position:absolute; border-radius:100%; top:90%; right:30%; height: 40px; width:40px; background-color: #FABCA2;"></div>
<div class="scroller" style="position:absolute; border-radius:100%; top:70%; right:90%; height: 150px; width:150px; background-color: #FABCA2;"></div>
<div class="scroller" style="position:absolute; border-radius:100%; top:70%; right:10%; height: 40px; width:40px; background-color: #FABCA2;"></div>
<div class="scroller" style="position:absolute; border-radius:100%; top:60%; right:20%; height: 40px; width:40px; background-color: #FABCA2;"></div> 

<img class="scroller" style="position:absolute; top:50%; right:-5%; width: 500px;" src="<?php bloginfo('template_directory'); ?>/img/Flowers-and-leaves.png">
<img class="scroller" style="position:absolute; top:50%; left:-5%; width: 500px;" src="<?php bloginfo('template_directory'); ?>/img/Jacaranda-flowers.png"> -->

<img class="scroller" style="position:absolute; top:50%; right:5%; width: 400px;" src="<?php bloginfo('template_directory'); ?>/img/leaves.png">

<img class="scroller d-none d-md-block" style="position:absolute; top:20%; left:-5%; width: 350px;" src="<?php bloginfo('template_directory'); ?>/img/Lily.png">
<img class="scroller d-none d-md-block" style="position:absolute; top:70%; right:-5%; width: 300px;" src="<?php bloginfo('template_directory'); ?>/img/Peony.png">



<img class="scroller" style="position:absolute; top:30%; right:20%; width: 50px;" src="<?php bloginfo('template_directory'); ?>/img/Bee.png">
<img class="scroller" style="position:absolute; top:80%; right:80%; width: 50px;" src="<?php bloginfo('template_directory'); ?>/img/Bee2.png">
<img class="scroller" style="position:absolute; top:20%; right:60%; width: 50px;" src="<?php bloginfo('template_directory'); ?>/img/Bee3.png">


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

<script>
  window.addEventListener('scroll', () => {
   let parent = document.getElementById('sub-header');
   let children = document.getElementsByClassName('scroller');
   for(let i = 0; i < children.length; i++) {
     children[i].style.transform = 'translateY(-' + (window.pageYOffset * i / children.length) + 'px)';
   }
}, false)
</script>

<?php get_template_part( 'page-templates/blocks' ); ?>

<?php get_footer();
