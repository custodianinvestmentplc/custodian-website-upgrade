<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class saas_classic_faq extends Widget_Base {

    public function get_name() {
        return 'saas-classic-faq';
    }

    public function get_title() {
        return __( 'SaaS Classic FAQ', 'appilo' );
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
                'label' => __( 'FAQ', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'section_id',
            [
                'label' => __( 'Section ID', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 's2-faq', 'appilo' ),
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'faq_items',
            [
                'label' => __( 'FAQ Items', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'faq_title', [
                'label' => __( 'FAQ Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '01. SaaS versus on-premise: How do I choose?' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'faq_content', [
                'label' => __( 'FAQ Content', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Robion has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.' , 'appilo' ),
                'show_label' => true,
            ]
        );

        $this->add_control(
            'faq_list',
            [
                'label' => __( 'FAQ List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'faq_title' => __( '02. SaaS versus on-premise: How do I choose?', 'appilo' ),
                        'faq_content' => __( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Robion has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'appilo' ),
                    ],
                    [
                        'faq_title' => __( '02. SaaS versus on-premise: How do I choose?', 'appilo' ),
                        'faq_content' => __( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Robion has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'appilo' ),
                    ],
                    [
                        'faq_title' => __( '02. SaaS versus on-premise: How do I choose?', 'appilo' ),
                        'faq_content' => __( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Robion has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'appilo' ),
                    ],
                    [
                        'faq_title' => __( '02. SaaS versus on-premise: How do I choose?', 'appilo' ),
                        'faq_content' => __( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Robion has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ faq_title }}}',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_style',
            [
                'label' => __( 'Style', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'icon_color',
            [
                'label' => __( 'Faq Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .s2-faq_section .s2_faq_content button:after' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'heading_color',
            [
                'label' => __( 'Faq Heading Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .s2-faq_section .s2_faq_content button' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __( 'Faq Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .s2-faq_section .s2_faq_content .s2_faq .s2_faq-body' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {

        $settings = $this->get_settings_for_display();
        $uniqueid = uniqid();
    echo'<section  class="s2-faq_section relative-position">
    <div class="container">
        <!-- /section title -->
        <div class="s2_faq_content">
            <div class="accordion" id="'.$uniqueid.'accordionExample">';

                if ( $settings['faq_list'] ) {
                    $index = 0;
                    $index2 = 1;
                    foreach ($settings['faq_list'] as $faq_item) {
                        $index++;
                        if ($index == 1){
                            $class = 'show';
                            $class2 = '';
                        }else{
                            $class = '';
                            $class2 = 'collapsed';
                        }
                        echo '<div class="s2_faq">
                            <div class="s2_faq-header" id="heading'.$index2++.'">
                                <button class="'.$class2.'" data-toggle="collapse" data-target="#collapse' . $faq_item['_id'] . '">
                                    ' . $faq_item['faq_title'] . '
                                </button>
                            </div>
                            <div id="collapse' . $faq_item['_id'] . '" class="collapse '.$class.'" data-parent="#'.$uniqueid.'accordionExample">
                                <div class="s2_faq-body">
                                    ' . $faq_item['faq_content'] . '
                                </div>
                            </div>
                        </div>';
                    }
                }
                echo'</div>
        </div>
    </div>
</section>';
    }



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new saas_classic_faq );
?>