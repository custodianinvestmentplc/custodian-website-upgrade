<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class dm_faq extends Widget_Base
{

    public function get_name()
    {
        return 'dm-faq';
    }

    public function get_title()
    {
        return __('Digital Marketing FAQ', 'appilo');
    }

    public function get_categories()
    {
        return ['appilo-core'];
    }

    public function get_icon()
    {
        return 'eicon-posts-group';
    }

    public function render_plain_content($instance = [])
    {
    }

    protected function register_controls()
    {

        $this->start_controls_section(
            'faq_items',
            [
                'label' => __('FAQ Items', 'appilo'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new Repeater();

        $repeater->add_control(
            'faq_title', [
                'label' => __('FAQ Title', 'appilo'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => __('How Can Start digital marketing business?', 'appilo'),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'faq_content', [
                'label' => __('FAQ Content', 'appilo'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => __('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.', 'appilo'),
                'show_label' => true,
            ]
        );

        $this->add_control(
            'faq_list',
            [
                'label' => __('FAQ List', 'appilo'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'faq_title' => __('How Can Start digital marketing business?', 'appilo'),
                        'faq_content' => __('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
', 'appilo'),
                    ],
                    [
                        'faq_title' => __('How Can Start digital marketing business?', 'appilo'),
                        'faq_content' => __('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
', 'appilo'),
                    ],
                    [
                        'faq_title' => __('How Can Start digital marketing business?', 'appilo'),
                        'faq_content' => __('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
', 'appilo'),
                    ],
                    [
                        'faq_title' => __('How Can Start digital marketing business?', 'appilo'),
                        'faq_content' => __('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
', 'appilo'),
                    ],
                ],
                'title_field' => '{{{ faq_title }}}',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_style',
            [
                'label' => __('Style', 'appilo'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'title_color',
            [
                'label' => __('Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-dm-faq-item .app-dm-faq-item-header button' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_typography',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .app-dm-faq-item .app-dm-faq-item-header button',
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __('Info Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-dm-faq-item .app-dm-faq-item-body' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'info_typography',
                'label' => __( 'Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .app-dm-faq-item .app-dm-faq-item-body',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'Icon_Style',
            [
                'label' => __( 'Icon Style', 'webangon' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'icon_color',
            [
                'label' => __('Icon Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-dm-faq-item .app-dm-faq-item-header button:before' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'background',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .app-dm-faq-item .app-dm-faq-item-header button:before',
            ]
        );
        $this->end_controls_section();

    }

    protected function render()
    {

        $settings = $this->get_settings_for_display();

//Start Blog section




        echo '<div class="app-dm-faq-content-wrapper">
                <div class="accordion" id="accordionExample">';

        if ($settings['faq_list']) {
            $index = 0;
            foreach ($settings['faq_list'] as $faq_item) {
                $index++;
                if ($index == 1) {
                    $class = 'show';
                    $class2 = '';
                } else {
                    $class = '';
                    $class2 = 'collapsed';
                }
                echo '<div class="app-dm-faq-item">
                        <div class="app-dm-faq-item-header" id="headingOne">
                            <button class="'.$class2.'" data-toggle="collapse" data-target="#collapse' . $faq_item['_id'] . '" aria-controls="collapseOne" aria-expanded="true">
                                ' . $faq_item['faq_title'] . '
                            </button>
                        </div>
                        
                        <div id="collapse' . $faq_item['_id'] . '" class="collapse '. $class .'" data-parent="#accordionExample">
                            <div class="app-dm-faq-item-body">
                                ' . $faq_item['faq_content'] . '
                            </div>
                        </div>
                    </div>';
            }
        }
        echo '</div>
            </div>';
    }



    protected function content_template()
    {
    }

}

Plugin::instance()->widgets_manager->register_widget_type(new dm_faq());