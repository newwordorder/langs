<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

?>




<footer id="footer" class="footer">
    <div class="container">

        <div class="row align-items-center">
            <div class="col-sm-8">
                <p>Copyright © <?php echo date("Y"); ?> Langs Building Supplies | All Rights Reserved</p>
                <p> <a href="<?php echo get_home_url(); ?>/privacy-policy">Privacy Policy</a> | <a href="http://newwordorder.com.au">Site by NWO</a></p>
            </div>

            <div class="col-sm-4">
                <?php wp_nav_menu(
					array(
						'theme_location'  => 'footer-social',
						'container_class' => 'footer-nav footer-nav__social',
						'container_id'    => '',
						'menu_class'      => 'menu',
						'fallback_cb'     => '',
						'menu_id'         => 'footer__social',
						'walker'          => new understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>
            </div>

        </div>

</footer>


<div class="search-form ">
    <span class="search-close">
        <i class="fas fa-times"></i>
    </span>
    <?php get_template_part('searchform'); ?>
</div>

<script>
    (function($) {
        $(".toggle-menu").click(function() {
            $(".toggle-menu,.header-nav").toggleClass("is-active");
        });
    })(jQuery);

    (function($) {
        $(".btn--search a").click(function() {
            $(".search-form").toggleClass("is-open");
        });

    })(jQuery);

    (function($) {
        $(".search-close").click(function() {
            $(".search-form").removeClass("is-open");
        });
    })(jQuery);
</script>


<?php wp_footer(); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/header.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/flickity.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/fontawesome-all.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/parallax.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/typed.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/smooth-scroll.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/ytplayer.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/aos.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAfQw_B2-JIqFPBhRE0-_-mtFhdXOqp4kk&callback=initMap" type="text/javascript"></script>

<script>
    AOS.init();
</script>

<script type="text/javascript">
    (function($) {

        /*
         *  new_map
         *
         *  This function will render a Google Map onto the selected jQuery element
         *
         *  @type	function
         *  @date	8/11/2013
         *  @since	4.3.0
         *
         *  @param	$el (jQuery element)
         *  @return	n/a
         */

        function new_map($el) {

            // var
            var $markers = $el.find('.marker');


            // vars
            var args = {
                zoom: 4,
                center: new google.maps.LatLng(0, 0),
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                disableDefaultUI: true
            };


            // create map	        	
            var map = new google.maps.Map($el[0], args);


            // add a markers reference
            map.markers = [];


            // add markers
            $markers.each(function() {

                add_marker($(this), map);

            });


            // center map
            center_map(map);


            // return
            return map;

        }

        /*
         *  add_marker
         *
         *  This function will add a marker to the selected Google Map
         *
         *  @type	function
         *  @date	8/11/2013
         *  @since	4.3.0
         *
         *  @param	$marker (jQuery element)
         *  @param	map (Google Map object)
         *  @return	n/a
         */

        function add_marker($marker, map) {

            // var
            var latlng = new google.maps.LatLng($marker.attr('data-lat'), $marker.attr('data-lng'));

            // create marker
            var marker = new google.maps.Marker({
                position: latlng,
                map: map
            });

            // add to array
            map.markers.push(marker);

            // if marker contains HTML, add it to an infoWindow
            if ($marker.html()) {
                // create info window
                var infowindow = new google.maps.InfoWindow({
                    content: $marker.html()
                });

                // show info window when marker is clicked
                google.maps.event.addListener(marker, 'click', function() {

                    infowindow.open(map, marker);

                });
            }

        }

        /*
         *  center_map
         *
         *  This function will center the map, showing all markers attached to this map
         *
         *  @type	function
         *  @date	8/11/2013
         *  @since	4.3.0
         *
         *  @param	map (Google Map object)
         *  @return	n/a
         */

        function center_map(map) {

            // vars
            var bounds = new google.maps.LatLngBounds();

            // loop through all markers and create bounds
            $.each(map.markers, function(i, marker) {

                var latlng = new google.maps.LatLng(marker.position.lat(), marker.position.lng());

                bounds.extend(latlng);

            });

            // only 1 marker?
            if (map.markers.length == 1) {
                // set center of map
                map.setCenter(bounds.getCenter());
                map.setZoom(14);
            } else {
                // fit to bounds
                map.fitBounds(bounds);
            }

        }

        /*
         *  document ready
         *
         *  This function will render each map when the document is ready (page has loaded)
         *
         *  @type	function
         *  @date	8/11/2013
         *  @since	5.0.0
         *
         *  @param	n/a
         *  @return	n/a
         */
        // global var
        var map = null;

        $(document).ready(function() {

            $('.acf-map').each(function() {

                // create map
                map = new_map($(this));

            });

        });

    })(jQuery);
</script>

</body>

</html> 