<?php
/*
 * Footer Two
 * Topapp Footer
 */
$footer_copyright_text = get_theme_mod('appilo_footer_copyright_settings_2');
?>
<div class="page-wrapper">
<footer class="main-footer">
    <div class="auto-container">
        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="row clearfix">

                <!-- Footer Column -->
                <?php dynamic_sidebar('topapp-footer-widget');?>
            </div>
        </div>

        <div class="topapp-footer-bottom">
            <div class="clearfix">
                <div class="float-left">
                    <?php if (!empty($footer_copyright_text)):?>
                        <div class="copyright"><?php echo esc_html($footer_copyright_text);?></div>
                    <?php else:?>
                        <div class="copyright">&copy; 2020 Themexriver</div>
                    <?php endif;?>
                </div>
                <div class="float-right">
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'copyright_menu',
                        'menu_class'        => 'footer-nav',
                    ) );
                    ?>
                </div>
            </div>
        </div>

    </div>
</footer>
<!-- End Main Footer -->
</div> <!--Page Wrapper-->
<!--Scroll to top-->