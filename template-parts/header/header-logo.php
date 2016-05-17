<?php
/**
 * Template for site logo in header
 *
 * @package Usability Dynamics, Inc.
 * @subpackage Avalon
 * @since Avalon 1.0
 */
?>

<a href="<?php echo site_url(); ?>" title="<?php echo get_bloginfo('name'); ?>">
    <?php
    $logo_image = get_theme_mod('header_logo_big_image_settings', '');
    $icon_url = get_theme_mod('header_logo_icon_settings', get_template_directory_uri() . '/images/logo-icon.png');
    $logo_text = get_theme_mod('header_logo_text_settings', 'WP Avalon');
    $margin_icon = get_theme_mod('header_logo_icon_margin_setting', '-1');
    $margin_right_icon = get_theme_mod('header_logo_icon_margin_right_setting', '0');
    $margin = get_theme_mod('header_logo_img_margin_setting', '0');
    if (!empty($logo_image)) :
        echo '<img class="full_image_logo" style="margin-top: ' . $margin . 'px" alt="Logotype" src="' . $logo_image . '">';
    else :
        if (!empty($icon_url)) :
            ?>
            <img class="logo-icon" style="margin-right: <?php echo $margin_right_icon; ?>px; margin-top: <?php echo $margin_icon; ?>px" src="<?php echo $icon_url; ?>" alt="Logo icon" />
        <?php endif; ?>
        <span><?php echo $logo_text; ?></span>
    <?php endif; ?>
</a>