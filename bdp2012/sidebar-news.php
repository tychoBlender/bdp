<?php
/**
 * @package TEAK WORDPRESS CMS
 * 
 */
/* Widgetized sidebar, if you have the plugin installed. */
	if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('news') ) : 
		//you can display some alternate content here
	endif; 
 ?>
 
 
<!--<div class="widget">
 <?php
/* 	$cats = array(
    'show_option_all'    => '',
    'orderby'            => 'name',
    'order'              => 'ASC',
    'show_last_update'   => 0,
    'style'              => 'list',
    'show_count'         => 0,
    'hide_empty'         => 0,
    'use_desc_for_title' => 1,
    'child_of'           => 6,
    'feed'               => '',
    'feed_type'          => '',
    'feed_image'         => '',
    'exclude'            => '',
    'exclude_tree'       => '',
    'include'            => '',
    'hierarchical'       => true,
    'title_li'           => __( '<h4>Categories</h4>' ),
    'number'             => NULL,
    'echo'               => 1,
    'depth'              => 1,
    'current_category'   => 0,
    'pad_counts'         => 0,
    'taxonomy'           => 'category',
    'walker'             => 'Walker_Category' ); 		
    
	wp_list_categories( $cats ); */
?> 
</div>-->

<div class="widget">
<h3>TAGS</h3>
<?php $tag_args = array(
    'smallest'  => 12, 
    'largest'   => 12,
    'unit'      => 'px', 
    'number'    => 45,  
    'format'    => 'list',
    'separator' => '',
    'orderby'   => 'name', 
    'order'     => 'ASC',
    'exclude'   => '', 
    'include'   => '', 
    'link'      => 'view', 
    'taxonomy'  => 'post_tag', 
    'echo'      => true ); 		
    
	wp_tag_cloud( $tag_args );
?> 
</div>