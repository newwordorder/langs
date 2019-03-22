<?php // GALLERY
if( get_row_layout() == 'gallery' ):
    $spaceBelow = get_sub_field('gallery_space_below'); ?>
    <div class="container-fluid text-center space-below--<?php echo $spaceBelow ?>">
        <div class="row justify-content-center">
            <div class="col p-0">
                <div class="slider gallery_slider" data-paging="false" data-autoplay="true" data-arrows="true" data-dots="false" data-timing="2000">
                    <ul class="slides">
                    <?php while( have_rows('gallery_slides') ): the_row();
                    $image = get_sub_field('image');
                    ?>
                        <li>
                            <div class="gallery_image">
                                <div class="background-image-holder">
                                    <img src="<?php echo $image['url']; ?>" />
                                </div>
                            </div>
                        </li>
                    <?php endwhile; ?>
                    </ul>
                </div>
            </div>
        </div>
        <!--end of row-->
    </div>
<?php endif;
?>