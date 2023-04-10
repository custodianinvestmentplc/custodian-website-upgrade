<?php
namespace Elementor;
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class it_blog extends Widget_Base {

   public function get_name() {
      return 'it-blog';
   }

   public function get_title() {
      return __( 'IT Blog', 'appilo' );
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
            'section_id',
            [
                'label' => __( 'Section ID', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'blog', 'appilo' ),
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
                'default' => __( 'IT', 'appilo' ),
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
                    '{{WRAPPER}} .it-up-blog-innerbox .it-up-blog-text h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'post_i_color',
            [
                'label' => __( 'Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-up-blog-innerbox .it-up-blog-text p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'nahaaa',
            [
                'label' => __( 'Border', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'nav_baa',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .it-up-blog-innerbox .it-up-blog-text h3:after',
            ]
        );
        $this->add_control(
            'post_auth_color',
            [
                'label' => __( 'Post Meta Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-up-blog-innerbox .it-up-blog-text .it-up-blog-bottom .it-up-blog-author .it-up-blog-ath-text a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'post_date_color',
            [
                'label' => __( 'Date Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-up-blog-innerbox .it-up-blog-text .it-up-blog-meta' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'post_date_background',
            [
                'label' => __( 'Post Date Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'blog_date_bg',
                'label' => __( 'Blog BG', 'appilo' ),
                'types' => [  'classic', 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .it-up-blog-innerbox .it-up-blog-text .it-up-blog-meta',
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
                'types' => [  'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .it-up-blog-innerbox',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'section_shadow',
                'label' => __( 'Blog Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .it-up-blog-innerbox',
            ]
        );
        $this->add_responsive_control(
            'section_padding',
            [
                'label' => __( 'Section Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .it-up-blog-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'nav_border',
            [
                'label' => __( 'Nav Border Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-up-blog-slide .owl-dots .owl-dot:before' => 'border-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'naha',
            [
                'label' => __( 'Nav Background Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'nav_b',
                'label' => __( 'Nav Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .it-up-blog-slide .owl-dots .owl-dot',
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

    echo '<!-- Start of blog section
	============================================= -->
	<section  class="it-up-blog-section position-relative">	
			<div class="it-up-blog-content">
				<div class="it-up-blog-slide  owl-carousel">';
                    $index = 0;
                    if( $wp_query->have_posts() ) {
                        while( $wp_query->have_posts() ) {
                            $wp_query->the_post();

                            $index++;
                            if ($index == 1){
                                $class = 'it-up-blog-grean';
                            }elseif ($index == 2){
                                $class = 'it-up-blog-orange';
                            }elseif ($index == 3){
                                $class = 'it-up-blog-blue';
                            }else{
                                $class = 'it-up-blog-orange';
                            }

                  echo '<div class="it-up-blog-innerbox '.$class.'">
						<div class="it-up-blog-img">';
                            if (has_post_thumbnail()) {
                                the_post_thumbnail('full');
                            }
                            echo '</div>
						<div class="it-up-blog-text position-relative headline-1 pera-content">
							<div class="it-up-blog-meta text-center">
								' . get_the_time('j') . '
								<span>' . get_the_time('M/y') . '</span>
							</div>
							<h3><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></h3>
							<p>'.wp_trim_words(get_the_content() , 10) .'</p>
							<div class="it-up-blog-bottom clearfix">
								<div class="it-up-blog-author float-left">
									<div class="it-up-blog-ath-img float-left">
										'.get_avatar( get_the_author_meta('email'), '' ).'
									</div>
									<div class="it-up-blog-ath-text text-uppercase">
										'.get_the_author_posts_link().'
										<a href="' . get_the_permalink() . '">'.get_comments_number().' Comments</a>
									</div>
								</div>
								<div class="it-up-blog-share ul-li-block position-relative float-right">
									<span><i class="fas fa-share-alt"></i></span>
									<ul>
										<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#"><i class="fab fa-twitter"></i></a></li>
										<li><a href="#"><i class="fab fa-behance"></i></a></li>
										<li><a href="#"><i class="fab fa-youtube"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>	';
                        }
                        wp_reset_postdata();
                       }
                echo'</div>
			</div>		
	</section>		
<!-- End of blog section
	============================================= -->	';
    }



    protected function content_template() {}

   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new it_blog );
?>