<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Topapp
 */


$error_bg = get_theme_mod('error_bg', 'url');
$error_page_stitch = get_theme_mod('404_page_switch');
$error_page_data = get_theme_mod('404_page_template');

if ( $error_page_stitch ){
    echo do_shortcode('[INSERT_ELEMENTOR id="'.$error_page_data.'"]');

}else{ ?>

    <div class="sidebar-page-container">
        <div class="container">
            <div class="row clearfix">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="blog-detail">
                        <div class="inner-box">

                            <div class="text text-center">
                                <div class="sec-title style-four">
                                    <div class="title"><span>40</span>4</div>
                                    <h2>Sorry this page is not found. <br/> You have got 404 error.</h2>
                                    <?php if ( $error_bg != 'http://url' && $error_bg != 'url'  && $error_bg != '') { ?>
                                        <img class="error-bg" src="<?php echo esc_url($error_bg);?>" alt="Error Bg">
                                    <?php } else { ?>
                                        <img class="error-bg" src="<?php echo get_template_directory_uri();?>/img/topapp/gallery/error_bg.png" alt="Error Bg">
                                    <?php } ?>
                                </div>
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="theme-btn btn-style-four"><span class="txt">Go to home page</span></a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </div>

<?php } ?>