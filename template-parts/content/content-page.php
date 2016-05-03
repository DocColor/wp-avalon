<?php
/**
 * Template part for page.php container
 *
 * @package Usability Dynamics, Inc.
 * @subpackage Avalon
 * @since Avalon 1.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
    <?php the_content(); ?>
    <?php comments_template(); ?>
</article>