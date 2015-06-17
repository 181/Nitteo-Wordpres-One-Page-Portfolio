<?php
/**
 *
 * Template Name: Main Page
 *  
 */
get_header(); 
?>

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

<script type="text/javascript">
            google.maps.event.addDomListener(window, 'load', init);
        
            function init() {
                var mapOptions = {
                    zoom: 11,
                    center: new google.maps.LatLng(<?php echo of_get_option('gps_location', 'no entry'); ?>),
                    scrollwheel: false, 

                    styles: [{stylers:[{hue:'#2c3e50'},{saturation:250}]},{featureType:'road',elementType:'geometry',stylers:[{lightness:50},{visibility:'simplified'}]},{featureType:'road',elementType:'labels',stylers:[{visibility:'off'}]}]
                };

                var mapElement = document.getElementById('map');

                var map = new google.maps.Map(mapElement, mapOptions);
                
                 var marker = new google.maps.Marker({
                            position: map.getCenter(),
                            map: map,
                            title: 'Click to zoom'
                            });
            }
</script>
  
  <div id="preloader">
      <div id="status">&nbsp;</div>
  </div>
  <div id="navigation">
    <div class="navigation-wrapper">
    <span id="navigation-name"><a href="<?php echo site_url(); ?>"><?php echo of_get_option('user_name', 'no entry'); ?></a></span> 
    
    <?php if(of_get_option('blog_navigation', 'no entry' ) != "") { ?>
    <span id="item_5"><a href="<?php echo site_url() . "/blog/"; ?>"><?php echo of_get_option('blog_navigation', 'no entry'); ?></a></span>
    <?php } ?>
    
    <?php if(of_get_option('contact_navigation', 'no entry' ) != "") { ?>
    <span id="item_4"><?php echo of_get_option('contact_navigation', 'no entry'); ?></span>
    <?php } ?>
    
    <?php if(of_get_option('work_navigation', 'no entry' ) != "") { ?> 
    <span id="item_3"><?php echo of_get_option('work_navigation', 'no entry'); ?></span> 
    <?php } ?>
    
    <?php if(of_get_option('resume_navigation', 'no entry' ) != "") { ?> 
    <span id="item_2"><?php echo of_get_option('resume_navigation', 'no entry'); ?></span>  
    <?php } ?>
    
    <?php if(of_get_option('about_navigation', 'no entry' ) != "") { ?> 
    <span id="item_1"><?php echo of_get_option('about_navigation', 'no entry'); ?></span>
    <?php } ?>

    </div>
  </div>
    <div id="form1" runat="server">
    <div id="header-headlines">
        <p><?php echo of_get_option('introductory_text_upper', 'no entry'); ?></p>
        <span><?php echo of_get_option('user_name', 'no entry'); ?></span>
        <p><?php echo of_get_option('introductory_text_bottom', 'no entry'); ?></p>
    </div>   
        <div class="hi-icon-wrap hi-icon-effect-1 hi-icon-effect-1a">
        <?php if ( 1 == of_get_option('facebook_checkbox_home') ) { ?>
        <a href="<?php echo of_get_option('facebook_url', 'no entry'); ?>" class="hi-icon hi-icon-mobile"><i class="fa fa-facebook"></i></a>
        <?php } else { ?>
        <?php } ?>
        <?php if ( 1 == of_get_option('twitter_checkbox_home') ) { ?>
        <a href="<?php echo of_get_option('twitter_url', 'no entry'); ?>" class="hi-icon hi-icon-screen"><i class="fa fa-twitter"></i></a>
        <?php } else { ?>
        <?php } ?>
        <?php if ( 1 == of_get_option('dribbble_checkbox_home') ) { ?>
        <a href="<?php echo of_get_option('dribbble_url', 'no entry'); ?>" class="hi-icon hi-icon-earth"><i class="fa fa-dribbble"></i></a>
        <?php } else { ?>
        <?php } ?>
        <?php if ( 1 == of_get_option('pinterest_checkbox_home') ) { ?>
        <a href="<?php echo of_get_option('pinterest_url', 'no entry'); ?>" class="hi-icon hi-icon-earth"><i class="fa fa-pinterest"></i></a>
        <?php } else { ?>
        <?php } ?>
        <?php if ( 1 == of_get_option('google_checkbox_home') ) { ?>
        <a href="<?php echo of_get_option('google_url', 'no entry'); ?>" class="hi-icon hi-icon-earth"><i class="fa fa-google-plus"></i></a>
        <?php } else { ?>
        <?php } ?>
        <?php if ( 1 == of_get_option('instagram_checkbox_home') ) { ?>
        <a href="<?php echo of_get_option('instagram_url', 'no entry'); ?>" class="hi-icon hi-icon-earth"><i class="fa fa-instagram"></i></a>
        <?php } else { ?>
        <?php } ?>
        <?php if ( 1 == of_get_option('linkedin_checkbox_home') ) { ?>
        <a href="<?php echo of_get_option('linkedin_url', 'no entry'); ?>" class="hi-icon hi-icon-earth"><i class="fa fa-linkedin"></i></a>
        <?php } else { ?>
        <?php } ?>
        <?php if ( 1 == of_get_option('behance_checkbox_home') ) { ?>
        <a href="<?php echo of_get_option('behance_url', 'no entry'); ?>" class="hi-icon hi-icon-earth"><i class="fa fa-behance"></i></a>
        <?php } else { ?>
        <?php } ?>
        <?php if ( 1 == of_get_option('tumblr_checkbox_home') ) { ?>
        <a href="<?php echo of_get_option('tumblr_url', 'no entry'); ?>" class="hi-icon hi-icon-earth"><i class="fa fa-tumblr"></i></a>
        <?php } else { ?>
        <?php } ?>
        <?php if ( 1 == of_get_option('deviantart_checkbox_home') ) { ?>
        <a href="<?php echo of_get_option('deviantart_url', 'no entry'); ?>" class="hi-icon hi-icon-earth"><i class="fa fa-deviantart"></i></a>
        <?php } else { ?>
        <?php } ?>
        </div>
    <div class="arrow animated bounce">
    <img width="20" height="20" alt="" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAxNi4wLjAsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+DQo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB3aWR0aD0iNTEycHgiIGhlaWdodD0iNTEycHgiIHZpZXdCb3g9IjAgMCA1MTIgNTEyIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCA1MTIgNTEyIiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxwYXRoIGZpbGw9IiNGRkZGRkYiIGQ9Ik0yOTMuNzUxLDQ1NS44NjhjLTIwLjE4MSwyMC4xNzktNTMuMTY1LDE5LjkxMy03My42NzMtMC41OTVsMCwwYy0yMC41MDgtMjAuNTA4LTIwLjc3My01My40OTMtMC41OTQtNzMuNjcyDQoJbDE4OS45OTktMTkwYzIwLjE3OC0yMC4xNzgsNTMuMTY0LTE5LjkxMyw3My42NzIsMC41OTVsMCwwYzIwLjUwOCwyMC41MDksMjAuNzcyLDUzLjQ5MiwwLjU5NSw3My42NzFMMjkzLjc1MSw0NTUuODY4eiIvPg0KPHBhdGggZmlsbD0iI0ZGRkZGRiIgZD0iTTIyMC4yNDksNDU1Ljg2OGMyMC4xOCwyMC4xNzksNTMuMTY0LDE5LjkxMyw3My42NzItMC41OTVsMCwwYzIwLjUwOS0yMC41MDgsMjAuNzc0LTUzLjQ5MywwLjU5Ni03My42NzINCglsLTE5MC0xOTBjLTIwLjE3OC0yMC4xNzgtNTMuMTY0LTE5LjkxMy03My42NzEsMC41OTVsMCwwYy0yMC41MDgsMjAuNTA5LTIwLjc3Miw1My40OTItMC41OTUsNzMuNjcxTDIyMC4yNDksNDU1Ljg2OHoiLz4NCjwvc3ZnPg0K" />
    </div>     
    <div id="header">   
        <div class="backstretch" id='home-screen'>
        <div id='overlay-black'></div>
        </div>
    </div>
    <div id="main">
        <div id="content">
          <div id="about">
            <div class="headlines" id="headlines-about">ABOUT <p>ME</p>
              <img id="my_photo" src="<?php echo of_get_option('profile_photo', 'no entry' ); ?>">
            </div>
            <div id="about-me-box"><?php echo of_get_option('text_about_you', 'no entry'); ?>
              <p class="skills-line" id="line-1"><span><?php echo of_get_option('first_skills', 'no entry' ); ?></span></p>
              <p class="skills-line" id="line-2"><span><?php echo of_get_option('second_skills', 'no entry' ); ?></span></p>
              <p class="skills-line" id="line-3"><span><?php echo of_get_option('third_skills', 'no entry' ); ?></span></p> 
            </div>
          </div>     
        </div>
        <div id="content1">
            <div id="resume">
              <div class="headlines" id="headlines-resume">RESUME</div>
              <div id="resume-box">
                <div style="padding-top:0px !important" class="selection-resume">
                <div style="margin-top:-16px" class="icons"><i class="<?php echo of_get_option('resume_1_icon', 'no entry' ); ?>"></i></div> 
                <p class="company"><?php echo of_get_option('resume_1_comapny', 'no entry' ); ?></p>
                <p class="position"><?php echo of_get_option('resume_1_position', 'no entry' ); ?></p>
                <p class="description"><?php echo of_get_option('resume_1_description', 'no entry' ); ?></p>
                </div>
                <?php if(of_get_option('resume_2_comapny', 'no entry' ) != "") { ?>
                <div class="selection-resume">
                <div class="icons"><i class="<?php echo of_get_option('resume_2_icon', 'no entry' ); ?>"></i></div> 
                <p class="company"><?php echo of_get_option('resume_2_comapny', 'no entry' ); ?></p>
                <p class="position"><?php echo of_get_option('resume_2_position', 'no entry' ); ?></p>
                <p class="description"><?php echo of_get_option('resume_2_description', 'no entry' ); ?></p>
                </div>
                <?php } ?>
                <?php if(of_get_option('resume_3_comapny', 'no entry' ) != "") { ?>
                <div class="selection-resume">
                <div class="icons"><i class="<?php echo of_get_option('resume_3_icon', 'no entry' ); ?>"></i></div> 
                <p class="company"><?php echo of_get_option('resume_3_comapny', 'no entry' ); ?></p>
                <p class="position"><?php echo of_get_option('resume_3_position', 'no entry' ); ?></p>
                <p class="description"><?php echo of_get_option('resume_3_description', 'no entry' ); ?></p>
                </div>
                <?php } ?>
                <?php if(of_get_option('resume_4_comapny', 'no entry' ) != "") { ?>
                <div class="selection-resume">
                <div class="icons"><i class="<?php echo of_get_option('resume_4_icon', 'no entry' ); ?>"></i></div>    
                <p class="company"><?php echo of_get_option('resume_4_comapny', 'no entry' ); ?></p>
                <p class="position"><?php echo of_get_option('resume_4_position', 'no entry' ); ?></p>
                <p class="description"><?php echo of_get_option('resume_4_description', 'no entry' ); ?></p>
                </div>
                <?php } ?>
                <?php if(of_get_option('resume_5_comapny', 'no entry' ) != "") { ?>
                <div class="selection-resume">
                <div class="icons"><i class="<?php echo of_get_option('resume_5_icon', 'no entry' ); ?>"></i></div>    
                <p class="company"><?php echo of_get_option('resume_5_comapny', 'no entry' ); ?></p>
                <p class="position"><?php echo of_get_option('resume_5_position', 'no entry' ); ?></p>
                <p class="description"><?php echo of_get_option('resume_5_description', 'no entry' ); ?></p>
                </div>
                <?php } ?>
                <?php if(of_get_option('resume_6_comapny', 'no entry' ) != "") { ?>
                <div class="selection-resume">
                <div class="icons"><i class="<?php echo of_get_option('resume_6_icon', 'no entry' ); ?>"></i></div>    
                <p class="company"><?php echo of_get_option('resume_6_comapny', 'no entry' ); ?></p>
                <p class="position"><?php echo of_get_option('resume_6_position', 'no entry' ); ?></p>
                <p class="description"><?php echo of_get_option('resume_6_description', 'no entry' ); ?></p>
                </div>
                <?php } ?>
                <?php if(of_get_option('resume_7_comapny', 'no entry' ) != "") { ?>
                <div class="selection-resume">
                <div class="icons"><i class="<?php echo of_get_option('resume_7_icon', 'no entry' ); ?>"></i></div>    
                <p class="company"><?php echo of_get_option('resume_7_comapny', 'no entry' ); ?></p>
                <p class="position"><?php echo of_get_option('resume_7_position', 'no entry' ); ?></p>
                <p class="description"><?php echo of_get_option('resume_7_description', 'no entry' ); ?></p>
                </div>
                <?php } ?>
                <?php if(of_get_option('resume_8_comapny', 'no entry' ) != "") { ?>
                <div class="selection-resume">
                <div class="icons"><i class="<?php echo of_get_option('resume_8_icon', 'no entry' ); ?>"></i></div>    
                <p class="company"><?php echo of_get_option('resume_8_comapny', 'no entry' ); ?></p>
                <p class="position"><?php echo of_get_option('resume_8_position', 'no entry' ); ?></p>
                <p class="description"><?php echo of_get_option('resume_8_description', 'no entry' ); ?></p>
                </div>
                <?php } ?>
                <?php if(of_get_option('resume_9_comapny', 'no entry' ) != "") { ?>
                <div class="selection-resume">
                <div class="icons"><i class="<?php echo of_get_option('resume_9_icon', 'no entry' ); ?>"></i></div>    
                <p class="company"><?php echo of_get_option('resume_9_comapny', 'no entry' ); ?></p>
                <p class="position"><?php echo of_get_option('resume_9_position', 'no entry' ); ?></p>
                <p class="description"><?php echo of_get_option('resume_9_description', 'no entry' ); ?></p>
                </div>
                <?php } ?>
                <?php if(of_get_option('resume_10_comapny', 'no entry' ) != "") { ?>
                <div class="selection-resume">
                <div class="icons"><i class="<?php echo of_get_option('resume_10_icon', 'no entry' ); ?>"></i></div>    
                <p class="company"><?php echo of_get_option('resume_10_comapny', 'no entry' ); ?></p>
                <p class="position"><?php echo of_get_option('resume_10_position', 'no entry' ); ?></p>
                <p class="description"><?php echo of_get_option('resume_10_description', 'no entry' ); ?></p>
                </div>
                <?php } ?>
              </div>  
            </div>
        </div>
        <div id="content2">
              <div id="work">
              <div class="headlines" id="headlines-portfolio">MY <p>WORK</p>
                <ul id='filter'>
                  <li class="filter" data-filter="all">All</li>
                </ul> 
              </div>
              <div id='gallery'>
                <ul class="ch-grid" id='Grid'>
                	<?php
                  $page = get_page_by_title( 'Gallery' );
                  $content = apply_filters('the_content', $page->post_content); 
                  echo $content;
                  ?>                    
                </ul>  
              </div>
              </div>
        </div>
        <div id="content3">
            <div id="contact">
              <div class="headlines" id="headlines-contact">GET<p>IN</p><p>TOUCH</p>
                <div>
                  <?php if(of_get_option('phone_number', 'no entry' ) != "") { ?>
                  <p><?php echo of_get_option('phone_number', 'no entry' ); ?><i class="fa fa-phone"></i></p>
                  <?php } ?>
                  <?php if(of_get_option('contact_email', 'no entry' ) != "") { ?>
                  <p><?php echo of_get_option('contact_email', 'no entry' ); ?><i class="fa fa-envelope "></i></p>
                  <?php } ?>
                  <?php if(of_get_option('contact_website', 'no entry' ) != "") { ?>
                  <p><a href="#"><?php echo of_get_option('contact_website', 'no entry' ); ?></a> <i class="fa fa-globe  "></i></p>
                  <?php } ?>
                  <?php if(of_get_option('contact_address', 'no entry' ) != "") { ?>
                  <p><?php echo of_get_option('contact_address', 'no entry' ); ?><i class="fa fa-map-marker"></i></p>
                  <?php } ?>
                </div>
              </div>
              <div id="resume-box">
                <div class="selection-resume selection-contact">
                <?php echo of_get_option('text_contact', 'no entry'); ?>
                </div>
                <div id='contact-form'>   
                <form id="contactform" method="post" name="contactform" role="form" action="">
                <p>
                <input class='input' type='text' name='name' class='input' placeholder='Your name'>
                </p>
                <p>
                <input class='input' type='text' name='email' class='input' placeholder='Your e-mail'>
                </p>
                <p>
                <textarea name="message" cols="88" rows="6" class="textarea" placeholder='Your message'></textarea>
                </p>  
                <p>
                <textarea style="display: none" class="form-control" id="email_adress" name="email_adress" type="text" /><?php echo of_get_option('contact_email', 'no entry'); ?></textarea>
                </p>                
                <button style="float:left" id="submit" class="btn btn-primary pull-right" type="submit">Send your message</button>
                <div id="success"></div>
                </form>  
                </div>
              </div>  
            </div>
        </div>
        <?php if(of_get_option('gps_location', 'no entry' ) != "") { ?>
        <div id="map"></div>
        <?php } ?>
    </div>
    <p id="back-top">
		<a href="#top"><span><i class="fa fa-arrow-up"></i></span></a>
	  </p>   
    
<style>
    .line-1-score {
      width: <?php echo of_get_option('first_skills_percentage', 'no entry' ); ?> !important;
    }
    .line-2-score {
      width: <?php echo of_get_option('second_skills_percentage', 'no entry' ); ?> !important;
    }
    .line-3-score {
      width: <?php echo of_get_option('third_skills_percentage', 'no entry' ); ?> !important;
    }
</style> 

    <script language="javascript">
        function autoResizeDiv()
        {
            document.getElementById('header').style.height = window.innerHeight +'px';
        }
        window.onresize = autoResizeDiv;
        autoResizeDiv();
    </script>

    <script type="text/javascript">
    $(function(){
     
    $('#Grid').mixitup();     
     
    });
    </script> 
    <script type="text/javascript">
            $(document).ready(function() {
            $('.test-popup-link').magnificPopup({type:'image'}); 
            $('.popup-vimeo').magnificPopup({type:'iframe'}); 
            
            $('#submit').click(function(){
            $.post("<?php echo get_template_directory_uri() . '/php/send_form_email.php' ?>", $("#contactform").serialize(),  function(response) {
            $('#success').html(response);   
            
            });
            return false;
            });
            });    
            
            $.backstretch([<?php echo of_get_option('home_screen_images', 'no entry' ); ?>], {duration: 2500, fade: 750}); 
  </script>  
  <script type="text/javascript">
        $(window).load(function() { 
            $('#status').fadeOut(); 
            $('#preloader').delay(350).fadeOut('slow'); 
            $('body').delay(350).css({'overflow':'visible'}); 
            
            $('.arrow').hide();
            $('#navigation').hide();  

            $('#header-headlines').addClass('animated bounceInDown');
            $('.hi-icon-wrap').addClass('animated bounceInUp');
            
            setTimeout(function() {
                $('.arrow').show();
                $('#navigation').show();
            }, 4000);
        })
</script> 

<?php
get_footer();
?>

