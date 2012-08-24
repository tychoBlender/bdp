<?php
/*
Template Name: Home Page
*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<link rel="stylesheet" href='<?php bloginfo('template_directory'); ?>/style.css' type="text/css"/>
<link rel="stylesheet" href='http://code.jquery.com/jquery-1.6.4.min.js' type="text/javascript" />
<!--<link rel="stylesheet" href="<?php bloginfo('jquery.tinyscrollbar.min.js'); ?>" type="text/javascript" />-->
<script>

</script>
<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-XXXXXXXX']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
/*
 get_header();
*/
</head>
<body>
<div id="container" class="">

    <div class="">
	    	<h1>This is the Home Page Template</h1>
            <!--  Single Post -->      

            <!--
            <div class="post">
                <div class="grid_2 post-thumb-1">
                    <img class="post-thumb-frame-bg-white" width="165" height="158" alt="" src="<?php bloginfo('template_directory'); ?>/images/thumb_back-new-strauss.png"/>
                    <img class="post-thumb-over-frame" width="150" height="140" alt="" src="<?php echo $postThumbPic; ?>"/>
                    <img class="post-thumb-tape-top-left" width="94" height="37" alt="" src="<?php bloginfo('template_directory'); ?>/images/thumb_tape-extra.png"/>
                </div>
            -->
            
            <!-- Display the Title as a link to the Post's permalink. -->
                <!--
                <h1 class="main-title" style="margin:0;">
                    <a class="grid_5" href="<?php the_permalink() ?>" rel="bookmark" title="Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                </h1>
                -->
                
            <!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->
                
                <!--
                <div class="grid_5 italic-16 position-title"><?php echo $postPersonTitle; ?></div>
    
                <div class="grid_6 entry">
                    /*contentLimitText(265,"");*/
                </div>
               
            </div>
            -->
            
        	<!--  Single Post  -->
        
        	<?php endwhile; endif; ?>

        </div>
            
   	</div>
        
	<?php // Side bar ?>
    <div class="grid_3">
        <?php get_sidebar(); ?> 
        <div class="clear">&nbsp;</div>        
    </div>

</div>

/*
get_footer();
*/
