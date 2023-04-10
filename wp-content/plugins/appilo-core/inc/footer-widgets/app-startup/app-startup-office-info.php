<?php
// Adds widget: App Startup Office Info
class Appstartupofficeinfo_Widget extends WP_Widget {

	function __construct() {
		parent::__construct(
			'appstartupofficeinfo_widget',
			esc_html__( 'App Startup Office Info', 'appilo' ),
			array( 'description' => esc_html__( 'App Startup Office Info Footer Widget', 'appilo' ), ) // Args
		);
	}

	private $widget_fields = array(
		array(
			'label' => 'Address',
			'id' => 'str_add',
			'type' => 'textarea',
		),
		array(
			'label' => 'Phone',
			'id' => 'str_phn',
			'type' => 'text',
		),
		array(
			'label' => 'Open Hours',
			'id' => 'str_oh',
			'type' => 'text',
		),
		array(
			'label' => 'Hours',
			'id' => 'str_h',
			'type' => 'textarea',
		),
	);

	public function widget( $args, $instance ) {
		echo $args['before_widget'];

		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		}

        echo '<div class="str-office-widget">
                <div class="str-office-icon-text">
                    <div class="str-office-icon float-left">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <p>'.$instance['str_add'].'</p>
                </div>
                <div class="str-office-icon-text">
                    <div class="str-office-icon float-left">
                        <i class="fas fa-phone"></i>
                    </div>
                    <p>'.$instance['str_phn'].'</p>
                </div>
                <div class="str-open-hour">
                    <span>'.$instance['str_oh'].'</span>
                    <p>'.$instance['str_h'].'</p>
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

function register_appstartupofficeinfo_widget() {
	register_widget( 'Appstartupofficeinfo_Widget' );
}
add_action( 'widgets_init', 'register_appstartupofficeinfo_widget' );