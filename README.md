# WordPress theme with swup transitions and support for spectra plugin


# How to start using this theme?

After installing this theme make sure you have spectra plugin installed.

To make content made by spectra plugin, locate functions.php file and add all of your page IDs to enqueue_scripts_by_post_id() function.

# EXAMPLE

add_action( 'wp_enqueue_scripts', 'enqueue_scripts_by_post_id' ); <br>
function enqueue_scripts_by_post_id() { <br>
    $post_ids = array(1, 2, 3, 4); // Add your post IDs here <br>
    foreach ( $post_ids as $post_id ) { <br>
        $post_assets_instance = new UAGB_Post_Assets( $post_id ); <br>
        $post_assets_instance->enqueue_scripts(); <br>
    } <br>
} <br>
