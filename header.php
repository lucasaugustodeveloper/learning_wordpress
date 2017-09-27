<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title><?= bloginfo('name')?> | <?= bloginfo('description')?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?= bloginfo('template_url')?>/css/<?= $style ?>.css">	
		<link rel="stylesheet" href="<?= bloginfo('template_url')?>/bower_components/wow/css/libs/animate.css">

<?php if (is_page('portfolio')) : ?>
		<link rel="stylesheet" href="<?= bloginfo('template_url')?>/bower_components/lightbox2/dist/css/lightbox.min.css">
<?php endif;
if (is_page()) : ?>
	<style>
		.slide {
			margin-top: 190px;
		}		
		.slick-list {
			clear: both;
		}
	</style>
	<link rel="stylesheet" href="<?= bloginfo('template_url')?>/bower_components/slick-carousel/slick/slick.css">
	<link rel="stylesheet" href="<?= bloginfo('template_url')?>/bower_components/slick-carousel/slick/slick-theme.css">
<?php endif; ?>
		<link rel="stylesheet" href="<?= bloginfo('template_url')?>/css/plugins.css">
		<link rel="stylesheet" href="<?= bloginfo('template_url')?>/css/geral.css">
		<?= wp_head() ?>
	</head>
	<body <?= body_class() ?>>

		<?php include('includes/organisms/menu-responsivo.php'); ?>	

		<div class="layout">
			<style>
				<?php if (get_the_post_thumbnail()) : ?>
					header {
						background-image: url('<?= the_post_thumbnail_url() ?>');
						background-size: cover;
					}
				<?php else : ?>
					header {
						background-image: url('<?= bloginfo('template_url') ?>/images/fundo-slide-pagina-inicial.jpg');
						}
				<?php endif; ?>
			</style>
			<header>
				<div class="container">

					<div class="logo wow slideInLeft" data-wow-duration="1s" data-wow-delay="1s">
						<a href="<?= bloginfo('url')?>">
							<img src="<?= bloginfo('template_url')?>/images/logo-tag-topo.svg" alt="Logo Topo Tag">
						</a>
					</div>

					<div class="links">
						<?php include('includes/organisms/menu.php'); ?>
						
						<a class="toggle" href="javascript:;">
							<span></span>
							<span></span>
							<span></span>
						</a>

						<ul class="social">
							<li class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
								<a href="#"><i class="fa fa-facebook"></i></a>
							</li>

							<li class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.9s">
								<a href="#"><i class="fa fa-github-alt"></i></a>
							</li>
						</ul>
					</div>

					<div class="slide slider-main">
					<?php
						query_posts('post_type=slide');
						while (have_posts('')) : 
							the_post();
					?>
						<div class="item">
							<h1>
								<?= the_title() ?>
							</h1>
							<p>
								<?= the_content() ?>
							</p>
						</div>
					<?php endwhile;
						wp_reset_query();
					?>
					</div>
					

				</div>
				
			</header>
			
			<main>