<?php
/**
 * @package WordPress
 * @subpackage Vojtech Sebo
 * @since Nitteo
 */
?>

<div id="content4">
  <div id="selection-download">
    <div id="download"><a href="<?php echo of_get_option('pdf_file', 'no entry' ); ?>">Download as .PDF</a></div>
      <div id="socila-complet"> 
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
<?php wp_footer(); ?>
</body>
</html>