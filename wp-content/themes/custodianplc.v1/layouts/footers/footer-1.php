<?php
/**
 * The template for displaying the footer one
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Appilo
 */

$footer_copyright_text = get_theme_mod('appilo_footer_copyright_settings');

$copyright_menus = get_theme_mod( 'footer_copyright_menu' );

$copyright_all_text = get_theme_mod('appilo_copyright_all_text_settings');

$footer_subscirbe_form_title = get_theme_mod('appilo_footer_subscribe_title_settings');
$footer_subscirbe_form_info = get_theme_mod('appilo_footer_subscribe_info_settings');
$footer_subscirbe_form = get_theme_mod('appilo_footer_subscribe_form_settings');
$appilo_footer_subscribe_switch = get_theme_mod('appilo_footer_subscribe_switch');

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

<div class="separator no-border mb115 full-width"></div><!-- /.separator no-border mb135 -->
<footer class="appilo-footer">
    <?php if ($appilo_footer_subscribe_switch){?>
    <div class="subscribe-section">
        <div class="container">
            <div class="appilo-sec-title text-center">
                <?php if (!empty($footer_subscirbe_form_title)):?>
                    <h2><?php echo esc_html( $footer_subscirbe_form_title ); ?></h2>
                <?php else:?>
                    <h2>Subscribe To Our Newsletter</h2>
                <?php endif;?>
                <?php if (!empty($footer_subscirbe_form_info)):?>
                    <p><?php echo wp_kses($footer_subscirbe_form_info, $allowed_html); ?></p>
                <?php else:?>
                    <p>A Private Limited is the most popular type of partnership Malta. The limited liability<br/>
                        is, in fact, the only type of company allowed by Companies.</p>
                <?php endif;?>
            </div><!-- /.appilo-sec-title -->
            <?php echo do_shortcode($footer_subscirbe_form)?>
        </div><!-- /.container -->
    </div><!-- /.subscribe-section -->
    <?php }?>
    <div class="appilo-footer-widget-wrapper">
        <div class="container">
            <div class="row masonary-layout">
                <?php dynamic_sidebar( 'appilo_main_footer_widget' ); ?>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.footer-widget-wrapper -->

    <div class="footer-bottom">
        <div class="container">
            <div class="footer-copyright">
            <div class="float-left left-content">
                <p>
                    <?php if (!empty($footer_copyright_text)):?>
                        <?php echo __( $footer_copyright_text, 'appilo' ); ?>
                    <?php else:?>
                        © 2018, appilo Theme by Themexriver Team
                    <?php endif;?>
                    <?php if ($copyright_menus):?>
                        <?php foreach( $copyright_menus as $copyright_menu ) : ?>
                            <span class="sep">|</span>
                            <a href="<?php echo esc_url($copyright_menu['link_url']); ?>">
                                <?php echo esc_html($copyright_menu['link_text']); ?>
                            </a>
                        <?php endforeach; ?>
                    <?php endif;?>
                </p>
            </div><!-- /.pull-left left-content -->
            <div class="float-right right-content">
                <?php if (!empty($copyright_all_text)):?>
                    <p><?php echo __( $copyright_all_text, 'appilo' ); ?></p>
                <?php else:?>
                    <p>All Right Reserved</p>
                <?php endif;?>
            </div><!-- /.pull-right -->
            </div>
        </div><!-- /.container -->
    </div><!-- /.footer-bottom -->
</footer><!-- /.footer -->
