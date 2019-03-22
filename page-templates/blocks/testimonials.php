<?php // TESTIMONIALS
if( get_row_layout() == 'testimonials' ):
    $spaceBelow = get_sub_field('testimonials_space_below'); ?>
    <div class="container text-center space-below--<?php echo $spaceBelow ?>">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="slider" data-paging="false" data-autoplay="true" data-arrows="true" data-dots="false" data-timing="4000">
                    <ul class="slides">
                    <?php while( have_rows('testimonials_slides') ): the_row();
                    $text = get_sub_field('text');
                    ?>
                        <li>
                            <div class="testimonial">
                                <?php echo $text; ?>
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