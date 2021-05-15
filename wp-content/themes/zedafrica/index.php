<?php get_header(); ?>

	<main id="content">
		<div class="container-xl">
			<div class="row">
				<div class="col-9">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'entry' ); ?>
					<?php comments_template(); ?>
					<?php endwhile; endif; ?>
					<?php get_template_part( 'nav', 'below' ); ?>
				</div>
				<?php get_sidebar(); ?>
			</div>
		</div>
	</main>

<?php get_footer(); ?>