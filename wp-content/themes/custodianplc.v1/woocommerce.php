<?php
/**
 * Custom Woocommerce shop page.
 */
get_header();
?>
<!-- start blog-single-content -->
<section class="blog-single-content section-padding">
    <div class="container">
        <div class="row blog-with-sidebar woocommerce-wrapper">
            <?php if (is_shop()){?>
            <div class="col col-lg-9 col-md-8 col-sm-12">
                <div class="blog-grids">
		            <?php woocommerce_content(); ?>
                </div>
            </div> <!-- end blog-content -->

            <div class="blog-sidebar woocommerce-shop-sidebar col col-lg-3 col-md-4 col-sm-12">
                <?php dynamic_sidebar( 'sidebar-shop' ); ?>
            </div>
                <?php } else{?>
                    <div class="col col-lg-12 col-md-12 col-sm-12">
                        <div class="blog-grids">
                            <?php woocommerce_content(); ?>
                        </div>
                    </div> <!-- end blog-content -->
                <?php }?>
        </div>
    </div> <!-- end container -->
</section>
<?php
get_footer();