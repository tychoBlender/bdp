<?php
/*
Template Name: News Summary Page
*/

// Check if included from wp request
defined('SITECOOKIEPATH') or die( 'Thanks For Visiting Teak' );

// Check for teak REST service calls
initRest();

get_header(); ?>
<div class="container_12 content-wrap">
     
	<?php require_once TEMPLATEPATH .'/nav-secondary-about.php'; ?>
     
    <?php // Start -  Left col ?>
    <div class="grid_9 margin-top-15">
        <div class="faces">
			<?php
            $presCat = get_category_by_slug('news');    
            ?>
        
        	<h1 class="grid_8 page-heading color-dark-brown"><?php echo $aboutPageMeta->post_content; ?></h1>
	    	<br class="clear" />
        
			<?php
    
            // Limit Posts
            // TODO: Automate this
            query_posts("posts_per_page=7&cat=$presCat->term_id");
     
            if (have_posts()) : while (have_posts()) : the_post(); 
            
            $postThumbPic = get_post_meta($post->ID, 'post-thumb-pic', true);
            $postPersonTitle = get_post_meta($post->ID, 'position-title', true);        
            
            ?>
        
            <!--  Single Post -->        
            <div class="post">
                <div class="grid_2 post-thumb-1">
                    <img class="post-thumb-frame-bg-white" width="165" height="158" alt="" src="<?php bloginfo('template_directory'); ?>/images/thumb_back-new-strauss.png"/>
                    <img class="post-thumb-over-frame" width="150" height="140" alt="" src="<?php echo $postThumbPic; ?>"/>
                    <img class="post-thumb-tape-top-left" width="94" height="37" alt="" src="<?php bloginfo('template_directory'); ?>/images/thumb_tape-extra.png"/>
                </div>
    
                <!-- Display the Title as a link to the Post's permalink. -->
                <h1 class="main-title" style="margin:0;">
                    <a class="grid_5" href="<?php the_permalink() ?>" rel="bookmark" title="Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                </h1>
    
                <!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->
                <div class="grid_5 italic-16 position-title"><?php echo $postPersonTitle; ?></div>
    
                <div class="grid_6 entry">
                    <?php contentLimitText(265,""); ?>
                </div>
    
            </div>

        	<div class="clear" style="height:38px;"></div>
        	<!--  Single Post  -->
        
        	<?php endwhile; endif; ?>

        </div>
            
   	</div>
   	<?php // End -  Left col ?>
        
	<?php // Side bar ?>
    <div class="grid_3">
        <?php get_sidebar(); ?> 
        <div class="clear">&nbsp;</div>        
    </div>
    <div class="clear"></div>
</div>



<?php get_footer(); ?>
