	<section class="sobre">
		<div class="container">
			<ul class="habilidades">
			
<?php
query_posts('post_type=habilidades&post_per_page=-1');

if (have_posts()) :
	while (have_posts()) :
		the_post();
?>
	<li class="habilidade-<?= the_field('nivel') ?>">
		<style>
			.habilidades li h2 i.<?= the_field('icone') ?> {
				<?php if (get_field('cor_do_icone')) : ?>
				color: <?= the_field('cor_do_icone') ?>;
				<?php else : ?>
					color: #000;
				<?php endif; ?>
			}
		</style>
		<h2>
			<i class="fa <?= the_field('icone') ?>" ></i>
			<strong> <?= the_title()  ?></strong> // <?= the_field('nivel') ?>0%
			<div class="barra"><span></span></div>
		</h2>
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
			<a href="#" class="botao medio"><i class="fa fa-picture-o"></i> Acessar Portfolio</a>
		</div>
	</section>