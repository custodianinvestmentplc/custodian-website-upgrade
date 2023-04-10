<?php
/**
 * The template for displaying the footer 10
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Appilo
 */


$appilo_seo_footer_copyright_txt = get_theme_mod('appilo_seo_footer_copyright_txt');
$appilo_seo_footer_bg_img = get_theme_mod('appilo_seo_footer_bg_img', 'url');
$appilo_seo_footer_socials = get_theme_mod('appilo_footer_seo_socials');


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
<footer id="appseo-footer-area" class="appseo-footer-area-section position-relative" data-background="<?php echo esc_url($appilo_seo_footer_bg_img)?>">
    <div class="container">
        <div class="appseo-footer-area">
            <div class="row">
                <?php dynamic_sidebar( 'appilo_seo_footer_widget_1' ); ?>
                <?php dynamic_sidebar( 'appilo_seo_footer_widget_2' ); ?>
            </div>
        </div>
        <div class="appseo-copyright">
            <div class="appseo-copyright-text">

                    <span>
                        <?php if (!empty($appilo_seo_footer_copyright_txt)){?>
                            <?php echo wp_kses($appilo_seo_footer_copyright_txt , $allowed_html);?>
                        <?php } else{ ?>
                            © Copyright 2020. Design by <a href="#">Themexriver</a>
                        <?php }?>
                    </span>

            </div>
            <div class="appseo-footer-social">
                <?php if( $appilo_seo_footer_socials) {
                    foreach ($appilo_seo_footer_socials as $appilo_seo_footer_social) : ?>
                        <a href="<?php echo esc_url($appilo_seo_footer_social['social_link']); ?>"><i class="<?php echo esc_attr($appilo_seo_footer_social['icon_class']); ?>"></i></a>
                    <?php
                    endforeach;
                }
                ?>
            </div>
        </div>
    </div>
</footer>
<!-- End of footer section
    ============================================= -->