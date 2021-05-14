<?php
/*
Template Name: Themes
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
						<?php // if ( comments_open() && ! post_password_required() ) { comments_template( '', true ); } ?>
					<?php endwhile; endif; ?>


					<figure>
                  <?php $wcatTerms = get_terms('themes', array('hide_empty' => 0, 'parent' =>0)); 
                     foreach($wcatTerms as $wcatTerm) : 
                     ?>
                        <ul>
                           <li>
                              <a href="<?php echo get_term_link( $wcatTerm->slug, $wcatTerm->taxonomy ); ?>"><?php echo $wcatTerm->name; ?></a>
                              <ul class="megaSubCat">
                                 <?php
                                    $wsubargs = array(
                                       'hierarchical' => 1,
                                       'show_option_none' => '',
                                       'hide_empty' => 0,
                                       'parent' => $wcatTerm->term_id,
                                       'taxonomy' => 'themes'
                                    );
                                    $wsubcats = get_categories($wsubargs);
                                    foreach ($wsubcats as $wsc):
                                    ?>
                                 <li><a href="<?php echo get_term_link( $wsc->slug, $wsc->taxonomy );?>"><?php echo $wsc->name;?></a></li>
                                 <?php
                                    endforeach;
                                    ?>  
                              </ul>
                           </li>
                        </ul>
                        <?php 
                     endforeach; 
                  ?>
					</figure>


				</div>
				<?php // get_sidebar(); ?>
			</div>
		</div>
	</main>
	
<?php get_footer(); ?>