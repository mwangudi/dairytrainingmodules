<?php get_header(); ?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<main id="content">

			<div class="page-wide-header">
				<div class="container">
					<header class="header"><h1 class="entry-title"><?php the_title(); ?></h1></header>					
				</div>
			</div>

			<div class="container-xl">
				<div class="row">
					<div class="col-12">

						
							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<div class="entry-content">
									<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
									<?php the_content(); ?>
									<div class="entry-links"><?php wp_link_pages(); ?></div>
								</div>
							</article>						
							<?php // if ( comments_open() && ! post_password_required() ) { comments_template( '', true ); } ?>
						

					</div>
					<?php // get_sidebar(); ?>
				</div>
			</div>
		</main>

	<?php endwhile; endif; ?>
	
<?php get_footer(); ?>