<?php
get_header(); // Include the header






while (have_posts()) :
    the_post();
    ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>





        
        <div id="swup" class="entry-content transition-fade container-fluid">
        <div class="container front_field">






 






        </div>


        
            <?php the_content(); ?>

            
        </div>



        <footer class="entry-footer">
            <?php
            wp_link_pages(array(
                'before' => '<div class="page-links">' . __('Pages:', 'your-theme-textdomain'),
                'after' => '</div>',
            ));
            ?>
        </footer>
    </article>

    <?php
endwhile;



get_footer(); // Include the footer
?>
