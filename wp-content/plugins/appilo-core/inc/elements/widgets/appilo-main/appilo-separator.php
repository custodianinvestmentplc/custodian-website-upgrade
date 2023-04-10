<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class appilo_separator extends Widget_Base {

    public function get_name() {
        return 'appilo-separator';
    }

    public function get_title() {
        return __( 'Appilo Separator', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'fab fa-autoprefixer';
    }

    protected function register_controls() {
        $this->start_controls_section(
            'section_icon',
            [
                'label' => __( 'Separator without border', 'appilo' ),
            ]
        );

        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        echo '<div class="separator no-border mb115 full-width"></div>';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new appilo_separator );
?>