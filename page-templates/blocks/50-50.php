<?php // 50 50 SPLIT BLOCK

if( get_row_layout() == '50_50' ):

$text = get_sub_field('text_block');
$image = get_sub_field('image');
$flipLayout = get_sub_field('flip_layout');


?>

<div class="imageblock switchable <?php if( !($flipLayout) == 'yes' ): echo 'switchable--switch'; endif; ?>">

  <div class="imageblock__content col-md-6 pos-right">
      <div class="background-image-holder">
        <?php

        if( !empty($image) ):

          // vars
          $url = $image['url'];
          $alt = $image['alt'];

         ?>
        <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>"/>
        <?php endif; ?>
      </div>
  </div>
  <div class="container  space--<?php echo $space ?>">
      <div class="row <?php if( $flipLayout == 'yes' ): echo 'justify-content-end'; endif; ?>">
          <div class="col-md-5">
              <?php echo $text ?>
              <?php get_template_part( 'page-templates/blocks/block-partials/buttons' ); ?>
          </div>
      </div>
  </div>
</div>

<?php endif;

?>
