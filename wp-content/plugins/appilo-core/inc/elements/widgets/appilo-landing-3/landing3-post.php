<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Landing3_post extends Widget_Base {

   public function get_name() {
      return 'landing3_post';
   }

   public function get_title() {
      return __( 'Appilo Lading V3 Post', 'appilo' );
   }
    public function get_categories() {
		return [ 'appilo-core' ];
	}
   public function get_icon() { 
        return 'eicon-post';
   }

    protected function register_controls() {

        $this->start_controls_section(
            'apl3_post_step',
            [
                'label' => __('Appilo Post Option', 'appilo'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
			'subtitle',
			[
				'label' => esc_html__( 'Sub Title', 'appilo' ),
				'type' => \Elementor\Controls_Manager::TEXT,
			]
		);
        $this->add_control(
			'title',
			[
				'label' => esc_html__( 'Title', 'appilo' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'label_block' => true
			]
		);
        $this->add_control(
			'description',
			[
				'label' => esc_html__( 'Description', 'appilo' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
			]
		);
        $this->add_control(
			'blog_btn_label',
			[
				'label' => esc_html__( 'Button Label', 'appilo' ),
				'type' => \Elementor\Controls_Manager::TEXT,
			]
		);
        $this->add_control(
			'blog_btn_link',
			[
				'label' => esc_html__( 'Button Link', 'appilo' ),
				'type' => \Elementor\Controls_Manager::URL,
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
                'default' => __('osaas', 'appilo'),
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
        
        $this->end_controls_section();
        $this->start_controls_section(
            'style_banner',
            [
                'label' => __('Banner Style', 'appilo'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
			'subheading_st',
			[
				'label' => esc_html__( 'Sub Heading Style', 'appilo' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->add_control(
            'sub_heading_color',
            [
                'label' =>   esc_html__( 'Sub Heading Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apl3-sec-title .title' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'sub_heading_typo',
                'label' =>   esc_html__( 'Sub Heading Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .apl3-sec-title .title',
            ]
        );
        $this->add_control(
			'heading_st',
			[
				'label' => esc_html__( 'Heading Style', 'appilo' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->add_control(
            'heading_color',
            [
                'label' =>   esc_html__( 'Heading Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apl3-sec-title h2' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'heading_typo',
                'label' =>   esc_html__( 'Heading Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .apl3-sec-title h2',
            ]
        );
        $this->add_control(
			'desc_st',
			[
				'label' => esc_html__( 'Desc Style', 'appilo' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->add_control(
            'info_color',
            [
                'label' =>   esc_html__( 'Information Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apl3-sec-title .text' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'info_typo',
                'label' =>   esc_html__( 'Information Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .apl3-sec-title .text',
            ]
        );

        $this->add_control(
			'post_style',
			[
				'label' => esc_html__( 'Post title Style', 'appilo' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->add_control(
            'title__color',
            [
                'label' =>   esc_html__( 'Title Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apl3-news-block .inner-box h4 a' => 'color: {{VALUE}};',
                ],
            ]
        );
        
        $this->add_control(
            'title_hv_color',
            [
                'label' =>   esc_html__( 'Title Hover Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apl3-news-block .inner-box h4 a:hover' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'title_info_typo',
                'label' =>   esc_html__( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .apl3-news-block .inner-box h4 a',
            ]
        );
        $this->add_control(
			'meta_stryle',
			[
				'label' => esc_html__( 'Meta Style', 'appilo' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->add_control(
            'meta_color',
            [
                'label' =>   esc_html__( 'Meta Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apl3-news-block .inner-box .post-meta li' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'title_meta_typo',
                'label' =>   esc_html__( 'Meta Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .apl3-news-block .inner-box .post-meta li',
            ]
        );
        $this->add_control(
			'btn_st_st',
			[
				'label' => esc_html__( 'Button Style', 'appilo' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->add_control(
            'btn_txt_color',
            [
                'label' =>   esc_html__( 'Button Text Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apl3-blog-section .title-column .more-blog' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'btn_txt_hv_color',
            [
                'label' =>   esc_html__( 'Button Text Hover Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apl3-blog-section .title-column .more-blog:hover' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'btn_text_typo',
                'label' =>   esc_html__( 'Buton Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .apl3-blog-section .title-column .more-blog',
            ]
        );
        $this->end_controls_section();
        

    }

    protected function render() {

        $settings = $this->get_settings_for_display();
?>
    <!-- Blog Section -->
    <section class="apl3-blog-section" id="blog">
        <div class="auto-container">
            <div class="row clearfix">
            
                <!-- Title Column -->
                <div class="title-column col-lg-5 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!-- Sec Title -->
                        <div class="apl3-sec-title">
                            <div class="title"><?php echo esc_html($settings['subtitle']);?></div>
                            <h2><?php echo esc_html($settings['title']);?></h2>
                            <div class="text"><?php echo esc_html($settings['description']);?></div>
                        </div>
                        <?php if(!empty($settings['blog_btn_label'])):?>
                            <a href="<?php echo esc_url($settings['blog_btn_link']['url']);?>" class="more-blog"><?php echo esc_html($settings['blog_btn_label']);?></a>
                        <?php endif;?>
                    </div>
                </div>
                
                <!-- Blocks Column -->
                <div class="blocks-column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="row clearfix">
                            <?php 
                            $per_page = $settings['posts_per_page'];
                            $cat = $settings['cat_query'];
                            $id = $settings['id_query'];
                    
                    
                            if ($settings['query_type'] == 'category') {
                                $query_args = array(
                                    'post_type' => 'post',
                                    'posts_per_page' => $per_page,
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'category',
                                            'field' => 'term_id',
                                            'terms' => $cat,
                                        ),
                                    ),
                                );
                            }
                    
                            if ($settings['query_type'] == 'individual') {
                                $query_args = array(
                                    'post_type' => 'post',
                                    'posts_per_page' => $per_page,
                                    'post__in' => $id,
                                    'orderby' => 'post__in'
                                );
                            }
                    
                            $wp_query = new \WP_Query($query_args);
                            ?>
                            <?php
                                if ($wp_query->have_posts()) {
                                    while ($wp_query->have_posts()) {
                                    $wp_query->the_post();
                            ?>
                            <!-- News Block -->
                            <div class="apl3-news-block col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="image">
                                        <a href="<?php echo get_the_permalink(); ?>"><?php
                                        if (has_post_thumbnail()) {
                                            the_post_thumbnail('full');
                                        }
                                        ?></a>
                                    </div>
                                    <div class="lower-content">
                                        <ul class="post-meta">
                                            <li><?php the_author();?></li>
                                            <li><?php echo get_the_date('jS M, Y'); ?></li>
                                        </ul>
                                        <h4><a href="<?php echo get_the_permalink(); ?>"> <?php the_title();?> </a></h4>
                                    </div>
                                </div>
                            </div>
                            <?php
                                }
                                wp_reset_postdata();
                                }
                            ?>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
    </section>
    <!-- End Blog Section -->
    

<?php

    }
    

}
Plugin::instance()->widgets_manager->register_widget_type( new Landing3_post() );
?>