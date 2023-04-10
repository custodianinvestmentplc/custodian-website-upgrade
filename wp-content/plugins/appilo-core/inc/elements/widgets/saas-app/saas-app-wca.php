<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class saas_app_wca extends Widget_Base {

   public function get_name() {
      return 'saas_app_wca';
   }

   public function get_title() {
      return __( 'Saas App Why Choose', 'appilo' );
   }
    public function get_categories() {
		return [ 'appilo-core' ];
	}
   public function get_icon() { 
        return 'eicon-post';
   }

    protected function register_controls() {

        $this->start_controls_section(
            'WCA_top_content',
            [
                'label' => __('WCA Content', 'appilo'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'select_style',
            [
                'label' => esc_html__( 'Select Style', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'style_1',
                'options' => [
                    'style_1'  => esc_html__( 'Style 1', 'plugin-name' ),
                    'style_2' => esc_html__( 'Style 2', 'plugin-name' ),
                ],
            ]
        );
        $this->add_control(
            'circle_shape_color_1',
            [
                'label' => esc_html__('Circle 1 Shape Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .circle__shape .shape.shape1' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'circle_shape_color_2',
            [
                'label' => esc_html__('Circle 2 Shape Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .circle__shape .shape.shape2' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'subtitle', [
                'label' => esc_html__( 'Subtitle', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '<span># Why</span> Choose App?' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'title', [
                'label' => esc_html__( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'You Can Maintain Yourself <br> By Our <span>Application</span>' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'info',
            [
                'label' => esc_html__( 'Information', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'Sed pellentesque lectus phasellus vivamus tempus lectus aliquam ut convallis. Urna at amet et risus dignissim arcu. Rhoncus bibendum habitant ' , 'appilo' ),
                'label_block' => true,
                'condition' => [
                    'select_style' => 'style_1',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'wca_tab_content',
            [
                'label' => __( 'Tab Content', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
//        repeater for style 1
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'tab_active',
            [
                'label' => esc_html__( 'Active Tab', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Yes', 'appilo' ),
                'label_off' => esc_html__( 'No', 'appilo' ),
                'return_value' => 'yes',
                'default' => 'no',
            ]
        );
        $repeater->add_control(
            'tab_heading',
            [
                'label' => esc_html__( 'Tab Heading', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Earn Money' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'tab_content',
            [
                'label' => esc_html__( 'Tab Content', 'appilo' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __( '<ul class="wca__list list-unstyled">
                                    <li>Refresing to get such a personal touch.</li>
                                    <li>If you are going to use a passage.</li>
                                    <li>Lorem Ipsum generators on the tend to repeat.</li>
                                    <li>Lorem Ipsum generators on the tend to repeat.</li>
                                </ul>' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'list',
            [
                'label' => esc_html__( 'WCA List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'tab_heading' => __( 'Earn Money', 'appilo' ),
                    ],
                    [
                        'tab_heading' => __( 'Get Fitness Tips', 'appilo' ),
                    ],
                    [
                        'tab_heading' => __( 'Hire  Couch', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ tab_heading }}}',
                'condition' => [
                    'select_style' => 'style_1',
                ],
            ]
        );
//        repeater for style 2
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'item_icon',
            [
                'label' => __('Icon', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater->add_control(
            'item_title',
            [
                'label' => esc_html__( 'Item Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Set your personalized spending budget' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'item_info',
            [
                'label' => esc_html__( 'Item Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Rhoncus dignissim habitant viverra mollis. Semper ullamcorper ac
                                                <br> pharetra, commodo mauris. Fringilla.' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'list_style_2',
            [
                'label' => esc_html__( 'WCA Feature List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'item_title' => __( 'Set your personalized spending budget', 'appilo' ),
                    ],
                    [
                        'item_title' => __( 'User Friendly user Interface Design Layout', 'appilo' ),
                    ],
                    [
                        'item_title' => __( 'Made With Powerful Programming Language', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ item_title }}}',
                'condition' => [
                    'select_style' => 'style_2',
                ],
            ]
        );
        $this->add_control(
            'wca_banner_image',
            [
                'label' => __('WCA Banner Image', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'wca_small_image_1',
            [
                'label' => __('WCA Small Image 1', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
                'condition' => [
                    'select_style' => 'style_2',
                ],
            ]
        );
        $this->add_control(
            'wca_small_image_2',
            [
                'label' => __('WCA Small Image 2', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
                'condition' => [
                    'select_style' => 'style_2',
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'Feature_style',
            [
                'label' => __('Feature Style', 'appilo'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'container_max_width',
            [
                'label' => esc_html__('Container Width', 'appilo'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1920,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 1450,
                ],
                'selectors' => [
                    '{{WRAPPER}} .container-1450' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'subtitle_color',
            [
                'label' => esc_html__('Subtitle Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .tx-sec-title .sub_title' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Subtitle_typo',
                'label' => esc_html__('Subtitle Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .tx-sec-title .sub_title',
            ]
        );
        $this->add_control(
            'title_color',
            [
                'label' => esc_html__('Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .tx-sec-title .title' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'title_typo',
                'label' => esc_html__('Title Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .tx-sec-title .title',
            ]
        );
        $this->add_control(
            'Info_color',
            [
                'label' => esc_html__('Info Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .tx-sec-title p' => 'color: {{VALUE}};',
                ],
                'condition' => [
                    'select_style' => 'style_1',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Info_typo',
                'label' => esc_html__('Info Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .tx-sec-title p',
                'condition' => [
                    'select_style' => 'style_1',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'tab_style',
            [
                'label' => __( 'Tab Style', 'appilo' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'active_tab_Title_color',
            [
                'label' => esc_html__('Active Tab Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .wca__tab .nav-item .nav-link.active' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .wca__list-item .content h3' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'active_tab_bg_color',
            [
                'label' => esc_html__('Active Tab BG Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .wca__tab .nav-item .nav-link.active' => 'background-color: {{VALUE}};',
                ],
                'condition' => [
                    'select_style' => 'style_1',
                ],
            ]
        );
        $this->add_control(
            'inactive_tab_Title_color',
            [
                'label' => esc_html__('Inactive Tab Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .wca__tab .nav-item .nav-link' => 'color: {{VALUE}};',
                ],
                'condition' => [
                    'select_style' => 'style_1',
                ],
            ]
        );
        $this->add_control(
            'inactive_tab_bg_color',
            [
                'label' => esc_html__('Inactive Tab BG Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .wca__tab .nav-item .nav-link' => 'background-color: {{VALUE}};',
                ],
                'condition' => [
                    'select_style' => 'style_1',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'tab_typo',
                'label' => esc_html__('Tab Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .wca__tab .nav-item .nav-link , {{WRAPPER}} .wca__list-item .content h3',
            ]
        );
        $this->add_control(
            'tab_Content_info_color',
            [
                'label' => esc_html__('Tab Info Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .wca__list li' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .wca__list-wrap .content p' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'tab_content_info_typo',
                'label' => esc_html__('Tab Info Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .wca__list li , {{WRAPPER}} .wca__list-wrap .content p',
            ]
        );
        $this->add_control(
            'tab_info_icon_color',
            [
                'label' => esc_html__('Tab Info Icon Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .wca__list li::before' => 'color: {{VALUE}};',
                ],
                'condition' => [
                    'select_style' => 'style_1',
                ],
            ]
        );
        $this->add_control(
            'tab_info_icon_bg_color',
            [
                'label' => esc_html__('Tab Info Icon BG Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .wca__list li:hover::before' => 'background-color: {{VALUE}};',
                ],
                'condition' => [
                    'select_style' => 'style_1',
                ],
            ]
        );
        $this->end_controls_section();


    }

    protected function render() {

        $settings = $this->get_settings_for_display();
?>
<?php
if ('style_1' === $settings['select_style']){
?>
    <!-- wca start -->
    <div class="wca pos-rel pt-120 pb-200">
        <div class="circle__shape">
            <span class="shape shape1"></span>
            <span class="shape shape2"></span>
        </div>
        <div class="container container-1450">
            <div class="row">
                <div class="col-xl-5 col-lg-6">
                    <div class="tx-sec-title mb-40">
                        <span class="sub_title wow fadeInUp" data-wow-delay="0s" data-wow-duration="1500ms"><?php echo $settings['subtitle']; ?></span>
                        <h2 class="title mb-30 wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1500ms"><?php echo $settings['title'] ; ?></h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s" data-wow-duration="1500ms"><?php echo $settings['info'] ; ?></p>
                    </div>
                    <div class="wca__tab-wrap">
                        <ul class="wca__tab nav nav-tabs wow fadeInUp" id="myTab" role="tablist" data-wow-delay=".9s" data-wow-duration="1500ms">
                        <?php
                            $i = 0;
                            foreach ($settings['list'] as $item){;
                            $i++;
                        ?>
                            <li class="nav-item">
                                <a class="nav-link <?php if ('yes' === $item['tab_active']){ echo "active"; } ?>" id="<?php echo $item['_id'].$i; ?>" data-toggle="tab" href="#<?php echo $item['_id']; ?>" role="tab" aria-controls="home" aria-selected="true">
                                    <?php echo $item['tab_heading']; ?>
                                </a>
                            </li>
                        <?php }; ?>
                        </ul>
                        <div class="tab-content wow fadeInUp" id="myTabContent" data-wow-delay="1s" data-wow-duration="1500ms">
                        <?php
                            $i = 0;
                            foreach ($settings['list'] as $item){;
                            $i++;
                        ?>
                            <div class="tab-pane fade show <?php if ('yes' === $item['tab_active']){ echo "active"; } ?>" id="<?php echo $item['_id']; ?>" role="tabpanel" aria-labelledby="<?php echo $item['_id'].$i; ?>">
                                <?php echo $item['tab_content']; ?>
                            </div>
                        <?php }; ?>
                        </div>
                    </div>
                </div>
                <div class="wca__img">
                    <img src="<?php echo $settings['wca_banner_image']['url']; ?>" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- wca end -->
<?php
}else{ ?>
    <!-- wca start -->
    <div class="wca pt-170 pb-120">
        <div class="circle__shape circle__shape-right">
            <span class="shape shape1"></span>
            <span class="shape shape2"></span>
        </div>
        <div class="wca__image-bg">
            <div class="container container-1450">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="wca__image">
                            <img class="wow fadeInUp" data-wow-delay="0s" data-wow-duration="1500ms" src="<?php echo $settings['wca_banner_image']['url']; ?>" alt="">
                            <div class="sml-img1 wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="1500ms">
                                <img src="<?php echo $settings['wca_small_image_1']['url']; ?>" alt="">
                            </div>
                            <div class="sml-img2 wow fadeInRight" data-wow-delay=".6s" data-wow-duration="1500ms">
                                <img src="<?php echo $settings['wca_small_image_2']['url']; ?>" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="tx-sec-title mb-20">
                            <span class="sub_title wow fadeInUp" data-wow-delay="0s" data-wow-duration="1500ms" ><?php echo $settings['subtitle']; ?></span>
                            <h2 class="title wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1500ms" >
                                <?php echo $settings['title'] ; ?>
                            </h2>
                        </div>
                        <div class="wca__list-wrap">
                        <?php
                            foreach ($settings['list_style_2'] as $item){;
                        ?>
                            <div class="wca__list-item wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1500ms">
                                <span class="icon"><img src="<?php echo $item['item_icon']['url']; ?>" alt=""></span>
                                <div class="content">
                                    <h3><?php echo $item['item_title']; ?></h3>
                                    <p><?php echo $item['item_info']; ?></p>
                                </div>
                            </div>
                        <?php }; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- wca end -->
<?php
}
?>

<?php

    }

    protected function content_template() {}

   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new saas_app_wca() );
?>