<?php
/*
Template Name: Themes 2
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
						</article>						

						<div class="terms_rows row">
						<?php
							$taxonomy = 'themes'; //Choose the taxonomy
							$terms = get_terms( $taxonomy ); //Get all the terms
							foreach ($terms as $term) { //Cycle through terms, one at a time
							// Check and see if the term is a top-level parent. If so, display it.
							$parent = $term->parent;
							 if ( $parent=='0' ) {
							 
								$term_id = $term->term_id; //Define the term ID
								$term_link = get_term_link( $term, $taxonomy ); //Get the link to the archive page for that term
								$term_name = $term->name;
								echo '<div class="col-3"><a class="ccats" href="' . $term_link . '"><span class="label">' . $term_name . '</span></a></div>';	
							} }
					    ?>


						<?php // if ( comments_open() && ! post_password_required() ) { comments_template( '', true ); } ?>
					<?php endwhile; endif; ?>



				</div>
				<?php // get_sidebar(); ?>
			</div>
		</div>
	</main>
	
<?php get_footer(); ?>