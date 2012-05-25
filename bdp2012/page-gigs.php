<?php
/*
Template Name: Gigs Page
*/

// Check if included from wp request
defined('SITECOOKIEPATH') or die( 'Thanks For Visiting Teak' );

// Check for teak REST service calls
initRest();

get_header(); ?>
<div class="container_12 content-wrap page-contact">
    
    <!-- Simple Spacer -->
    <div class="grid_12" style="height: 25px;"><img style="position: absolute;left:-5px;top:-12px;z-index: 0;" alt="" src="<?php bloginfo('template_directory'); ?>/images/td_pg_folio_master_watermark.gif"/></div>  
        <div class="gigs grid_9">
            <h2>Gigs</h2>
            
            <p><strong>Thanks for your interest in working with TEAK!</strong></p>
           
          
            <?php  $cat = get_category_by_slug('gigs');
    
            // Limit Posts
            query_posts("cat=$cat->term_id");
     
            if (have_posts()) : ?>
				 <p>We're interested in receiving applications for:</p>
                 <ul class="giglist">
				<?php while (have_posts()) : the_post(); 	?>
                	<li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
            	<?php endwhile; ?>
				</ul>
			<?php else: ?>
                 <p class="italic">There are currently no positions available, please check back soon.</p>
                 <br />
			<?php
			endif; ?>
           
            <p><strong>How to Apply</strong></p>
            <p>Email your resume to <a class="color-redish-brown" href="mailto:jobs@teakdigital.com">jobs@teakdigital.com</a> with the name of the job as the subject.
            <p>At the beginning of your email, please include:</p>
                <ul>
                    <li>A short paragraph explaining what you would bring to the role</li>
                    <li>Relevant experience</li>
                    <li>Your current location and availability.</li>
                </ul>
            <p><strong>No phone calls please.</strong></p>
        	<div class="clear"></div>
        </div>
    </div>
    
<?php // End -  Left col ?>


<?php // Start -  Right col
      // TODO: Turn this into independant module
 ?>
<div class="grid_3">

    <?php get_sidebar(); ?>

</div>
<?php // End -  Right col ?>
<div class="clear"></div>
</div>


    <?php get_footer(); ?>

<div class="clear"></div>
