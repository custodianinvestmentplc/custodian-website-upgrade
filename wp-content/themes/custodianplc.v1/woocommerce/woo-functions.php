<?php
/* Remove result count & product ordering & item product category..... */
function appilo_cwoocommerce_remove_function() {
    remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10, 0 );
    remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5, 0 );
    remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10, 0 );
    remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10, 0 );
    remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10, 0 );
    remove_action( 'woocommerce_before_shop_loop' , 'woocommerce_catalog_ordering', 30 );
    remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );


    remove_action( 'woocommerce_single_product_summary' , 'woocommerce_template_single_title', 5 );
    remove_action( 'woocommerce_single_product_summary' , 'woocommerce_template_single_rating', 10 );
    remove_action( 'woocommerce_single_product_summary' , 'woocommerce_template_single_price', 10 );
    remove_action( 'woocommerce_single_product_summary' , 'woocommerce_template_single_excerpt', 20 );
    remove_action( 'woocommerce_single_product_summary' , 'woocommerce_template_single_sharing', 50 );
    remove_action( 'woocommerce_single_product_summary' , 'woocommerce_template_single_meta', 40 );
    remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

}
add_action( 'init', 'appilo_cwoocommerce_remove_function' );

/*Shop Page Hooks*/

/* Removes the "shop" title on the main shop page */
function appilo_hide_page_title(){
    echo'<h3 class="woocommerce-shop-title"><span class="woocommerce-shop-title-before"></span> '.get_option( 'product_shop_page_title' ).'</h3>';
    echo'<h2 class="woocommerce-shop-info">'.get_option( 'product_shop_page_sub_title' ).'</h2>';
    return false;
}
add_filter('woocommerce_show_page_title', 'appilo_hide_page_title');

add_filter( 'woocommerce_product_add_to_cart_text', 'appilo_add_cart_text' );
function appilo_add_cart_text() {

    return __( 'Buy now', 'appilo' );

}

add_filter('woocommerce_short_description', 'appilo_product_excerpt_trim', 10, 1);
function appilo_product_excerpt_trim($post_excerpt){
    if (is_shop()) {
        $post_excerpt = substr($post_excerpt, 0, 70);
    }
    return $post_excerpt;
}

add_filter( 'woocommerce_after_shop_loop_item', 'appilo_woocommerce_product' );
function appilo_woocommerce_product() {
    global $product;
    ?>
    <div class="woocommerce-product-inner">
        <div class="woocommerce-product-header">
            <a class="woocommerce-product-details" href="<?php the_permalink(); ?>">
                <?php woocommerce_template_loop_product_thumbnail(); ?>
            </a>
            <div class="woocommerce-product-bottom">
                <div class="woocommerce-product-content">
                    <div class="woocommerce-product-holder">
                        <h3 class="woocommerce-product-title">
                            <a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a>
                        </h3>
                    </div>
                    <div class="woocommerce-product-price">
                        <?php woocommerce_template_loop_price(); ?>
                    </div>
                </div>
                <div class="woocommerce-product-rating-box">
                    <?php woocommerce_template_loop_rating(); ?>
                </div>
                <div class="woocommerce-product-excerpt">
                    <?php woocommerce_template_single_excerpt(); ?>
                </div>
                <?php if ( ! $product->managing_stock() && ! $product->is_in_stock() ) { ?>
                <?php } else { ?>
                    <div class="woocommerce-add-to-cart">
                        <?php woocommerce_template_loop_add_to_cart(); ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
<?php }

/*Single Products Page Hooks*/
add_action( 'after_setup_theme', 'appilo_product_img_light_box' );
function appilo_product_img_light_box() {
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
}
add_filter( 'woocommerce_single_product_summary', 'appilo_woocommerce_single_product' );
function appilo_woocommerce_single_product() {
    ?>
    <div class="woocommerce-single-product">
        <div class="woocommerce-single-product-holder">
           <div class="woocommerce-single-product-title">
               <?php woocommerce_template_single_title(); ?>
           </div>
            <div class="woocommerce-single-product-rating">
                <?php woocommerce_template_single_rating(); ?>
            </div>
            <div class="woocommerce-single-product-price">
                <?php woocommerce_template_single_price(); ?>
            </div>
            <div class="woocommerce-single-product-excerpt">
                <?php woocommerce_template_single_excerpt(); ?>
            </div>
        </div>
    </div>
<?php }

// Single Related Products
echo '';
remove_action( 'woocommerce_cart_collaterals', 'woocommerce_cross_sell_display' );
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
function woocommerce_output_related_products() {
    $args = array(
        'posts_per_page' => get_option( 'products_per_product_page' ) ? get_option( 'products_per_product_page' ) : 6,
        'columns'        => 3,
        'orderby'        => 'rand',
    );
    woocommerce_related_products( apply_filters( 'woocommerce_output_related_products_args', $args ) );
}
add_filter( 'woocommerce_after_single_product_summary', 'appilo_woocommerce_after_single_product' );
function appilo_woocommerce_after_single_product() {
?>
    <div class="woocommerce-single-related-product">
        <?php woocommerce_output_related_products(); ?>
    </div>
<?php }

/**
 * Change number or products per row to 3
 */
add_filter('loop_shop_columns', 'appilo_products_per_row', 999);
if (!function_exists('appilo_products_per_row')) {
    function appilo_products_per_row() {
        $row = get_option( 'products_per_row' ) ? get_option( 'products_per_row' ) : 3;
        return $row; // 3 products per row
    }
}

/**
 * Change number of products that are displayed per page (shop page)
 */
add_filter( 'loop_shop_per_page', 'appilo_products_per_page', 20);
function appilo_products_per_page( $cols ) {
// $cols contains the current number of products per page based on the value stored on Options -> Reading
// Return the number of products you wanna show per page.
    $cols = get_option( 'products_per_page' ) ? get_option( 'products_per_page' ) : 6;
    return $cols;
}

/**
 * Create the section beneath the products tab
 **/
add_filter( 'woocommerce_get_sections_products', 'appilo_woo_settings' );
function appilo_woo_settings( $sections ) {

    $sections['appilo_woo'] = __( 'Appilo Woo Customize', 'appilo' );
    return $sections;

}
/**
 * Add settings to the specific section we created before
 */
add_filter( 'woocommerce_get_settings_products', 'appilo_custom_woo_settings', 10, 2 );
function appilo_custom_woo_settings( $settings, $current_section ) {
    /**
     * Check the current section is what we want
     **/
    if ( $current_section == 'appilo_woo' ) {
        $appilo_woo_customize = array();
        // Add Title to the Settings
        $appilo_woo_customize[] = array( 'name' => __( 'Appilo Woo Settings', 'appilo' ), 'type' => 'title', 'desc' => __( 'Appilo all woocommerce settings in here.', 'appilo' ), 'id' => 'appilo_woo' );
        // Add settings shop page title
        $appilo_woo_customize[] = array(
            'name'     => __( 'Product Shop Page Title', 'appilo' ),
            'desc_tip' => __( 'example: products', 'appilo' ),
            'id'       => 'product_shop_page_title',
            'type'     => 'textarea',
            'desc'     => __( 'Type a title for the shop page.', 'appilo' ),
        );
        $appilo_woo_customize[] = array(
            'name'     => __( 'Product Shop Page Sub Title', 'appilo' ),
            'desc_tip' => __( 'example: We supply some constructional product from our shop!', 'appilo' ),
            'id'       => 'product_shop_page_sub_title',
            'type'     => 'textarea',
            'desc'     => __( 'Type a title for the shop page.', 'appilo' ),
        );
        // Add settings number of products per page
        $appilo_woo_customize[] = array(
            'name'     => __( 'Products Per Shop Page', 'appilo' ),
            'desc_tip' => __( 'example 12 products per shop page', 'appilo' ),
            'id'       => 'products_per_page',
            'type'     => 'number',
            'desc'     => __( 'Put the number how many products you want to display in a page', 'appilo' ),
        );
        // Add settings number of products per row
        $appilo_woo_customize[] = array(
            'name'     => __( 'Products Per Shop Row', 'appilo' ),
            'desc_tip' => __( 'example 3 products per shop page', 'appilo' ),
            'id'       => 'products_per_row',
            'type'     => 'number',
            'desc'     => __( 'Put the number how many products you want to display in a page', 'appilo' ),
        );
        // Add settings number of products per page related
        $appilo_woo_customize[] = array(
            'name'     => __( 'Products Per Products Page', 'appilo' ),
            'desc_tip' => __( 'example 6 products per product page', 'appilo' ),
            'id'       => 'products_per_product_page',
            'type'     => 'number',
            'desc'     => __( 'Put the number how many products you want to display in a related page', 'appilo' ),
        );

        $appilo_woo_customize[] = array( 'type' => 'sectionend', 'id' => 'appilo_woo' );
        return $appilo_woo_customize;

        /**
         * If not, return the standard settings
         **/
    } else {
        return $settings;
    }
}