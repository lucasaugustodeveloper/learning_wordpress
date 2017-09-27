<section class="portfolio">
	<div class="container">
		<ul>
<?php
query_posts('post_type=post');

if (have_posts()) :
	while (have_posts()) :
		the_post();
?>
			<li>
				<figure class="imghvr-hinge-right">
					<img src="<?= the_post_thumbnail_url('portfolio_thumb') ?>" alt="<?= the_title() ?>">
					
					<figcaption>
						<a href="<?= the_post_thumbnail_url('full') ?>" data-lightbox="roadtrip" data-title="<?= the_content() ?>">
							<h3><?= the_title() ?></h3>
							<p><?= the_content() ?></p>
						</a>
						<div class="overlay"></div>
					</figcaption>
				</figure>
			</li>
<?php
	endwhile;
else :
?>
			<div class="textos">
				<p>
					<strong>Não há habilidades cadastradas...</strong>
				</p>
			</div>
<?php
endif;
wp_reset_query();
?>
		</ul>

	</div>
</section>