<?php
/**
 * Home page template file
 *
 * @package UD
 * @subpackage Avalon
 * @since Avalon 1.0
 */
get_header(); ?>

<div class="container">

    <?php get_sidebar(); ?>

    <div class="content col-md-8">
        <?php
        if (have_posts()) :
            
            while (have_posts()) : the_post();
        
                get_template_part('template-parts/content/content', 'archive');

            endwhile;
            
        endif;
        
        ?>
    </div>

</div>

<?php get_footer(); ?>