<?php
// Adds widget: Appilo Twitter widget
class Appilotwitterwidget_Widget extends WP_Widget {

    function __construct() {
        parent::__construct(
            'appilotwitterwidget_widget',
            esc_html__( 'Appilo Twitter widget', 'appilo' ),
            array( 'description' => esc_html__( 'Appilo footer twitter widget', 'appilo' ), ) // Args
        );
    }

    private $widget_fields = array(
        array(
            'label' => 'Feed Info One',
            'id' => 'feed_info_one',
            'default' => 'Lorem ipsum dolor sit amet, con sectetur adipiscing elit, sed do eius mod tempor incididunt.',
            'type' => 'textarea',
        ),
        array(
            'label' => 'Feed Link One',
            'id' => 'feed_link_one',
            'default' => 'wordpress',
            'type' => 'text',
        ),
        array(
            'label' => 'Feed Info Two',
            'id' => 'feed_info_two',
            'default' => 'Lorem ipsum dolor sit amet, con sectetur adipiscing elit, sed do eius mod tempor incididunt.',
            'type' => 'textarea',
        ),
        array(
            'label' => 'Feed Link Two',
            'id' => 'feed_link_two',
            'default' => 'wordpress',
            'type' => 'text',
        ),
        array(
            'label' => 'Feed Info Three',
            'id' => 'feed_info_three',
            'default' => 'Lorem ipsum dolor sit amet, con sectetur adipiscing elit, sed do eius mod tempor incididunt.',
            'type' => 'textarea',
        ),
        array(
            'label' => 'Feed Link Three',
            'id' => 'feed_link_three',
            'default' => 'wordpress',
            'type' => 'text',
        ),
        array(
            'label' => 'Feed Info Four',
            'id' => 'feed_info_four',
            'default' => 'Lorem ipsum dolor sit amet, con sectetur adipiscing elit, sed do eius mod tempor incididunt.',
            'type' => 'textarea',
        ),
        array(
            'label' => 'Feed Link Four',
            'id' => 'feed_link_four',
            'default' => 'wordpress',
            'type' => 'text',
        ),
    );

    public function widget( $args, $instance ) {
        echo $args['before_widget'];

        if ( ! empty( $instance['title'] ) ) {
            echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
        }

        // Output generated fields
        echo'<div class="tweets-widget"><div class="tweets-carousel owl-theme owl-carousel">
                <div class="item">
                    <div class="single-tweet">
                        <p><i class="fab fa-twitter"></i>'.$instance['feed_info_one'].'</p>
                        <a href="https://twitter.com/'.$instance['feed_link_one'].'">@'.$instance['feed_link_one'].'</a>
                    </div>
                </div>
                <div class="item">
                    <div class="single-tweet">
                        <p><i class="fab fa-twitter"></i>'.$instance['feed_info_two'].'</p>
                        <a href="https://twitter.com/'.$instance['feed_link_two'].'">@'.$instance['feed_link_two'].'</a>
                    </div>
                </div>
                <div class="item">
                    <div class="single-tweet">
                        <p><i class="fab fa-twitter"></i>'.$instance['feed_info_three'].'</p>
                        <a href="https://twitter.com/'.$instance['feed_link_three'].'">@'.$instance['feed_link_three'].'</a>
                    </div>
                </div>
                <div class="item">
                   <div class="single-tweet">
                        <p><i class="fab fa-twitter"></i>'.$instance['feed_info_four'].'</p>
                        <a href="https://twitter.com/'.$instance['feed_link_four'].'">@'.$instance['feed_link_four'].'</a>
                    </div>
                </div>
            </div>
            </div>';

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

function register_appilotwitterwidget_widget() {
    register_widget( 'Appilotwitterwidget_Widget' );
}
add_action( 'widgets_init', 'register_appilotwitterwidget_widget' );