<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class galaxy_faq extends Widget_Base {

    public function get_name() {
        return 'galaxy-faq';
    }

    public function get_title() {
        return __( 'Faq', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-radio';
    }

    protected function register_controls() {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Content', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'faq_style',
            [
                'label' => __( 'Faq Style', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'center',
                'options' => [
                    'app-landing-faq'  => __( 'Faq Style One', 'appilo' ),
                    'agency-faq' => __( 'Faq Style Two', 'appilo' ),
                    'product-landing-faq' => __( 'Faq Style Three', 'appilo' ),
                ],
            ]
        );
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'faq_title', [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '1. How can we edit this App?' , 'appilo' ),
            ]
        );
        $repeater->add_control(
            'faq_text', [
                'label' => __( 'Content', 'appilo' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __( 'Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum.is simply dummy xt of the printing massa sit amit.' , 'appilo' ),
            ]
        );
        $this->add_control(
            'faq_list',
            [
                'label' => __( 'Faq List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'faq_title' => __( '1. How can we edit this App?', 'appilo' ),
                        'faq_text' => __( 'Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum.is simply dummy xt of the printing massa sit amit.', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ faq_title }}}',
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        $uniqueid = uniqid();
        echo '<!-- start app-landing-faq -->
                <section class="'.$settings['faq_style'].'">
                        <div class="content">
                                <div class="panel-group faq-accordion app-accordion" id="'.$uniqueid.'accordion">';
                                    if ( $settings['faq_list'] ) {
                                        $index = 0;
                                        foreach (  $settings['faq_list'] as $faq ) {
                                            $index++;
                                            if ($index == 1){
                                                $class = 'show';
                                                $class2 = '';
                                            }else{
                                                $class = '';
                                                $class2 = 'collapsed';
                                            }
                                            echo ' <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <button class="'.$class2.'" data-toggle="collapse" data-target="#collapse'.$faq['_id'].'"  aria-controls="collapse'.$faq['_id'].'">
                                                    '.$faq['faq_title'].'
                                                    </button>
                                                </div>
                                                <div id="collapse'.$faq['_id'].'" data-parent="#'.$uniqueid.'accordion" class="panel-collapse collapse '.$class.'">
                                                    <div class="panel-body">
                                                        <p>'.$faq['faq_text'].'</p>
                                                    </div>
                                                </div>
                                            </div> ';
                                            }
                                        }
                               echo' </div> <!-- end accordion -->
                        </div>
                </section>
            <!-- start app-landing-faq -->';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new galaxy_faq );
?>