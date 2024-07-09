<!DOCTYPE html>

<html <?php language_attributes(); ?>>



<head>

    <meta charset="<?php bloginfo('charset'); ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <title><?php wp_title('|', true, 'right'); ?></title>

    <?php wp_head(); ?>









</head>



<body <?php body_class(); ?>>




    <div id="swup" class="site-wrapper">







    <div class="very-top-bar" id="very-top-bar">

    <?php if ( is_active_sidebar( 'very-top-bar' ) ) : ?>

    <?php dynamic_sidebar( 'very-top-bar' ); ?>

<?php endif; ?>



    </div>



















        <header>

            <nav class="navbar">

                <div class="container navbar-container">

                    

                        <?php if ( get_header_image() ) : ?>

                        <div id="site-header-img">

                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">

                                <img src="<?php header_image(); ?>"

                                    alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">

                            </a>

                        </div>

                        <?php endif; ?>



                        <div class="mobile-menu-button" onclick="toggleMobileMenu(); toggleNavIcon4();" id="nav-icon4">

                            <span></span>

                            <span></span>

                            <span></span>

                        </div>







                        

                       

                        <ul class="menu" id="mobileMenu">

                            <?php

        wp_nav_menu(array(

            'theme_location' => 'primary',

            'menu_class' => 'navbar-nav', // Keep navbar-nav class

        ));

    ?>

                        </ul>

                </div>

            </nav>





        </header>







<!--!REMOVE COMMENT TO DISPLAY CALL BUTTON

        <div class="call-button" >

            <a href="tel:+123456789">

            <svg xmlns="http://www.w3.org/2000/svg" height="25" width="25" viewBox="0 0 512 512">

                <path class="icon-path" d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/>

            </svg>

            </a>

        </div>

-->

















</body>



</html>