<?php
namespace Elementor;
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class medi_blog extends Widget_Base {

   public function get_name() {
      return 'medi-blog';
   }

   public function get_title() {
      return __( 'Medical Blog', 'appilo' );
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
                'default' => __( 'Software', 'appilo' ),
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
                    '{{WRAPPER}} .medi-app-blog-img-text .medi-app-blog-text h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'post_meta_color',
            [
                'label' => __( 'Meta Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .medi-app-blog-img-text .medi-app-blog-text .medi-app-blog-meta' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'cate_color',
            [
                'label' => __( 'Category Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .medi-app-blog-img-text .medi-app-blog-cat' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'cate_bg',
            [
                'label' => __( 'Category Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .medi-app-blog-img-text .medi-app-blog-cat' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'rm_bg',
            [
                'label' => __( 'Read More', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .medi-app-blog-img-text .medi-app-blog-text .medi-app-blog-more:after' => 'background-color: {{VALUE}}',
                    '{{WRAPPER}} .medi-app-blog-img-text .medi-app-blog-text .medi-app-blog-more' => 'color: {{VALUE}}',
                ],
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
                'selector' => '{{WRAPPER}} .medi-app-blog-img-text .medi-app-blog-text',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'image_border',
                'label' => __( 'Item Border', 'appilo' ),
                'selector' => '{{WRAPPER}} .medi-app-blog-img-text .medi-app-blog-text',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'section_shadow',
                'label' => __( 'Blog Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .medi-app-blog-img-text .medi-app-blog-text',
            ]
        );
        $this->add_responsive_control(
            'content_margin',
            [
                'label' => __( 'Content Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .medi-app-blog-img-text .medi-app-blog-text' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'section_padding',
            [
                'label' => __( 'Section Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .medical-blog-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'sec_bg',
                'label' => __( 'BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .medical-blog-section',
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

        $delay = 150;
        $animate_delay = 1;


    echo '<!-- Start of Blog section
    ============================================= -->
    <section  class="medical-blog-section position-relative">
        
   <div class="medi-app-blog-content">
                <div class="row justify-content-center">';
                    if( $wp_query->have_posts() ) {
                        while( $wp_query->have_posts() ) {
                            $wp_query->the_post();
                  echo '<div class="col-lg-4 col-md-6">
                        <div class="medi-app-blog-img-text wow fadeFromUp" data-wow-delay="'.appilo_animate('100').'" data-wow-duration="1000ms">
                            <div class="medi-app-blog-img position-relative">';
                            if (has_post_thumbnail()) {
                                the_post_thumbnail('full');
                            }
                            echo '<span class="medi-app-blog-cat">'.appilo_single_category().'</span>
                            </div>
                            <div class="medi-app-blog-text">
                                <div class="medi-app-blog-meta">
                                   '.get_the_author_posts_link().'
                                    <a href="' . get_the_permalink() . '">' . get_the_time('m/j/y') . '</a>
                                </div>
                                <h3><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></h3>
                                <a class="medi-app-blog-more" href="' . get_the_permalink() . '">Read More</a>
                            </div>
                        </div>
                    </div>';
                        }
                        wp_reset_postdata();
                       }
                echo'</div>
            </div>
    </section>
<!-- End of Blog section
    ============================================= --> ';
    }



    protected function content_template() {}

   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new medi_blog );
?>