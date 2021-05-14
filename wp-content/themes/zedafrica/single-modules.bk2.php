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
<style>
    .box{
        /*color: #fff;*/
        /*padding: 20px;*/
        display: none;
        /*margin-top: 20px;*/
    }
/*    .red{ background: #ff0000; }
    .green{ background: #228B22; }
    .blue{ background: #0000ff; }
    .yellow{ background: yellow; }*/
    label{ margin-right: 15px; }
.single_module_wrapper {
    padding: 0 1em;
}
.single_module_wrapper select {
    background: #0000001f;
    color: #FFF;
    border: 0px;
    text-transform: uppercase;
    font-weight: 600;
    letter-spacing: 1px;
    font-size: .8em;
    background: transparent;
    border-radius: 0px;
    border: 2px solid rgb(0 0 0 / 7%);
    min-height: 32px;
}    
body.modules-template-default.single.single-modules nav#sidebarMenu {
    padding-top: 7em;
}

main#main_levelWrapper.pull_up .content_header {
    display: none;
}
main#main_levelWrapper.pull_up {
    padding: 4em 0 0;
    min-height: unset;
    display: none;
}
main#main_levelWrapper.pull_up .container_A {
    max-width: 670px;
    margin: 0em auto;
    position: fixed;
    top: 0px;
    z-index: 9999;
    left: 30%;
}
body.admin-bar main#main_levelWrapper.pull_up .container_A {
    top: 39px;
}
main#main_levelWrapper.pull_up h5.card-title {
    display: none;
}
main#main_levelWrapper.pull_up .level_card a {
    min-height: unset;
}
main#main_levelWrapper.pull_up .level_card a .card-body {
    padding: 14px 8px 4px;
}
main#main_levelWrapper.pull_up .row > div {
    padding: 0px;
    border: 0px;
}
main#main_levelWrapper.pull_up label {
    border: 0px;
    font-size: .8em;
    text-transform: uppercase;
}
.level_top.onyesha { display: block !important; }
ul.level_top, ul.level_top li {
    display: inline-block;
}
</style>





<main id="main_levelWrapper" role="main" class="themes_wrapper mwili col-md-9 ml-sm-auto col-lg-10 px-md-4">

  <div class="content_header text-center">
    <h5 class="content_level">3. LEVELS</h5>
    <h2 class="content_title">Choose your preferred level</h2>
  </div>

  <div class="container_A ">
    <div class="themes2">          
      <div class="row">


          <div class="col-3 number_1">
            <div class="level_card l_1 card" style="">
                <a href="#nogo">
                  <div class="card-body">                    
                      <h5 class="card-title">Level 1</h5>
                      <h6 class="card-subtitle mb-2 text-muted">
                        <label><input class="radio_shack" type="radio" name="colorRadio" value="red">
                          Basic Farmers
                        </label>
                      </h6>
                  </div>
                </a>
            </div>
          </div>

          <div class="col-3 number_2">
            <div class="level_card l_2 card" style="">
                <a href="#nogo">
                  <div class="card-body">                    
                      <h5 class="card-title">Level 2</h5>
                      <h6 class="card-subtitle mb-2 text-muted">
                        <label><input class="radio_shack" type="radio" name="colorRadio" value="green">
                          Lead Farmers
                        </label>
                      </h6>
                  </div>
                </a>
            </div>
          </div>


          <div class="col-3 number_3">
            <div class="level_card l_3 card" style="">
                <a href="#nogo">
                  <div class="card-body">                    
                      <h5 class="card-title">Level 3</h5>
                      <h6 class="card-subtitle mb-2 text-muted">
                        <label><input class="radio_shack" type="radio" name="colorRadio" value="blue">
                          Extension Workers, Input and Service Providers
                        </label>
                      </h6>
                  </div>
                </a>
            </div>
          </div>


          <div class="col-3 number_4">
            <div class="level_card l_4 card" style="">
                <a href="#nogo">
                  <div class="card-body">                    
                      <h5 class="card-title">Level 4</h5>
                      <h6 class="card-subtitle mb-2 text-muted">
                        <label><input class="radio_shack" type="radio" name="colorRadio" value="yellow">
                          Trainers
                        </label>
                      </h6>
                  </div>
                </a>
            </div>
          </div>


      </div>

      

<?php $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
  if (strpos($url,'ContentLevel') !== false) {
      echo 'Has content level';
  } else {
      echo 'No content level';
      ?><a onclick="addURL(this)" href="<?php the_permalink(); ?>?ContentLevel=basic-farmers">Click this</a><?php

  }
?>

    </div>
  </div>




</main>







<div class="module_main_section">
  <div class="red box">
    <div class="container-fluid">
      <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block snv-sidebar sidebar collapse">
          <div class="sidebar-sticky pt-3">
            <!-- 
            <?php if ( is_singular('modules') ) { ?>
              <ul id="menu-nav2" class="level_top nav navbar-nav" style="display:none;">
                <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="red" class="menu-item nav-item">
                  <label><input type="radio" name="colorRadio" value="red"> Basic Farmers</label>
                </li>
                <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="green" class="menu-item nav-item">
                  <label><input type="radio" name="colorRadio" value="green"> Lead Farmers</label>
                </li>
                <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="blue" class="menu-item nav-item">
                  <label><input type="radio" name="colorRadio" value="blue"> Extension Workers, Input and Service Providers</label>
                </li>
                <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="yellow" class="menu-item nav-item">
                  <label><input type="radio" name="colorRadio" value="yellow"> Trainers</label>
                </li>
              </ul>
            <?php } else { ?>

            <?php } ?>

            -->


            <div class="single_module_wrapper">
              <div class="form-group">
                <label for="sel1">LEVEL</label>
                <select class="form-control" id="sel1">
                  <option name="colorRadio" value="red">Basic Farmers</option>
                  <option name="colorRadio" value="green">Lead Farmers</option>
                  <option name="colorRadio" value="blue">Extension Workers, Input and Service Providers</option>
                  <option name="colorRadio" value="yellow">Trainers</option>
                </select>
              </div>
            </div>

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

      <main role="main" class="single_topic_A mwili content_wrapper col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <div class="content_header">
                <h1 class="content_title"><?php the_title(); ?></h1>
                <!-- <h5 class="content_level">Level 1</h5>            -->
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
        <?php endwhile; endif; ?>
        <div class="single_footer">
          <ul class="single_footer">
            <li><a href="#nogo">&larr; Previous</a></li>
            <li><a href="#nogo">Next &rarr;</a></li>
          </ul>
        </div>
      </main> 
      
    </div>
  </div>
  <div class="green box">
      <main role="main" class="single_topic_B mwili content_wrapper col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <div class="content_header">
                <h1 class="content_title"><?php the_title(); ?></h1>
                <!-- <h5 class="content_level">Level 1</h5>            -->
              </div>
          <?php if ( have_rows( 'module_2' ) ) : ?>
            <?php $count=0; ?>
            <?php while ( have_rows( 'module_2' ) ) : the_row();
              include(TEMPLATEPATH.'/x-module-row.php');
              $count++; ?>
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
      </main>  
  </div>
  <div class="blue box">
      <main role="main" class="single_topic_C mwili content_wrapper col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <div class="content_header">
                <h1 class="content_title"><?php the_title(); ?></h1>
                <!-- <h5 class="content_level">Level 1</h5>            -->
              </div>
          <?php if ( have_rows( 'module_3' ) ) : ?>
            <?php $count=0; ?>
            <?php while ( have_rows( 'module_3' ) ) : the_row();
              include(TEMPLATEPATH.'/x-module-row.php');
              $count++; ?>
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
      </main>   
  </div>
  <div class="yellow box">
      <main role="main" class="single_topic_D mwili content_wrapper col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <div class="content_header">
                <h1 class="content_title"><?php the_title(); ?></h1>
                <!-- <h5 class="content_level">Level 1</h5>            -->
              </div>
          <?php if ( have_rows( 'module_4' ) ) : ?>
            <?php $count=0; ?>
            <?php while ( have_rows( 'module_4' ) ) : the_row();
              include(TEMPLATEPATH.'/x-module-row.php');
              $count++; ?>
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
      </main>    
  </div>
</div>
	


<script>
jQuery(document).ready(function($){
    $('input[type="radio"]').click(function(){
        var inputValue = $(this).attr("value");
        var targetBox = $("." + inputValue);
        $(".box").not(targetBox).hide();
        $(targetBox).show();
    });

    $('option').select(function(){
        var inputValue = $(this).attr("value");
        var targetBox = $("." + inputValue);
        $(".box").not(targetBox).hide();
        $(targetBox).show();
    });

    $(".radio_shack").click(function() {
        $("#main_levelWrapper").addClass('pull_up');
        $(".level_top").addClass('onyesha');
    });     
  });
</script>


<?php get_footer(); ?>