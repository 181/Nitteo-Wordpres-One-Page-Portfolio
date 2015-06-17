<?php

include(dirname(__FILE__) . '/shortcode.php');
require( 'wptuts-editor-buttons/wptuts.php' );

/* =============================================================================
	
	Options Framework
	
	=========================================================================== */

if ( !function_exists( 'of_get_option' ) ) {
function of_get_option($name, $default = false) {
	$optionsframework_settings = get_option('optionsframework');
	// Gets the unique option id
	$option_name = $optionsframework_settings['id'];
	if ( get_option($option_name) ) {
		$options = get_option($option_name);
	}
	if ( isset($options[$name]) ) {
		return $options[$name];
	} else {
		return $default;
	}
}
};

/* =============================================================================
	
	Actions
	
	=========================================================================== */

  add_action( 'wp_enqueue_scripts', 'wptuts_scripts_basic' ); 
  add_shortcode( 'work', 'caption_shortcode' );
  add_shortcode( 'vid', 'video_shortcode' );
  add_shortcode( 'img', 'image_shortcode' );

/* =============================================================================
	
	Scripts and styles
	
	=========================================================================== */

  function wptuts_scripts_basic()
  {
  
    wp_register_script( 'jquery-script', 'http://code.jquery.com/jquery-1.9.1.js' );
  	wp_enqueue_script( 'jquery-script' );
    
    wp_register_script( 'jquery-script_min', '//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js' );
  	wp_enqueue_script( 'jquery-script_min' );
    
    wp_register_script( 'jquery-ui', 'http://code.jquery.com/ui/1.10.3/jquery-ui.js' );
  	wp_enqueue_script( 'jquery-ui' );

    if( is_front_page() )
    {
  
    wp_register_script( 'main-script', get_template_directory_uri().'/script.js' );
  	wp_enqueue_script( 'main-script' );

    }
    
    wp_register_script( 'component', get_template_directory_uri().'/js/component.js' );
  	wp_enqueue_script( 'component' );
    
    wp_register_script( 'backstretch', get_template_directory_uri().'/js/jquery.backstretch.min.js' );
  	wp_enqueue_script( 'backstretch' );
    
    wp_register_script( 'mixitup', get_template_directory_uri().'/js/jquery.mixitup.min.js' );
  	wp_enqueue_script( 'mixitup' );
    
    wp_register_script( 'modernizr_custom_79639', get_template_directory_uri().'/js/modernizr.custom.79639.js' );
  	wp_enqueue_script( 'modernizr_custom_79639' );
    
    wp_register_script( 'modernizr_custom', get_template_directory_uri().'/js/modernizr.custom.js' );
  	wp_enqueue_script( 'modernizr_custom' );
    
    wp_register_script( 'magnific_popup', get_template_directory_uri().'/magnific-popup/jquery.magnific-popup.min.js' );
  	wp_enqueue_script( 'magnific_popup' );
    
    wp_register_style( 'font_roboto', 'http://fonts.googleapis.com/css?family=Roboto+Slab:400,700' );
  	wp_enqueue_style( 'font_roboto' );
    
    wp_register_style( 'font_opensans', 'http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' );
  	wp_enqueue_style( 'font_opensans' );
    
    wp_register_style( 'font_awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );
  	wp_enqueue_style( 'font_awesome' );
    
    wp_register_style( 'main_style', get_template_directory_uri().'/style.css' );
  	wp_enqueue_style( 'main_style' );
    
    wp_register_style( 'animate', get_template_directory_uri().'/css/animate.css' );
  	wp_enqueue_style( 'animate' );
    
    wp_register_style( 'common', get_template_directory_uri().'/css/common.css' );
  	wp_enqueue_style( 'common' );
    
    wp_register_style( 'demo', get_template_directory_uri().'/css/demo.css' );
  	wp_enqueue_style( 'demo' );
    
    /* wp_register_style( 'normalize', get_template_directory_uri().'/css/normalize.css' );
  	wp_enqueue_style( 'normalize' );  */  
    
    wp_register_style( 'css_style', get_template_directory_uri().'/css/style.css' );
  	wp_enqueue_style( 'css_style' );
    
    wp_register_style( 'magnific_popup_style', get_template_directory_uri().'/magnific-popup/magnific-popup.css' );
  	wp_enqueue_style( 'magnific_popup_style' );    

    wp_enqueue_script('google-maps', 'https://maps.googleapis.com/maps/api/js?v=3.exp');
    wp_enqueue_script('google-jsapi','https://www.google.com/jsapi');     

  
  };
    
  
/* =============================================================================
	
	Others
	
	=========================================================================== */  
 
  
function pu_theme_menu()
{
  add_theme_page( 'Theme Option', 'Contact Form', 'manage_options', 'pu_theme_options.php', 'pu_theme_page');  
}

function pu_theme_page()
{
?>
    <div class="section panel">
      <h1>Contact Form</h1>
      <form method="post" enctype="multipart/form-data" action="options.php">
        <?php 
          settings_fields('pu_theme_options'); 
        
          do_settings_sections('pu_theme_options.php');
        ?>
            <p class="submit">  
                <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />  
            </p>  
            
      </form>
    </div>
    <?php
}


/**
 * Function to register the settings
 */
function pu_register_settings()
{
    // Register the settings with Validation callback
    register_setting( 'pu_theme_options', 'pu_theme_options', 'pu_validate_settings' );

    // Add settings section
    add_settings_section( 'pu_text_section', '', 'pu_display_section', 'pu_theme_options.php' );

    // Create textbox field
    $field_args = array(
      'type'      => 'text',
      'id'        => 'pu_textbox',
      'name'      => 'pu_textbox',
      'desc'      => '',
      'std'       => '',
      'label_for' => 'pu_textbox',
      'class'     => 'css_class'
    );

    add_settings_field( 'example_textbox', 'Email to receive messages from the form', 'pu_display_setting', 'pu_theme_options.php', 'pu_text_section', $field_args );
}

function pu_display_section($section){ 

}

function pu_display_setting($args)
{
    extract( $args );

    $option_name = 'pu_theme_options';

    $options = get_option( $option_name );

    switch ( $type ) {  
          case 'text':  
              $options[$id] = stripslashes($options[$id]);  
              $options[$id] = esc_attr( $options[$id]);  
              echo "<input class='regular-text$class' type='text' id='$id' name='" . $option_name . "[$id]' value='$options[$id]' />";  
              echo ($desc != '') ? "<br /><span class='description'>$desc</span>" : "";  
          break;  
    }
}

function pu_validate_settings($input)
{
  foreach($input as $k => $v)
  {
    $newinput[$k] = trim($v);
    
    // Check the input is a letter or a number
    if(!preg_match('/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/', $v)) {
      $newinput[$k] = '';
    }
  }

  return $newinput;
}

function content($num) {
    $theContent = get_the_content();
    $output = preg_replace('/<rtf[^>]+./','', $theContent);
    $output = preg_replace( '/<blockquote>.*<\/blockquote>/', '', $output );
    $output = preg_replace( '|\[(.+?)\](.+?\[/\\1\])?|s', '', $output );
    $limit = $num+1;
    $content = explode(' ', $output, $limit);
    array_pop($content);
    $content = implode(" ",$content)." ... ";
    echo $content;
}
?>