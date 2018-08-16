<?php
/**
 * The template for displaying the footer.
 *
 * @package Inhabitent_Theme
 */
?>
	
			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="footer-container">
					<div class="contact-info footer-list">
					<p>Contact Info</p>
					<ul>
						<li>info@inhabitent.com</li>
						<li>778-456-7891</li>
						<i class="fab fa-facebook-square"> </i> <i class="fab fa-twitter-square"> </i> <i class="fab fa-google-plus-g"></i>
					</ul> 			
					</div>
					<div class="business-hours footer-list">
					<p>Business Hours</p>
					<ul>
						<li>Monday-Friday: 9am to 5pm</li>
						<li>Saturday: 10am to 2pm</li>
						<li>Sunday: Closed</li>
					</ul>
</div>
					
					<div class="footer-logo">
					<img src="<?php echo get_template_directory_uri()?>/images/logos/inhabitent-logo-text.svg"/>
					</div>
</div>
				<div class="copyright">
					<p>Copyright © 2018 Inhabitent</p>
					</div>


				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
