<?php
/**
 * @package TEAK WORDPRESS CMS
 * 
 */
?>
	<!--
	<div class="footer grid_12">
    	<span class="teakaddr">TEAK - 330 Jackson St. San Francisco, CA 94111</span>
        <span class="sep">|</span>
        <span class="teakphone">415.296.1114</span>
        <span class="sep">|</span>
        <span class="infomail"><a href="mailto:<?php echo antispambot("info@teakdigital.com"); ?>"><?php echo antispambot("info@teakdigital.com"); ?></a></span>
        <span class="facebook"><a class="fblink" href="http://www.facebook.com/pages/San-Francisco-CA/Teak/285961250403" target="_blank">follow</a></span>
        <span id="copyright" style="font:Verdana, Geneva, sans-serif;">&copy; <?php echo date('Y'); ?> All Rights Reserved</span>
    </div>
    -->
<div id="tape">&nbsp;</div>	
<div class="footer">
	
	<div class="container_12 padding-bottom-top-15">
		<div id="footerMap" class="grid_2"></div>
		<div class="footercolumn grid_3">
			<h3>Find Us</h3>
			<p>330 Jackson St.
			<br/>San Francisco, CA 94110
			<br/>415-296-1114
			<br/><a href="mailto:info@teakdigital.com">info@teakdigital.com</a>
			<br/>
			<br/>
			Subscribe to our newsletter</p>
			<!--paste in form element here to allow opt in to newsletter-->
		</div>
	
	<div class="footercolumn grid_2">
			<h3>Key Contacts</h3>
			<p>Live Action Production<br/>
			greg@teakdigital.com<br/>
			Post Production<br/>
			jan@teakdigital.com<br/>
			Interactive<br/>
			angelina@teakdigital.com</p>

	</div>
	
	<div class="footercolumn grid_2">
		<h3>Follow Us</h3>
		<a class="fblink" href="http://www.facebook.com/pages/San-Francisco-CA/Teak/285961250403" target="_blank">Facebook</a>
		<br/>
		<br/>
		<a class="fblink" href="http://www.twitter.com/teakdigital" target="_blank">Twitter
		<br/>
		<br/>
		<a class="fblink" href="http://www.youtube.com/user/teakdigital" target="_blank">YouTube
		
	</div>
	
	<div class="footercolumn grid_2">
		<h3>Recent News</h3>
      	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      	<!-- Display the Title as a link to the Post's permalink. -->
		<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
		<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
        
	</div>
	<br /><br /><br /><br />

</div>
      
</div>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/facelift-1.2.2/flir.js"></script>
<script type="text/javascript">
	//<![CDATA[
	FLIR.init({ path:'<?php bloginfo('template_directory'); ?>/facelift-1.2.2/'});

	// The links will be automatically detected so nothing more than the usualy replace statement is required.
	FLIR.replace('h1', new FLIRStyle({ fontFamily:'sketchBlock', mode:'wrap' }) );
	FLIR.replace('h2', new FLIRStyle({ fontFamily:'sketchBlock', mode:'wrap' }) );
	FLIR.replace('h1.page-heading', new FLIRStyle({ output:'gif'}) );
	FLIR.replace('h3', new FLIRStyle({ fontFamily:'sketchBlock', mode:'wrap' }) );
	//FLIR.replace('a.nav-title');
	//	FLIR.auto([ 'h1', 'h2']);
//]]>
</script>

</body>
</html>