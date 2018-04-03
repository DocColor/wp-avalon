<?php
/**
 * Template part for single property page container
 *
 * @package Usability Dynamics, Inc.
 * @subpackage Avalon
 * @since Avalon 1.0
 */
global $wp_properties;
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('property-page-template'); ?>
         data-template="template-parts/content/content-property">
  <script type="text/javascript">
    var map;
    var marker;
    var infowindow;

    jQuery(document).ready(function () {

      if (typeof jQuery.fn.fancybox == 'function') {
        jQuery("a.fancybox_image, .gallery-item a").fancybox({
          'transitionIn': 'elastic',
          'transitionOut': 'elastic',
          'speedIn': 600,
          'speedOut': 200,
          'overlayShow': false
        });
      }

      if (typeof google == 'object') {
        initialize_this_map();
      } else {
        jQuery("#property_map").hide();
      }

    });


    function initialize_this_map() {
      <?php if ($coords = WPP_F::get_coordinates()): ?>
      var styles = [{
        "featureType": "landscape",
        "stylers": [{"hue": "#FFBB00"}, {"saturation": 43.400000000000006}, {"lightness": 37.599999999999994}, {"gamma": 1}]
      }, {
        "featureType": "road.highway",
        "stylers": [{"hue": "#FFC200"}, {"saturation": -61.8}, {"lightness": 45.599999999999994}, {"gamma": 1}]
      }, {
        "featureType": "road.arterial",
        "stylers": [{"hue": "#FF0300"}, {"saturation": -100}, {"lightness": 51.19999999999999}, {"gamma": 1}]
      }, {
        "featureType": "road.local",
        "stylers": [{"hue": "#FF0300"}, {"saturation": -100}, {"lightness": 52}, {"gamma": 1}]
      }, {
        "featureType": "water",
        "stylers": [{"hue": "#0078FF"}, {"saturation": -13.200000000000003}, {"lightness": 2.4000000000000057}, {"gamma": 1}]
      }, {
        "featureType": "poi",
        "stylers": [{"hue": "#00FF6A"}, {"saturation": -1.0989010989011234}, {"lightness": 11.200000000000017}, {"gamma": 1}]
      }];
      var myOptions = {
        zoom: <?php echo(!empty($wp_properties['configuration']['gm_zoom_level']) ? $wp_properties['configuration']['gm_zoom_level'] : 13); ?>,
        center: new google.maps.LatLng(<?php echo $coords['latitude']; ?>,<?php echo $coords['longitude']; ?>),
      };

      map = new google.maps.Map(document.getElementById("property_map"), myOptions);

      map.setOptions({styles: styles});

      infowindow = new google.maps.InfoWindow({
        content: '<?php echo WPP_F::google_maps_infobox($post); ?>',
        maxWidth: 500
      });

      marker = new google.maps.Marker({
        position: new google.maps.LatLng(<?php echo $coords['latitude']; ?>,<?php echo $coords['longitude']; ?>),
        map: map,
        title: '<?php echo addslashes($post->post_title); ?>',
        icon: '<?php echo apply_filters('wpp_supermap_marker', '', $post->ID); ?>'
      });

      google.maps.event.addListener(infowindow, 'domready', function () {
        document.getElementById('infowindow').parentNode.style.overflow = 'hidden';
        document.getElementById('infowindow').parentNode.parentNode.style.overflow = 'hidden';
      });

      setTimeout("infowindow.open(map,marker);", 1000);

      <?php endif; ?>
    }

  </script>


  <div class="property-page-container">

    <?php include_once get_template_directory() . '/template-parts/fcp-buttons.php'; ?>

    <div class="<?php wpp_css('property::entry_content', "entry-content"); ?>">

      <?php if (function_exists('ud_get_wpp_resp_slideshow')) : ?>
        <div class="<?php wpp_css('property::property_responsive_slideshow', "property_responsive_slideshow_box"); ?>">
          <?php echo do_shortcode('[property_responsive_slideshow slider_type=carousel]'); ?>
        </div>
      <?php elseif (has_post_thumbnail(get_the_ID())) : ?>
        <div class="<?php wpp_css('property::featured_image', "wpp_featured_image"); ?>">
          <a class="fancybox_image" rel="fancybox"
             href="<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>">
            <?php echo get_the_post_thumbnail(get_the_ID()); ?>
          </a>
        </div>
      <?php endif; ?>

      <div class="<?php wpp_css('property::the_content', "wpp_the_content"); ?>"><?php @the_content(); ?></div>

      <?php if (empty($wp_properties['property_groups']) || $wp_properties['configuration']['property_overview']['sort_stats_by_groups'] != 'true') : ?>
        <ul id="property_stats"
            class="<?php wpp_css('property::property_stats', "property_stats overview_stats list"); ?>">
          <?php @draw_stats("display=list&make_link=true&hide_false=true"); ?>
        </ul>
      <?php else: ?>
        <div id="property_stats_groups"
             class="<?php wpp_css('property::property_stats', "property_stats overview_stats groups"); ?>">
          <?php @draw_stats("sort_by_groups=true&display=list&make_link=true&hide_false=true"); ?>
        </div>
      <?php endif; ?>

      <?php if (is_array($wp_properties['property_meta'])): ?>
        <?php
        foreach ($wp_properties['property_meta'] as $meta_slug => $meta_title):
          if (empty($post->$meta_slug) || $meta_slug == 'tagline')
            continue;
          ?>
          <div class="property_meta_box">
            <h2><?php echo $meta_title; ?></h2>
            <div class="property_meta_box_content">
              <p><?php echo do_shortcode(html_entity_decode($post->$meta_slug)); ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>

      <?php if (!empty($wp_properties['taxonomies'])) : ?>
        <div class="feature_lists">
          <?php foreach ($wp_properties['taxonomies'] as $tax_slug => $tax_data): ?>
            <?php if (get_features("type={$tax_slug}&format=count")): ?>
              <div class="<?php echo $tax_slug; ?>_list">
                <h2><?php echo apply_filters('wpp::attribute::label', $tax_data['label']); ?></h2>
                <ul class="clearfix">
                  <?php get_features("type={$tax_slug}&format=list&links=true"); ?>
                </ul>
              </div>
            <?php endif; ?>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>

      <?php if (WPP_F::get_coordinates()): ?>
        <div id="property_map" class="<?php wpp_css('property::property_map'); ?>"
             style="width:100%; height:450px"></div>
      <?php endif; ?>

      <?php if ($post->post_parent): ?>
        <a href="<?php echo $post->parent_link; ?>"
           class="<?php wpp_css('btn', "btn btn-return"); ?>"><?php _e('Return to building page.', 'wp-avalon'); ?></a>
      <?php endif; ?>

    </div><!-- .entry-content -->
  </div><!-- .property-page-container -->


  <?php if ($wp_properties['configuration']['enable_comments'] != 'false') :
    comments_template();
  endif; ?>

</article>