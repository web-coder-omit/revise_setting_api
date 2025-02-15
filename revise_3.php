<?php
/**
*Plugin Name: setting_API
*Plugin URI: https://alfanet.bd.org
*Description:This is the plugin which will be advance function then previous.
*Version: 1.2
*Author: Md. Omit Hasan
*Author URI: https://google.com
*License: GPLv2 or Later
*Text Domain: aqrc
*Domain Path:/langurages/
*/

function aqrc_load_textdomain(){
    load_plugin_textdomain( 'aqrc',false,dirname(__FILE__)."/languages");
};
add_action("plugins_loaded","aqrc_load_textdomain");

function function_for_settings_api(){
    add_settings_field( 'header', __('Header','aqrc'), 'function_for_setting_fileds', 'general');   
    register_setting( 'general', 'header',array('sanaitze_callback'=>'esc_attr'));
}

function function_for_setting_fileds(){
    
    ?>
    <input type="text" class="regular-text" name="header" value="<?php echo get_option( 'header')?>"/>
    <?php
}
add_action( 'admin_init', 'function_for_settings_api');


function button_function($attribute){
 return sprintf( '<a href="%s">%s</a>',
 $attribute['url'],
 $attribute['title']

 );
}
add_shortcode('btn', 'button_function');
function button_functions(){
return sprintf(
    '<a href="%s">%s</a>',
     $attribute['url'],
     $attribute['title']
);
};
add_shortcode('button', 'button_functions');













// function aqrc_function($content){
//     $aqrc_post_link = get_permalink();
//     $aqrc_title = 'out put of the fuction';
//     $aqrc_src = sprintf('https://api.qrserver.com/v1/create-qr-code/?size=185x185&ecc=L&qzone=1&data=%s',$aqrc_post_link);
//     $content .= sprintf("<img src='%s'>",$aqrc_src);
//     return $content;
// }
// add_filter( 'the_content', 'aqrc_function');

// function aqrc_settings_init(){

//     add_settings_field( 'aqrc_height', __('QR_code_Height','aqrc'),'aqrc_display_height','general');
//     add_settings_field( 'aqrc_width', __('QR_code_Width','aqrc'),'aqrc_display_width','general');
    
//     register_setting('general','pqrc_display_height',array('sanaitze_callback'=>'esc_attr'));
//     register_setting('general','pqrc_display_width',array('sanaitze_callback'=>'esc_attr'));

// }
// function aqrc_display_height(){
//     $height = get_option( 'aqrc_height');
//     printf("<input type= 'text' id='%s' name='%s' value='%s'/>",'aqrc_height','aqrc_heith',$height);
// };
// function aqrc_display_width(){
//     $width = get_option( 'aqrc_width');
//     printf("<input type= 'text' id='%s' name='%s' value='%s'/>",'aqrc_width','aqrc_width',$width);
// }

// add_action("admin_init",'aqrc_settings_init');




?>