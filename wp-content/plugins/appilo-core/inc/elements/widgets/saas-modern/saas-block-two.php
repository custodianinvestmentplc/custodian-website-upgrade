<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class saas_block_two extends Widget_Base {

    public function get_name() {
        return 'saas-block-two';
    }

    public function get_title() {
        return __( 'SaaS Block Two', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-image-before-after';
    }

    protected function register_controls() {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Section Content', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'section_id',
            [
                'label' => __( 'Section ID', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'compare', 'appilo' ),
            ]
        );
        $this->add_control(
            'section_heading',
            [
                'label' => __( 'Section Heading', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'If you don’t have behavioral analytics, you need it!', 'appilo' ),
            ]
        );
        $this->add_control(
            'section_list',
            [
                'label' => __( 'Section List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __( ' <li> You need to know which features are most valuable by tracking the defining characteristics of each person.</li>
                                    <li> Your customers are people, not website sessions</li>
                                    <li> And your business depends on people coming back again and again as you want.</li>', 'appilo' ),
            ]
        );
        $this->add_control(
            'section_btn',
            [
                'label' => __( 'Section Button', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Read more', 'appilo' ),
            ]
        );
        $this->add_control(
            'section_btn_url', [
                'label' => __( 'Feature Button Link', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $this->add_control(
            'section_image_1', [
                'label' => __( 'Section Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/saas/featured/comp2.png',
                ],
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
            'button_style',
            [
                'label' => __( 'Button Style', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btn_hover_background',
                'label' => __( 'Button Hover Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .compare_content_item .compare_btn:before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btn_background',
                'label' => __( 'Button Background', 'appilo' ),
                'types' => [ 'classic' ,'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .compare_content_item .compare_btn',
            ]
        );
        $this->add_control(
            'button_color',
            [
                'label' => __( 'Button Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .compare_content_item .compare_btn a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'section_shape_1', [
                'label' => __( 'Section Shape One', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/saas/featured/c-shape3.png',
                ],
            ]
        );
        $this->add_control(
            'section_shape_2', [
                'label' => __( 'Section Shape Two', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/saas/featured/c-shape.png',
                ],
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();

echo '
<section  class="compare_section compare_section_two">
    <div class="container">
        <div class="compare_content_item">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="compare_img relative-position">
                        <div class="com_img zooming">
                            <img src="'.$settings['section_image_1']['url'].'" alt>
                        </div>
                        <div class="img_shape">';?>
                            <span class="compare_shape1" data-parallax='{"x" : -40}'><img src="<?php echo $settings['section_shape_1']['url'] ?>" alt></span>
                            <span class="compare_shape2" data-parallax='{"x" : 40}'><img src="<?php echo $settings['section_shape_2']['url'] ?>" alt></span>
                       <?php echo'</div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="compare_content">
                        <div class="compare_title headline pera-content">
                            <h2>'.$settings['section_heading'].'</h2>
                        </div>
                        <div class="compare_list ul-li-block">
                            <ul>
                                '.$settings['section_list'].'
                            </ul>
                            <div class="compare_btn text-center">
                                <a href="'.$settings['section_btn_url']['url'].'">'.$settings['section_btn'].'</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new saas_block_two );
?>