<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<link rel="stylesheet" href='<?php bloginfo('template_directory'); ?>/reset.css' type="text/css"/>
<link rel="stylesheet" href='<?php bloginfo('template_directory'); ?>/960.css' type="text/css"/>
<link rel="stylesheet" href='<?php bloginfo('template_directory'); ?>/text.css' type="text/css"/>
<link rel="stylesheet" href='<?php bloginfo('stylesheet_url'); ?>' type="text/css" />
<link  href='http://code.jquery.com/jquery-1.6.4.min.js' type="text/javascript" />
<!--<link rel="stylesheet" href="<?php bloginfo('jquery.tinyscrollbar.min.js'); ?>" type="text/javascript" />-->
<script>

</script>
<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
<!--<?php get_header(); ?>-->
</head>

<body>
	<div id='header'>
			<!--<a href="<?php bloginfo('url'); ?>/"><?php bloginfo('name'); ?></a><br/><span id="tagline"><?php bloginfo('description'); ?></span>-->
		<div id="logowrap">
			<a href="<?php bloginfo('url'); ?>/">
				<img id= "logo" src="<?php bloginfo('template_directory'); ?>/assets/logo.png" height="118" width="564" alt="The Black Dot Project is a creative hub for your curious, ever-expanding brain"
			</a>
		</div>
	</div>
	
	<div id='content' class="grid_4 prefix_4">
		<div>
			<?php wp_list_pages('title_li=' ); ?>
		</div>
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
	
		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small>
	
				<div class="entry">
	
					<?php the_content(); ?>
					<a class="morelink" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">More</a>
	
				</div>
	
			<p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
	
		</div>
		
		<?php endwhile; ?>
				
		<div class="navigation">
		
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