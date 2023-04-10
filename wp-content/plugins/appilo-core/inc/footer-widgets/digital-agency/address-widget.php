<?php
// Adds widget: Digital Agency Address Widget
class DiaAppshowcaseaddresswi_Widget extends WP_Widget {

    function __construct() {
        parent::__construct(
            'diaappshowcaseaddresswi_widget',
            esc_html__( 'Digital Agency Address Widget', 'appilo' ),
            array( 'description' => esc_html__( 'Digital Agency Address Footer Widget', 'appilo' ), ) // Args
        );
        add_action( 'admin_footer', array( $this, 'media_fields' ) );
        add_action( 'customize_controls_print_footer_scripts', array( $this, 'media_fields' ) );
    }

    private $widget_fields = array(
        array(
            'label' => 'Call Icon',
            'id' => 'call_icon',
            'type' => 'text',
        ),
        array(
            'label' => 'Call Number',
            'id' => 'call_number',
            'type' => 'text',
        ),
        array(
            'label' => 'Call Schedule',
            'id' => 'call_schedule',
            'type' => 'text',
        ),
        array(
            'label' => 'Address Icon',
            'id' => 'add_icon',
            'type' => 'text',
        ),
        array(
            'label' => 'Address',
            'id' => 'add_txt',
            'type' => 'text',
        ),
        array(
            'label' => 'Full Address',
            'id' => 'full_add',
            'type' => 'text',
        ),
        array(
            'label' => 'AppStore Link',
            'id' => 'app_link',
            'type' => 'text',
        ),
        array(
            'label' => 'AppStore Image',
            'id' => 'app_img',
            'type' => 'media',
        ),
        array(
            'label' => 'PlayStore Link',
            'id' => 'play_link',
            'type' => 'text',
        ),
        array(
            'label' => 'PlayStore Image',
            'id' => 'play_img',
            'type' => 'media',
        ),
        array(
            'label' => 'Facebook Link',
            'id' => 'fb_link',
            'type' => 'text',
        ),
        array(
            'label' => 'Twitter Link',
            'id' => 'tw_link',
            'type' => 'text',
        ),
        array(
            'label' => 'Dribble Link',
            'id' => 'dr_link',
            'type' => 'text',
        ),
        array(
            'label' => 'Behance',
            'id' => 'bh_link',
            'type' => 'text',
        ),
    );

    public function widget( $args, $instance ) {

        $dia_app_logo_id = apply_filters( 'dia_app_logo_uri', $instance[ 'app_img' ] );
        $dia_app_logo = wp_get_attachment_url($dia_app_logo_id);
        $dia_play_logo_id = apply_filters( 'dia_play_logo_uri', $instance[ 'play_img' ] );
        $dia_play_logo = wp_get_attachment_url($dia_play_logo_id);

        echo $args['before_widget'];

        if ( ! empty( $instance['title'] ) ) {
            echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
        }

        // Output generated fields

        echo '<h4>
                    <i class="'.$instance['call_icon'].'"></i>
                    '.$instance['call_number'].'
                    <span>'.$instance['call_schedule'].'</span>
                </h4>
                <h4>
                    <i class="'.$instance['add_icon'].'"></i>
                   '.$instance['add_txt'].'
                    <span>'.$instance['full_add'].'</span>
                </h4>
                <div class="download-btn">
                    <a href="'.$instance['app_link'].'"><img src="'.esc_url($dia_app_logo).'" alt></a>
                    <a href="'.$instance['play_link'].'"><img src="'.esc_url($dia_play_logo).'" alt></a>
                </div>
                <div class="dia-footer-social">';
                    if ( ! empty( $instance['fb_link'] ) || ! empty( $instance['fb_link'] ) ) {
                        echo '<a href="'.$instance['fb_link'].'"><i class="fab fa-facebook-f"></i></a>';
                    }
                    if ( ! empty( $instance['tw_link'] ) || ! empty( $instance['tw_link'] ) ) {
                        echo '<a href="'.$instance['tw_link'].'"><i class="fab fa-twitter"></i></a>';
                    }
                    if ( ! empty( $instance['dr_link'] ) || ! empty( $instance['dr_link'] ) ) {
                        echo '<a href="'.$instance['dr_link'].'"><i class="fab fa-dribbble"></i></a>';
                    }
                    if ( ! empty( $instance['bh_link'] ) || ! empty( $instance['bh_link'] ) ) {
                        echo '<a href="'.$instance['bh_link'].'"><i class="fab fa-behance"></i></a>';
                    }
               echo'</div>';

        echo $args['after_widget'];
    }

    public function media_fields() {
        ?><script>
            jQuery(document).ready(function($){
                if ( typeof wp.media !== 'undefined' ) {
                    var _custom_media = true,
                        _orig_send_attachment = wp.media.editor.send.attachment;
                    $(document).on('click','.custommedia',function(e) {
                        var send_attachment_bkp = wp.media.editor.send.attachment;
                        var button = $(this);
                        var id = button.attr('id');
                        _custom_media = true;
                        wp.media.editor.send.attachment = function(props, attachment){
                            if ( _custom_media ) {
                                $('input#'+id).val(attachment.id);
                                $('span#preview'+id).css('background-image', 'url('+attachment.url+')');
                                $('input#'+id).trigger('change');
                            } else {
                                return _orig_send_attachment.apply( this, [props, attachment] );
                            };
                        }
                        wp.media.editor.open(button);
                        return false;
                    });
                    $('.add_media').on('click', function(){
                        _custom_media = false;
                    });
                    $(document).on('click', '.remove-media', function() {
                        var parent = $(this).parents('p');
                        parent.find('input[type="media"]').val('').trigger('change');
                        parent.find('span').css('background-image', 'url()');
                    });
                }
            });
        </script><?php
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
                case 'media':
                    $media_url = '';
                    if ($widget_value) {
                        $media_url = wp_get_attachment_url($widget_value);
                    }
                    $output .= '<p>';
                    $output .= '<label for="'.esc_attr( $this->get_field_id( $widget_field['id'] ) ).'">'.esc_attr( $widget_field['label'], 'appilo' ).':</label> ';
                    $output .= '<input style="display:none;" class="widefat" id="'.esc_attr( $this->get_field_id( $widget_field['id'] ) ).'" name="'.esc_attr( $this->get_field_name( $widget_field['id'] ) ).'" type="'.$widget_field['type'].'" value="'.$widget_value.'">';
                    $output .= '<span id="preview'.esc_attr( $this->get_field_id( $widget_field['id'] ) ).'" style="margin-right:10px;border:2px solid #eee;display:block;width: 100px;height:100px;background-image:url('.$media_url.');background-size:contain;background-repeat:no-repeat;"></span>';
                    $output .= '<button id="'.$this->get_field_id( $widget_field['id'] ).'" class="button select-media custommedia">Add Media</button>';
                    $output .= '<input style="width: 19%;" class="button remove-media" id="buttonremove" name="buttonremove" type="button" value="Clear" />';
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

function register_diaappshowcaseaddresswi_widget() {
    register_widget( 'DiaAppshowcaseaddresswi_Widget' );
}
add_action( 'widgets_init', 'register_diaappshowcaseaddresswi_widget' );