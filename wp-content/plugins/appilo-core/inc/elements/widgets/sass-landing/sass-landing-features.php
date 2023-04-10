<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class sass_landing_features extends Widget_Base
{

    public function get_name()
    {
        return 'seo-landing-features';
    }

    public function get_title()
    {
        return __('Sass Features', 'appilo');
    }

    public function get_categories()
    {
        return ['appilo-core'];
    }

    public function get_icon()
    {
        return 'eicon-banner';
    }

    public function render_plain_content($instance = [])
    {
    }

    protected function register_controls()
    {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __('Content', 'appilo'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
			'animation_time',
			[
				'label' => esc_html__( 'Animation Duration', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 0,
				'max' => 10,
				'step' => 1,
				'default' => 0,
			]
		);
        
        $repeater->add_control(
			'icon',
			[
				'label' => esc_html__( 'Icon', 'appilo' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-star',
					'library' => 'solid',
				],
			]
		);

		$repeater->add_control(
			'title', [
				'label' => esc_html__( 'Title', 'appilo' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Terms & Conditions' , 'appilo' ),
				'show_label' => false,
			]
		);

		$repeater->add_control(
			'content', [
				'label' => esc_html__( 'Content', 'appilo' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => esc_html__( 'Content' , 'appilo' ),
				'show_label' => false,
			]
		);

		$this->add_control(
			'features',
			[
				'label' => esc_html__( 'Features', 'appilo' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'title' => esc_html__( 'Terms & Conditions', 'appilo' ),
						'content' => esc_html__( 'Increase productivity with a simple to Urna sit placerat tellus at est ', 'appilo' ),
					],
				],
				'title_field' => '{{{ title }}}',
			]
		);

        $this->end_controls_section();



        $this->start_controls_section(
            'content_style',
            [
                'label' => __('Content Style', 'appilo'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );


        $this->add_control(
            'wrapper_border_color',
            [
                'label' => __('Border Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sl-feature-item' => 'border-color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
			'icon_option',
			[
				'label' => esc_html__( 'Icon', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

        $this->add_control(
            'icon_color',
            [
                'label' => __('Icon Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sl-feature-item .icon svg path' => 'fill: {{VALUE}}',
                    '{{WRAPPER}} .sl-feature-item .icon i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'icon_hover_color',
            [
                'label' => __('Icon Hover Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sl-feature-item:hover .icon svg path' => 'fill: {{VALUE}}',
                    '{{WRAPPER}} .sl-feature-item:hover .icon i' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'icon_border_color',
            [
                'label' => __('Icon Border Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sl-feature-item .icon' => 'border-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'icon_hover_bg_color',
            [
                'label' => __('Icon Hover BG Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sl-feature-item:hover .icon' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
			'title_option',
			[
				'label' => esc_html__( 'Title', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

        $this->add_control(
            'title_color',
            [
                'label' => __('Title', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sl-feature-item .title' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'title_typo',
                'label' => __('SubTitle Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .sl-feature-item .title',
            ]
        );

        $this->add_control(
			'content_option',
			[
				'label' => esc_html__( 'Content', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

        $this->add_control(
            'content_color',
            [
                'label' => __('Content Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sl-feature-item .cotnent' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'content_typo',
                'label' => __('Content Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .sl-feature-item .cotnent',
            ]
        );

        $this->add_control(
			'arrow_option',
			[
				'label' => esc_html__( 'Arrow Icon', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

        $this->add_control(
            'arrow_color',
            [
                'label' => __('Arrow Icon Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sl-feature-col:not(:last-child)::before' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'arrow_border_color',
            [
                'label' => __('Arrow Icon Border Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sl-feature-col:not(:last-child)::after' => 'color: {{VALUE}}',
                ],
            ]
        );
        
        
        $this->end_controls_section();


    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>
        
        <div class="sl-features">
            <div class="container maxw_1300">
                <div class="row no-gutters">

                    <?php 
                    foreach($settings['features'] as $feature):
                    ?>
                    <div class="col-lg-3 col-md-6 sl-feature-col">
                        <div class="sl-feature-item wow fadeInUp" data-wow-delay="<?php echo $feature['animation_time']; ?>s" data-wow-duration="1500ms">
                            <?php if(!empty($feature['icon'])): ?>
                            <div class="icon">
                                <?php Icons_Manager::render_icon( $feature['icon'], [ 'aria-hidden' => 'true' ] ); ?>
                            </div>
                            <?php endif; ?>

                            <?php if(!empty($feature['title'])): ?>
                            <h3 class="title"><?php echo $feature['title'] ?></h3>
                            <?php endif; ?>

                            <?php if(!empty($feature['content'])): ?>
                            <div class="cotnent">
                                <?php echo $feature['content']; ?>
                            </div>
                            <?php endif; ?>
                            
                        </div>
                    </div>
                    <?php endforeach; ?>

                </div>
            </div>
            
        </div>

        <?php

    }


}

Plugin::instance()->widgets_manager->register_widget_type(new sass_landing_features());
