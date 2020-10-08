<?php
/*
Template Name: Storelocator
*/
get_header(); ?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <section class="pages-section pages-general page-storelocator pt-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 page-content">
                        <h3 class="text-center">
                            <?php
                            if (function_exists('qtranxf_getLanguage')) {
                                if (qtranxf_getLanguage() == 'en') {
                                    echo "Find A Store";
                                } elseif (qtranxf_getLanguage() == 'tr') {
                                    echo "Mağaza Bulun";
                                } else {
                                    echo "Find A Store";
                                }
                            } else {
                                echo "Find A Store";
                            }
                            ?>
                        </h3>
                        <select name="country_select" id="country_select">
                            <option value="-1" selected>
                                <?php
                                if (function_exists('qtranxf_getLanguage')) {
                                    if (qtranxf_getLanguage() == 'en') {
                                        echo "Select County";
                                    } elseif (qtranxf_getLanguage() == 'tr') {
                                        echo "Ülke Seçiniz";
                                    } else {
                                        echo "Select County";
                                    }
                                } else {
                                    echo "Select County";
                                }
                                ?>
                            </option>
                            <?php
                            if (have_rows('stores_by_country')) :
                                $countryindex = 0;
                                while (have_rows('stores_by_country')) : the_row();
                                    $country_name = get_sub_field('country_name');
                                    echo '<option value="' . $countryindex . '">' . $country_name . '</option>';
                                    $countryindex++;
                                endwhile;
                            endif;
                            ?>
                        </select>
                        <ul class="nav nav-pills d-none" id="pills-tab" role="tablist">

                            <?php
                            if (have_rows('stores_by_country')) :
                                $countryindex = 0;
                                while (have_rows('stores_by_country')) : the_row();
                                    $country_name = get_sub_field('country_name');

                                    echo '<li class="nav-item"><a href="#country_' . $countryindex . '" id="pills-' . $countryindex . '-tab" role="tab" aria-controls="country_' . $countryindex . '" aria-selected="false" class="nav-link" data-toggle="pill">' . $country_name . '</a></li>';

                                    $countryindex++;
                                endwhile;
                            endif;
                            ?>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <?php
                            if (have_rows('stores_by_country')) :
                                $countryindex = 0;
                                while (have_rows('stores_by_country')) : the_row();
                                    $country_name = get_sub_field('country_name');

                                    echo '<div class="tab-pane fade" id="country_' . $countryindex . '"  role="tabpanel" aria-labelledby="pills-' . $countryindex . '-tab">';

                                    echo '<h4>' . $country_name . '</h4>';

                                    echo '<div class="stores">';

                                    if (have_rows('magazalar')) :
                                        $magazaindex = 0;
                                        while (have_rows('magazalar')) : the_row();

                                            $magaza_adi = get_sub_field('magaza_adi');
                                            $magaza_iletisim_bilgileri = get_sub_field('magaza_iletisim_bilgileri');

                                            echo '<div class="store-item">';
                                            echo '<h5>' . $magaza_adi . '</h5>';
                                            echo '<div class="store-info">';
                                            echo apply_filters('the_content', $magaza_iletisim_bilgileri);
                                            echo '</div>';
                                            echo '</div>';

                                            $magazaindex++;
                                        endwhile;

                                    endif;

                                    echo '</div>';

                                    echo '</div>';

                                    $countryindex++;
                                endwhile;
                            endif;
                            ?>
                            <script>
                                jQuery('#country_select').on('change', function(e) {
                                    $tabindx = jQuery(this).val();
                                    if ($tabindx != -1) {
                                        jQuery('#pills-tab li a').eq(jQuery(this).val()).tab('show');
                                    }

                                });
                            </script>
                        </div>

                    </div>
                    <div class="col-lg-8 d-flex align-items-center">

                        <?php
                        if (have_rows('stores_by_country')) :
                            echo '<div class="acf-map" data-zoom="16">';

                            $countryindex = 0;
                            while (have_rows('stores_by_country')) : the_row();
                                $country_name = get_sub_field('country_name');
                                if (have_rows('magazalar')) :
                                    $magazaindex = 0;
                                    while (have_rows('magazalar')) : the_row();

                                        $magaza_adi = get_sub_field('magaza_adi');
                                        $magaza_iletisim_bilgileri = get_sub_field('magaza_iletisim_bilgileri');
                                        $harita_konumu = get_sub_field('harita_konumu');
                        ?>

                                        <div class="marker" data-lat="<?php echo esc_attr($harita_konumu['lat']); ?>" data-lng="<?php echo esc_attr($harita_konumu['lng']); ?>">
                                            <h3><?php echo esc_html($magaza_adi); ?></h3>
                                            <p><em><?php echo $magaza_iletisim_bilgileri; ?></em></p>

                                        </div>

                        <?php

                                        $magazaindex++;
                                    endwhile;

                                endif;
                                $countryindex++;
                            endwhile;

                            echo '</div>';
                        endif;
                        ?>

                    </div>
                </div>
            </div>
        </section>
<?php endwhile;
endif; ?>


<script type="text/javascript">
    (function($) {
        function render_map($el) {

            var styleArray = [{
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#e9e9e9"
                }, {
                    "lightness": 17
                }]
            }, {
                "featureType": "landscape",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#f5f5f5"
                }, {
                    "lightness": 20
                }]
            }, {
                "featureType": "road.highway",
                "elementType": "geometry.fill",
                "stylers": [{
                    "color": "#ffffff"
                }, {
                    "lightness": 17
                }]
            }, {
                "featureType": "road.highway",
                "elementType": "geometry.stroke",
                "stylers": [{
                    "color": "#ffffff"
                }, {
                    "lightness": 29
                }, {
                    "weight": 0.2
                }]
            }, {
                "featureType": "road.arterial",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#ffffff"
                }, {
                    "lightness": 18
                }]
            }, {
                "featureType": "road.local",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#ffffff"
                }, {
                    "lightness": 16
                }]
            }, {
                "featureType": "poi",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#f5f5f5"
                }, {
                    "lightness": 21
                }]
            }, {
                "featureType": "poi.park",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#dedede"
                }, {
                    "lightness": 21
                }]
            }, {
                "elementType": "labels.text.stroke",
                "stylers": [{
                    "visibility": "on"
                }, {
                    "color": "#ffffff"
                }, {
                    "lightness": 16
                }]
            }, {
                "elementType": "labels.text.fill",
                "stylers": [{
                    "saturation": 36
                }, {
                    "color": "#333333"
                }, {
                    "lightness": 40
                }]
            }, {
                "elementType": "labels.icon",
                "stylers": [{
                    "visibility": "off"
                }]
            }, {
                "featureType": "transit",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#f2f2f2"
                }, {
                    "lightness": 19
                }]
            }, {
                "featureType": "administrative",
                "elementType": "geometry.fill",
                "stylers": [{
                    "color": "#fefefe"
                }, {
                    "lightness": 20
                }]
            }, {
                "featureType": "administrative",
                "elementType": "geometry.stroke",
                "stylers": [{
                    "color": "#fefefe"
                }, {
                    "lightness": 17
                }, {
                    "weight": 1.2
                }]
            }];
            var styledMap = new google.maps.StyledMapType(styleArray, {
                name: "Styled Map"
            });
            var mapZoomVal = 21;
            // var
            var $markers = $el.find('.marker');

            // vars
            var args = {
                zoom: mapZoomVal,
                center: new google.maps.LatLng(0, 0),
                zoomControl: true,
                scaleControl: true,
                scrollwheel: true,
                disableDoubleClickZoom: false,
                scrollwheel: false,
                disableDefaultUI: true,
                mapTypeControlOptions: {
                    mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
                }
            };
            // create map	        	
            var map = new google.maps.Map($el[0], args);
            map.mapTypes.set('map_style', styledMap);
            map.setMapTypeId('map_style');
            // add a markers reference
            map.markers = [];
            // add markers
            $markers.each(function() {
                add_marker($(this), map);
            });

            // Add a marker clusterer to manage the markers.
            var markerCluster = new MarkerClusterer(map, map.markers, {
                imagePath: '<?php bloginfo('template_url'); ?>/images/m'
            });

            // center map
            center_map(map);
        }
        /*
         *  add_marker
         */
        function add_marker($marker, map) {
            // var
            var latlng = new google.maps.LatLng($marker.attr('data-lat'), $marker.attr('data-lng'));
            var image = "<?php bloginfo('template_url'); ?>/images/pin.png";
            // create marker
            var marker = new google.maps.Marker({
                position: latlng,
                map: map,
                icon: image
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
            if (map.markers.length == 0) {
                map.setCenter(new google.maps.LatLng(49.45203, 11.07675));
                map.setZoom(mapZoomVal);
            } else if (map.markers.length === 1) {
                // set center of map
                map.setCenter(bounds.getCenter());
                map.setZoom(21);
            } else {
                // fit to bounds
                map.fitBounds(bounds);
            }
            google.maps.event.addDomListener(window, "resize", function() {
                google.maps.event.trigger(map, "resize");
                map.setCenter(bounds.getCenter());
            });
        }
        /*
         *  document ready
         */
        $(document).ready(function() {
            $('.acf-map').each(function() {
                render_map($(this));
            });
        });
    })(jQuery);
</script>
<script src="https://unpkg.com/@google/markerclustererplus@4.0.1/dist/markerclustererplus.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_GOOGLE_API_KEY"></script>

<?php get_footer(); ?>