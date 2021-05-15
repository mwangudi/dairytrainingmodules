<?php
/*
Template Name: Levels
*/
?>
<?php get_header(); ?>

	<main id="content">
		<div class="container-xl">
			<div class="row">
				<div class="col-12">

					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<header class="header"><h1 class="entry-title"><?php the_title(); ?></h1></header>
							<div class="entry-content">
								<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
								<?php the_content(); ?>
								<div class="entry-links"><?php wp_link_pages(); ?></div>
							</div>
						</article>						
						<?php // if ( comments_open() && ! post_password_required() ) { comments_template( '', true ); } ?>
					<?php endwhile; endif; ?>

				</div>
				<?php // get_sidebar(); ?>
			</div>
		</div>
	</main>
	
<?php get_footer(); ?>