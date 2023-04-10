<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class appilo_startup_blog extends Widget_Base {

   public function get_name() {
      return 'appilo_startup_blog';
   }

   public function get_title() {
      return __( 'Appilo Startup Blog', 'appilo' );
   }
public function get_categories() {
		return [ 'appilo-core' ];
	}
   public function get_icon() { 
        return 'eicon-post-slider';
   }

    protected function register_controls() {

        $this->start_controls_section(
            'section_heading_section',
            [
                'label' => __( 'Blog Heading', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'post_sub_heading',
            [
                'label' => __( 'Sub Heading', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
            ]
        );
        $this->add_control(
            'heading',
            [
                'label' => __( 'Heading', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
            ]
        );
        $this->end_controls_section();


        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Blog', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'post_number',
            [
                'label' => __( 'Number Of Post', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '5', 'appilo' ),
            ]
        );
        $this->add_control(
            'blog_order', [
                'label'   => esc_html__( 'portfolio Order', 'appilo' ),
                'type'    => \Elementor\Controls_Manager::SELECT,
                'default' => 'asc',
                'options' => [
                    'asc'  => esc_html__( 'ASC ', 'appilo' ),
                    'desc' => esc_html__( 'DESC', 'appilo' ),
                ],
            ]
        );
        
        $this->add_control(
			'post_meta_style',
			[
				'label' => __( 'Post Meta Style', 'appilo' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name'           => 'meta_typography',
                'label'          => esc_html__( 'Typography', 'appilo' ),
                'selector'       => '{{WRAPPER}} .aplpg-blog-content .aplpg-blog-column .aplpg-blog-meta span',
                'fields_options' => [
                    'typography' => [
                        'default' => 'custom',
                    ],
                ],
            ]
        );        
        $this->add_control(
            'meta_color',
            [
                'label'     => esc_html__( 'Meta Color', 'appilo' ),
                'type'      => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .aplpg-blog-content .aplpg-blog-column .aplpg-blog-meta span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
			'post_title_style',
			[
				'label' => __( 'Post Title Style', 'appilo' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name'           => 'title_typography',
                'label'          => esc_html__( 'Typography', 'appilo' ),
                'selector'       => '{{WRAPPER}} .aplpg-blog-content .aplpg-blog-column .aplg-blog-column-txt h6',
                'fields_options' => [
                    'typography' => [
                        'default' => 'custom',
                    ],
                ],
            ]
        );        
        $this->add_control(
            'title_color',
            [
                'label'     => esc_html__( 'Color', 'appilo' ),
                'type'      => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .aplpg-blog-content .aplpg-blog-column .aplg-blog-column-txt h6' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'title_hover_color',
            [
                'label'     => esc_html__( 'Color', 'appilo' ),
                'type'      => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .aplpg-blog-content .aplpg-blog-column:hover h6' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
			'post_excerpt_style',
			[
				'label' => __( 'Post Excerpt Style', 'appilo' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name'           => 'excerpt_typography',
                'label'          => esc_html__( 'Typography', 'appilo' ),
                'selector'       => '{{WRAPPER}} .aplpg-blog-column .aplpg-pera-txt p',
                'fields_options' => [
                    'typography' => [
                        'default' => 'custom',
                    ],
                ],
            ]
        );        
        $this->add_control(
            'excerpt_color',
            [
                'label'     => esc_html__( 'Color', 'appilo' ),
                'type'      => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .aplpg-blog-column .aplpg-pera-txt p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {

        $settings = $this->get_settings_for_display();
        $post_sub_heading = $settings['post_sub_heading'];
        $heading = $settings['heading'];

        $post_count= $settings['post_number'];
        $blog_order= $settings['blog_order'];
        ?>
        <div class="aplpg-blog-section" id="aplpg_blog">
            <div class="container">
                <div class="row">
					<div class="col-lg-8 offset-lg-2">
						<div class="aplpg-title-area text-center wow fadeInUp">
							<span class="aplpg-subtitle"><?php echo esc_html($post_sub_heading);?></span>
							<div class="aplpg-headline">
								<h3><?php echo esc_html($heading);?></h3>
							</div>
						</div>
					</div>
				</div>
            <div class="aplpg-blog-content">
					<div class="aplpg-blog-slider">
                <?php

                    $args = array(
                        'post_type'      => array( 'post' ),
                        'post_status'    => 'publish',
                        'posts_per_page' => $post_count,
                        'order'          => $blog_order,
                    );
                    $query = new  \WP_Query($args);
                    if ( $query->have_posts() ) {
                    while ( $query->have_posts() ) {
                    $query->the_post();
                    $idd = get_the_ID();
                    $blogv_img = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full');
                ?>
                <div class="col-lg-4">
                    <div class="aplpg-blog-column">
                        <?php if(has_post_thumbnail()):?>
                            <div class="aplpg-img-wrapper">
                                <img src="<?php echo esc_url($blogv_img['0']);?>" alt="<?php the_title_attribute();?>">
                            </div>
                        <?php endif;?>
                        <div class="aplpg-blog-meta">
                            <span><i class="fas fa-user"></i><?php esc_html_e('By', 'appilo');?> <?php echo esc_html((get_the_author_meta( 'display_name' )));?></span>
                            <span><i class="fas fa-calendar-alt"></i><?php echo esc_html(get_the_time( get_option('date_format')));?></span>
                        </div>
                        <div class="aplg-blog-column-txt">
                            <div class="aplpg-headline">
                                <a href="<?php the_permalink();?>"><h6><?php the_title();?></h6></a>
                            </div>
                            <div class="aplpg-pera-txt">
                                <p><?php the_excerpt();?></p>
                            </div>
                        </div>
                        <div class="aplpg-readmore-btn">
                            <a href="<?php the_permalink();?>"><i class="fas fa-plus"></i></a>
                        </div>
                    </div>
                </div>
            <?php } wp_reset_query(); } ?>
            </div>
            </div>
            </div>
            </div>
        <?php 

        

    }



    protected function content_template() {}

   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new appilo_startup_blog );
?>