<?php
/**
 * The template for displaying the footer 12
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Appilo
 */

$dia_footer_img = get_theme_mod('dia_footer_img', 'url');
$digital_agency_footer_copyright_txt = get_theme_mod('dia_footer_copyright_txt');


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

<!-- Start of Footer  section
    ============================================= -->
<section id="dia-footer" class="dia-footer-section position-relative">
    <div class="container">
        <div class="row">
            <?php dynamic_sidebar( 'digital_agency_footer_widget' ); ?>
        </div>
    </div>
    <div class="dia-footer-copyright">
        <div class="container">
            <div class="dia-footer-copyright-content">
                <div class="row">
                    <div class="col-md-4">
                        <div class="dia-copyright-text pera-content">
                            <p>
                                <?php if (!empty($digital_agency_footer_copyright_txt)){?>
                                    <?php echo wp_kses($digital_agency_footer_copyright_txt, $allowed_html); ?>
                                <?php } else{ ?>
                                    © 2020 <a href="#">Themexriver</a>
                                <?php }?>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="dia-copyright-menu">
                            <?php
                                wp_nav_menu( array(
                                    'theme_location' => 'copyright_menu',
                                    'menu_id'        => '',
                                    'depth'           => 1,
                                    'container'         => 'ul',
                                    'menu_class'        => 'dia-copy-menu',
                                    'fallback_cb'       => '',
                                    'walker'          => new WP_Bootstrap_Navwalker(),
                                ) );
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="dia-footer-shape3 position-absolute"><img src="<?php echo esc_url($dia_footer_img)?>" alt></div>
</section>
<!-- End of Footer  section
  ============================================= -->       