<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class nft_faq extends Widget_Base {

   public function get_name() {
      return 'nft_faq';
   }

   public function get_title() {
      return __( 'NFT FAQ', 'appilo' );
   }
    public function get_categories() {
		return [ 'appilo-core' ];
	}
   public function get_icon() { 
        return 'eicon-post';
   }

    protected function register_controls() {

        $this->start_controls_section(
            'faq_content',
            [
                'label' => __('Content', 'appilo'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'title',
            [
                'label' => esc_html__( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( '3 Easy Step to Create & Selling Your NFTs.', 'appilo' ),
            ]
        );
        $this->add_control(
            'after_title_img',
            [
                'label' => __('After Title Image', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'faq_item',
            [
                'label' => __( 'FAQ Item', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'faq_title', [
                'label' => esc_html__( 'Title', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Create your Account & Add wallet' , 'plugin-name' ),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'faq_info', [
                'label' => esc_html__( 'Content', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'As a pleasant surprise for crypto fans, a unique “Cola Can” is capturing the attention of guests at the acclaimed Art Now Event staged at the historic Raffles Arcade, Singapore. Art Now is a  Can you imagine a DogeCola giant piece of art?' , 'plugin-name' ),
                'show_label' => true,
            ]
        );

        $this->add_control(
            'list',
            [
                'label' => esc_html__( 'FAQ List', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'faq_title' => esc_html__( 'Create your Account & Add wallet', 'plugin-name' ),
                    ],
                    [
                        'faq_title' => esc_html__( 'Create your Account & Add wallet', 'plugin-name' ),
                    ],
                    [
                        'faq_title' => esc_html__( 'Create your Account & Add wallet', 'plugin-name' ),
                    ],
                ],
                'title_field' => '{{{ faq_title }}}',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'video_content',
            [
                'label' => __( 'Video Content', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'video_play_img',
            [
                'label' => __('Video Button BG Image', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'video_link',
            [
                'label' => esc_html__( 'Video Link', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => esc_html__( 'https://your-link.com', 'plugin-name' ),
                'default' => [
                    'url' => 'https://www.youtube.com/watch?v=NNQLJcJEzv0',
                    'is_external' => true,
                    'nofollow' => true,
                    'custom_attributes' => '',
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'faq_stylec',
            [
                'label' => __('FAQ Style', 'appilo'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'container_max_width',
            [
                'label' => esc_html__( 'Container Width', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
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
                    'size' => 1200,
                ],
                'selectors' => [
                    '{{WRAPPER}} .nft-container-1200' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'title_color',
            [
                'label' =>   esc_html__( 'Title Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .nft-section-title h2' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' =>   esc_html__( 'Title Typography', 'appilo' ),
                'name' => 'title_typography',
                'selector' => '{{WRAPPER}} .nft-section-title h2',

            ]
        );
        $this->add_control(
            'faq_title_color',
            [
                'label' =>   esc_html__( 'FAQ Title Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .nft-faq-header button' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'faq_title_typography',
                'label' =>   esc_html__( 'FAQ Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .nft-faq-header button',

            ]
        );
        $this->add_control(
            'faq_info_color',
            [
                'label' =>   esc_html__( 'FAQ Info Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .nft-faq-accordion .nft-faq-body' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'faq_Info_typography',
                'label' =>   esc_html__( 'FAQ Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .nft-faq-accordion .nft-faq-body',

            ]
        );
        $this->add_control(
            'faq_box_bg_color',
            [
                'label' =>   esc_html__( 'FAQ Box BG Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .nft-faq-accordion .nft-faq' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'faq_number_style',
            [
                'label' => esc_html__( 'FAQ Number Style', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'faq_number_color',
            [
                'label' =>   esc_html__( 'FAQ Number Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .nft-faq-header span' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'faq_number_bg',
                'label' => esc_html__( 'Faq Number BG', 'plugin-name' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .nft-faq-header span',
            ]
        );
        $this->add_control(
            'faq_number_line_color',
            [
                'label' =>   esc_html__( 'FAQ Number Line Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .nft-faq-accordion:before' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'play_button_style',
            [
                'label' => esc_html__( 'Play Button Style', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'play_btn_bg',
            [
                'label' =>   esc_html__( 'Play Button BG', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .nft-video-play-area .nft-video-play-btn a' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'play_btn_icon_color',
            [
                'label' =>   esc_html__( 'Play Button Icon Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .nft-video-play-area .nft-video-play-btn a i' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {

        $settings = $this->get_settings_for_display();
?>

        <!-- Start of FAQ section
    ============================================= -->
        <div id="nft-faq-video" class="nft-faq-video-section">
            <div class="container nft-container-1200">
                <div class="nft-faq-video-content">
                    <div class="nft-section-title  nft-headline pera-content">
                        <h2>
                            <?php echo $settings['title']; ?>
                            <span class="right-icon"><img src="<?php echo $settings['after_title_img']['url']; ?>"></span>
                        </h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="nft-faq-content">
                                <div class="nft-faq-accordion position-relative">
                                    <div class="accordion" id="accordionExample">
                                        <?php
                                            $i = 0;
                                            foreach ($settings['list'] as $item):
                                                $i++;
                                                if ($i == 1){
                                                    $show_class = 'show';
                                                }else{
                                                    $show_class = '';
                                                }
                                        ?>
                                        <div class="nft-faq">
                                            <div class="nft-faq-header" id="headingOne">
                                                <span>0<?php echo $i;  ?></span>
                                                <button class="" data-toggle="collapse" data-target="#<?php echo $item['_id']; ?>" aria-controls="collapseOne">
                                                    <?php echo $item['faq_title']; ?>
                                                </button>
                                            </div>
                                            <div id="<?php echo $item['_id']; ?>" class="collapse <?php echo $show_class; ?>" data-parent="#accordionExample">
                                                <div class="nft-faq-body">
                                                    <?php echo $item['faq_info']; ?>
                                                </div>
                                            </div>
                                        </div>

                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="nft-video-play-area">
                                <div class="nft-video-play-img">
                                    <img src="<?php echo $settings['video_play_img']['url']; ?>" alt="">
                                </div>
                                <div class="nft-video-play-btn">
                                    <a class="d-flex justify-content-center align-items-center video_lightbox" href="<?php echo $settings['video_link']['url']; ?>"><i class="fas fa-play"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of FAQ section
            ============================================= -->

<?php

    }
    protected function content_template() {

    }

   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new nft_faq() );
?>