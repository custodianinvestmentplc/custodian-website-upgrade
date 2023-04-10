<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class galaxy_blog extends Widget_Base {

   public function get_name() {
      return 'galaxy-blog';
   }

   public function get_title() {
      return __( 'Blog Slider', 'appilo' );
   }
public function get_categories() {
		return [ 'appilo-core' ];
	}
   public function get_icon() { 
        return 'eicon-thumbnails-down';
   }

    protected function register_controls() {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Blog Slider', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'section_id',
            [
                'label' => __( 'Section ID', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'news', 'appilo' ),
            ]
        );
        $this->add_control(
            'post_number',
            [
                'label' => __( 'Number Of Post', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '3', 'appilo' ),
            ]
        );
        $this->add_control(
            'post_category',
            [
                'label' => __( 'Post Category', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Galaxy', 'appilo' ),
            ]
        );
        $this->add_control(
            'read_more',
            [
                'label' => __( 'Read More', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Read more', 'appilo' ),
            ]
        );

        $this->end_controls_section();

    }

    protected function render() {

        $settings = $this->get_settings_for_display();

        $post_count= $settings['post_number'];
        $post_category= $settings['post_category'];

        $recent_posts = wp_get_recent_posts(array(
            'numberposts' => $post_count, // Number of recent posts thumbnails to display
            'post_status' => 'publish', // Show only the published posts
            'category_name' => $post_category,
        ));
        echo '<!-- start of agency-blog section -->
            <section class="agency-blog" >
                <div class="container">
                    <div class="row">
                        <div class="col col-12">
                            <div class="agency-blog-slider agency-blog-grids dots-style1 owl-carousel">';
                            foreach($recent_posts as $post) :
                                echo'<div class="grid">
                                    <div class="entry-header">
                                        '.get_the_post_thumbnail($post['ID'], 'full').'
                                    </div>
                                    <div class="entry-details">
                                        <span class="entry-date">'.get_the_time('F, j Y', $post['ID']).'</span>
                                        <h3><a href="'.get_permalink($post['ID']).'">'.$post['post_title'].'</a></h3>
                                        <p>'.wp_trim_words($post['post_content'] , 17) .'</p>
                    
                                        <div class="entry-footer">
                                            <a href="'.get_permalink($post['ID']).'" class="more">'.$settings['read_more'].'</a>
                                            <span class="comments"><a href="'.get_permalink($post['ID']).'#respond"><i class="fas fa-comment"></i> Comments</a></span>
                                        </div>
                                    </div>
                                </div>';
                            endforeach; wp_reset_query();
                            echo'</div>
                        </div>
                    </div>
                </div>
            </section>
        <!-- end of agency-blog section -->';
    }



    protected function content_template() {}

   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new galaxy_blog );
?>