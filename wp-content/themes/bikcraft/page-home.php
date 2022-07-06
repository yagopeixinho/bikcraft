<?php
// Template Name: Home
?>
		<?php get_header();?>
			<?php if(have_posts()) : while(have_posts())  : the_post(); ?>
		
				<?php include(TEMPLATEPATH . "/inc/introducao.php")?>
				
				<section class="produtos container animar">
					<h2 class="subtitulo">Produtos</h2>
					<ul class="produtos_lista">

						<li class="grid-1-3">
							<div class="produtos_icone">
								<img src="img/produtos/passeio.png" alt="Bikcraft Passeio">
							</div>
							<h3>Passeio</h3>
							<p>Muito melhor do que passear pela orla a vidros fechados.</p>
						</li>

						<li class="grid-1-3">
							<div class="produtos_icone">
								<img src="img/produtos/esporte.png" alt="Bikcraft Esporte">
							</div>
							<h3>Esporte</h3>
							<p>Mais rápida do que Forrest Gump, ninguém vai pegar você.</p>
						</li>

						<li class="grid-1-3">
							<div class="produtos_icone">
								<img src="img/produtos/retro.png" alt="Bikcraft Retrô">
							</div>
							<h3>Retrô</h3>
							<p>O passado volta para lembrarmos o que devemos fazer no futuro.</p>
						</li>

					</ul>

					<div class="call">
						<p><?php the_field('chamada_produtos');?></p>
						<a href="/bikcraft/produtos" class="btn btn-preto">Produtos</a>
					</div>

				</section>
				<!-- Fecha Produtos -->
 
				<section class="portfolio">
					<div class="container">
						<h2 class="subtitulo">Portfólio</h2>
						<div class="portfolio_lista">
							<?php include(TEMPLATEPATH . '/inc/clientes-portfolio.php'); ?>
						</div>
					</div>
				</section>

				<?php include(TEMPLATEPATH . "/inc/qualidade.php")?>

				<div class="quebra">
					<blockquote class="quote-externo container">
						<p>“o verdadeiro segredo da felicidade está em ter um genuíno interesse por todos os detalhes da vida cotidiana.”</p>
						<cite>WILLIAM MORRIS</cite>
					</blockquote>
				</div>
			<?php endwhile; else: endif;?>
		<?php get_footer()?>