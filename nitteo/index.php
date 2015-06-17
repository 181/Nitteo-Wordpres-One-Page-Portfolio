<?php

get_header(); ?>

<style>
body, #content, #content2 {
  background-color: <?php echo of_get_option('about_colorpicker', 'no entry'); ?>;
}

.diselect_navi, #headlines-resume, #headlines-contact {
  color: <?php echo of_get_option('about_colorpicker', 'no entry'); ?> !important;
}

a:hover {
  color: <?php echo of_get_option('main_colorpicker', 'no entry'); ?>;
}

#navigation-single-post, #submit, .navigation_color, .nav-category-item, .skills-line, .icons, #submit_form, #submit, .navigation-page a, #content4 {
  background-color: <?php echo of_get_option('main_colorpicker', 'no entry'); ?>; 
}

.ch-info {
    background-color: <?php echo of_get_option('main_colorpicker', 'no entry'); ?> !important;
}

#about-me-box, #resume-box, #gallery {
  border-left: 5px solid <?php echo of_get_option('main_colorpicker', 'no entry'); ?>;
}

.company, .success_message, .filter:hover, .filter.active, #submit:hover, #submit_form:hover, .navigation-page a:hover, .email-erorr, .name-erorr, .message-erorr, .no-touch .hi-icon-effect-1a .hi-icon:hover, #alt_socila-complet i:hover, .fa-calendar, .fa-tag, .fa-folder-open, .fa-comments, .commentmetadata:before, .fn:before, .comment-awaiting-moderation:before  {
  color: <?php echo of_get_option('main_colorpicker', 'no entry'); ?>;
}  

.input, input, textarea {
  border-bottom: 3px solid <?php echo of_get_option('main_colorpicker', 'no entry'); ?>;
}

.comment-body {
  border-left: 3px solid <?php echo of_get_option('main_colorpicker', 'no entry'); ?>;
}

#navigation-name, #headlines-about, #headlines-portfolio, .selection-resume .fa, #download a:hover, #socila-complet i:hover, .post-title, .title {
  color: <?php echo of_get_option('resume_colorpicker', 'no entry'); ?>;
}

#item_1:hover, #item_2:hover, #item_3:hover, #item_4:hover, #item_6:hover, .navigation-wrapper a:hover, .select_navi {
  color: <?php echo of_get_option('resume_colorpicker', 'no entry'); ?> !important;
} 

#overlay-black, #content1, #content3, #alt_content4 {
  background-color: <?php echo of_get_option('resume_colorpicker', 'no entry'); ?>;
}
</style>

<div id="navigation-single-post">
    <div class="navigation-wrapper">
    <span id="navigation-name"><a href="<?php echo site_url(); ?>"><?php echo of_get_option('user_name', 'no entry'); ?></a></span>  
    
    <span id="item_6">CATEGORIES</span>
    
    <div class="nav-category">
    <ol class="nav-category-item">
    <li>
    <a href="<?php echo site_url() . "/blog"; ?>" title="View all posts">All categories</a>
    </li>  
   <?php wp_list_categories('title_li',''); ?>
    </ol>
    </div>
    
    <span id="item_1"><a href="<?php echo site_url(); ?>">HOME</a></span>
    
    </div>
</div>

<div id="main-content" class="main-content">
		<div id="content-post" class="site-content" role="main">

		<?php
			if ( have_posts() ) :
				// Start the Loop.
				while ( have_posts() ) : the_post();
    ?>    
        
        <a href="<?php the_permalink(); ?>" class="tile">
        <h2 class="title"><?php the_title(); ?></h2>
      </a>
      <i class="fa fa-calendar"></i><time class="date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('M jS, Y') ?></time>
      <i class="fa fa-folder-open"></i>
     <?php
      $categories = get_the_category();
      $separator = ', ';
      $output = '';
      if($categories){
        foreach($categories as $category) {
          $output .= '<a href="'.get_category_link( $category->term_id ).'" class="category-font-size" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '">'.$category->cat_name.'</a>'.$separator;
        }
      echo trim($output, $separator);
      }
      ?>
      <i class="fa fa-comments"></i><span class="num-comments"><?php comments_number( '0', '1', '%' ); ?></span><br>
      <?php content('70'); ?><span class="read-more"><a href="<?php the_permalink(); ?>" class="tile">READ MORE</a></span>
      
    <?php
					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );

				endwhile;
				// Previous/next post navigation.


			else :
				// If no content, include the "No posts found" template.
				get_template_part( 'content', 'none' );

			endif;
		?>

		</div><!-- #content -->
</div><!-- #main-content -->

<div class="navigation-page"><p><?php posts_nav_link(); ?></p></div>

<div id="alt_content4">
  <div id="selection-download">
      <div id="alt_socila-complet"> 
        <?php if ( 1 == of_get_option('twitter_checkbox_footer') ) { ?>   
        <a href="<?php echo of_get_option('twitter_url', 'no entry'); ?>"><i class="fa fa-twitter"></i></a>
        <?php } else { ?>
        <?php } ?>
        <?php if ( 1 == of_get_option('facebook_checkbox_footer') ) { ?>
        <a href="<?php echo of_get_option('facebook_url', 'no entry'); ?>"><i class="fa fa-facebook"></i></a>
        <?php } else { ?>
        <?php } ?>
        <?php if ( 1 == of_get_option('dribbble_checkbox_footer') ) { ?> 
        <a href="<?php echo of_get_option('dribbble_url', 'no entry'); ?>"><i class="fa fa-dribbble"></i></a>
        <?php } else { ?>
        <?php } ?>
        <?php if ( 1 == of_get_option('pinterest_checkbox_footer') ) { ?> 
        <a href="<?php echo of_get_option('pinterest_url', 'no entry'); ?>"><i class="fa fa-pinterest"></i></a>
        <?php } else { ?>
        <?php } ?>
        <?php if ( 1 == of_get_option('google_checkbox_footer') ) { ?> 
        <a href="<?php echo of_get_option('google_url', 'no entry'); ?>"><i class="fa fa-google-plus"></i></a> 
        <?php } else { ?>
        <?php } ?>
        <?php if ( 1 == of_get_option('instagram_checkbox_footer') ) { ?> 
        <a href="<?php echo of_get_option('instagram_url', 'no entry'); ?>"><i class="fa fa-instagram"></i></a>
        <?php } else { ?>
        <?php } ?>
        <?php if ( 1 == of_get_option('linkedin_checkbox_footer') ) { ?>   
        <a href="<?php echo of_get_option('linkedin_url', 'no entry'); ?>"><i class="fa fa-linkedin"></i></a>
        <?php } else { ?>
        <?php } ?>
        <?php if ( 1 == of_get_option('behance_checkbox_footer') ) { ?>   
        <a href="<?php echo of_get_option('behance_url', 'no entry'); ?>"><i class="fa fa-behance"></i></a>
        <?php } else { ?>
        <?php } ?>
        <?php if ( 1 == of_get_option('tumblr_checkbox_footer') ) { ?>   
        <a href="<?php echo of_get_option('tumblr_url', 'no entry'); ?>"><i class="fa fa-tumblr"></i></a>
        <?php } else { ?>
        <?php } ?>
        <?php if ( 1 == of_get_option('deviantart_checkbox_footer') ) { ?>   
        <a href="<?php echo of_get_option('deviantart_url', 'no entry'); ?>"><i class="fa fa-deviantart"></i></a>
        <?php } else { ?>
        <?php } ?>  
    </div>
  </div>
</div>
<script type="text/javascript">
            $(document).ready(function() {
            $('.test-popup-link').magnificPopup({type:'image', gallery:{enabled:true}}); 
            });    

            $( "img" ).parent().addClass('test-popup-link');
            $('html').css('height','100%');
           
</script>
<?php wp_footer(); ?>
</body>
</html>
