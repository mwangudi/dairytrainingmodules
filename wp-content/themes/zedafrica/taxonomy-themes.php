<?php get_header(); ?>

	<?php
		$taxonomy_prefix = 'themes';
		$term_id  = get_queried_object()->term_id;
		$term_id_prefixed = $taxonomy_prefix .'_'. $term_id;
		$field = get_field( 'term_depth', $term_id_prefixed ); ?>
		<?php if ( $field == 'theme' ) { ?>

			<div class="content_wrapper">
				<div class="container-xl">
					<div class="heading">
						<h1>LEVEL</h1>
					</div>
					<div class="row clearfix">
						<?php 
							$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); 
							if ($term->parent == 0) {  
								wp_list_categories('taxonomy=themes&depth=1&title_li=&child_of=' . $term->term_id);

							} else {
								wp_list_categories('taxonomy=themes&title_li=&child_of=' . $term->parent);  
							}
						?>						
					</div>
				</div>
			</div>

		<?php } if ( $field == 'level' ) { ?>




			<div class="content_wrapper">
				<div class="container-xl">
					<div class="heading">
						<h1>TOPIC</h1>
					</div>
					<div class="row clearfix">
						<?php 
							$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); 
							if ($term->parent == 0) {  
								wp_list_categories('taxonomy=themes&depth=1&title_li=&child_of=' . $term->term_id);

							} else {
								wp_list_categories('taxonomy=themes&title_li=&child_of=' . $term->parent);  
							}
						?>						
					</div>
				</div>
			</div>

		<?php } elseif ( $field == 'topic' ) { ?>




			<div class="content_wrapper">
				<div class="container-xl">
					<div class="heading">
						<h1>READ</h1>
					</div>
					<div class="row clearfix">
						<?php 
							$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); 
							if ($term->parent == 0) {  
								wp_list_categories('taxonomy=themes&depth=1&title_li=&child_of=' . $term->term_id);

							} else {
								wp_list_categories('taxonomy=themes&title_li=&child_of=' . $term->parent);  
							}
						?>						
					</div>


					<div class="row posts_row">
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'entry' ); ?>
						<?php endwhile; endif; ?>
						<?php get_template_part( 'nav', 'below' ); ?>						
					</div>

				</div>
			</div>
		



		<?php } ?>

<?php get_footer(); ?>