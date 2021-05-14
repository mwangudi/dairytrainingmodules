<?php get_header(); ?>
<link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">
<?php $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>

<!-- START IF URL LEVEL CHECK -->
<?php if (strpos($url,'ContentLevel') !== false) { ?>
    <!-- We need to implement a content type check here so if it's something different we account for it -->


<style type="text/css">
.MainModuleSliderPro {
    /* padding-top: 80px; */
    padding: 70px 0px 0px 0px;
} 
.sp-left-thumbnails.sp-has-pointer .sp-thumbnail {
    position: absolute;
    right: 0px !important;
    width: 100%;
}
.sp-slide {
  display: flex;
  justify-content: center;
  align-items: center  
}
.module_image_1 img {
    width: 540px;
    height: 350px;
    object-fit: cover;
}
html, body {
    width: 100%;
    overflow-x: hidden;
}
h1.slider_title {
    font-size: 2.3em;
    margin-bottom: 0.8em;
    font-weight: 300;
    margin-top: 80px;
}
.module_image_0, 
.module_image_1 {
    margin-bottom: 10px;
}
.sp-thumbnails-container.sp-left-thumbnails div {
    padding: 0.2em .8em;
}
.sp-thumbnails-container.sp-left-thumbnails {
    background: #0073d6;
    color: #FFF;
    min-height: 100%;
}
.sp-thumbnail-container {
    border-bottom: 1px solid rgb(0 0 0 / 12%);
}
.content-block.row {
    margin-bottom: 0em;
    border-bottom: 0px solid rgba(0, 168, 235, 0.12);
    padding-bottom: 0em;
}
.content-block content {
    padding-top: 10vh;
    position: relative;
    width: 100%;
    float: left;
}
.sp-arrows.sp-fade-arrows {
    /* bottom: 0px; */
    top: unset;
    bottom: 0%;
    /*background: #0073d69e;*/
    height: 60px;
    z-index: 99999;
    padding-top: 15px;
}
.sp-next-arrow:after, 
.sp-next-arrow:before, 
.sp-previous-arrow:after, 
.sp-previous-arrow:before {
    background-color: #0073d6 !important;
}
div#pro-5 {
    left: -25px;
    right: 25px;
}
.content_header {
    padding: 0vh 40vh 0vh;
}
.sp-arrows.sp-fade-arrows {
    top: unset !important;
    bottom: 0% !important;
    left: -1.5% !important;
    opacity: 1 !important;
    position: fixed;
    width: 103% !important;
    position: absolute;
}
.sp-slides-container {
    right: -20px;
}
footer#footer {
    display: none;
}

body.single.single-modules div#wrapper,
body.single.single-modules div#main-container,
body.single.single-modules .MainModuleSliderPro {
    min-height: 100vh;
}
a#get_started:hover {
    text-decoration: none;
    border: 1px solid #00a8eb !important;
    color: #00a8eb !important;
}
a#get_started {
    color: #000 !important;
    text-transform: uppercase;
    font-size: 12px;
    letter-spacing: 4px;
    border: 1px solid #000 !important;
    display: block;
    width: 170px;
    margin: 0 auto;
    padding: 10px 10px;
}
.sp-left-thumbnails.sp-has-pointer .sp-selected-thumbnail:before {
    content: '';
    position: absolute;
    height: 100%;
    border-left: 8px solid #002240 !important;
    right: 0;
    top: 0;
    margin-right: 10px !important;
}
.sp-left-thumbnails.sp-has-pointer .sp-selected-thumbnail:after {
    content: '';
    position: absolute;
    width: 0;
    height: 0;
    right: 0;
    top: 50%;
    margin-top: -8px !important;
    border-left: 13px solid #002240 !important;
    border-top: 8px solid transparent;
    border-bottom: 8px solid transparent;
}
ul.Xbuttons li {
    display: inline-block;
}
ul.Xbuttons li.Xnext {
    /* right: 0px; */
    /* position: relative; */
    float: right;
    margin-right: 0px;
}
ul.Xbuttons a {
    color: #0073d6;
    opacity: 1;
    z-index: 999;
    position: relative;
    text-transform: uppercase;
    font-weight: 600;
}
ul.Xbuttons {
    width: 79.6%;
    position: absolute;
    bottom: 5px;
    margin-left: 40px;
    display: inline-block;
    font-size: .9em;
}

article.module_box_of_text {
    max-height: 260px;
    overflow-y: auto;
}

figure.content_graphics {
    height: auto;
    min-height: 160px;
    width: 680px;
    margin: 0 auto;
    background: transparent;
    border: 0px;
}
.sp_tideA {
    margin-top: -10vh;
}
figure.content_graphics .l1 img {
    object-fit: cover;
    height: 220px;
    width: 340px;
}
.module_image_5 img {
    width: 100%;
}
.tideA2 .content-block content {
    padding-top: 0px;
}
.tideA2 .content-block content article.module_box_of_text {
    max-height: 400px;
}
h5.content_level {
    display: inline-block;
    padding: 8px 12px;    
}
.tideA3 .content-block content {
    padding-top: 0vh;
}




.sp1 .sp-thumbnails-container.sp-left-thumbnails {
    background: #0073d6;
}
.sp1 h6.current_module_letter {
    border: 3px solid #0073d6;
    color: #0073d6;
}
.sp1 h5.content_level {
    background: #0073d6;
    color: #FFF;
}
.sp1 h1.content_title { color: #0073d6; }



.sp2 .sp-thumbnails-container.sp-left-thumbnails {
    background: #099c12;
}
.sp2 h6.current_module_letter {
    border: 3px solid #099c12;
    color: #099c12;
}
.sp2 h5.content_level {
    background: #099c12;
    color: #FFF;
}
.sp2 h1.content_title { color: #099c12; }



.sp3 .sp-thumbnails-container.sp-left-thumbnails {
    background: #c90000;
}
.sp3 h6.current_module_letter {
    border: 3px solid #c90000;
    color: #c90000;
}
.sp3 h5.content_level {
    background: #c90000;
    color: #FFF;
}
.sp3 h1.content_title { color: #c90000; }
.tideA3 .content_graphics2 img {
    max-width: 330px;
    margin-bottom: 10px;
}

.img_captn {
    color: initial;
    text-transform: initial;
    letter-spacing: 0px;
    font-size: 1.2em;
    margin-bottom: 5px;
}
.sp-thumbnail-title.kwanza {
    margin-top: 10px;
    text-transform: uppercase;
}
</style>


    <div class="MainModuleSliderPro container-fluid">

      <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/library/css/slider-pro.min.css" media="screen"/>
      <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/library/css/sliderPro.css" media="screen"/>
      <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/jquery.sliderPro.min.js"></script>

      <!--begin slider pro-->
      <?php if (strpos($url,'ContentLevel=basic-farmers') !== false) { ?>
        <div id="pro-5" class="slider-pro sp1">
      <?php } elseif (strpos($url,'ContentLevel=lead-farmers') !== false) { ?>
        <div id="pro-5" class="slider-pro sp2">
      <?php } elseif (strpos($url,'ContentLevel=extension-workers') !== false) { ?>
        <div id="pro-5" class="slider-pro sp3">
      <?php } elseif (strpos($url,'ContentLevel=trainers') !== false) { ?>
        <div id="pro-5" class="slider-pro sp4">
      <?php } ?> 

        <div class="sp-thumbnails">

          <div class="sp-thumbnail">
            <div class="sp-thumbnail-text">
              <div class="sp-thumbnail-title kwanza"><b>Introduction</b></div>
            </div>
          </div>

          <?php $selected = 'not-selected'; ?>
          <?php if (strpos($url,'ContentLevel=basic-farmers') !== false) { ?>

            <?php if ( have_rows( 'module' ) ) : ?>
              <?php $count=0; ?>
              <?php while ( have_rows( 'module' ) ) : the_row(); ?>

                <div class="sp-thumbnail">
                  <div class="sp-thumbnail-text">
                    <div class="sp-thumbnail-title"><?php the_sub_field( 'module_title' ); ?></div>
                  </div>
                </div>

              <?php $count++; ?>
              <?php endwhile; ?>
            <?php else : ?>
              <?php // no rows found ?>
            <?php endif; ?> 

          <?php } elseif (strpos($url,'ContentLevel=lead-farmers') !== false) { ?>

          <?php if ( have_rows( 'modules_2' ) ) : ?>
              <?php $count=0; ?>
              <?php while ( have_rows( 'modules_2' ) ) : the_row(); ?>

                <div class="sp-thumbnail">
                  <div class="sp-thumbnail-text">
                    <div class="sp-thumbnail-title"><?php the_sub_field( 'module_title' ); ?></div>
                  </div>
                </div>

              <?php $count++; ?>
              <?php endwhile; ?>
            <?php else : ?>
              <?php // no rows found ?>
            <?php endif; ?> 

          <?php } elseif (strpos($url,'ContentLevel=extension-workers') !== false) { ?>

          <?php if ( have_rows( 'modules_3' ) ) : ?>
              <?php $count=0; ?>
              <?php while ( have_rows( 'modules_3' ) ) : the_row(); ?>

                <div class="sp-thumbnail">
                  <div class="sp-thumbnail-text">
                    <div class="sp-thumbnail-title"><?php the_sub_field( 'module_title' ); ?></div>
                  </div>
                </div>

              <?php $count++; ?>
              <?php endwhile; ?>
            <?php else : ?>
              <?php // no rows found ?>
            <?php endif; ?> 


          <?php } elseif (strpos($url,'ContentLevel=trainers') !== false) { ?>
            <p> Coming Soon</p>
          <?php } else { ?>
            <p> Coming Soon</p>

          <?php } ?>   

        </div>

        <div class="sp-slides">

            <div class="sp-slide">
              <div class="sp_tideA">

                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                  <div class="single_module_pagination">

                    <!--                     
                    <ul id="top_nav">
                      <li class="tnA"><a href="#nogo">&larr; PREVIOUS</a></li>
                      <li class="tnK"><a href="<?php echo home_url(); ?>/select-theme">THEMES</a></li>
                      <li class="tnZ"><a href="#nogo">NEXT &rarr;</a></li>
                    </ul>                 
                    -->

                  </div> 

                  <!-- <div id="module_top" class="module_id"></div> -->
                  <div class="content_header text-center">
                    <h6 class="current_module_letter"><?php the_field( 'letter' ); ?></h6>
                    <h1 class="content_title"><?php the_title(); ?></h1>
                    
                      <?php $selected = 'not-selected'; ?>
                      <?php if (strpos($url,'ContentLevel=basic-farmers') !== false) { ?>
                        <?php $selected == 'selected'; ?>
                        <h5 class="content_level">Level 1 - Basic Farmers</h5>

                      <?php } elseif (strpos($url,'ContentLevel=lead-farmers') !== false) { ?>
                        <?php $selected == 'selected'; ?>
                        <h5 class="content_level">Level 2 - Lead Farmers</h5>

                      <?php } elseif (strpos($url,'ContentLevel=extension-workers') !== false) { ?>
                        <?php $selected == 'selected'; ?>
                        <h5 class="content_level">Level 3 - Extension Workers, Input & Service Providers</h5>

                      <?php } elseif (strpos($url,'ContentLevel=trainers') !== false) { ?>
                        <?php $selected == 'selected'; ?>
                        <h5 class="content_level">Level 4 - Trainers</h5>

                      <?php } else { ?>
                        <p> None</p>

                      <?php } ?>          

                      <div id="arrow_bottom">
                        <a id="get_started" href="#pro-5/1">Get Started</a>
                      </div>

                  </div>
                <?php endwhile; endif; ?>

              </div>
            </div>







            <?php if (strpos($url,'ContentLevel=basic-farmers') !== false) { ?>
              <!--BASIC FARMERS-->
              <?php if ( have_rows( 'module' ) ) : ?>
                <?php $count=0; ?>
                <?php while ( have_rows( 'module' ) ) : the_row(); ?>

                  <div class="sp-slide">
                    <div class="sp_tideA tideA1">
                      <div class="container">

                        <div class="content-block row">
                          <div class="col-12">
                            <h1 class="slider_title text-center"><?php the_sub_field( 'module_title' ); ?></h1>                      
                          </div>
                          <!--                         
                          <div class="col-4 offset-md-1">
                            <content>
                              <article class="module_box_of_text">
                              <?php the_sub_field( 'module_content' ); ?> 
                              </article>
                            </content>                
                          </div>
                          -->
                          <div class="col-12">
                            <figure class="content_graphics">
                              <div class="l1 row">
                                
                                  <?php $image = get_sub_field( 'image' ); ?>
                                  <?php if ( $image ) { ?>
                                    <div class="module_image_0 col-6">
                                      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                      <div class="img_captn"><?php echo wp_get_attachment_caption( $image['id'] ) ?></div>
                                    </div>
                                  <?php } else { ?>
                                    <div class="module_image_0 col-6">
                                      <img src="<?php echo get_template_directory_uri(); ?>/library/img/placeholder.jpg">
                                    </div>
                                  <?php } ?>
                                
                                
                                  <?php $image2 = get_sub_field( 'image2' ); ?>
                                  <?php if ( $image2 ) { ?>
                                    <div class="module_image_2 col-6">
                                      <img src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>" />
                                      <div class="img_captn"><?php echo wp_get_attachment_caption( $image2['id'] ) ?></div>
                                    </div>
                                  <?php } else { ?>
                                    <div class="module_image_0 col-6">
                                      <img src="<?php echo get_template_directory_uri(); ?>/library/img/placeholder.jpg">
                                    </div>
                                  <?php } ?>
                                
                                
                                  <?php $image3 = get_sub_field( 'image3' ); ?>
                                  <?php if ( $image3 ) { ?>
                                    <div class="module_image_3 col-6">
                                      <img src="<?php echo $image3['url']; ?>" alt="<?php echo $image3['alt']; ?>" />
                                      <div class="img_captn"><?php echo wp_get_attachment_caption( $image3['id'] ) ?></div>
                                    </div>
                                  <?php } else { ?>
                                    <div class="module_image_0 col-6">
                                      <img src="<?php echo get_template_directory_uri(); ?>/library/img/placeholder.jpg">
                                    </div>
                                  <?php } ?>
                                
                                
                                  <?php $image4 = get_sub_field( 'image4' ); ?>
                                  <?php if ( $image4 ) { ?>
                                    <div class="module_image_3 col-6">
                                      <img src="<?php echo $image4['url']; ?>" alt="<?php echo $image4['alt']; ?>" />
                                      <div class="img_captn"><?php echo wp_get_attachment_caption( $image4['id'] ) ?></div>
                                    </div>
                                  <?php } else { ?>
                                    <div class="module_image_0 col-6">
                                      <img src="<?php echo get_template_directory_uri(); ?>/library/img/placeholder.jpg">
                                    </div>
                                  <?php } ?>                              
                              </div>                  
                            </figure>
                          </div>              
                        </div>

                      </div>
                    </div>
                  </div>

                <?php endwhile; ?>
              <?php else : ?>
                <?php // no rows found ?>
              <?php endif; ?>


            <?php } elseif (strpos($url,'ContentLevel=lead-farmers') !== false) { ?>
              <!--LEAD FARMERS FARMERS-->
              <?php if ( have_rows( 'modules_2' ) ) : ?>
                <?php $count=0; ?>
                <?php while ( have_rows( 'modules_2' ) ) : the_row(); ?>

                  <div class="sp-slide">
                    <div class="sp_tideA tideA2">
                      <div class="container">

                        <div class="content-block row">
                          <div class="col-12">
                            <h1 class="slider_title text-center"><?php the_sub_field( 'module_title' ); ?></h1>                      
                          </div>
                                                   
                          <div class="col-3">
                            <content>
                              <article class="module_box_of_text">
                              <?php the_sub_field( 'module_content' ); ?> 
                              </article>
                            </content>                
                          </div>
                          
                          <div class="col-9">
                            <figure class="content_graphics2">
                              <div class="l2 row">

                                <?php $image = get_sub_field( 'image' ); ?>
                                <?php if ( $image ) { ?>
                                  <div class="module_image_5 col-8">
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <div class="img_captn"><?php echo wp_get_attachment_caption( $image['id'] ) ?></div>
                                  </div>
                                <?php } else { ?>
                                  <div class="module_image_5 col-8">
                                    <img src="<?php echo get_template_directory_uri(); ?>/library/img/placeholder.jpg">
                                  </div>
                                <?php } ?>


                                <div class="col-4">
                                  <div class="row">
                                    <?php $image = get_sub_field( 'image2' ); ?>
                                    <?php if ( $image ) { ?>
                                      <div class="module_image_0 col-12">
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                        <div class="img_captn"><?php echo wp_get_attachment_caption( $image['id'] ) ?></div>
                                      </div>
                                    <?php } else { ?>
                                      <div class="module_image_0 col-12">
                                        <img src="<?php echo get_template_directory_uri(); ?>/library/img/placeholder.jpg">
                                      </div>
                                    <?php } ?>

                                    <?php $image = get_sub_field( 'image3' ); ?>
                                    <?php if ( $image ) { ?>
                                      <div class="module_image_0 col-12">
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                        <div class="img_captn"><?php echo wp_get_attachment_caption( $image['id'] ) ?></div>
                                      </div>
                                    <?php } else { ?>
                                      <div class="module_image_0 col-12">
                                        <img src="<?php echo get_template_directory_uri(); ?>/library/img/placeholder.jpg">
                                      </div>
                                    <?php } ?>
                                  </div>
                                </div>

                              </div>                  
                            </figure>
                          </div>              
                        </div>

                      </div>
                    </div>
                  </div>

                <?php endwhile; ?>
              <?php else : ?>
                <?php // no rows found ?>
              <?php endif; ?>


            <?php } elseif (strpos($url,'ContentLevel=extension-workers') !== false) { ?>
              <!--EXTENSION WORKERS-->
              <?php if ( have_rows( 'modules_3' ) ) : ?>
                <?php $count=0; ?>
                <?php while ( have_rows( 'modules_3' ) ) : the_row(); ?>

                  <div class="sp-slide">
                    <div class="sp_tideA tideA3">
                      <div class="container">

                        <div class="content-block row">
                          <div class="col-12">
                            <h1 class="slider_title text-center"><?php the_sub_field( 'module_title' ); ?></h1>                      
                          </div>
                                                   
                          <div class="col-6">
                            <content>
                              <article class="module_box_of_text">
                              <?php the_sub_field( 'module_content' ); ?> 
                              </article>
                            </content>                
                          </div>
                          
                          <div class="col-6">
                            <figure class="content_graphics2">
                              <div class="l3 row">

                                <?php $image = get_sub_field( 'image' ); ?>
                                <?php if ( $image ) { ?>
                                  <div class="module_image_5 col-12">
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <div class="img_captn"><?php echo wp_get_attachment_caption( $image['id'] ) ?></div>
                                  </div>
                                <?php } else { ?>
                                  <div class="module_image_5 col-12">
                                    <img src="<?php echo get_template_directory_uri(); ?>/library/img/placeholder.jpg">
                                  </div>
                                <?php } ?>

                                <?php $image = get_sub_field( 'image2' ); ?>
                                <?php if ( $image ) { ?>
                                  <div class="module_image_5 col-12">
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <div class="img_captn"><?php echo wp_get_attachment_caption( $image['id'] ) ?></div>
                                  </div>
                                <?php } else { ?>
                                  <div class="module_image_5 col-12">
                                    <img src="<?php echo get_template_directory_uri(); ?>/library/img/placeholder.jpg">
                                  </div>
                                <?php } ?>



                              </div>                  
                            </figure>
                          </div>              
                        </div>

                      </div>
                    </div>
                  </div>

                <?php endwhile; ?>
              <?php else : ?>
                <?php // no rows found ?>
              <?php endif; ?>


            <?php } elseif (strpos($url,'ContentLevel=trainers') !== false) { ?>
              <!--TRAINERSS-->
              <h5 class="content_level">Level 4 - Trainers</h5>
              <p>Coming Soon</p>

            <?php } else { ?>

              <p>Coming Soon</p>


            <?php } ?>   



            <!-- 
            <?php if ( have_rows( 'module' ) ) : ?>
              <?php $count=0; ?>
              <?php while ( have_rows( 'module' ) ) : the_row(); ?>

                <div class="sp-slide">
                  <div class="sp_tideA">
                    <div class="container">

                      <div class="content-block row">
                        <div class="col-12">
                          <h1 class="slider_title text-center"><?php the_sub_field( 'module_title' ); ?></h1>                      
                        </div>

                        <div class="col-12">
                          <figure class="content_graphics">
                            <div class="l1 row">
                              
                                <?php $image = get_sub_field( 'image' ); ?>
                                <?php if ( $image ) { ?>
                                  <div class="module_image_0 col-6">
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                  </div>
                                <?php } else { ?>
                                  <div class="module_image_0 col-6">
                                    <img src="<?php echo get_template_directory_uri(); ?>/library/img/placeholder.jpg">
                                  </div>
                                <?php } ?>
                              
                              
                                <?php $image2 = get_sub_field( 'image2' ); ?>
                                <?php if ( $image2 ) { ?>
                                  <div class="module_image_2 col-6">
                                    <img src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>" />
                                  </div>
                                <?php } else { ?>
                                  <div class="module_image_0 col-6">
                                    <img src="<?php echo get_template_directory_uri(); ?>/library/img/placeholder.jpg">
                                  </div>
                                <?php } ?>
                              
                              
                                <?php $image3 = get_sub_field( 'image3' ); ?>
                                <?php if ( $image3 ) { ?>
                                  <div class="module_image_3 col-6">
                                    <img src="<?php echo $image3['url']; ?>" alt="<?php echo $image3['alt']; ?>" />
                                  </div>
                                <?php } else { ?>
                                  <div class="module_image_0 col-6">
                                    <img src="<?php echo get_template_directory_uri(); ?>/library/img/placeholder.jpg">
                                  </div>
                                <?php } ?>
                              
                              
                                <?php $image4 = get_sub_field( 'image4' ); ?>
                                <?php if ( $image4 ) { ?>
                                  <div class="module_image_3 col-6">
                                    <img src="<?php echo $image4['url']; ?>" alt="<?php echo $image4['alt']; ?>" />
                                  </div>
                                <?php } else { ?>
                                  <div class="module_image_0 col-6">
                                    <img src="<?php echo get_template_directory_uri(); ?>/library/img/placeholder.jpg">
                                  </div>
                                <?php } ?>                              
                            </div>                  
                          </figure>
                        </div>              
                      </div>

                    </div>
                  </div>
                </div>

              <?php endwhile; ?>
            <?php else : ?>
              <?php // no rows found ?>
            <?php endif; ?>
            -->








        </div>

      <ul class="Xbuttons">
        <li class="Xprev"><a href="#nogo">Previous</a></li>
        <li class="Xnext"><a href="#nogo">Next</a></li>
      </ul>

      </div>
      <!--end slider pro-->
    </div>






  <!-- ELSE URL LEVEL CHECK :: HERE WE SELECT THE LEVEL -->    
  <?php } else { ?>

      
    <div class="ContentLevels_yo container-fluid">
      <div class="row">

        <?php include(TEMPLATEPATH.'/x-sidebar.php'); ?>
        <?php include(TEMPLATEPATH.'/x-levels.php'); ?>

      </div>
    </div>

<!-- END IF URL LEVEL CHECK -->
<?php  } ?>







      <!-- https://www.jqueryscript.net/slider/Professional-jQuery-Content-Slider-Plugin-Slider-Pro.html -->
      <script type="text/javascript">
        jQuery( document ).ready(function($) {
          $( '#pro-5' ).sliderPro({
            width: 1600,
            height: 650,
            orientation: 'horizontal',
            loop: false,
            arrows: true,
            buttons: false,
            thumbnailsPosition: 'left',
            thumbnailPointer: true,
            thumbnailWidth: 290,
            thumbnailHeight: 70,
            autoplay: false,
            // pagination_type: 'Previous-next',
            updateHash: true,
            // forceSize: 'fullWidth',
            breakpoints: {
              800: {
                thumbnailsPosition: 'bottom',
                thumbnailWidth: 270,
                thumbnailHeight: 100
              },
              500: {
                thumbnailsPosition: 'bottom',
                thumbnailWidth: 120,
                thumbnailHeight: 50
              }
            }
          });

          // instantiate fancybox when a link is clicked
          $( '#pro-5  .sp-lightbox' ).on( 'click', function( event ) {
            event.preventDefault();
            // check if the clicked link is also used in swiping the slider
            // by checking if the link has the 'sp-swiping' class attached.
            // if the slider is not being swiped, open the lightbox programmatically,
            // at the correct index
            if ( $( '#pro-5' ).hasClass( 'sp-swiping' ) === false ) {
              $.fancybox.open( this );
            }
          });

        });
      </script>

      <script type="text/javascript">
        jQuery( document ).ready(function($) {
          $( "#other" ).click(function() {
            $( "#pro-5" )nextSlide();
          });
        });
      </script>


<?php get_footer(); ?>
