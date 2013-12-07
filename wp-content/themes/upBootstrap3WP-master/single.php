<?php
/**
 * The Template for displaying all single posts.
 *
 * @author Matthias Thom | http://upplex.de
 * @package upBootWP 0.1
 */
get_header(); ?>
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<div id="primary" class="content-area">
					<main id="main" class="site-main" role="main">
			
					<?php while ( have_posts() ) : the_post(); ?>
			
						<?php get_template_part( 'content', 'single' ); ?>
			
						<?php upbootwp_content_nav( 'nav-below' ); ?>
			
						
			
					<?php endwhile; // end of the loop. ?>
			
					</main><!-- #main -->
				</div><!-- #primary -->
			</div><!-- .col-md-8 -->
			
			<div class="col-md-3">
					<div class="bg-white">
					<div class="toggle-category">
						<a href="#" id="gadgets-toggle"></a>
						<div id="gadgets-toggle-content" style="display: none;">
							<h1>Our Gadgets Toggle Content</h1>
						</div>

						<a href="#" id="socmed-toggle"></a>
						<div id="socmed-toggle-content" style="display: none;">
							<h1>Our Gadgets Toggle Content</h1>
						</div>

						<a href="#" id="ite-toggle"></a>
						<div id="ite-toggle-content" style="display: none;">
							<h1>Our Gadgets Toggle Content</h1>
						</div>

						<a href="#" id="security-toggle"></a>
						<div id="security-toggle-content" style="display: none;">
							<h1>Our Gadgets Toggle Content</h1>
						</div>

						<a href="#" id="app-toggle"></a>
						<div id="app-toggle-content" style="display: none;">
							<h1>Our Gadgets Toggle Content</h1>
						</div>

						<a href="#" id="opini-toggle"></a>
						<div id="opini-toggle-content" style="display: none;">
							<h1>Our Gadgets Toggle Content</h1>
						</div>

					</div>

					<div class="subscribe-widget" style="margin: 10px 0 0 0;">
						<div class="subscribe">
							<input type="text" name="subscribe-text" placeholder="Type your email here" class="input-subscribe" style="width: 239px;">
							<button type="button" class="btn btn-warning btn-subscribe" style="width: 241px;">SUBSCRIBE US</button>
						</div>
					</div>

					<div class="twitter-widget">
						<a class="twitter-timeline" href="https://twitter.com/ITparamadina" data-widget-id="409174727517683712">Tweets by @ITparamadina</a>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
					</div>
				</div>
			</div><!-- .col-md-4 -->
		</div><!-- .row -->
	</div><!-- .container -->
<?php get_footer(); ?>