<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>	
<?php endif; ?>

<?php query_posts('cat=1&showposts=2'); ?>
	<h3><a href="#">Code/Design</a></h3>
<?php while (have_posts()) : the_post(); ?>
	<li><a href="<?php the_permalink() ?>"><?php the_excerpt(); ?></a></li>
<?php endwhile; ?>
<?php query_posts('cat=1&showposts=3'); ?>
	<h3><a href="#">Mobile Post</a></h3>
<?php while (have_posts()) : the_post(); ?>
	<li><a href="<?php the_permalink() ?>"><?php the_excerpt(); ?></a></li>
<?php endwhile; ?>
<?php query_posts('cat=1&showposts=18'); ?>
	<h3><a href="#">Short Stories</a></h3>
<?php while (have_posts()) : the_post(); ?>
	<li><a href="<?php the_permalink() ?>"><?php the_excerpt(); ?></a></li>
<?php endwhile; ?>
<?php query_posts('cat=1&showposts=6'); ?>
	<h3><a href="#">Process</a></h3>
<?php while (have_posts()) : the_post(); ?>
	<li><a href="<?php the_permalink() ?>"><?php the_excerpt(); ?></a></li>
<?php endwhile; ?>
