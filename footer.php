			</main>
			
			<footer>
				<div class="logo-rodape">
					<a href="<?= bloginfo('url')?>">
						<img src="<?= bloginfo('template_url')?>/images/logo-tag-rodape.svg" alt="Logo TAG Rodapé">
					</a>

					<p>
						<?= date('Y') ?> &copy; Todos os Direitos Reservados |
						<a href="mailto:<?= bloginfo('admin_email') ?>">
							Lucas Augusto
						</a>
					</p>
				</div>
				
			</footer>
		</div>

		<script src="<?= bloginfo('template_url')?>/bower_components/jquery/dist/jquery.min.js"></script>
		<script src="<?= bloginfo('template_url')?>/bower_components/wow/dist/wow.min.js"></script>
<?php if (is_page('portfolio')) : ?>
		<script src="<?= bloginfo('template_url')?>/bower_components/lightbox2/dist/js/lightbox.min.js"></script>
<?php endif;
if (is_page()) : ?>
		<script src="<?= bloginfo('template_url')?>/bower_components/slick-carousel/slick/slick.min.js"></script>
<?php endif; ?>
		<script>
			$(function(){
				$('.toggle').click(function(){
					$('.layout').toggleClass('ativo');
					$('.menu-responsivo').toggleClass('ativo');
					$(this).toggleClass('ativo');
				});
				new WOW().init();
			});
		</script>

		<?php if (is_page()) : ?>
			<script>
				$('.slide').slick({
					dots: false,
					infinite: true,
					speed: 300,
					slidesToShow: 1,
					autoplay: true,
					autoplaySpeed: 3000,
				})
			</script>
		<?php endif; ?>
		<?= wp_footer() ?>
	</body>
</html>