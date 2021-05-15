<?php get_header(); ?>

<style type="text/css">
.module_id {
    height: 120px;
}
nav#sidebarMenu a:hover {
    background: rgb(0 25 35 / 11%);
}  
li.nav-item.nav-topic {
    margin-top: 40px;
}
.content_header {
    margin-bottom: 0em;
    border-bottom: 0px solid #00a8eb30;
    padding-bottom: 0em;
}
.module_image_1 img {
    width: 100%;
    margin-bottom: 10px;
}
.module_image_2 {
    padding-right: 0px;
}
ul.single_footer {
    width: 100%;
}
ul.single_footer, ul.single_footer li {
    display: inline-block;
}
ul.single_footer li a {
    border: 1px solid;
    padding: 4px 24px;
    border-radius: 100px;
}
ul.single_footer li a:hover {
    text-decoration: none;
    background: #0056b3;
    color: #FFF;
}
ul.single_footer li:nth-child(2) {
    float: right;
}
</style>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block snv-sidebar sidebar collapse">
      <div class="sidebar-sticky pt-3">

        <ul class="nav flex-column">
          
          <li class="nav-item nav-topic">
            <p>Sub-topics</p>                  
            <!-- <p>THEME 1: Forage production & pasture management</p> -->          
          </li>
              
            <?php if ( have_rows( 'module' ) ) : ?>
              <?php $count=0; ?>
              <?php while ( have_rows( 'module' ) ) : the_row(); ?>

                <li class="nav-item">
                  <a class="nav-link" href="#<?php echo "module_" . $count; ?>">
                    <span data-feather="file"></span>
                    <?php the_sub_field( 'module_title' ); ?>
                  </a>
                </li>

              <?php $count++; ?>
              <?php endwhile; ?>
            <?php else : ?>
              <?php // no rows found ?>
            <?php endif; ?>              

          <!-- 
          <li class="nav-item">
            <a class="nav-link " href="#">
              <span data-feather="home"></span>
              1-E: Brachiaria, Panicum, & Napier (cut and carry) grass management <span class="sr-only">(current)</span>
            </a>
          </li>                
          -->                              
        </ul>

      </div>
    </nav>

    <main role="main" class="mwili content_wrapper col-md-9 ml-sm-auto col-lg-10 px-md-4">


    	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          	<div class="content_header">
            	<h1 class="content_title"><?php the_title(); ?></h1>
            	<!-- <h5 class="content_level">Level 1</h5>            -->
          	</div>

    		<?php if ( have_rows( 'module' ) ) : ?>
          <?php $count=0; ?>
    			<?php while ( have_rows( 'module' ) ) : the_row(); ?>
    				
    				
              <div id="<?php echo "module_" . $count; ?>" class="module_id"></div>
    		      <div class="content-block row">
    		        <div class="col-5">
    		          <content>
    		            <h2><?php the_sub_field( 'module_title' ); ?></h2>
    		            <article>
    		            <?php the_sub_field( 'module_content' ); ?>	
    		            </article>
    		          </content>                
    		        </div>
    		        <div class="col-7">
    		          <figure class="content_graphics">
                    <div class="row">
                      
              					<?php $image = get_sub_field( 'image' ); ?>
              					<?php if ( $image ) { ?>
                          <div class="module_image_1 col-12">
              						  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                          </div>
              					<?php } ?>
                      
                      
                        <?php $image2 = get_sub_field( 'image2' ); ?>
                        <?php if ( $image2 ) { ?>
                          <div class="module_image_2 col-6">
                            <img src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>" />
                          </div>
                        <?php } ?>
                      
                      
                        <?php $image3 = get_sub_field( 'image3' ); ?>
                        <?php if ( $image3 ) { ?>
                          <div class="module_image_3 col-6">
                            <img src="<?php echo $image3['url']; ?>" alt="<?php echo $image3['alt']; ?>" />
                          </div>
                        <?php } ?>
                      
                    </div>                  
    		          </figure>
    		        </div>              
    		      </div>

          <?php $count++; ?>
    			<?php endwhile; ?>
    		<?php else : ?>
    			<?php // no rows found ?>
    		<?php endif; ?> 

    	<?php endwhile; endif; ?>





      <div class="single_footer">
        <ul class="single_footer">
          <li><a href="#nogo">&larr; Previous</a></li>
          <li><a href="#nogo">Next &rarr;</a></li>
        </ul>
      </div>
      <?php // get_template_part( 'nav', 'below-single' ); ?>

    </main>
  </div>
</div>
	

<?php get_footer(); ?>