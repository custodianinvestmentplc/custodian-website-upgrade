<?php
// Adds widget: Medical Contact
class Medicalcontact_Widget extends WP_Widget {

    function __construct() {
        parent::__construct(
            'medicalcontact_widget',
            esc_html__( 'Medical Contact', 'appilo' ),
            array( 'description' => esc_html__( 'Medical Contact Footer Widget', 'appilo' ), ) // Args
        );
        add_action( 'admin_footer', array( $this, 'media_fields' ) );
        add_action( 'customize_controls_print_footer_scripts', array( $this, 'media_fields' ) );
    }

    private $widget_fields = array(
        array(
            'label' => 'Icon 1',
            'id' => 'medi_icon_1',
            'type' => 'media',
        ),
        array(
            'label' => 'Phone Number',
            'id' => 'medi_phn_n',
            'type' => 'text',
        ),
        array(
            'label' => 'Phone Text',
            'id' => 'medi_phn_txt',
            'type' => 'text',
        ),
        array(
            'label' => 'Icon 2',
            'id' => 'medi_icon_2',
            'type' => 'media',
        ),
        array(
            'label' => 'Email',
            'id' => 'medi_mail',
            'type' => 'text',
        ),
        array(
            'label' => 'Email Text',
            'id' => 'medi_mail_txt',
            'type' => 'text',
        ),
        array(
            'label' => 'Button Text',
            'id' => 'medi_btn',
            'type' => 'text',
        ),
        array(
            'label' => 'Button Link',
            'id' => 'medi_lnk',
            'type' => 'text',
        ),
    );

    public function widget( $args, $instance ) {
        echo $args['before_widget'];

    echo '<div class="app-medi-contact-widget">
            <div class="contact-widget-wrap">
                <div class="cw-widget-icon float-left">
                    <img src="'.wp_get_attachment_url($instance['medi_icon_1']).'" alt="">
                </div>
                <div class="cw-widget-text app-medi-headline text-right">
                    <h3><a href="tel:'.$instance['medi_phn_n'].'">'.$instance['medi_phn_n'].'</a></h3>
                    <span>'.$instance['medi_phn_txt'].'</span>
                </div>
            </div>
            <div class="contact-widget-wrap">
                <div class="cw-widget-icon float-left">
                    <img src="'.wp_get_attachment_url($instance['medi_icon_2']).'" alt="">
                </div>
                <div class="cw-widget-text app-medi-headline text-right">
                    <h3><a href="mailto:'.$instance['medi_mail'].'">'.$instance['medi_mail'].'</a></h3>
                    <span>'.$instance['medi_mail_txt'].'</span>
                </div>
            </div>';
            if($instance['medi_lnk']) {
            echo '<div class="cw-widget-btn text-center">
                        <a href="' . $instance['medi_lnk'] . '">' . $instance['medi_btn'] . ' <span><i class="fas fa-arrow-right"></i></span></a>
                    </div>';
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

function register_medicalcontact_widget() {
    register_widget( 'Medicalcontact_Widget' );
}
add_action( 'widgets_init', 'register_medicalcontact_widget' );