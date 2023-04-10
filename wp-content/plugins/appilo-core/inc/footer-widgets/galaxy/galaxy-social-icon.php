<?php
// Adds widget: Galaxy Social Icons
class Galaxysocialicons_Widget extends WP_Widget {

    function __construct() {
        parent::__construct(
            'galaxysocialicons_widget',
            esc_html__( 'Galaxy Social Icons', 'appilo' ),
            array( 'description' => esc_html__( 'Add social icon to footer', 'appilo' ), ) // Args
        );
    }

    private $widget_fields = array(
        array(
            'label' => 'Facebook Link',
            'id' => 'fb_icon',
            'type' => 'text',
        ),
        array(
            'label' => 'Twitter Link',
            'id' => 'tw_icon',
            'type' => 'text',
        ),
        array(
            'label' => 'Google Link',
            'id' => 'gl_icon',
            'type' => 'text',
        ),
        array(
            'label' => 'Behance Link',
            'id' => 'bh_icon',
            'type' => 'text',
        ),
        array(
            'label' => 'Youtube Link',
            'id' => 'yt_icon',
            'type' => 'text',
        ),
    );

    public function widget( $args, $instance ) {
        echo $args['before_widget'];

        // Output generated fields
        echo '<ul class="social-links">';
        if ( ! empty( $instance['fb_icon'] ) || ! empty( $instance['fb_icon'] ) ) {
            echo '<li><a href="'.$instance['fb_icon'].'"><i class="fab fa-facebook"></i></a></li>';
        }
        if ( ! empty( $instance['tw_icon'] ) || ! empty( $instance['tw_icon'] ) ) {
            echo'<li><a href="'.$instance['tw_icon'].'"><i class="fab fa-twitter"></i></a></li>';
        }
        if ( ! empty( $instance['gl_icon'] ) || ! empty( $instance['gl_icon'] ) ) {
            echo '<li><a href="'.$instance['gl_icon'].'"><i class="fab fa-google-plus"></i></a></li>';
        }
        if ( ! empty( $instance['gl_icon'] ) || ! empty( $instance['gl_icon'] ) ) {
            echo '<li><a href="'.$instance['bh_icon'].'"><i class="fab fa-behance"></i></a></li>';
        }
        if ( ! empty( $instance['yt_icon'] ) || ! empty( $instance['yt_icon'] ) ) {
            echo '<li><a href="'.$instance['yt_icon'].'"><i class="fab fa-youtube"></i></a></li>';
        }
        echo'</ul>';

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
        $this->field_generator( $instance );
    }

    public function update( $new_instance, $old_instance ) {
        $instance = array();
        foreach ( $this->widget_fields as $widget_field ) {
            switch ( $widget_field['type'] ) {
                default:
                    $instance[$widget_field['id']] = ( ! empty( $new_instance[$widget_field['id']] ) ) ? strip_tags( $new_instance[$widget_field['id']] ) : '';
            }
        }
        return $instance;
    }
}

function register_galaxysocialicons_widget() {
    register_widget( 'Galaxysocialicons_Widget' );
}
add_action( 'widgets_init', 'register_galaxysocialicons_widget' );