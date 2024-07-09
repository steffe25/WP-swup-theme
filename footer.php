<footer id="site-footer" class="site-footer" role="contentinfo">
    <div class="footer-container">
        <div class="footer-widgets">
            <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
                <aside class="widget-area footer-1" role="complementary">
                    <?php dynamic_sidebar( 'footer-1' ); ?>
                </aside>
            <?php endif; ?>
            <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
                <aside class="widget-area footer-2" role="complementary">
                    <?php dynamic_sidebar( 'footer-2' ); ?>
                </aside>
            <?php endif; ?>
            <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
                <aside class="widget-area footer-3" role="complementary">
                    <?php dynamic_sidebar( 'footer-3' ); ?>
                </aside>
            <?php endif; ?>
        </div>


    </div><!-- .container -->
</footer><!-- #site-footer -->



    </div><!-- #swup -->
    <?php wp_footer(); ?>
    
</body>
</html>
