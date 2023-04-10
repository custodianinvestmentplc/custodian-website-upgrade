<?php
// Adds widget: SaaS Classic Newsletter
class Saasclassicnewslette_Widget extends WP_Widget {

    function __construct() {
        parent::__construct(
            'saasclassicnewslette_widget',
            esc_html__( 'SaaS Classic Newsletter', 'appilo' ),
            array( 'description' => esc_html__( 'SaaS Classic Footer Newsletter', 'appilo' ), ) // Args
        );
    }

    private $widget_fields = array(
        array(
            'label' => 'Info',
            'id' => 'saas_classic_info',
            'type' => 'textarea',
        ),
        array(
            'label' => 'Form Shortcodes',
            'id' => 'saas_classic_form',
            'type' => 'textarea',
        ),
        array(
            'label' => 'Facebook Link',
            'id' => 'saas_classic_fb_link',
            'type' => 'text',
        ),
        array(
            'label' => 'Behance Link',
            'id' => 'saas_classic_bh_link',
            'type' => 'text',
        ),
        array(
            'label' => 'Twitter Link',
            'id' => 'saas_classic_tw_link',
            'type' => 'text',
        ),
        array(
            'label' => 'Dribble Link',
            'id' => 'saas_classic_db_link',
            'type' => 'text',
        ),
    );

    public function widget( $args, $instance ) {
        echo $args['before_widget'];

        if ( ! empty( $instance['title'] ) ) {
            echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
        }

        echo'<div class="s2_footer_social">
                <p>'.$instance['saas_classic_info'].'</p>
                '.do_shortcode($instance['saas_classic_form']).'';
         if ( ! empty( $instance['saas_classic_fb_link'] ) || ! empty( $instance['saas_classic_fb_link'] ) ) {
             echo'<a href="'.$instance['saas_classic_fb_link'].'"><i class="fb-bg fab fa-facebook-f "></i></a>';
         }
         if ( ! empty( $instance['saas_classic_bh_link'] ) || ! empty( $instance['saas_classic_bh_link'] ) ) {
             echo'<a href="'.$instance['saas_classic_bh_link'].'"><i class="fb-bg fab fa-behance"></i></a>';
         }
         if ( ! empty( $instance['saas_classic_tw_link'] ) || ! empty( $instance['saas_classic_tw_link'] ) ) {
             echo'<a href="'.$instance['saas_classic_tw_link'].'"><i class="fb-bg fab fa-twitter"></i></a>';
         }
         if ( ! empty( $instance['saas_classic_db_link'] ) || ! empty( $instance['saas_classic_db_link'] ) ) {
             echo'<a href="'.$instance['saas_classic_db_link'].'"><i class="fb-bg fab fa-dribbble"></i></a>';
         }

         echo'</div>';

        echo $args['after_widget'];
    }

    public function field_generator( $instance ) {
        $output = '';
        foreach ( $this->widget_fields as $widget_field ) {
            $default = '';
            if ( isset($widget_field['default']) ) {
                $default = $widget_field['default'];
            }
            $widget_value = ! empty( $instance[$widget_field['id']] ) ? $instance[$widget_field['id']] : esc_html__( $default, 'appilo' );
            switch ( $widget_field['type'] ) {
                case 'textarea':
                    $output .= '<p>';
                    $output .= '<label for="'.esc_attr( $this->get_field_id( $widget_field['id'] ) ).'">'.esc_attr( $widget_field['label'], 'appilo' ).':</label> ';
                    $output .= '<textarea class="widefat" id="'.esc_attr( $this->get_field_id( $widget_field['id'] ) ).'" name="'.esc_attr( $this->get_field_name( $widget_field['id'] ) ).'" rows="6" cols="6" value="'.esc_attr( $widget_value ).'">'.$widget_value.'</textarea>';
                    $output .= '</p>';
                    break;
                default:
                    $output .= '<p>';
                    $output .= '<label for="'.esc_attr( $this->get_field_id( $widget_field['id'] ) ).'">'.esc_attr( $widget_field['label'], 'appilo' ).':</label> ';
                    $output .= '<input class="widefat" id="'.esc_attr( $this->get_field_id( $widget_field['id'] ) ).'" name="'.esc_attr( $this->get_field_name( $widget_field['id'] ) ).'" type="'.$widget_field['type'].'" value="'.esc_attr( $widget_value ).'">';
                    $output .= '</p>';
            }
        }
        echo $output;
    }

    public function form( $instance ) {
        $title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( '', 'appilo' );
        ?>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title:', 'appilo' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
        <?php
        $this->field_generator( $instance );
    }

    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        foreach ( $this->widget_fields as $widget_field ) {
            switch ( $widget_field['type'] ) {
                default:
                    $instance[$widget_field['id']] = ( ! empty( $new_instance[$widget_field['id']] ) ) ? strip_tags( $new_instance[$widget_field['id']] ) : '';
            }
        }
        return $instance;
    }
}

function register_saasclassicnewslette_widget() {
    register_widget( 'Saasclassicnewslette_Widget' );
}
add_action( 'widgets_init', 'register_saasclassicnewslette_widget' );