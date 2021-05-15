<?php get_header(); ?>

<style type="text/css">
.col-3.number_2 a {
    background: #0073d6;
}	
.col-3.number_1 a {
    background: #059e0e;
}
.col-3.number_3 a {
    background: #c90000;
}
.col-3.number_4 a {
    background: #18007c;
}	
</style>

			<?php
				$taxonomy_prefix = 'content_type';
				$term_id  = get_queried_object()->term_id;
				$term_id_prefixed = $taxonomy_prefix .'_'. $term_id;
				$field = get_field( 'term_depth', $term_id_prefixed );
				$type = get_field( 'level_type', $term_id_prefixed ); ?>


				<?php // if ( $field == 'theme' ) { ?>
					<!-- 
					<div class="container-fluid">
						<div class="row">
						    <nav id="sidebarMenu2" class="col-md-3 col-lg-2 d-md-block snv-sidebar sidebar collapse">
						      <div class="sidebar-sticky pt-3">



						        <div class="wizard_sidebar card text-center" style="">
						          <div class="getting_started start_header">
						            <p>Getting Started</p>
						            <ion-icon name="arrow-down-outline"></ion-icon>
						          </div>

						          <div class="start1 getting_started">
						            <div class="v_arrow v_top"></div>
						            <a class="B" href="/select-theme">
						              <div class="start_icon"><i class="lni lni-checkmark"></i></div>
						              <p>Theme</p>
						            </a>
						            <div class="v_arrow v_bottom"></div>
						          </div>


						          <div class="start2 getting_started">
						            <div class="v_arrow v_top"></div>
						            <a class="B" href="#nogo">
						              <div class="start_icon"><i class="lni lni-pulse"></i></div>
						              <p>Level</p>
						            </a>
						            <div class="v_arrow v_bottom"></div>
						          </div>            


						          <div class="start3 getting_started">
						            <div class="v_arrow v_top"></div>
						            <a class="B" href="#nogo">
						              <div class="start_icon"><i class="lni lni-text-align-justify"></i></div>
						              <p>Topic</p>
						            </a>
						          </div>

						        </div>            


						      </div>
						    </nav>

							<main role="main" class="themes_wrapper mwili col-md-9 ml-sm-auto col-lg-10 px-md-4">

							  <div class="content_header text-center">
							    <h5 class="content_level">2. LEVELS</h5>
							    <h2 class="content_title">Choose your preferred level</h2>
							  </div>

							  <div class="container_A ">
							    <div class="themes2">          
							      <div class="row">



									<?php  // SOURCE https://stackoverflow.com/questions/52689412/custom-output-wp-list-category
									$product_categories = get_terms( array(
									    'taxonomy' => 'content_type',
									    'hide_empty' => false,
									    'orderby' => 'ID'
									) );

									foreach($product_categories as $product_category) :   
									   // if( count(get_term_children( $product_category->term_id, 'product_category' )) == 0) $catlink = 'document.location.href=\''.get_term_link( $product_category->term_id, 'product_category' ).'\''; else $catlink = 'toggleChildCategories('.$product_category->term_id.')'; // check last child category and change link

									    if($product_category->parent == 0) { // top-level parent
									        // echo '<div class="col-md-12 pr-0 pl-0 cat-parent-'.$product_category->term_id.' cat-parent cat-parent-'.$product_category->parent.' show">
									        //     <a href="javascript:void(0);" onClick="">
									        //         <div class="personal text-right">
									        //             <p>'.$product_category->description.'</p>
									        //             <h4>'.$product_category->name.'</h4>
									        //         </div>
									        //     </a>
									        // </div>'; 
									    }
									    else { // child
									        // echo '<div class="col-md-12 border2 cat-parent-'.$product_category->term_id.' cat-item-'.$product_category->parent.' hide">
									        //     <a href="javascript:void(0);" onClick="">
									        //         <h5>'.$product_category->name.'</h5>
									        //     </a>
									        // </div>';  ?>

										
																			        <div class="col-3">
																			          <div class="level_card l_1 card" style="">

																			              	<a href="/content/basic-farmers/">
																				              <div class="card-body">                    
																				                  <h5 class="card-title">Level 1</h5>
																				                  <h6 class="card-subtitle mb-2 text-muted"><?php echo $product_category->name ?></h6>
																				              </div>
																			            	</a>
																			            	
																			          </div>
																			        </div>
										

									    <?php }
									endforeach;     
									?>


											<?php //This gets top layer terms only.  This is done by setting parent to 0.  
											$taxonomyName = "content_type";
											$parent_terms = get_terms( $taxonomyName, array( 'parent' => 0, 'orderby' => 'slug', 'hide_empty' => false ) );   
											foreach ( $parent_terms as $pterm ) {
											    //Get the Child terms
											    $terms = get_terms( $taxonomyName, array( 'parent' => $pterm->term_id, 'orderby' => 'slug', 'hide_empty' => false ) );
											    if ( $term_id == $pterm->term_id ) {
											    	$count=1;
												    foreach ( $terms as $term ) {
												        // echo '<li><a href="' . get_term_link( $term ) . '">' . $term->name . '</a></li>'; ?>

														<?php
															$taxonomy_prefix = 'content_type';
															$term_id  = get_queried_object()->term_id;
															$term_id_prefixed = $taxonomy_prefix .'_'. $term_id;
															$type2 = the_field( 'level_type_2', $term_id_prefixed );
															// echo 'type: ' . $type2;
														?>

												        <div class="col-3 <?php echo 'number_' . $count; ?> <?php the_field( 'level_type_2', $term_id_prefixed ); ?>">
												          <div class="level_card l_1 card" style="">

												              	<a href="<?php echo get_term_link( $term ); ?>">
													              <div class="card-body">                    
													                  <h5 class="card-title">Level <?php echo $count; ?></h5>
													                  <h6 class="card-subtitle mb-2 text-muted">
													                  	<?php echo $term->name ?>
													                  </h6>
													              </div>
												            	</a>
												            	
												          </div>
												        </div>	         
												    <?php $count++; }
											    }
											} ?>




							      </div>
							    </div>
							  </div>

							</main>
						</div>
					</div>

					-->
				<?php // } if ( $field == 'level' ) { ?>
				

					<div class="container-fluid">
						<div class="row">
						    <nav id="sidebarMenu2" class="col-md-3 col-lg-2 d-md-block snv-sidebar sidebar collapse">
						      <div class="sidebar-sticky pt-3">



						        <?php include(TEMPLATEPATH.'/x-sidebar.php'); ?>          


						      </div>
						    </nav>

							<main role="main" class="themes_wrapper mwili col-md-9 ml-sm-auto col-lg-10 px-md-4">



								<div class="content_wrapper topics_wrapper">

        
						          <div class="content_header text-center">
						            <h5 class="content_level">2. TOPICS</h5>
						            <h2 class="content_title">
										<?php
											$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); 
											echo 'Choose a topic in the theme ';
											echo '<span>';
											echo $term->name;
											echo '</span>';
										?>
						            </h2>					            	
						          </div>									

									<style type="text/css">
									#topic_list li.cat-item.cat-item-34.current-cat {
									    list-style: none;
									}
									#topic_list li.cat-item.cat-item-34.current-cat > a {
									    display: none;
									}	
									</style>

						          	<div class="container_A ">
						            	<div class="themes2"> 									

											<div class="row">

												
												<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
									                <div class="light_topics col-sm-12 col-md-3">
									                  <div class="topic_card l_1 card" style="">

														<?php if ( have_rows( 'module' ) || have_rows( 'module_2' ) || have_rows( 'module_3' ) ) : ?>
										                    <a class="has_posts" href="<?php the_permalink() ?>">
										                      <div class="card-body">   
										                      	  <div class="korner k_available">Available</div>                 
										                          <h5 class="card-title"><?php the_field( 'letter' ); ?></h5>
										                          <p class="card-text"><?php the_title(); ?></p>
										                      </div>
										                    </a>

														<!-- <?php//  elseif ( have_rows( 'module_2' ) ) : ?> -->
<!-- 										                    <a class="has_posts" href="<?php the_permalink() ?>">
										                      <div class="card-body">  
										                          <div class="korner k_available">Available</div>                  
										                          <h5 class="card-title"><?php the_field( 'letter' ); ?></h5>
										                          <p class="card-text"><?php the_title(); ?></p>
										                      </div>
										                    </a> -->
														<!-- <?php // elseif ( have_rows( 'module_2' ) ) : ?> -->
<!-- 										                    <a class="has_posts" href="<?php the_permalink() ?>">
										                      <div class="card-body">   
										                           <div class="korner k_available">Available</div>                 
										                          <h5 class="card-title"><?php the_field( 'letter' ); ?></h5>
										                          <p class="card-text"><?php the_title(); ?></p>
										                      </div>
										                    </a> -->

														<?php else : ?>
										                    <a class="no_posts" href="#not-available">
										                      <div class="card-body">  
										                      	  <div class="korner k_notAvailable">Coming Soon</div>                   
										                          <h5 class="card-title"><?php the_field( 'letter' ); ?></h5>
										                          <p class="card-text"><?php the_title(); ?></p>
										                      </div>
										                    </a>
										                <?php endif; ?>
									                  </div>
									                </div>  
												
												<?php endwhile;
												else: ?>
													<div class="col-12">
														<div class="alert alert-info text-center" role="alert">
														  No modules added yet
														</div>													
													</div>
												<?php endif;
												wp_reset_query(); // // wp_reset_postdata(); ?>
											</div>
										</div>
									</div>
								</div>


							</main>
						</div>
					</div>



				<?php // } elseif ( $field == 'topic' ) { ?>


					<!-- 
				    <div class="container-fluid">
				      <div class="row">
				        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block snv-sidebar sidebar collapse">
				          <div class="sidebar-sticky pt-3">

				            <ul class="nav flex-column">
				              <li class="nav-item nav-topic">
				                <p>THEME 1: Forage production & pasture management</p>                  
				              </li>
				              <li class="nav-item">
				                <a class="nav-link" href="#">
				                  <span data-feather="file"></span>
				                  1-A: Planning of fodder/feed requirements for the dry season
				                </a>
				              </li>
				              <li class="nav-item">
				                <a class="nav-link" href="#">
				                  <span data-feather="shopping-cart"></span>
				                  1-B: Soil fertility management, soil sampling and soil fertilization
				                </a>
				              </li>
				              <li class="nav-item">
				                <a class="nav-link" href="#">
				                  <span data-feather="users"></span>
				                  1-C: Use of natural resources, compost making, farmyard manure, manure storage and use
				                </a>
				              </li>
				              <li class="nav-item">
				                <a class="nav-link" href="#">
				                  <span data-feather="bar-chart-2"></span>
				                  1-D: Growing maize and sorghum for fodder and estimating time of harvest and yield
				                </a>
				              </li>
				              <li class="nav-item">
				                <a class="nav-link active" href="#">
				                  <span data-feather="home"></span>
				                  1-E: Brachiaria, Panicum, & Napier (cut and carry) grass management <span class="sr-only">(current)</span>
				                </a>
				              </li>                
				              <li class="nav-item">
				                <a class="nav-link" href="#">
				                  <span data-feather="layers"></span>
				                  1-F: Growing fodder trees and use of feed
				                </a>
				              </li>

				              <li class="nav-item">
				                <a class="nav-link" href="#">
				                  <span data-feather="file"></span>
				                  1-G: Estimating of dry matter content, feeding value and yield of various fodder crops
				                </a>
				              </li>
				              <li class="nav-item">
				                <a class="nav-link" href="#">
				                  <span data-feather="shopping-cart"></span>
				                  1-H: Pasture management and grazing management in the tropics
				                </a>
				              </li>
				              <li class="nav-item">
				                <a class="nav-link" href="#">
				                  <span data-feather="users"></span>
				                  1-I: Scaled mechanization of forage production and pasture management
				                </a>
				              </li>
				              <li class="nav-item">
				                <a class="nav-link" href="#">
				                  <span data-feather="bar-chart-2"></span>
				                  1-J: Scaled mechanization of forage harvesting
				                </a>
				              </li>
				              <li class="nav-item">
				                <a class="nav-link" href="#">
				                  <span data-feather="home"></span>
				                  1-K: Operating farm equipment and self-propelled tractors
				                </a>
				              </li>                
				              <li class="nav-item">
				                <a class="nav-link" href="#">
				                  <span data-feather="layers"></span>
				                  1-L: Mechanization of feeding management
				                </a>
				              </li>
				              <li class="nav-item">
				                <a class="nav-link" href="#">
				                  <span data-feather="layers"></span>
				                  1-M: Economics of forage and pasture production
				                </a>
				              </li>                                
				            </ul>

				          </div>
				        </nav>

				        <main role="main" class="mwili content_wrapper col-md-9 ml-sm-auto col-lg-10 px-md-4">
				          <div class="content_header">
				            <h1 class="content_title">Brachiaria, Panicum, & Napier (cut and carry) grass management</h1>
				            <h5 class="content_level">Level 1</h5>
								<?php 
									$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); 
									if ($term->parent == 0) {  
										wp_list_categories('taxonomy=content_type&depth=1&title_li=&child_of=' . $term->term_id);

									} else {
										wp_list_categories('taxonomy=content_type&title_li=&child_of=' . $term->parent);  
									}
								?>	            
				          </div>

						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'entry' ); ?>
						<?php endwhile; endif; ?>


				          <div class="content-block row">
				            <div class="col-6">
				              <content>
				                <h2>Growing grasses for grazing and cut and carry feeding.</h2>
				                <blockquote>Objective: The trainee knows how to grow grasses for grazing and cut and carry feeding.</blockquote>
				                <p><em>Fresh grass is the most important forage in dairy farming.</em></p>

				                <h3>Field selection</h3>
				                <ul>
				                  <li>Select a suitable field or planting Brachiaria grass</li>
				                  <li>Fields for cut and carry should be close to the feeding unit </li>
				                  <li>Fields for grazing can be further away from the homestead </li>  
				                </ul>
				              </content>                
				            </div>
				            <div class="col-6">
				              <figure class="content_graphics">
				                <img src="assets/img/placeholder.jpg">
				              </figure>
				            </div>              
				          </div>




				          <div class="content-block row">
				            <div class="col-6">
				              <content>
				                <h3>Cultivating the land</h3>
				                <p>Turn the land manually with a hoe or mechanically with a tractor and plough</p>
				                <ul>
				                  <li>Plough using a mould board plough or a fixed chisel tine cultivator with levelling harrow attached</li>
				                  <li>Avoid disc plough</li>
				                </ul>
				              </content>                
				            </div>
				            <div class="col-6">
				              <figure class="content_graphics">
				                <img src="assets/img/placeholder.jpg">
				              </figure>
				            </div>              
				          </div>





				          <div class="content-block row">
				            <div class="col-6">
				              <content>
				                <h3>Preparing the seed bed</h3>
				                <p>When Brachiaria is planted in a seed bed first follow the guidelines of sheet … to …. if the grass seeds are broadcasted follow the guidelines as from sheet …</p>
				              </content>                
				            </div>
				            <div class="col-6">
				              <figure class="content_graphics">
				                <img src="assets/img/1-preparing-seedbed.jpg">
				              </figure>
				            </div>              
				          </div>




				        </main>
				      </div>
				    </div>
					-->


				<?php // } ?>



<?php get_footer(); ?>