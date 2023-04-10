<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class itsource_animate_typer extends Widget_Base
{

    public function get_name()
    {
        return 'itsource-animate-typer';
    }

    public function get_title()
    {
        return __('iTsource Animate Typer', 'appilo');
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
            'content',
            [
                'label' => __('Title Content', 'appilo'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'title',
            [
                'label' => __('Title', 'appilo'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => __('A Better IT Solution ', 'appilo'),
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'animate_title',
            [
                'label' => __('Animate Title', 'appilo'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => __('Your Business ', 'appilo'),
            ]
        );

        $this->add_control(
            'list',
            [
                'label' => __( 'Repeater List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'animate_title' => __( 'Your Business', 'appilo' ),
                    ],[
                        'animate_title' => __( 'Your Company', 'appilo' ),
                    ],[
                        'animate_title' => __( 'Your Customer', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ animate_title }}}',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'section_style',
            [
                'label' => __( 'Title Style', 'webangon' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'title_color',
            [
                'label' => __('Title Color', 'appilo'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-nw-banner-text h1' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'content_typography',
                'label' => __('Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .it-nw-banner-text h1',
            ]
        );
        $this->end_controls_section();

    }

    protected function render()
    {

        $settings = $this->get_settings_for_display();

        echo '
		        <div class="it-nw-banner-text headline pera-content">
		                <h1 class="cd-headline clip is-full-width">' . $settings['title'] . '
							<span class="cd-words-wrapper">';
                    $index = 0;
                    if ( $settings['list'] ) {
                        foreach (  $settings['list'] as $item ) {
                            $index ++;
                            if ($index == 1){
                                $class = 'is-visible';
                            }else{
                                $class = '';
                            }
                            echo '<b class=" '.$class.' ">' . $item['animate_title'] . '</b>';
                        }
                    }
        echo '</div>';
    }



    protected function content_template()
    {
    }

}

Plugin::instance()->widgets_manager->register_widget_type(new itsource_animate_typer());