<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 *
 */

function optionsframework_option_name() {

	// This gets the theme name from the stylesheet (lowercase and without spaces)
	$themename = get_option( 'stylesheet' );
	$themename = preg_replace("/\W/", "_", strtolower($themename) );

	$optionsframework_settings = get_option('optionsframework');
	$optionsframework_settings['id'] = $themename;
	update_option('optionsframework', $optionsframework_settings);

	// echo $themename;
}             

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 */

function optionsframework_options() {

	// Test data
	$test_array = array(
		'one' => __('One', 'options_check'),
		'two' => __('Two', 'options_check'),
		'three' => __('Three', 'options_check'),
		'four' => __('Four', 'options_check'),
		'five' => __('Five', 'options_check')
	);

	// Multicheck Array
	$multicheck_array = array(
		'one' => __('French Toast', 'options_check'),
		'two' => __('Pancake', 'options_check'),
		'three' => __('Omelette', 'options_check'),
		'four' => __('Crepe', 'options_check'),
		'five' => __('Waffle', 'options_check')
	);

	// Multicheck Defaults
	$multicheck_defaults = array(
		'one' => '1',
		'five' => '1'
	);

	// Background Defaults
	$background_defaults = array(
		'color' => '',
		'image' => '',
		'repeat' => 'repeat',
		'position' => 'top center',
		'attachment'=>'scroll' );

	// Typography Defaults
	$typography_defaults = array(
		'size' => '15px',
		'face' => 'georgia',
		'style' => 'bold',
		'color' => '#bada55' );

	// Typography Options
	$typography_options = array(
		'sizes' => array( '6','12','14','16','20' ),
		'faces' => array( 'Helvetica Neue' => 'Helvetica Neue','Arial' => 'Arial' ),
		'styles' => array( 'normal' => 'Normal','bold' => 'Bold' ),
		'color' => false
	);

	// Pull all the categories into an array
	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}

	// Pull all tags into an array
	$options_tags = array();
	$options_tags_obj = get_tags();
	foreach ( $options_tags_obj as $tag ) {
		$options_tags[$tag->term_id] = $tag->name;
	}

	// Pull all the pages into an array
	$options_pages = array();
	$options_pages_obj = get_pages('sort_column=post_parent,menu_order');
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
		$options_pages[$page->ID] = $page->post_title;
	}

	// If using image radio buttons, define a directory path
	$imagepath =  get_template_directory_uri() . '/images/';

	$options = array();
  
/* =============================================================================
	
	Main Settings
	
	=========================================================================== */  

  $options[] = array(
		'name' => __('Main Settings', 'options_check'),
		'type' => 'heading');
    
  $options[] = array(
		'name' => __('Title for navigation: About Me', 'options_check'),
		'desc' => __('', 'options_check'),
		'id' => 'about_navigation',
		'std' => 'ABOUT ME',
		'type' => 'text');
        
  $options[] = array(
		'name' => __('Title for navigation: Resume', 'options_check'),
		'desc' => __('', 'options_check'),
		'id' => 'resume_navigation',
		'std' => 'RESUME',
		'type' => 'text');
            
  $options[] = array(
		'name' => __('Title for navigation: My Work', 'options_check'),
		'desc' => __('', 'options_check'),
		'id' => 'work_navigation',
		'std' => 'MY WORK',
		'type' => 'text');
    
  $options[] = array(
		'name' => __('Title for navigation: Contact Me', 'options_check'),
		'desc' => __('', 'options_check'),
		'id' => 'contact_navigation',
		'std' => 'CONTACT',
		'type' => 'text');
    
  $options[] = array(
		'name' => __('Title for navigation: Blog', 'options_check'),
		'desc' => __('', 'options_check'),
		'id' => 'blog_navigation',
		'std' => 'BLOG',
		'type' => 'text');    
    
  $options[] = array(
		'name' => __('Main color', 'options_check'),
		'desc' => __('Default: #5cd4d5', 'options_check'),
		'id' => 'main_colorpicker',     
		'std' => '#5cd4d5',
		'type' => 'color' );      

	$options[] = array(
		'name' => __('Main background', 'options_check'),
		'desc' => __('Default: #f2f2f2', 'options_check'),
		'id' => 'about_colorpicker',     
		'std' => '#f2f2f2',
		'type' => 'color' );  

  $options[] = array(
		'name' => __('Secondary background', 'options_check'),
		'desc' => __('Default: #32323c', 'options_check'),
		'id' => 'resume_colorpicker',
		'std' => '#32323c',
		'type' => 'color' ); 
    
  $options[] = array(
		'name' => __('Introductory text (upper)', 'options_check'),
		'desc' => __('', 'options_check'),
		'id' => 'introductory_text_upper',
		'std' => 'Hello, my name is',
		'type' => 'text'); 
    
  $options[] = array(
		'name' => __('Your name', 'options_check'),
		'desc' => __('', 'options_check'),
		'id' => 'user_name',
		'std' => 'Alex Footer',
		'type' => 'text');  

  $options[] = array(
		'name' => __('Introductory text (bottom)', 'options_check'),
		'desc' => __('', 'options_check'),
		'id' => 'introductory_text_bottom',
		'std' => "I'm Coder and UX Designer",
		'type' => 'text');  		 

  $options[] = array(
		'name' => __('Home screen images', 'options_check'),
		'desc' => __('Upload pictures to the folder "img", which is located in the theme directory. Then enter the URL to your pictures. Each image separated by commas.', 'options_check'),
		'id' => 'home_screen_images',
		'std' => '"/wp-content/themes/nitteo/img/background1.jpg", "/wp-content/themes/nitteo/img/background2.jpg", "/wp-content/themes/nitteo/img/background3.jpg"',
		'type' => 'textarea');		  
    
  $options[] = array(
		'name' => __('Facebook URL', 'options_check'),
		'desc' => __('', 'options_check'),
		'id' => 'facebook_url',
		'std' => 'http://www.facebook.com',
		'type' => 'text');  
    
  $options[] = array(
		'name' => __('', 'options_check'),
		'desc' => __('Show icon on the home screen.', 'options_check'),
		'id' => 'facebook_checkbox_home',
		'std' => '1',
		'type' => 'checkbox');
    
  $options[] = array(
		'name' => __('', 'options_check'),
		'desc' => __('Show icon in the footer.', 'options_check'),
		'id' => 'facebook_checkbox_footer',
		'std' => '1',
		'type' => 'checkbox');
    
  $options[] = array(
		'name' => __('Twitter URL', 'options_check'),
		'desc' => __('', 'options_check'),
		'id' => 'twitter_url',
		'std' => 'http://www.twitter.com',
		'type' => 'text');  
    
  $options[] = array(
		'name' => __('', 'options_check'),
		'desc' => __('Show icon on the home screen.', 'options_check'),
		'id' => 'twitter_checkbox_home',
		'std' => '1',
		'type' => 'checkbox');
    
  $options[] = array(
		'name' => __('', 'options_check'),
		'desc' => __('Show icon in the footer.', 'options_check'),
		'id' => 'twitter_checkbox_footer',
		'std' => '1',
		'type' => 'checkbox'); 
    
  $options[] = array(
		'name' => __('LinkedIn URL', 'options_check'),
		'desc' => __('', 'options_check'),
		'id' => 'linkedin_url',
		'std' => 'http://www.linkedin.com',
		'type' => 'text');  
    
  $options[] = array(
		'name' => __('', 'options_check'),
		'desc' => __('Show icon on the home screen.', 'options_check'),
		'id' => 'linkedin_checkbox_home',
		'std' => '1',
		'type' => 'checkbox');
    
  $options[] = array(
		'name' => __('', 'options_check'),
		'desc' => __('Show icon in the footer.', 'options_check'),
		'id' => 'linkedin_checkbox_footer',
		'std' => '1',
		'type' => 'checkbox'); 
    
  $options[] = array(
		'name' => __('DeviantArt URL', 'options_check'),
		'desc' => __('', 'options_check'),
		'id' => 'deviantart_url',
		'std' => 'http://www.deviantart.com',
		'type' => 'text');    
    
  $options[] = array(
		'name' => __('', 'options_check'),
		'desc' => __('Show icon on the home screen.', 'options_check'),
		'id' => 'deviantart_checkbox_home',
		'std' => '1',
		'type' => 'checkbox');   
    
  $options[] = array(
		'name' => __('', 'options_check'),
		'desc' => __('Show icon in the footer.', 'options_check'),
		'id' => 'deviantart_checkbox_footer',
		'std' => '1',
		'type' => 'checkbox');     
    
  $options[] = array(
		'name' => __('Tumblr URL', 'options_check'),
		'desc' => __('', 'options_check'),
		'id' => 'tumblr_url',
		'std' => 'http://www.tumblr.com',
		'type' => 'text');    
    
  $options[] = array(
		'name' => __('', 'options_check'),
		'desc' => __('Show icon on the home screen.', 'options_check'),
		'id' => 'tumblr_checkbox_home',
		'std' => '1',
		'type' => 'checkbox');    
    
  $options[] = array(
		'name' => __('', 'options_check'),
		'desc' => __('Show icon in the footer.', 'options_check'),
		'id' => 'tumblr_checkbox_footer',
		'std' => '1',
		'type' => 'checkbox');     
    
  $options[] = array(
		'name' => __('Behance URL', 'options_check'),
		'desc' => __('', 'options_check'),
		'id' => 'behance_url',
		'std' => 'http://www.behance.com',
		'type' => 'text');    
    
  $options[] = array(
		'name' => __('', 'options_check'),
		'desc' => __('Show icon on the home screen.', 'options_check'),
		'id' => 'behance_checkbox_home',
		'std' => '1',
		'type' => 'checkbox');  

  $options[] = array(
		'name' => __('', 'options_check'),
		'desc' => __('Show icon in the footer.', 'options_check'),
		'id' => 'behance_checkbox_footer',
		'std' => '1',
		'type' => 'checkbox');            
    
  $options[] = array(
		'name' => __('Instagram URL', 'options_check'),
		'desc' => __('', 'options_check'),
		'id' => 'instagram_url',
		'std' => 'http://www.instagram.com',
		'type' => 'text');  
    
  $options[] = array(
		'name' => __('', 'options_check'),
		'desc' => __('Show icon on the home screen.', 'options_check'),
		'id' => 'instagram_checkbox_home',
		'std' => '1',
		'type' => 'checkbox');
    
  $options[] = array(
		'name' => __('', 'options_check'),
		'desc' => __('Show icon in the footer.', 'options_check'),
		'id' => 'instagram_checkbox_footer',
		'std' => '1',
		'type' => 'checkbox'); 
    
  $options[] = array(
		'name' => __('Google URL', 'options_check'),
		'desc' => __('', 'options_check'),
		'id' => 'google_url',
		'std' => 'http://www.google.com',
		'type' => 'text');  
    
  $options[] = array(
		'name' => __('', 'options_check'),
		'desc' => __('Show icon on the home screen.', 'options_check'),
		'id' => 'google_checkbox_home',
		'std' => '1',
		'type' => 'checkbox');
    
  $options[] = array(
		'name' => __('', 'options_check'),
		'desc' => __('Show icon in the footer.', 'options_check'),
		'id' => 'google_checkbox_footer',
		'std' => '1',
		'type' => 'checkbox');  
    
  $options[] = array(
		'name' => __('Dribbble URL', 'options_check'),
		'desc' => __('', 'options_check'),
		'id' => 'dribbble_url',
		'std' => 'http://www.dribbble.com',
		'type' => 'text');  
    
  $options[] = array(
		'name' => __('', 'options_check'),
		'desc' => __('Show icon on the home screen.', 'options_check'),
		'id' => 'dribbble_checkbox_home',
		'std' => '1',
		'type' => 'checkbox');
    
  $options[] = array(
		'name' => __('', 'options_check'),
		'desc' => __('Show icon in the footer.', 'options_check'),
		'id' => 'dribbble_checkbox_footer',
		'std' => '1',
		'type' => 'checkbox');
    
  $options[] = array(
		'name' => __('Pinterest URL', 'options_check'),
		'desc' => __('', 'options_check'),
		'id' => 'pinterest_url',
		'std' => 'http://www.pinterest.com',
		'type' => 'text');  
    
  $options[] = array(
		'name' => __('', 'options_check'),
		'desc' => __('Show icon on the home screen.', 'options_check'),
		'id' => 'pinterest_checkbox_home',
		'std' => '1',
		'type' => 'checkbox');
    
  $options[] = array(
		'name' => __('', 'options_check'),
		'desc' => __('Show icon in the footer.', 'options_check'),
		'id' => 'pinterest_checkbox_footer',
		'std' => '1',
		'type' => 'checkbox'); 

  $options[] = array(
		'name' => __('Resume PDF file', 'options_check'),
		'desc' => __('URL to your file.', 'options_check'),
		'id' => 'pdf_file',
    'std' => '',
		'type' => 'text');  
    
/* =============================================================================
	
	Content 

	=========================================================================== */  
  
  $options[] = array(
		'name' => __('Content', 'options_check'),
		'type' => 'heading');

  $options[] = array(
		'name' => __('Your photo', 'options_check'),
		'desc' => __('Recommended size of the photo is 205 x 205px. The photo should be a square.', 'options_check'),
		'id' => 'profile_photo',
		'type' => 'upload');

  $options[] = array(
		'name' => __('Text about you', 'options_check'),
		'desc' => __('Text about you that appears next to your picture.', 'options_check'),
		'id' => 'text_about_you',
		'std' => 'Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. Duis mollis, non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh alte rivero nantasy muldaos kelty. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh alte rivero nantasy muldaos kelty. Fusce dapibus, tellus ac cursus commodo, tortor mauris. Duis mollis, non commodo luctus, nisi erat porttitor.',
		'type' => 'textarea');
    
  $options[] = array(
		'name' => __('1. skill', 'options_check'),
		'desc' => __('', 'options_check'),
		'id' => 'first_skills',
		'std' => 'Programming',
		'class' => 'mini',
		'type' => 'text');

  $options[] = array(
		'name' => __('%', 'options_check'),
		'desc' => __('', 'options_check'),
		'id' => 'first_skills_percentage',
		'std' => '62%',
		'class' => 'mini',
		'type' => 'text');
    
  $options[] = array(
		'name' => __('2. skill', 'options_check'),
		'desc' => __('', 'options_check'),
		'id' => 'second_skills',
		'std' => 'Graphic Design',
		'class' => 'mini',
		'type' => 'text');

  $options[] = array(
		'name' => __( '%', 'options_check'),
		'desc' => __('', 'options_check'),
		'id' => 'second_skills_percentage',
		'std' => '74%',
		'class' => 'mini',
		'type' => 'text');
    
  $options[] = array(
		'name' => __('3. skill', 'options_check'),
		'desc' => __('', 'options_check'),
		'id' => 'third_skills',
		'std' => 'Wordpress',
		'class' => 'mini',
		'type' => 'text');  

  $options[] = array(
		'name' => __('%', 'options_check'),
		'desc' => __('', 'options_check'),
		'id' => 'third_skills_percentage',
		'std' => '86%',
		'class' => 'mini',
		'type' => 'text');
       
  $options[] = array(
		'name' => __('1. item in Resume', 'options_check'),
		'desc' => __('Icons. Select here http://fortawesome.github.io/Font-Awesome/icons/. Format for example: fa fa-archive.', 'options_check'),
		'id' => 'resume_1_icon',
		'std' => 'fa fa-leaf',
    'class' => 'mini', 
		'type' => 'text');  
  
  $options[] = array(
		'name' => __('', 'options_check'),
		'desc' => __('Company - required.', 'options_check'),
		'id' => 'resume_1_comapny',
		'std' => 'Freelancer',
    'class' => 'mini', 
		'type' => 'text');    
    
  $options[] = array(
		'name' => __('', 'options_check'),
		'desc' => __('Position.', 'options_check'),
		'id' => 'resume_1_position',
		'std' => 'UX Designer',
    'class' => 'mini', 
		'type' => 'text');  
    
  $options[] = array(
		'name' => __('', 'options_check'),
		'desc' => __('Description.', 'options_check'),
		'id' => 'resume_1_description',
		'std' => 'Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. Duis mollis, non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh alte rivero nantasy muldaos kelty.',
		'type' => 'textarea');  

$options[] = array(
		'name' => __('2. item in Resume', 'options_check'),
		'desc' => __('Icons. Select here http://fortawesome.github.io/Font-Awesome/icons/. Format for example: fa fa-archive.', 'options_check'),
		'id' => 'resume_2_icon',
		'std' => 'fa fa-users',
    'class' => 'mini', 
		'type' => 'text');  
  
  $options[] = array(
		'name' => __('', 'options_check'),
		'desc' => __('Company - required.', 'options_check'),
		'id' => 'resume_2_comapny',
		'std' => 'Company Name',
    'class' => 'mini', 
		'type' => 'text');    
    
  $options[] = array(
		'name' => __('', 'options_check'),
		'desc' => __('Position.', 'options_check'),
		'id' => 'resume_2_position',
		'std' => 'Senior Product Manager',
    'class' => 'mini', 
		'type' => 'text');  
    
  $options[] = array(
		'name' => __('', 'options_check'),
		'desc' => __('Description.', 'options_check'),
		'id' => 'resume_2_description',
		'std' => 'Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. Duis mollis, non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh alte rivero nantasy muldaos kelty.',
		'type' => 'textarea');       
    
$options[] = array(
		'name' => __('3. item in Resume', 'options_check'),
		'desc' => __('Icons. Select here http://fortawesome.github.io/Font-Awesome/icons/. Format for example: fa fa-archive.', 'options_check'),
		'id' => 'resume_3_icon',
		'std' => 'fa fa-users',
    'class' => 'mini', 
		'type' => 'text');  
  
  $options[] = array(
		'name' => __('', 'options_check'),
		'desc' => __('Company - required.', 'options_check'),
		'id' => 'resume_3_comapny',
		'std' => 'Company Name',
    'class' => 'mini', 
		'type' => 'text');    
    
  $options[] = array(
		'name' => __('', 'options_check'),
		'desc' => __('Position.', 'options_check'),
		'id' => 'resume_3_position',
		'std' => 'Junior Product Manager',
    'class' => 'mini', 
		'type' => 'text');  
    
  $options[] = array(
		'name' => __('', 'options_check'),
		'desc' => __('Description.', 'options_check'),
		'id' => 'resume_3_description',
		'std' => 'Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. Duis mollis, non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh alte rivero nantasy muldaos kelty.',
		'type' => 'textarea');       
    
 $options[] = array(
		'name' => __('4. item in Resume', 'options_check'),
		'desc' => __('Icons. Select here http://fortawesome.github.io/Font-Awesome/icons/. Format for example: fa fa-archive.', 'options_check'),
		'id' => 'resume_4_icon',
		'std' => 'fa fa-camera',
    'class' => 'mini', 
		'type' => 'text');  
  
  $options[] = array(
		'name' => __('', 'options_check'),
		'desc' => __('Company - required.', 'options_check'),
		'id' => 'resume_4_comapny',
		'std' => 'University of the Arts London',
    'class' => 'mini', 
		'type' => 'text');    
    
  $options[] = array(
		'name' => __('', 'options_check'),
		'desc' => __('Position.', 'options_check'),
		'id' => 'resume_4_position',
		'std' => 'Master of Arts',
    'class' => 'mini', 
		'type' => 'text');  
    
  $options[] = array(
		'name' => __('', 'options_check'),
		'desc' => __('Description.', 'options_check'),
		'id' => 'resume_4_description',
		'std' => 'Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. Duis mollis, non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh alte rivero nantasy muldaos kelty.',
		'type' => 'textarea');       
    
$options[] = array(
		'name' => __('5. item in Resume', 'options_check'),
		'desc' => __('Icons. Select here http://fortawesome.github.io/Font-Awesome/icons/. Format for example: fa fa-archive.', 'options_check'),
		'id' => 'resume_5_icon',
		'std' => '',
    'class' => 'mini', 
		'type' => 'text');  
  
  $options[] = array(
		'name' => __('', 'options_check'),
		'desc' => __('Company - required.', 'options_check'),
		'id' => 'resume_5_comapny',
		'std' => '',
    'class' => 'mini', 
		'type' => 'text');    
    
  $options[] = array(
		'name' => __('', 'options_check'),
		'desc' => __('Position.', 'options_check'),
		'id' => 'resume_5_position',
		'std' => '',
    'class' => 'mini', 
		'type' => 'text');  
    
  $options[] = array(
		'name' => __('', 'options_check'),
		'desc' => __('Description.', 'options_check'),
		'id' => 'resume_5_description',
		'std' => '',
		'type' => 'textarea');       
 
$options[] = array(
		'name' => __('6. item in Resume', 'options_check'),
		'desc' => __('Icons. Select here http://fortawesome.github.io/Font-Awesome/icons/. Format for example: fa fa-archive.', 'options_check'),
		'id' => 'resume_6_icon',
		'std' => '',
    'class' => 'mini', 
		'type' => 'text');  
  
  $options[] = array(
		'name' => __('', 'options_check'),
		'desc' => __('Company - required.', 'options_check'),
		'id' => 'resume_6_comapny',
		'std' => '',
    'class' => 'mini', 
		'type' => 'text');    
    
  $options[] = array(
		'name' => __('', 'options_check'),
		'desc' => __('Position.', 'options_check'),
		'id' => 'resume_6_position',
		'std' => '',
    'class' => 'mini', 
		'type' => 'text');  
    
  $options[] = array(
		'name' => __('', 'options_check'),
		'desc' => __('Description.', 'options_check'),
		'id' => 'resume_6_description',
		'std' => '',
		'type' => 'textarea'); 
    
$options[] = array(
		'name' => __('7. item in Resume', 'options_check'),
		'desc' => __('Icons. Select here http://fortawesome.github.io/Font-Awesome/icons/. Format for example: fa fa-archive.', 'options_check'),
		'id' => 'resume_7_icon',
		'std' => '',
    'class' => 'mini', 
		'type' => 'text');  
  
  $options[] = array(
		'name' => __('', 'options_check'),
		'desc' => __('Company - required.', 'options_check'),
		'id' => 'resume_7_comapny',
		'std' => '',
    'class' => 'mini', 
		'type' => 'text');    
    
  $options[] = array(
		'name' => __('', 'options_check'),
		'desc' => __('Position.', 'options_check'),
		'id' => 'resume_7_position',
		'std' => '',
    'class' => 'mini', 
		'type' => 'text');  
    
  $options[] = array(
		'name' => __('', 'options_check'),
		'desc' => __('Description.', 'options_check'),
		'id' => 'resume_7_description',
		'std' => '',
		'type' => 'textarea');       
    
$options[] = array(
		'name' => __('8. item in Resume', 'options_check'),
		'desc' => __('Icons. Select here http://fortawesome.github.io/Font-Awesome/icons/. Format for example: fa fa-archive.', 'options_check'),
		'id' => 'resume_8_icon',
		'std' => '',
    'class' => 'mini', 
		'type' => 'text');  
  
  $options[] = array(
		'name' => __('', 'options_check'),
		'desc' => __('Company - required.', 'options_check'),
		'id' => 'resume_8_comapny',
		'std' => '',
    'class' => 'mini', 
		'type' => 'text');    
    
  $options[] = array(
		'name' => __('', 'options_check'),
		'desc' => __('Position.', 'options_check'),
		'id' => 'resume_8_position',
		'std' => '',
    'class' => 'mini', 
		'type' => 'text');  
    
  $options[] = array(
		'name' => __('', 'options_check'),
		'desc' => __('Description.', 'options_check'),
		'id' => 'resume_8_description',
		'std' => '',
		'type' => 'textarea');  
 
  $options[] = array(
		'name' => __('9. item in Resume', 'options_check'),
		'desc' => __('Icons. Select here http://fortawesome.github.io/Font-Awesome/icons/. Format for example: fa fa-archive.', 'options_check'),
		'id' => 'resume_9_icon',
		'std' => '',
    'class' => 'mini', 
		'type' => 'text');  
  
  $options[] = array(
		'name' => __('', 'options_check'),
		'desc' => __('Company - required.', 'options_check'),
		'id' => 'resume_9_comapny',
		'std' => '',
    'class' => 'mini', 
		'type' => 'text');    
    
  $options[] = array(
		'name' => __('', 'options_check'),
		'desc' => __('Position.', 'options_check'),
		'id' => 'resume_9_position',
		'std' => '',
    'class' => 'mini', 
		'type' => 'text');  
    
  $options[] = array(
		'name' => __('', 'options_check'),
		'desc' => __('Description.', 'options_check'),
		'id' => 'resume_9_description',
		'std' => '',
		'type' => 'textarea'); 
    
$options[] = array(
		'name' => __('10. item in Resume', 'options_check'),
		'desc' => __('Icons. Select here http://fortawesome.github.io/Font-Awesome/icons/. Format for example: fa fa-archive.', 'options_check'),
		'id' => 'resume_10_icon',
		'std' => '',
    'class' => 'mini', 
		'type' => 'text');  
  
  $options[] = array(
		'name' => __('', 'options_check'),
		'desc' => __('Company - required.', 'options_check'),
		'id' => 'resume_10_comapny',
		'std' => '',
    'class' => 'mini', 
		'type' => 'text');    
    
  $options[] = array(
		'name' => __('', 'options_check'),
		'desc' => __('Position.', 'options_check'),
		'id' => 'resume_10_position',
		'std' => '',
    'class' => 'mini', 
		'type' => 'text');  
    
  $options[] = array(
		'name' => __('', 'options_check'),
		'desc' => __('Description.', 'options_check'),
		'id' => 'resume_10_description',
		'std' => '',
		'type' => 'textarea');          

/* =============================================================================
	
	Contact

	=========================================================================== */  
  

  $options[] = array(
		'name' => __('Contact', 'options_check'),
		'type' => 'heading');

    $options[] = array(
		'name' => __('Contact text', 'options_check'),
		'desc' => __('', 'options_check'),
		'id' => 'text_contact',
		'std' => 'Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. Duis mollis, non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh alte rivero nantasy muldaos kelty.',
		'type' => 'textarea');
    
  $options[] = array(
		'name' => __('Phone number', 'options_check'),
		'desc' => __('', 'options_check'),
		'id' => 'phone_number',
		'std' => '123 456 789',
		'type' => 'text');  
    
  $options[] = array(
		'name' => __('Email', 'options_check'),
		'desc' => __('', 'options_check'),
		'id' => 'contact_email',
		'std' => 'alex.footer@domain.com',
		'type' => 'text'); 
    
  $options[] = array(
		'name' => __('Website', 'options_check'),
		'desc' => __('', 'options_check'),
		'id' => 'contact_website',
		'std' => 'mywebsite.com',
		'type' => 'text');   
    
$options[] = array(
		'name' => __('Address', 'options_check'),
		'desc' => __('', 'options_check'),
		'id' => 'contact_address',
		'std' => 'Rockaway Park, NY 11694, US',
		'type' => 'text');     	  	   
    
  $options[] = array(
		'name' => __('Gmap location', 'options_check'),
		'desc' => __('Set your GPS location.', 'options_check'),
		'id' => 'gps_location',
		'std' => '40.578466,-73.840963',
    
		'type' => 'text');   	

/* =============================================================================
	
	Google Analytics

	=========================================================================== */  
  
  $options[] = array(
		'name' => __('Google Analytics', 'options_check'),
		'type' => 'heading');
    
  $options[] = array(
		'name' => __('', 'options_check'),
		'desc' => __('Paste the entire script.', 'options_check'),
		'id' => 'google_script',
		'std' => '',
		'type' => 'editor',
		'settings' => $wp_editor_settings );  			                                          

	return $options;
}   
?>
