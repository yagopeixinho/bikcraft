<?php 
// Template Name: Portfolio
?>
		<?php get_header();?>

		<?php if(have_posts()) : while(have_posts())  : the_post(); ?>

		<?php include(TEMPLATEPATH . "/inc/introducao.php"); ?>

		<section class="container animar-interno">
			<ul class="rslides">
				<?php if(have_rows('quote_clientes')) : while(have_rows('quote_clientes')) : the_row(); ?>
					<li>
						<blockquote class="quote_clientes">
							<p><?php the_sub_field('quote')?></p>
							<cite><?php the_sub_field('cliente')?></cite>
						</blockquote>
					</li>
				<?php endwhile; else: endif; ?>
			</ul>
		</section>

		<section class="portfolio">
			<div class="container">
				<?php include(TEMPLATEPATH . "/inc/clientes-portfolio.php")?>
			</div>
		</section>

		<?php endwhile; else: endif;?>
		<?php get_footer()?>