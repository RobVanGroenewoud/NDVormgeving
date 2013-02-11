	</div> <!-- #main .main-content -->

	<footer class="site-footer">
		<div class="primary">
			<form class="contactform" action="">
				<p>Contact</p>
				<input type="text" name="name" placeholder="Naam">
				<input type="email" name="email" placeholder="Email">
				<textarea name="message" rows="5"></textarea>
				<button>Verzenden</button>
			</form>
		</div>

		<div class="secundary">
			
			<div id="" class="vcard">
				<div class="org">ND Vormgeving</div>
				<a class="email" href="mailto:info@noortjedingemans.nl">info@noortjedingemans.nl</a>
				<div class="tel">013 - 211 71 92</div>
			</div>

			<div class="socialmedia">
				<a href="http://twitter.com/ndvormgeving">Twitter</a>
				<a href="http://facebook.com/ndvormgeving">Facebook</a>
				<a href="http://pinterest.com/ndvormgeving">Pinterest</a>
			</div>
		</div>

		<small class="copyright">
			&copy; <?php echo date('Y') ?> <?php bloginfo( 'name' ); ?>
		</small>
		
	</footer>
</div> <!-- #page -->

<?php wp_footer(); ?>

<script src="<?php echo get_template_directory_uri(); ?>/js/global.min.js"></script>
</body>
</html>
