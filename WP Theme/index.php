<?php get_header(); ?>



	    <div class="maincontent clear">
            <section>
		    <?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
			  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="post-header">
				   <div class="date"><?php the_time( 'M j y' ); ?></div>
				   <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				   <div class="author"><?php the_author(); ?></div>
				</div><!--end post header-->
				<div class="entry clear">
				   <?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?>
				   <?php the_content(); ?>
				   <?php edit_post_link(); ?>
				   <?php wp_link_pages(); ?> </div>
				<!--end entry-->
				<div class="post-footer">
				   <div class="comments"><?php comments_popup_link( 'Leave a Comment', '1 Comment', '% Comments' ); ?></div>
				</div><!--end post footer-->
				</div><!--end post-->
			<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
				<div class="navigation index">
				   <div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div>
				   <div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div>
				</div><!--end navigation-->
			<?php else : ?>
			<?php endif; ?>
			</section>
				
			</div>
			
			<?php get_sidebar(); ?>
		
		<?php get_footer(); ?>
		
	<div class="fixedicon clear">
	    <a href="https://www.facebook.com/PaurutiTost"><img src="images/fb.png" alt="Facebook"/></a>
	    <a href="https://www.twitter.com/PaurutiTost"><img src="images/tw.png" alt="Twitter"/></a>
	    <a href="https://www.google.com"><img src="images/gl.png" alt="GooglePlus"/></a>
	    <a href="https://www.linkedin.com/in/paurutitost/"><img src="images/in.png" alt="LinkedIn"/></a>
	</div>	
<script>
  (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
  function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
  e=o.createElement(i);r=o.getElementsByTagName(i)[0];
  e.src='https://www.google-analytics.com/analytics.js';
  r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
  ga('create','UA-XXXXX-X','auto');ga('send','pageview');
</script>
<script type="text/javascript" src="js/scrolltop.js"></script>

</body>
</html>		