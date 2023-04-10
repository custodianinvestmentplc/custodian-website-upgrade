<?php

namespace Elementor;

use Appilo_Core;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class dm_tab extends Widget_Base
{

    public function get_name()
    {
        return 'dm-tab';
    }

    public function get_title()
    {
        return __('Digital Marketing Tabs', 'appilo');
    }

    public function get_categories()
    {
        return ['appilo-core'];
    }

    public function get_icon()
    {
        return 'eicon-sitemap';
    }

    public function render_plain_content($instance = [])
    {
    }

    protected function register_controls()
    {


        $this->start_controls_section(
            'pm',
            [
                'label' => __('Tabs', 'appilo'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new Repeater();
        $repeater->add_control(
            'tab_title',
            [
                'label' => __('Tab Title', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('Interface Design', 'appilo'),
            ]
        );
        $repeater->add_control(
            'tab_desc',
            [
                'label' => __( 'Tab Description', 'appilo' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __( 'Web designing in a powerful way of just not an only professions, how in a passion for our company. We have to a tendency to believe thes that smart looking of any website.This Our History to a tendency to believe thes that smart looking website is the first impression.', 'plugin-domain' ),
            ]
        );
        $this->add_control(
            'tab_list',
            [
                'label' => __('Tab List', 'appilo'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'tab_title' => 'Interface Design',
                    ],
                    [
                        'tab_title' => 'Website Development',
                    ],

                ],
                'title_field' => '{{{ tab_title }}}',
            ]
        );
        $this->end_controls_section();


        $this->start_controls_section(
            'active_title_style',
            [
                'label' => __('Active Title Style', 'appilo'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'tab_active_title_color',
            [
                'label' => __('Active Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-dm-benifit-tab-btn .nav-tabs .nav-link.active' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'Title_typography',
                'label' => __( 'Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .app-dm-benifit-tab-btn .nav-tabs .nav-link',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'active_background',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .app-dm-benifit-tab-btn .nav-tabs .nav-link.active',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'inactive_tab_style',
            [
                'label' => __( 'Inactive Title Style', 'webangon' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'in_active_title_color',
            [
                'label' => __('Inactive Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-dm-benifit-tab-btn .nav-tabs .nav-link' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'desc_style',
            [
                'label' => __( 'Description Style', 'webangon' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'description_color',
            [
                'label' => __('Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-dm-benifit-tab-text.app-dm-headline.pera-content' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'desc_typography',
                'label' => __( 'Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .app-dm-benifit-tab-text.app-dm-headline.pera-content',
            ]
        );
        $this->end_controls_section();

    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();

    echo '<div class="app-dm-benifit-tab-area">
                <div class="app-dm-benifit-tab-btn">
                    <ul id="tabs" class="nav text-capitalize  nav-tabs">';

                        if ($settings['tab_list']) {
                            $i = 0;
                            foreach ($settings['tab_list'] as $tab) {
                                $i++;
                                if($i == 1){
                                    $active = 'active';
                                    $show = 'show';
                                }else{
                                    $active = '';
                                    $show = '';
                                }
                                echo '<li class="nav-item"><a href="#" data-target="#' . $tab['_id'] . '" data-toggle="tab" class="nav-link text-capitalize '.$active.' '. $show .' ">' . $tab['tab_title'] . '</a></li>';
                            }
                        }

            echo '</ul>
                </div>
                <div class="app-dm-benifit-tab-inner-content">
                    <div id="tabsContent" class="tab-content">';

                        if ($settings['tab_list']) {
                            $i = 0;
                            foreach ($settings['tab_list'] as $tab) {
                                $i++;
                                if($i == 1){
                                    $active = 'active';
                                    $show = 'show';
                                }else{
                                    $active = '';
                                    $show = '';
                                }

                        echo '<div id="' . $tab['_id'] . '" class="tab-pane fade '. $active .' '. $show .'">
                            <div class="app-dm-benifit-tab-text app-dm-headline pera-content">
                                ' . $tab['tab_desc'] . '
                            </div>
                        </div>';
                            }
                        }
                        echo '</div>
                </div>
            </div>';


    }



    protected function content_template()
    {
    }

}

Plugin::instance()->widgets_manager->register_widget_type(new dm_tab());