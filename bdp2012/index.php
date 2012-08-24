<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<link rel="stylesheet" href='<?php bloginfo('template_directory'); ?>/1140.css' type="text/css"/>
<link rel="stylesheet" href='<?php bloginfo('template_directory'); ?>/style.css' type="text/css"/>

<link  href='http://code.jquery.com/jquery-1.6.4.min.js' type="text/javascript" />

<script>

</script>
<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
<!--<?php get_header(); ?>-->
</head>

<body>
<div class="container header">
	<div class="row">
		<div id="social">
			<a href="http://www.google.com" id="facebook" ></a>
			<a href="http://twitter.com/#/blackdotproject" id="twitter"></a>
			<a href="#" id="rss"></a>
		</div>
	</div>
	
	<div class="row">
		<div class="logo">
			<img src="<?php bloginfo('template_directory'); ?>/assets/logo.png" alt="The Black Dot Project is a creative hub for your curious, ever-expanding brain"/>
		</div>
		<div id="lWrap">
		<div id="lNav">			
			<?php $args = array(
				'depth'        => 0,
				'show_date'    => '',
				'date_format'  => get_option('date_format'),
				'child_of'     => 0,
				'exclude'      => '309',
				'include'      => '',
				'title_li'     => '',
				'echo'         => 1,
				'authors'      => '',
				'sort_column'  => 'menu_order, post_title',
				'link_before'  => '<i>',
				'link_after'   => '</i>',
				'walker'       => '',
				'post_type'    => 'page',
		        'post_status'  => 'publish' 
		        ); ?>
		        
		     <?php wp_list_pages($args); ?>
		</div>
		</div>
	</div>
	
	<div id='content'>
	
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
	
	
		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
			<div class="postHeader">
				<h2 class="postTitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<small class="postDate"><i><?php the_time('F jS, Y') ?></i></small>
			</div>		
			<div class="entry">
				
				<?php the_content(); ?>
				
				<!--<a class="morelink" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">More</a>-->
	
			</div>

			<!--
			<div class="meta">
				<div class="">
					<p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
				</div>
			</div>
			-->
		</div>
		
		<?php endwhile; ?>
			
		<div class="row">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>
		<?php else : ?>
		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		
		<?php endif; ?>

	</div>

	<div id='sidebar' class="grid_3"><?php get_sidebar(); ?></div>

	<div id='footer' class="grid_12">
		<!-- Include whatever footer info you like here -->  
		<p>Template design by <a href="http://www.dannycastillo.com">dannycastillo.com</a>
		<!-- Get the date and name of the site -->  
		&copy; <?php the_time('Y'); ?> <?php bloginfo('name'); ?>
		<!-- Add alink to the RSS feed for this site -->
		<a href="<?php bloginfo('rss2_url'); ?>">RSS2</a></p>
	</div>

</body>
</html>