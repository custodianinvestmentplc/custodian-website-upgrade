<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class galaxy_portfolio extends Widget_Base {

    public function get_name() {
        return 'galaxy-portfolio';
    }

    public function get_title() {
        return __( 'Portfolio', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-slides';
    }

    protected function register_controls() {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Content', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'portfolio_cat_title',
            [
                'label' => __( 'Portfolio Category Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '', 'appilo' ),
            ]
        );
        $this->add_control(
            'portfolio_cat_list',
            [
                'label' => __( 'Portfolio Category List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'portfolio_cat_title' => __('webdesign', 'appilo'),
                    ],
                ],
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'portfolio_photo', [
                'label' => __( 'Portfolio Photo', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/galaxy/cv/portfolio/img-1.jpg',
                ],
            ]
        );
        $repeater->add_control(
            'portfolio_cat',
            [
                'label' => __( 'Portfolio Category', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'portfolio_width',
            [
                'label' => __( 'Portfolio Width', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => '',
                'options' => [
                    'width1'  => __( 'Width One', 'appilo' ),
                    'width2' => __( 'Width Two', 'appilo' ),
                ],
            ]
        );
        $this->add_control(
            'portfolio_list',
            [
                'label' => __( 'Portfolio List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'portfolio_photo' => get_template_directory_uri(). '/img/galaxy/cv/portfolio/img-1.jpg',
                    ],
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'portfolio_overlay',
                'label' => __( 'Overlay Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .cv-portfolio-grids .grid .box-inner:after',
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        echo'<!-- start cv-portfolio -->
                <section class="cv-portfolio" >
                            <div class="sortable-gallery">
                                <div class="sorting-filters">
                                    <ul>
                                        <li><a data-filter="*" href="#" class="current">All</a></li>';

                                    if ( $settings['portfolio_cat_list'] ) {
                                        foreach ($settings['portfolio_cat_list'] as $portfolio_title) {
                                            echo '<li><a data-filter=".' . $portfolio_title['portfolio_cat_title'] . '" href="#">' . $portfolio_title['portfolio_cat_title'] . '</a></li>';
                                            }
                                        }

                                    echo'</ul>
                                </div>
                
                                <div class="cv-portfolio-grids masonry-gallery sorting-container popup-gallery">';

                                if ( $settings['portfolio_list'] ) {
                                    foreach (  $settings['portfolio_list'] as $portfolio ) {
                                        echo '<div class="grid grid-item '.$portfolio['portfolio_width'].' '.$portfolio['portfolio_cat'].'">
                                                <div class="box-inner">
                                                    <a href="' . $portfolio['portfolio_photo']['url'] . '">
                                                        <i class="fas fa-search"></i>
                                                        <img src="' . $portfolio['portfolio_photo']['url'] . '" alt class="img-fluid">
                                                    </a>
                                                    <div class="top-border"></div>
                                                    <div class="bottom-border"></div>
                                                </div>
                                            </div>';
                                        }
                                    }

                                echo'</div>
                            </div>
                    </section>
              <!-- end cv-portfolio -->';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new galaxy_portfolio );
?>