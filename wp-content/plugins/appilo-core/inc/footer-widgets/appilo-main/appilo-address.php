<?php
// Adds widget: Appilo Address widget
class Appiloaddresswidget_Widget extends WP_Widget {

    function __construct() {
        parent::__construct(
            'appiloaddresswidget_widget',
            esc_html__( 'Appilo Address widget', 'appilo' ),
            array( 'description' => esc_html__( 'Appilo footer address widget', 'appilo' ), ) // Args
        );
    }

    private $widget_fields = array(
        array(
            'label' => 'Field Title One',
            'id' => 'field_title_one',
            'default' => 'Phone:',
            'type' => 'text',
        ),
        array(
            'label' => 'Field Info One',
            'id' => 'field_info_one',
            'default' => '+1 605 722 2032',
            'type' => 'text',
        ),
        array(
            'label' => 'Field Title Two',
            'id' => 'field_title_two',
            'default' => 'Email:',
            'type' => 'text',
        ),
        array(
            'label' => 'Field Info Two',
            'id' => 'field_info_two',
            'default' => 'example@mail.com',
            'type' => 'text',
        ),
        array(
            'label' => 'Field Title Three',
            'id' => 'field_title_three',
            'default' => 'Address:',
            'type' => 'text',
        ),
        array(
            'label' => 'Field Info Three',
            'id' => 'field_info_three',
            'default' => 'Charlotte, North Carolina, <br/> United States',
            'type' => 'text',
        ),
        array(
            'label' => 'Field Title Four',
            'id' => 'field_title_four',
            'default' => 'Title:',
            'type' => 'text',
        ),
        array(
            'label' => 'Field Info Four',
            'id' => 'field_info_four',
            'default' => 'Type anything that you need',
            'type' => 'text',
        ),
    );

    public function widget( $args, $instance ) {
        echo $args['before_widget'];

        if ( ! empty( $instance['title'] ) ) {
            echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
        }

        // Output generated fields
        echo'<div class="contact-widget">';
        if ( ! empty( $instance['field_title_one'] ) || ! empty( $instance['field_title_one'] ) ) {
            echo '<p><span>' . $instance['field_title_one'] . '</span> ' . $instance['field_info_one'] . '</p>';
        }
        if ( ! empty( $instance['field_title_two'] ) || ! empty( $instance['field_title_two'] ) ) {
            echo '<p><span>' . $instance['field_title_two'] . '</span> ' . $instance['field_info_two'] . '</p>';
        }
        if ( ! empty( $instance['field_title_three'] ) || ! empty( $instance['field_title_three'] ) ) {
            echo '<p><span>' . $instance['field_title_three'] . '</span> ' . $instance['field_info_three'] . '</p>';
        }
        if ( ! empty( $instance['field_title_four'] ) || ! empty( $instance['field_title_four'] ) ) {
            echo '<p><span>' . $instance['field_title_four'] . '</span> ' . $instance['field_info_four'] . '</p>';
        }
        echo '</div>';
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

function register_appiloaddresswidget_widget() {
    register_widget( 'Appiloaddresswidget_Widget' );
}
add_action( 'widgets_init', 'register_appiloaddresswidget_widget' );