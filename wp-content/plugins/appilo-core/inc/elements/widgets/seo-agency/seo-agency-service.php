<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class seo_agency_service extends Widget_Base
{

    public function get_name()
    {
        return 'seo-agency-service';
    }

    public function get_title()
    {
        return __('Seo Agency Service', 'appilo');
    }

    public function get_categories()
    {
        return ['appilo-core'];
    }

    public function get_icon()
    {
        return 'eicon-number-field';
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

        $repeater = new Repeater();


        $repeater->add_control(
            'icon',
            [
                'label' => __('Icon', 'appilo'),
                'type' => Controls_Manager::ICONS,
                'default' => [
                    'value' => 'flaticon-light-bulb',
                    'library' => 'solid',
                ],
            ]
        );

        $repeater->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'background111',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'classic' ],
                'exclude' => ['color', 'position', 'attachment', 'repeat', 'size'],
                'selector' => '{{WRAPPER}} .apldg2-service-area .apldg2-services-slider .apldg2-single-item{{CURRENT_ITEM}} .icon-wrapper span::after',
            ]
        );
        $repeater->add_control(
            'title', [
                'label' => __('Title', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('Happy Clients', 'appilo'),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'service_item',
            [
                'label' => __( 'Items', 'appilo' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __( '<ul>
                                    <li>User Exeperience</li>
                                    <li>Information architecture</li>
                                    <li>Prototyping</li>
                                    <li>Wireframing</li>
                                    <li>UI/Design</li>
							    </ul>', 'appilo' ),
            ]
        );
        $this->add_control(
            'list',
            [
                'label' => __('Service List', 'appilo'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'title' => __('Business Marketing', 'appilo'),
                    ],
                    [
                        'title' => __('Keyword Optimization', 'appilo'),
                    ],
                    [
                        'title' => __('Marketing Research', 'appilo'),
                    ],
                    [
                        'title' => __('Email Marketing', 'appilo'),
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
            'icon_color',
            [
                'label' => __('Icon Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apldg2-service-area .apldg2-services-slider .apldg2-single-item .icon-wrapper span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'icon_size',
            [
                'label' => __( 'Icon Size', 'appilo' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 60,
                ],
                'selectors' => [
                    '{{WRAPPER}} .apldg2-service-area .apldg2-services-slider .apldg2-single-item .icon-wrapper span' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'title_color',
            [
                'label' => __('Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apldg2-service-area .apldg2-services-slider .apldg2-single-item .apldg2-headline h6' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'title_typo',
                'label' => __('Title Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apldg2-service-area .apldg2-services-slider .apldg2-single-item .apldg2-headline h6',
            ]
        );
        $this->add_control(
            'items_color',
            [
                'label' => __('Items Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apldg2-service-area .apldg2-services-slider .apldg2-single-item .apldg-service-list ul li' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'items_typo',
                'label' => __('Items Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apldg2-service-area .apldg2-services-slider .apldg2-single-item .apldg-service-list ul li',
            ]
        );
        $this->add_control(
            'btn_color',
            [
                'label' => __('Button Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apldg2-service-area .apldg2-services-slider .apldg2-single-item .apldg2-readmore-btn a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'btn_bg',
            [
                'label' => __('Button Background', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apldg2-service-area .apldg2-services-slider .apldg2-single-item .apldg2-readmore-btn a' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'btn_hover_style',
            [
                'label' => __( 'Button Hover Style', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'btn_hover_color',
            [
                'label' => __('Button Hover Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apldg2-service-area .apldg2-services-slider .apldg2-single-item .apldg2-readmore-btn a:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'btn_hover_background',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .apldg2-service-area .apldg2-services-slider .apldg2-single-item .apldg2-readmore-btn a::before',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'Service-box-style',
            [
                'label' => __('Box Style', 'appilo'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'box_bg_color',
            [
                'label' => __('Box Background', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apldg2-service-area .apldg2-services-slider .apldg2-single-item' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'box_hover_bg',
            [
                'label' => __('Box Hover Background', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apldg2-service-area .apldg2-services-slider .apldg2-single-item:hover' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_section();


    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>
        <div class="apldg2-service-area">

            <div class="apldg2-services-slider">
                <?php foreach ($settings['list'] as $item): ?>

                <div class="apldg2-single-item elementor-repeater-item-<?php echo $item['_id']; ?>">
                    <div class="icon-wrapper">
                        <span>
                            <?php Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true']); ?>
                        </span>
                    </div>
                    <div class="apldg2-headline">
                        <h6><?php echo esc_html($item['title']); ?></h6>
                    </div>
                    <div class="apldg-service-list">
                        <?php echo __($item['service_item']); ?>
                    </div>
                    <div class="apldg2-readmore-btn">
                        <a href="<?php echo esc_url($item['service_url']['url']); ?>"><i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <?php

    }



    protected function content_template()
    {
    }

}

Plugin::instance()->widgets_manager->register_widget_type(new seo_agency_service());
