<?php
/*
Template Name: Content Types
*/
?>
<?php get_header(); ?>

<style type="text/css">
	footer#footer {
	    padding: 0px 0px;
	}
</style>

    <div class="container-fluid">
      <div class="row">
        <nav id="sidebarMenu2" class="col-md-3 col-lg-2 d-md-block snv-sidebar sidebar collapse">
          <div class="sidebar-sticky pt-3">
            <?php include(TEMPLATEPATH.'/x-sidebar.php'); ?>            
          </div>
        </nav>

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	        <main role="main" class="themes_wrapper mwili col-md-9 ml-sm-auto col-lg-10 px-md-4">
	          <div class="content_header text-center">
	            <h5 class="content_level">1. THEMES</h5>
	            <h2 class="content_title">Choose what you want to learn</h3>
	          </div>

	          <div class="container_A ">
	            <div class="themes2">          


					<div class="terms_rows row">
						<?php
							$taxonomy = 'content_type'; //Choose the taxonomy
							//$args = array( 'hide_empty' => false );
							//$terms = get_terms( $taxonomy , $args );
							//$terms = get_terms( $taxonomy ); //Get all the terms
							$terms = get_terms([
							    'taxonomy' => $taxonomy,
							    'hide_empty' => false,
							]);						
							$count=1;
							foreach ($terms as $term) { //Cycle through terms, one at a time
								// Check and see if the term is a top-level parent. If so, display it.
								$parent = $term->parent;
								// if ( $parent=='0' ) {
							 
									$term_id = $term->term_id; //Define the term ID
									$term_link = get_term_link( $term, $taxonomy ); //Get the link to the archive page for that term
									$term_name = $term->name;
									$description = $term->description;
									// echo '<div class="col-3"><a class="ccats" href="' . $term_link . '"><span class="label">' . $term_name . '</span></a></div>';	
									?>

					                <div class="col-md-4 col-sm-12">
					                  <div class="card" style="">

										<?php $args = array(
											'post_type' => 'modules',
											'tax_query' => array(
												array(
													'taxonomy'    => 'content_type',
													'field'    => 'term_id',
													'terms'    => $term_id,
													'operator' => 'IN',
												),
											),
										);
										$category_posts = new WP_Query( $args ); ?>
										   <?php if($category_posts->have_posts()) : ?>
							                    <a class="has_posts" href="<?php echo $term_link; ?>">
								                    <div class="card-body">  
								                    	<?php if ( $term_id == 64 || $term_id == 65 || $term_id == 66 || $term_id == 67 || $term_id == 68 || $term_id == 69 || $term_id == 70 ) { ?>
									                    		<div class="korner k_later">To be added later</div>
								                    	<?php } else { ?>
								                    		<div class="korner k_available">Available</div>
								                    	<?php } ?>
								                        <h5 class="card-title"><?php echo $count; ?>. <?php echo $term_name; ?></h5>
								                        <p class="card-text"><?php echo $description; ?></p>
								                        <p class="card-link">Learn</p>
								                    </div>
							                    </a>

										   <?php else: ?>

							                    <a class="no_posts" href="#not-available">
								                    <div class="card-body">  
								                    	<div class="korner k_notAvailable">Coming Soon</div>                  
								                        <h5 class="card-title"><?php echo $count; ?>. <?php echo $term_name; ?></h5>
								                        <p class="card-text"><?php echo $description; ?></p>
								                        <p class="card-link">Learn</p>
								                    </div>
							                    </a>

										   <?php endif;?>
					                  </div>
					                </div>

	        					<?php
								// }

								if ( $count%6 == 0 && $count < 7 ) { ?>
									</div>
										<div class="break_down"></div>
										<h2 class="content_title text-center more_themes">Other themes to be added later</h2>
									<div class="terms_rows row">
								<?php };
								$count++;
							
							} 
					    ?>
					</div>

					<!-- 
					<div class="theme_title_header text-center">
						<h3 class="other_themes_title"><?php the_field( 'other_themes_title', 'option' ); ?></h3>
					</div>
					<div class="terms_rows row">
						<?php if ( have_rows( 'other_themes', 'option' ) ) : ?>
							<?php while ( have_rows( 'other_themes', 'option' ) ) : the_row(); ?>
				                <div class="col-4">
				                  	<div class="card" style="">
					                    <a class="no_posts" href="#later">
						                    <div class="card-body">  
						                    	<div class="korner k_later"><?php the_field( 'later_text', 'option' ); ?></div>                  
						                        <h5 class="card-title"><?php the_sub_field( 'theme_title' ); ?></h5>
						                        <p class="card-text"><?php the_sub_field( 'theme_description' ); ?></p>
						                        <p class="card-link">Learn</p>
						                    </div>
					                    </a>
					                </div>
					            </div>								
							<?php endwhile; ?>
						<?php else : ?>
							<?php // no rows found ?>
						<?php endif; ?>						
					</div>	
					-->

	            </div>
	          </div>

	        </main>

        <?php endwhile; endif; ?>
      </div>
    </div>


	
<?php get_footer(); ?>