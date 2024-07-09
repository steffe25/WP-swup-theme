# WordPress theme with swup transitions and support for spectra plugin


# How to start using this theme?

After installing this theme make sure you have spectra plugin installed.

To make content made by spectra plugin, locate functions.php file and add all of your page IDs to enqueue_scripts_by_post_id() function.

# EXAMPLE

add_action( 'wp_enqueue_scripts', 'enqueue_scripts_by_post_id' );
function enqueue_scripts_by_post_id() {
    $post_ids = array(1, 2, 3, 4); // Add your post IDs here
    foreach ( $post_ids as $post_id ) {
        $post_assets_instance = new UAGB_Post_Assets( $post_id );
        $post_assets_instance->enqueue_scripts();
    }
}
