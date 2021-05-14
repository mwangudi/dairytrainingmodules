<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/library/img/favicon.png" sizes="32x32" />
    <link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">	    
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.mCustomScrollbar.min.css" />

	<?php wp_head(); ?>
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-HFLLMHBZ07"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-HFLLMHBZ07');
	</script>
	
</head>

<body <?php body_class('tideMode'); ?>>
	<div id="wrapper" class="hfeed">
		<header id="header">
			<nav class="header_navbar navbar navbar-expand-md navbar-light bg-white fixed-top" role="navigation">
				<div class="container-fluid">  

				    <!-- Brand and toggle get grouped for better mobile display -->
				    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#theme-main-navbar" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
				        <span class="navbar-toggler-icon"></span>
				    </button>

					<div id="branding">
						<div id="site-title">
							<a class="snv-logo navbar-brand" href="<?php echo esc_url( home_url( '/' ) );?>" title="<?php echo esc_html( get_bloginfo( 'name' ) );?>" rel="home">
								<?php if ( is_front_page() ) { ?>
									<img src="<?php echo get_template_directory_uri(); ?>/library/img/logo-white.png">
								<?php } else { ?>
									<img src="<?php echo get_template_directory_uri(); ?>/library/img/logo.png">
								<?php } ?>
							</a>
						</div>
					</div>					    
	
				    <div id="desktop_theme_nav" class="module_select">
						<div class="dropX dropdown">
						  <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
						    Themes
						    <span class="caret"></span>
						  </button>
						  <ul class="dropdown-menu dropdown-menu-rightX" aria-labelledby="dropdownMenu1">
						    <li><a href="/select-theme">All Themes</a></li>
							<?php
								$taxonomy = 'content_type'; //Choose the taxonomy
								$terms = get_terms([
								    'taxonomy' => $taxonomy,
								    'hide_empty' => false,
								]);
								$count=1;
								foreach ($terms as $term) { //Cycle through terms, one at a time
									$parent = $term->parent;
								 
										$term_id = $term->term_id; //Define the term ID
										$term_link = get_term_link( $term, $taxonomy ); //Get the link to the archive page for that term
										$term_name = $term->name;
										$description = $term->description;
										?>


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
						                    <li>
						                    	<a class="available-nav" href="<?php echo $term_link; ?>">
						                        	<?php echo $count; ?>. <?php echo $term_name; ?>
						                    	</a>
						                    </li>
									   <?php else: ?>
						                    <li>
							                    <a class="available-nav" href="#not-available">
							                        <?php echo $count; ?>. <?php echo $term_name; ?>
							                    </a>
							                </li>
									   <?php endif;?>
		        					<?php
		        					$count++;
								}
						    ?>
						  </ul>
						</div>
						<div class="share_icons">
							<?php // echo do_shortcode ('[shareaholic app="share_buttons" id_name="post_below_content"]'); ?>
						</div>					    		
			    	</div>

					  <div class="collapse navbar-collapse" id="theme-main-navbar">
					    <ul id="menu-nav2" class="nav navbar-nav mr-auto">
					      <li id="mobile_theme_nav" class="nav-item active" style="display: none;">
							    <div class="module_select">
									<div class="dropX dropdown">
									  <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
									    Themes
									    <span class="caret"></span>
									  </button>
									  <ul class="dropdown-menu dropdown-menu-rightX" aria-labelledby="dropdownMenu1">
									    <li><a href="/select-theme">All Themes</a></li>
										<?php
											$taxonomy = 'content_type'; //Choose the taxonomy
											$terms = get_terms([
											    'taxonomy' => $taxonomy,
											    'hide_empty' => false,
											]);
											$count=1;
											foreach ($terms as $term) { //Cycle through terms, one at a time
												$parent = $term->parent;
											 
													$term_id = $term->term_id; //Define the term ID
													$term_link = get_term_link( $term, $taxonomy ); //Get the link to the archive page for that term
													$term_name = $term->name;
													$description = $term->description;
													?>


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
									                    <li>
									                    	<a class="available-nav" href="<?php echo $term_link; ?>">
									                        	<?php echo $count; ?>. <?php echo $term_name; ?>
									                    	</a>
									                    </li>
												   <?php else: ?>
									                    <li>
										                    <a class="available-nav" href="#not-available">
										                        <?php echo $count; ?>. <?php echo $term_name; ?>
										                    </a>
										                </li>
												   <?php endif;?>
					        					<?php
					        					$count++;
											}
									    ?>
									  </ul>
									</div>							    		
						    	</div>					        
					      </li>					    	
					      <li class="nav-item active">
					        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
					      </li>
					      <li class="nav-item">
					        <a class="nav-link" href="#">About</a>
					      </li>
					      <li class="nav-item">
					        <a class="nav-link" href="partners">Partners</a>
					      </li>
					      <li class="nav-item">
					        <a class="nav-link" href="#">Contact Us</a>
					      </li>

						</ul>

					    

						<?php if ( is_singular('modules') ) { ?>

							<ul class="top_single_print my-2 my-lg-0 ml-auto">

								<?php $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>
								<?php if (strpos($url,'ContentLevel') !== false) { ?>

									<style type="text/css">ul#menu-nav2 { display: none; } </style>									




							      <!-- Show correct download link depending on the level -->
							      <?php if (strpos($url,'ContentLevel=basic-farmers') !== false) { ?>

						    		<?php $basic_farmer_module_file = get_field( 'basic_farmer_module_file' ); ?>
									<?php if ( $basic_farmer_module_file ) { ?>
										<li class="download_item">
											<a  class="btn btn-success" target="_self" download href="<?php echo $basic_farmer_module_file['url']; ?>">Download Module <i class="lni lni-cloud-download"></i></a>
										</li>
									<?php } ?>

							      <?php } elseif (strpos($url,'ContentLevel=lead-farmers') !== false) { ?>

						    		<?php $lead_farmer_module_file = get_field( 'lead_farmer_module_file' ); ?>
									<?php if ( $lead_farmer_module_file ) { ?>
										<li class="download_item">
											<a  class="btn btn-success" target="_self" download href="<?php echo $lead_farmer_module_file['url']; ?>">Download Module <i class="lni lni-cloud-download"></i></a>
										</li>
									<?php } ?>							        

							      <?php } elseif (strpos($url,'ContentLevel=extension-workers') !== false) { ?>

						    		<?php $extension_workers_module_file = get_field( 'extension_workers_module_file' ); ?>
									<?php if ( $extension_workers_module_file ) { ?>
										<li class="download_item">
											<a  class="btn btn-success" target="_self" download href="<?php echo $extension_workers_module_file['url']; ?>">Download Module <i class="lni lni-cloud-download"></i></a>
										</li>
									<?php } ?>							        

							      <?php } elseif (strpos($url,'ContentLevel=trainers') !== false) { ?>

						    		<?php $trainers_module_file = get_field( 'trainers_module_file' ); ?>
									<?php if ( $trainers_module_file ) { ?>
										<li class="download_item">
											<a  class="btn btn-success" target="_self" download href="<?php echo $trainers_module_file['url']; ?>">Download Module <i class="lni lni-cloud-download"></i></a>
										</li>
									<?php } ?>

							      <?php } ?> 



							    	<li class="module_select">
										<div class="dropX dropdown">
										  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
										    Level
										    <span class="caret"></span>
										  </button>
										  <ul class="level_dropdown dropdown-menu" aria-labelledby="dropdownMenu1">

											<li class="d_0">
												<a class="level_navX as_posts" href="<?php the_permalink(); ?>">
													<i class="lni lni-list"></i> All Levels
												</a>
											</li>											
											<li class="d_1">
												<a class="level_navX has_posts" href="<?php the_permalink(); ?>?ContentLevel=basic-farmers">
													<i class="lni lni-spiner-solid"></i> Basic Farmers
												</a>
											</li>
											<li class="d_2">
												<a class="level_navX has_posts" href="<?php the_permalink(); ?>?ContentLevel=lead-farmers">
													<i class="lni lni-spiner-solid"></i> Lead Farmers
												</a>
											</li>
											<li class="d_3">
												<a class="level_navX has_posts" href="<?php the_permalink(); ?>?ContentLevel=extension-workers">
													<i class="lni lni-spiner-solid"></i> Extension Officers and Advisors
												</a>
											</li>
											<li class="d_4">
												<!-- <a class="level_navX has_posts" href="<?php the_permalink(); ?>?ContentLevel=trainers"> -->
												<a class="level_navX has_posts" href="#nogo">
													<i class="lni lni-spiner-solid"></i> Trainers
												</a>
											</li>

										  </ul>
										</div>							    		
							    	</li>							    								    	
							    	<!-- <li class="li_print"><button onclick="window.print()" class="print_mode"><i class="lni lni-printer"></i> Print</button></li> -->
							    	<li class="li_readmode" onclick="readModeClass()"><button onclick="readMode()" class="read_mode"><i class="lni lni-library"></i> Read Mode</button></li>
							    							
								<?php } ?>
							</ul>
						<?php } ?>
						
					    <form class="form-inline my-2 my-lg-0">
							<div id="search"><?php get_search_form(); ?></div>					    	
					      	<!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> -->
					      	<!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
					    </form>
					  </div>
					</nav>




			    	


				</div>
			</nav>
		</header>
		<div id="main-container">

			<?php if ( is_singular('modules') ) { ?>
				<div id="preloader" class="parent">
					<div class="child"><img src="<?php echo get_template_directory_uri(); ?>/library/img/loader.gif"></div>
				</div>
			<?php } ?>
