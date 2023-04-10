<?php
/**
 * The template for displaying the footer seven
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Appilo
 */

$footer_copyright_text_7 = get_theme_mod('saas_footer_copyright_settings');

$copyright_all_text_7 = get_theme_mod('saas_copyright_all_text_settings');

$subscribe_form_image = get_theme_mod('saas_subscribe_form_bg', 'url');

$subscribe_form_animate_image_1 = get_theme_mod('saas_subscribe_form_animate_img_1', 'url');
$subscribe_form_animate_image_2 = get_theme_mod('saas_subscribe_form_animate_img_2', 'url');
$subscribe_form_animate_image_3 = get_theme_mod('saas_subscribe_form_animate_img_3', 'url');

$footer_subscirbe_form_title_7 = get_theme_mod('saas_footer_subscribe_title_settings');
$footer_subscirbe_form_info_7 = get_theme_mod('saas_footer_subscribe_info_settings');
$footer_subscirbe_form_7 = get_theme_mod('saas_footer_subscribe_form_settings');

$allowed_html = [
    'a' => [
        'href' => [],
        'title' => [],
    ],
    'br' => [],
    'em' => [],
    'strong' => [],
];
?>
<!-- Start of footer
       ============================================= -->
<footer id="footer_area" class="footer_section relative-position">
    <div class="newslatter_section">
        <div class="container">
            <div class="newslatter_content relative-position">
                <div class="newslatter_title  text-center headline pera-content">
                    <?php if (!empty($footer_subscirbe_form_title_7)):?>
                        <h2><?php echo esc_html( $footer_subscirbe_form_title_7 ); ?></h2>
                    <?php else:?>
                        <h2>Subscription</h2>
                    <?php endif;?>
                    <?php if (!empty($footer_subscirbe_form_info_7)):?>
                        <p><?php echo wp_kses($footer_subscirbe_form_info_7, $allowed_html); ?></p>
                    <?php else:?>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit
                            sed do eiusmod tempor incididunt ut.
                        </p>
                    <?php endif;?>
                </div>
                <div class="newslatter-form  relative-position">
                    <?php echo do_shortcode($footer_subscirbe_form_7)?>
                </div>
                <div class="img_bg">
                    <?php if ( $subscribe_form_image != 'http://url' && $subscribe_form_image != 'url'  && $subscribe_form_image != ''):?>
                        <img src="<?php echo esc_url($subscribe_form_image)?>" alt>
                    <?php else:?>
                        <img src="<?php echo get_template_directory_uri();?>/img/saas/featured/nv.png" alt>
                    <?php endif;?>
                </div>
                <div class="subs_icon">
                    <?php if ( $subscribe_form_animate_image_1 != 'http://url' && $subscribe_form_animate_image_1 != 'url'  && $subscribe_form_animate_image_1 != ''):?>
                        <div class="subs_iconitem subs_iconitem-1" style="background-image: url(<?php echo esc_url( $subscribe_form_animate_image_1 );?>);"></div>
                        <div class="subs_iconitem subs_iconitem-2" style="background-image: url(<?php echo esc_url( $subscribe_form_animate_image_2 );?>);"></div>
                        <div class="subs_iconitem subs_iconitem-3" style="background-image: url(<?php echo esc_url( $subscribe_form_animate_image_3 );?>);"></div>
                    <?php else:?>
                        <div class="subs_iconitem subs_iconitem-1" style="background-image: url(<?php echo get_template_directory_uri();?>/img/saas/cloud-2.png);"></div>
                        <div class="subs_iconitem subs_iconitem-2" style="background-image: url(<?php echo get_template_directory_uri();?>/img/saas/cloud-5.png);"></div>
                        <div class="subs_iconitem subs_iconitem-3" style="background-image: url(<?php echo get_template_directory_uri();?>/img/saas/cloud-6.png);"></div>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_content">
        <div class="container">
            <div class="footer_widget_content">
                <div class="row">
                    <?php dynamic_sidebar( 'saas_footer_widget' ); ?>
                </div>
            </div>
            <div class="copyright_content">
                <div class="copyright_text pera-content">
                    <div class="row">
                        <div class="col-md-9">
                            <?php if (!empty($footer_copyright_text_7)):?>
                                <p><?php echo wp_kses( $footer_copyright_text_7, $allowed_html ); ?></p>
                            <?php else:?>
                                <p>© 2020, appilo Theme by Themexriver Team | Privacy Policy | Sitemap</p>
                            <?php endif;?>
                        </div>

                        <div class="col-md-3">
                            <?php if (!empty($copyright_all_text_7)):?>
                                <span><?php echo esc_html( $copyright_all_text_7 ); ?></span>
                            <?php else:?>
                                <span>All Rights Reserved.</span>
                            <?php endif;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End of footer
    ============================================= -->