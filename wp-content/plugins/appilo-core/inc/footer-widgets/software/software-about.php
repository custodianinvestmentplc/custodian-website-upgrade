<?php
// Adds widget: HRM About Widget
class Softaboutwidget_Widget extends WP_Widget {

    function __construct() {
        parent::__construct(
            'softaboutwidget_widget',
            esc_html__( 'Software About Widget', 'appilo' ),
            array( 'description' => esc_html__( 'Software footer about widget', 'appilo' ), ) // Args
        );
        add_action( 'admin_footer', array( $this, 'media_fields' ) );
        add_action( 'customize_controls_print_footer_scripts', array( $this, 'media_fields' ) );
    }

    private $widget_fields = array(
        array(
            'label' => 'Logo',
            'id' => 'soft_logo',
            'type' => 'media',
        ),
        array(
            'label' => 'Copyright by',
            'id' => 'soft_cpy',
            'type' => 'text',
        ),
        array(
            'label' => 'Credit',
            'id' => 'soft_credit',
            'type' => 'text',
        ),
        array(
            'label' => 'Info',
            'id' => 'soft_info',
            'type' => 'textarea',
        ),
        array(
            'label' => 'Button Text',
            'id' => 'btn_text',
            'type' => 'text',
        ),
        array(
            'label' => 'Button Link',
            'id' => 'btn_link',
            'type' => 'text',
        ),
    );

    public function widget( $args, $instance ) {

        $soft_logo_id = apply_filters( 'soft_logo_image_uri', $instance[ 'soft_logo' ] );
        $soft_logo_logo = wp_get_attachment_url($soft_logo_id);

        echo $args['before_widget'];

        echo '<div class="soft-m-logo-widget pera-content">
                <div class="soft-m-footer-logo float-left">
                   <a href="'.esc_url( home_url( '/' ) ).'"><img src="'.esc_url($soft_logo_logo).'" alt="logo"></a>
                </div>
                <div class="soft-m-footer-support d-inline-block position-relative">
                   <span>'.$instance['soft_cpy'].'</span>
                    <a href="'.esc_url( home_url( '/' ) ).'">'.$instance['soft_credit'].'</a>
                </div>
                <p>
                    '.$instance['soft_info'].'
                </p>
                <div class="soft-m-footer-social ul-li">
                    <ul>';

                     if ( $instance['btn_link'] ) {
                     echo '<div class="soft-footer-btn text-center">
                                 <a href="'.$instance['btn_link'].'"><i class="fas fa-desktop"></i> '.$instance['btn_text'].'</a>
                             </div>';
                 }

                echo '</ul>
                </div>
            </div>';

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

function register_softaboutwidget_widget() {
    register_widget( 'Softaboutwidget_Widget' );
}
add_action( 'widgets_init', 'register_softaboutwidget_widget' );