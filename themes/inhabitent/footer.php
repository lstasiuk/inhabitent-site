<?php
/**
 * The template for displaying the footer.
 *
 * @package Inhabitent_Theme
 */
?>
	 			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="footer-container footer-list">
				<p>Contact Info</p>
				<ul>
								<li>
									<i class="fas fa-envelope"></i>
									info@inhabitent.com
								</li>
								<li>
									<i class="fas fa-phone"></i>
									778-456-7891
								</li>
								<li>
									<i class="fab fa-facebook-square"></i>
									<i class="fab fa-twitter-square"></i>
									<i class="fab fa-google-plus-square"></i>
									<i class="fab fa-instagram"></i>
								</li>
							</ul>
					</div>
					<div class="business-hours footer-list">
					<p>Business Hours</p>
					<ul>
						<li><strong>Monday-Friday:</strong> 9am to 5pm</li>
						<li><strong>Saturday:</strong> 10am to 2pm</li>
						<li><strong>Sunday:</strong> Closed</li>
					</ul>
</div>
					
					<div class="footer-logo">
					<img src="<?php echo get_template_directory_uri()?>/images/logos/inhabitent-logo-text.svg"/>
					</div>
</div>
				<div class="copyright">
					<p>copyright &copy; 2018 inhabitent</p>
					</div>


				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
