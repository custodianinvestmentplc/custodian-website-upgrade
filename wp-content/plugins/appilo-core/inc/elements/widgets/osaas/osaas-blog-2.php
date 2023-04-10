<?php
namespace Elementor;
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class osaas_blog2 extends Widget_Base {

   public function get_name() {
      return 'osaas-blog2';
   }

   public function get_title() {
      return __( 'Osaas Blog 2', 'appilo' );
   }
public function get_categories() {
		return [ 'appilo-core' ];
	}
   public function get_icon() { 
        return 'eicon-posts-group';
   }

    protected function register_controls() {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Blog', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'query_type',
            [
                'label' => __('Query type', 'appilo'),
                'type' => Controls_Manager::SELECT,
                'default' => 'category',
                'options' => [
                    'category' => __('Category', 'appilo'),
                    'individual' => __('Individual', 'appilo'),
                ],
            ]
        );

        $this->add_control(
            'cat_query',
            [
                'label' => __('Category', 'appilo'),
                'type' => Controls_Manager::SELECT2,
                'options' => appilo_drop_cat('category'),
                'multiple' => true,
                'label_block' => true,
                'condition' => [
                    'query_type' => 'category',
                ],
                'default' => __( 'osaas', 'appilo' ),
            ]
        );

        $this->add_control(
            'id_query',
            [
                'label' => __('Posts', 'appilo'),
                'type' => Controls_Manager::SELECT2,
                'options' => appilo_drop_posts('post'),
                'multiple' => true,
                'label_block' => true,
                'condition' => [
                    'query_type' => 'individual',
                ],
            ]
        );

        $this->add_control(
            'posts_per_page',
            [
                'label' => __('Posts Per Page', 'appilo'),
                'type' => Controls_Manager::NUMBER,
                'default' => 3,
            ]
        );
        $this->add_control(
            'section_color',
            [
                'label' => __( 'Style Control', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'post_title_color',
            [
                'label' => __( 'Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-osaas-news-block .inner-box h5 a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'ttih',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .app-osaas-news-block .inner-box h5 a',
            ]
        );
        $this->add_control(
            'post_title_h_color',
            [
                'label' => __( 'Title Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-osaas-news-block .inner-box h5 a:hover, 
                    {{WRAPPER}} .app-osaas-news-block .inner-box .post-meta li .icon' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'post_titlaae_color',
            [
                'label' => __( 'Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-osaas-news-block .inner-box .text' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'post_auth_color',
            [
                'label' => __( 'Author Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-osaas-news-block .inner-box .post-meta li' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'post_date_color',
            [
                'label' => __( 'Category Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-osaas-news-block-two .inner-box .post-info li' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'post_overlaya',
            [
                'label' => __( 'Meta BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'post_overlayaa',
                'label' => __( 'Overlay', 'appilo' ),
                'types' => [  'classic', 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .app-osaas-news-block .inner-box .category',
            ]
        );
        $this->add_control(
            'post_background',
            [
                'label' => __( 'Post Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'blog_bg',
                'label' => __( 'Blog BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .app-osaas-news-block .inner-box',
            ]
        );
        $this->add_responsive_control(
            'content_margin',
            [
                'label' => __( 'Content Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .app-osaas-news-block' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {

        $settings = $this->get_settings_for_display();

        $per_page = $settings['posts_per_page'];
        $cat = $settings['cat_query'];
        $id = $settings['id_query'];


        if($settings['query_type'] == 'category'){
            $query_args = array(
                'post_type' => 'post',
                'posts_per_page' => $per_page,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'category',
                        'field' => 'term_id',
                        'terms' => $cat,
                    ) ,
                ) ,
            );
        }

        if($settings['query_type'] == 'individual'){
            $query_args = array(
                'post_type' => 'post',
                'posts_per_page' => $per_page,
                'post__in' =>$id,
                'orderby' => 'post__in'
            );
        }

        $wp_query = new \WP_Query($query_args);

echo '	<!-- Blog Section -->
	<section  class="app-osaas-blog-section">
				<div class="row clearfix">';
                    if( $wp_query->have_posts() ) {
                        $index = 0;
                        while( $wp_query->have_posts() ) {
                            $index++;
                            if ($index == 3){
                                $class = 'col-lg-6';
                                $word = 30;
                            }else {
                                $class = 'col-lg-3';
                                $word = 12;
                            }
                            $wp_query->the_post();
                  echo '<div class="app-osaas-news-block '.$class.' col-md-6 col-sm-12">
						<div class="inner-box wow fadeInLeft" data-wow-delay="'.appilo_animate('50').'" data-wow-duration="1500ms">
							<div class="category">'.appilo_single_category().'</div>
							<h5><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></h5>
							<div class="text">'.wp_trim_words(get_the_content() , $word) .'</div>
							<ul class="post-meta">
								<li><span class="icon far fa-user"></span> By '.get_the_author_posts_link().'</li>
								<li><span class="icon far fa-calendar-alt"></span>' . get_the_time('j M Y') . '</li>
							</ul>
						</div>
					</div>';
                        }
                        wp_reset_postdata();
                       }
                echo'</div>			
	</section>
	<!-- End Blog Section -->';
    }



    protected function content_template() {}

   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new osaas_blog2 );
?>