<?php get_header(); ?>


<style type="text/css">
/*
main#ModuleMainX {
    padding-left: 20%;
    width: 100%;
}
main#subSections {
    padding-top: 20vh;
}  
div#subSections section {
    padding-top: 20vh;
}
input#s {
    border-bottom: 2px solid #fbfbfb;
    margin-right: 10px;
}
*/
.module_id {
    height: 60px;
}
main#ModuleMainX .content-block {
    min-height: 90vh;
    padding-top: 10vh;
    padding: 10vh;
}
figure.content_graphics {
    height: auto;
    min-height: 160px;
}
.content_header {
    padding: 0vh 10vh 0vh;
}
.single_module_pagination {
    /* padding: 0vh 5.2vh; */
    width: 100%;
}
ul.single_module_pagination li {
    display: block;
    width: 100%;
}
li.si_curr {
  width: 6%;
  text-align: center;
}
li.si_prev, li.si_next {
    width: 50%;
}
li.si_prev {
    text-align: left;
}
li.si_next {
    text-align: right;
}
ul.single_module_pagination li.si_curr a {
    background: #fbfbfb;
}
ul.single_module_pagination li a {
    /* display: block; */
    border: 1px solid #fbfbfb;
    padding: 6px 10px;
    font-size: 1em;
    min-height: 40px;
    display: flex;
    /* text-align: right; */
    text-align: right;
    /* float: right; */
}
ul.single_module_pagination div {
    width: 50px;
    height: 30px;
    font-weight: 700;
}
ul.single_module_pagination li.si_next div {
    float: right;
}
ul.single_module_pagination li.si_prev div {
    float: left;
    margin-right: 20px;
}
ul.single_module_pagination p {
    margin-bottom: 0px;
}
.single_module_pagination {
    /*padding: 0vh 5.2vh;*/
}
h6.current_module_letter {
    border: 3px solid #00a8eb;
    font-size: 2em;
    display: inline-block;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    padding-top: 12px;
    color: #00a8eb;
    margin-bottom: 50px;
    font-weight: 700;
}
ul.single_module_pagination {
    display: flex;
    align-items: stretch;
    justify-content: space-between;
}
div#arrow_bottom a {
    color: #CCC;
    display: block;
}
div#arrow_bottom a:hover {
    color: #007bff;
}
div#arrow_bottom {
    font-size: 3em;
    margin-top: 1em;
}

ul#top_nav li {
    display: inline-block;
}
ul#top_nav {
    width: 100%;
    text-align: center;
}
li.tnZ {
    float: right;
}
li.tnA {
    float: left;
}
ul#top_nav {
    border: 0px solid #f7f7f7;
    background: rgb(215 242 253);
}
ul#top_nav li {
    /* border: 1px solid #000; */
}
ul#top_nav li a {
    padding: 16px 20px;
    display: block;
    font-size: .9em;
    text-decoration: none;
}
li.tnK {
    margin-left: -40px;
}
ul.top_single_print {
    margin-top: 10px;
}
ul.top_single_print button {
    border: 0px;
    background: transparent;
    font-size: .9em;
    color: #5d5d5d;
    font-weight: 400;
    text-transform: uppercase;
    letter-spacing: 1px;
    padding: 7px 14px;
}
ul.top_single_print li {
    display: inline-block;
    margin-right: 10px;
}
ul.top_single_print button:hover, ul.top_single_print button:focus {
    color: #007bff;
}
ul#subtopic_nav li.active a.nav-link {
    background: rgb(0 37 51 / 39%);
}
nav#sidebarMenu2.sidebar_select_level {
    background: #FFF;
}

</style>



<link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">
<?php $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>
<!-- START IF URL LEVEL CHECK -->
<?php if (strpos($url,'ContentLevel') !== false) { ?>



    <div class="MainModuleContent_yo container-fluid">
      <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block snv-sidebar sidebar collapse">
          <div class="sidebar-sticky pt-3">


            <div id="sidebar_levels" class="form-group">
              <select class="form-control" id="FormControlSelect1" onchange="location = this.value;">
                 <option value="<?php the_permalink(); ?>?ContentLevel=basic-farmers" <?php // echo $selected; ?> >Basic Farmers</option>
                 <option value="<?php the_permalink(); ?>?ContentLevel=lead-farmers" <?php // echo $selected; ?> >Lead Farmers</option>
                 <option value="<?php the_permalink(); ?>?ContentLevel=extension-workers" <?php // echo $selected; ?> >Extension Workers</option>
                 <option value="<?php the_permalink(); ?>?ContentLevel=trainers" <?php // echo $selected; ?> >Trainers</option>
              </select>
            </div>

            <ul id="subtopic_nav" class="nav flex-column">

              <li class="nav-item nav-topic">
                <p>Sub-topics</p>                     
              </li>

                <li class="nav-item">
                  <a class="nav-link" href="#module_top">Introduction</a>
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

                <li class="nav-item">
                  <a class="nav-link" href="#module_bottom">Previous / Next</a>
                </li>

            </ul>         

          </div>
        </nav>


        <main id="ModuleMainX" role="main" class="single_topic_A mwili content_wrapper col-md-9 ml-sm-auto col-lg-10 px-md-4">

          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <div class="single_module_pagination">

                
                <ul id="top_nav">
                  <li class="tnA"><a href="#nogo">&larr; PREVIOUS</a></li>
                  <li class="tnK"><a href="<?php echo home_url(); ?>/select-theme">THEMES</a></li>
                  <li class="tnZ"><a href="#nogo">NEXT &rarr;</a></li>
                </ul>                 
                


<!-- 
                <ul class="single_module_pagination">
                  <li class="si_prev"><a href="#nogo"><div>&larr; D</div> <p>Growing fodder trees and use of feed</p></a></li>
                  <li class="si_curr"><a href="#nogo"><div> E </div></a></li>
                  <li class="si_next"><a href="#nogo"><p>Growing maize and sorghum for fodder and estimating time of harvest and yield</p> <div>F &rarr;</div></a></li>
                </ul>
 -->
<!-- 
                <ul class="single_module_pagination">
                  <li class="si_prev"><span><?php // the_field( 'letter' ); ?></span> <?php previous_post_link(); ?></li>
                  <li class="si_curr"><?php // the_field( 'letter' ); ?><a href="#nogo">E</a></li>
                  <li class="si_next"><?php next_post_link(); ?> <span><?php // the_field( 'letter' ); ?></span></li>
                </ul>
   -->              
              </div> 

            <div id="module_top" class="module_id"></div>
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

                <div id="arrow_bottom"><a href="#module_0"><i class="lni lni-arrow-down-circle"></i></a></div>        
            </div>


            <?php if ( have_rows( 'module' ) ) : ?>
              <?php $count=0; ?>
              <?php while ( have_rows( 'module' ) ) : the_row();
                include(TEMPLATEPATH.'/x-module-row.php');
                $count++; ?>
              <?php endwhile; ?>
            <?php else : ?>
              <?php // no rows found ?>
            <?php endif; ?>


          <!-- end wp loop if -->
          <?php endwhile; endif; ?>



              <div class="single_module_pagination">
                <div id="module_bottom"></div>
                <ul class="single_module_pagination">
                  <li class="si_prev"><a href="#nogo"><div>&larr; D</div> <p>Growing fodder trees and use of feed</p></a></li>
                  <!-- <li class="si_curr"><a href="#nogo"><div> E </div></a></li> -->
                  <li class="si_next"><a href="#nogo"><p>Growing maize and sorghum for fodder and estimating time of harvest and yield</p> <div>F &rarr;</div></a></li>
                </ul>

<!-- 
                <ul class="single_module_pagination">
                  <li class="si_prev"><span><?php // the_field( 'letter' ); ?></span> <?php previous_post_link(); ?></li>
                  <li class="si_curr"><?php // the_field( 'letter' ); ?><a href="#nogo">E</a></li>
                  <li class="si_next"><?php next_post_link(); ?> <span><?php // the_field( 'letter' ); ?></span></li>
                </ul>
   -->              
              </div> 
        


        </main> 


      </div>
    </div>



  <!-- ELSE URL LEVEL CHECK -->    
  <?php } else { ?>

      
    <div class="ContentLevels_yo container-fluid">
      <div class="row">
        <nav id="sidebarMenu2" class="sidebar_select_level col-md-3 col-lg-2 d-md-block snv-sidebar sidebar collapse">
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




        <main id="main_levelWrapper" role="main" class="themes_wrapper mwili col-md-9 ml-sm-auto col-lg-10 px-md-4">

          <div class="content_header text-center">
            <h5 class="content_level">3. LEVELS</h5>
            <h2 class="content_title">Choose your preferred level</h2>
          </div>

          <div class="container_A ">
            <div class="themes2">          
              <div class="levels_Wrapp row">


                  <div class="col-3 number_1">
                    <div class="level_card l_1 card" style="">
                      <?php if ( have_rows( 'module' )) : ?>
                          <a class="has_posts" onclick="addURL(this)" href="<?php the_permalink(); ?>?ContentLevel=basic-farmers">
                            <div class="korner k_available">Available</div>
                      <?php else : ?>
                          <a class="no_posts" href="#not-available">
                            <div class="korner k_notAvailable">Coming Soon</div>
                      <?php endif; ?>                      
                        <div class="card-body">                    
                            <h5 class="card-title">Level 1</h5>
                            <h6 class="card-subtitle mb-2 text-muted">
                                Basic Farmers
                            </h6>
                        </div>
                      </a>
                    </div>
                  </div>

                  <div class="col-3 number_2">
                    <div class="level_card l_2 card" style="">
                      <?php if ( have_rows( 'module_2' )) : ?>
                          <a class="has_posts" onclick="addURL(this)" href="<?php the_permalink(); ?>?ContentLevel=lead-farmers">
                            <div class="korner k_available">Available</div>
                      <?php else : ?>
                          <a class="no_posts" href="#not-available">
                            <div class="korner k_notAvailable">Coming Soon</div>
                      <?php endif; ?>                      
                          <div class="card-body">                    
                              <h5 class="card-title">Level 2</h5>
                              <h6 class="card-subtitle mb-2 text-muted">
                                  Lead Farmers
                              </h6>
                          </div>
                        </a>
                    </div>
                  </div>

                  <div class="col-3 number_3">
                    <div class="level_card l_3 card" style="">
                      <?php if ( have_rows( 'module_3' )) : ?>
                          <a class="has_posts" onclick="addURL(this)" href="<?php the_permalink(); ?>?ContentLevel=extension-workers">
                            <div class="korner k_available">Available</div>
                      <?php else : ?>
                          <a class="no_posts" href="#not-available">
                            <div class="korner k_notAvailable">Coming Soon</div>
                      <?php endif; ?>                       
                          <div class="card-body">                    
                              <h5 class="card-title">Level 3</h5>
                              <h6 class="card-subtitle mb-2 text-muted">
                                  Extension Workers, Input and Service Providers
                              </h6>
                          </div>
                        </a>
                    </div>
                  </div>

                  <div class="col-3 number_4">
                    <div class="level_card l_4 card" style="">
                      <?php if ( have_rows( 'module_4' )) : ?>
                          <a class="has_posts" onclick="addURL(this)" href="<?php the_permalink(); ?>?ContentLevel=trainers">
                            <div class="korner k_available">Available</div>
                      <?php else : ?>
                          <a class="no_posts" href="#not-available">
                            <div class="korner k_notAvailable">Coming Soon</div>
                      <?php endif; ?>                       
                          <div class="card-body">                    
                              <h5 class="card-title">Level 4</h5>
                              <h6 class="card-subtitle mb-2 text-muted">
                                  Trainers
                              </h6>
                          </div>
                        </a>
                    </div>
                  </div>


              </div>

              



            </div>
          </div>

        </main>
      </div>
    </div>

<!-- END IF URL LEVEL CHECK -->
<?php  } ?>

<script type="text/javascript">
  jQuery(document).ready(function($){
    var main = main = $('#subtopic_nav ul');
    $('.scroll').click(function(event) {       
        event.preventDefault();
        var full_url = this.href,
            parts = full_url.split('#'),
            trgt = parts[1],
            target_offset = $('#'+trgt).offset(),
            target_top = target_offset.top;
        $('html, body').animate({scrollTop:target_top}, 500);
        /* Remove active class on any li when an anchor is clicked */
        main.children().removeClass();
        /* Add active class to clicked anchor's parent li */
        $(this).parent().addClass('active');
    });
  });
</script>

<script type="text/javascript">
  jQuery(document).ready(function($){
      $('.scroll').click(function(event) {
          event.preventDefault();
          var full_url = this.href;
          var parts = full_url.split('#');
          var trgt = parts[1];
          var target_offset = $('#'+trgt).offset();
          var target_top = target_offset.top;
          $('html, body').animate({scrollTop:target_top}, 500);
      });
      $('#subtopic_nav li').click(function(){
           $('#subtopic_nav li').removeClass('active');
           $(this).addClass('active');
      });
  });

</script>



<?php get_footer(); ?>
