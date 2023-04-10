<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class osaas_shape extends Widget_Base {

    public function get_name() {
        return 'osaas-shape';
    }

    public function get_title() {
        return __( 'oSaaS Shape', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-dual-button';
    }

    protected function register_controls() {

        $this->start_controls_section(
            'atext_style',
            [
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                'label' => __( 'Spacer', 'appilo' ),
            ]
        );
        $this->add_responsive_control(
            'space',
            [
                'label' => __( 'Space', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'default' => [
                    'size' => 50,
                ],
                'size_units' => [ 'px', 'vh', 'em' ],
                'range' => [
                    'px' => [
                        'min' => 10,
                        'max' => 1000,
                    ],
                    'em' => [
                        'min' => 0.1,
                        'max' => 20,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .osaas-spacer-inner' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->start_controls_tabs( 'tabs_shape_dividers' );

        $shapes_options = [
            '' => __( 'None', 'appilo' ),
        ];

        foreach ( Shapes::get_shapes() as $shape_name => $shape_props ) {
            $shapes_options[ $shape_name ] = $shape_props['title'];
        }
        foreach ( [
                      'top' => __( 'Top', 'appilo' ),
                      'bottom' => __( 'Bottom', 'appilo' ),
                  ] as $side => $side_label ) {
            $base_control_key = "shape_divider_$side";

            $this->start_controls_tab(
                "tab_$base_control_key",
                [
                    'label' => $side_label,
                ]
            );

            $this->add_control(
                $base_control_key,
                [
                    'label' => __( 'Type', 'appilo' ),
                    'type' => Controls_Manager::SELECT,
                    'options' => $shapes_options,
                    'render_type' => 'none',
                    'frontend_available' => true,
                ]
            );

            $this->add_control(
                $base_control_key . '_color',
                [
                    'label' => __( 'Color', 'appilo' ),
                    'type' => Controls_Manager::COLOR,
                    'condition' => [
                        "shape_divider_$side!" => '',
                    ],
                    'selectors' => [
                        "{{WRAPPER}} > .elementor-shape-$side .elementor-shape-fill" => 'fill: {{UNIT}};',
                    ],
                ]
            );

            $this->add_responsive_control(
                $base_control_key . '_width',
                [
                    'label' => __( 'Width', 'appilo' ),
                    'type' => Controls_Manager::SLIDER,
                    'default' => [
                        'unit' => '%',
                    ],
                    'tablet_default' => [
                        'unit' => '%',
                    ],
                    'mobile_default' => [
                        'unit' => '%',
                    ],
                    'range' => [
                        '%' => [
                            'min' => 100,
                            'max' => 300,
                        ],
                    ],
                    'condition' => [
                        "shape_divider_$side" => array_keys( Shapes::filter_shapes( 'height_only', Shapes::FILTER_EXCLUDE ) ),
                    ],
                    'selectors' => [
                        "{{WRAPPER}} > .elementor-shape-$side svg" => 'width: calc({{SIZE}}{{UNIT}} + 1.3px)',
                    ],
                ]
            );

            $this->add_responsive_control(
                $base_control_key . '_height',
                [
                    'label' => __( 'Height', 'appilo' ),
                    'type' => Controls_Manager::SLIDER,
                    'range' => [
                        'px' => [
                            'max' => 500,
                        ],
                    ],
                    'condition' => [
                        "shape_divider_$side!" => '',
                    ],
                    'selectors' => [
                        "{{WRAPPER}} > .elementor-shape-$side svg" => 'height: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_control(
                $base_control_key . '_flip',
                [
                    'label' => __( 'Flip', 'appilo' ),
                    'type' => Controls_Manager::SWITCHER,
                    'condition' => [
                        "shape_divider_$side" => array_keys( Shapes::filter_shapes( 'has_flip' ) ),
                    ],
                    'selectors' => [
                        "{{WRAPPER}} > .elementor-shape-$side svg" => 'transform: translateX(-50%) rotateY(180deg)',
                    ],
                ]
            );

            $this->add_control(
                $base_control_key . '_negative',
                [
                    'label' => __( 'Invert', 'appilo' ),
                    'type' => Controls_Manager::SWITCHER,
                    'frontend_available' => true,
                    'condition' => [
                        "shape_divider_$side" => array_keys( Shapes::filter_shapes( 'has_negative' ) ),
                    ],
                    'render_type' => 'none',
                ]
            );

            $this->add_control(
                $base_control_key . '_above_content',
                [
                    'label' => __( 'Bring to Front', 'appilo' ),
                    'type' => Controls_Manager::SWITCHER,
                    'selectors' => [
                        "{{WRAPPER}} > .elementor-shape-$side" => 'z-index: 2; pointer-events: none',
                    ],
                    'condition' => [
                        "shape_divider_$side!" => '',
                    ],
                ]
            );

            $this->end_controls_tab();
        }

        $this->end_controls_tabs();

        $this->end_controls_section();
    }
    public function is_reload_preview_required() {
        return true;
    }

    private function osaas_print_shape_divider( $side ) {
        $settings = $this->get_active_settings();
        $base_setting_key = "shape_divider_$side";
        $negative = ! empty( $settings[ $base_setting_key . '_negative' ] );
        $shape_path = Shapes::get_shape_path( $settings[ $base_setting_key ], $negative );
        if ( ! is_file( $shape_path ) || ! is_readable( $shape_path ) ) {
            return;
        }
        ?>
        <div class="elementor-shape elementor-shape-<?php echo esc_attr( $side ); ?>" data-negative="<?php echo var_export( $negative ); ?>">
            <?php echo file_get_contents( $shape_path ); ?>
        </div>
        <?php
    }

    protected function render() {
        $settings = $this->get_settings_for_display();

        if ($settings['shape_divider_top']) {
            $this->osaas_print_shape_divider('top');
        }

        if ($settings['shape_divider_bottom']) {
            $this->osaas_print_shape_divider('bottom');
        }

        echo '<div class="osaas-spacer">
			    <div class="osaas-spacer-inner"></div>
		  </div>';
    }
    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new osaas_shape );
?>