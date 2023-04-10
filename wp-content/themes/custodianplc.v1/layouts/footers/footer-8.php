<?php
/**
 * The template for displaying the footer eight
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Appilo
 */

$footer_copyright_text_8 = get_theme_mod('saas_classic_footer_copyright_settings');

$subscribe_form_image_8 = get_theme_mod('saas_classic_subscribe_form_bg', 'url');

$saas_classic_subscribe_form_circle_image_1 = get_theme_mod('saas_classic_subscribe_form_circle_img_1', 'url');
$saas_classic_subscribe_form_circle_image_2 = get_theme_mod('saas_classic_subscribe_form_circle_img_2', 'url');
$saas_classic_subscribe_form_animate_image_3 = get_theme_mod('saas_classic_subscribe_form_animate_img_3', 'url');
$saas_classic_subscribe_form_animate_image_4 = get_theme_mod('saas_classic_subscribe_form_animate_img_4', 'url');

$footer_subscirbe_form_title_8 = get_theme_mod('saas_classic_footer_subscribe_title_settings');
$footer_subscirbe_form_info_8 = get_theme_mod('saas_classic_footer_subscribe_info_settings');
$footer_subscirbe_form_8 = get_theme_mod('saas_classic_footer_subscribe_form_settings');
$saas_classic_footer_subscribe_switch = get_theme_mod('saas_classic_footer_subscribe_switch');

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
<!-- Start of footer section
       ============================================= -->
<footer id="saas_two_footer" class="saas_two_footer_section relative-position">
<?php if ($saas_classic_footer_subscribe_switch){?>
    <div class="s2-newslatter_section relative-position">
        <div class="container">
            <div class="s2-newslatter_content relative-position">
                <div class="s2-newslatter_title  text-center saas2-headline pera-content">
                    <?php if (!empty($footer_subscirbe_form_title_8)):?>
                        <h2><?php echo esc_html( $footer_subscirbe_form_title_8 ); ?></h2>
                    <?php else:?>
                        <h2>Subscribe now!</h2>
                    <?php endif;?>
                    <?php if (!empty($footer_subscirbe_form_info_8)):?>
                        <p><?php echo wp_kses($footer_subscirbe_form_info_8, $allowed_html); ?></p>
                    <?php else:?>
                        <p>Get the latest update.</p>
                    <?php endif;?>
                </div>
                <div class="s2-newslatter-form  relative-position">
                    <?php echo do_shortcode($footer_subscirbe_form_8)?>
                </div>
            </div>
            <div class="newsletter_pattern_1">
                <?php if ( $subscribe_form_image_8 != 'http://url' && $subscribe_form_image_8 != 'url'  && $subscribe_form_image_8 != ''):?>
                    <img src="<?php echo esc_url($subscribe_form_image_8)?>" alt>
                <?php else:?>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/saas-classic/banner/nb.png" alt>
                <?php endif;?>
            </div>
            <?php if ( $saas_classic_subscribe_form_animate_image_3 != 'http://url' && $saas_classic_subscribe_form_animate_image_3 != 'url'  && $saas_classic_subscribe_form_animate_image_3 != ''):?>
                <div class="cloud_anim newsletter_pattern_2" style="background-image: url(<?php echo esc_url( $saas_classic_subscribe_form_animate_image_3 );?>);"></div>
                <div class="cloud_anim newsletter_pattern_3" style="background-image: url(<?php echo esc_url( $saas_classic_subscribe_form_animate_image_4 );?>);"></div>
                <div class="newsletter_pattern_4 " style="background-image: url(<?php echo esc_url( $saas_classic_subscribe_form_circle_image_1 );?>);"></div>
                <div class="newsletter_pattern_5 " style="background-image: url(<?php echo esc_url( $saas_classic_subscribe_form_circle_image_2 );?>);"></div>
            <?php else:?>
                <div class="cloud_anim newsletter_pattern_2" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/saas-classic/cloud-2.png);"></div>
                <div class="cloud_anim newsletter_pattern_3" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/saas-classic/cloud-5.png);"></div>
                <div class="newsletter_pattern_4 " style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/saas-classic/banner/ns.png);"></div>
                <div class="newsletter_pattern_5 " style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/saas-classic/banner/ns2.png);"></div>
            <?php endif;?>
        </div>
    </div>
    <?php }?>
    <div class="footer_content pera-content">
        <div class="container">
            <div class="row">
                <?php dynamic_sidebar( 'saas_classic_footer_widget' ); ?>
            </div>
        </div>
    </div>
</footer>
<div class="s2-copyright text-center">
    <?php if (!empty($footer_copyright_text_8)):?>
        <?php echo wp_kses( $footer_copyright_text_8, $allowed_html ); ?>
    <?php else:?>
        2020 © All rights reserved by <a href="#">Themexriver</a>
    <?php endif;?>
</div>