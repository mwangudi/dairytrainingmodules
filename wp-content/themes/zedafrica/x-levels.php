<main id="main_levelWrapper" role="main" class="themes_wrapper mwili col-md-9 ml-sm-auto col-lg-10 px-md-4">

  <div class="content_header text-center">
    <h5 class="content_level">3. LEVELS</h5>
    <h2 class="content_title">Choose your preferred level</h2>
  </div>

  <div class="container_A ">
    <div class="themes2">          
      <div class="levels_Wrapp row">


          <div class="col-md-3 col-sm-12 number_1">
            <div class="level_card l_1 card" style="">
              <?php // if ( have_rows( 'module' )) : ?>
                  <a class="has_posts" onclick="addURL(this)" href="<?php the_permalink(); ?>?ContentLevel=basic-farmers">
                    <div class="korner k_available">Available</div>
              <?php // else : ?>
                  <!-- <a class="no_posts" href="#not-available"> -->
                    <!-- <div class="korner k_notAvailable">Coming Soon</div> -->
              <?php // endif; ?>                      
                <div class="card-body">                    
                    <h5 class="card-title">Level 1</h5>
                    <h6 class="card-subtitle mb-2 text-muted">
                        Basic Farmers
                    </h6>
                </div>
              </a>
            </div>
          </div>

          <div class="col-md-3 col-sm-12 number_2">
            <div class="level_card l_2 card" style="">
              <?php // if ( have_rows( 'module_2' )) : ?>
                  <a class="has_posts" onclick="addURL(this)" href="<?php the_permalink(); ?>?ContentLevel=lead-farmers">
                    <div class="korner k_available">Available</div>
              <?php // else : ?>
                  <!-- <a class="no_posts" href="#not-available"> -->
                    <!-- <div class="korner k_notAvailable">Coming Soon</div> -->
              <?php // endif; ?>                      
                  <div class="card-body">                    
                      <h5 class="card-title">Level 2</h5>
                      <h6 class="card-subtitle mb-2 text-muted">
                          Lead Farmers
                      </h6>
                  </div>
                </a>
            </div>
          </div>

          <div class="col-md-3 col-sm-12 number_3">
            <div class="level_card l_3 card" style="">
              <?php // if ( have_rows( 'module_3' )) : ?>
                  <a class="has_posts" onclick="addURL(this)" href="<?php the_permalink(); ?>?ContentLevel=extension-workers">
                    <div class="korner k_available">Available</div>
              <?php // else : ?>
                  <!-- <a class="no_posts" href="#not-available"> -->
                    <!-- <div class="korner k_notAvailable">Coming Soon</div> -->
              <?php // endif; ?>                       
                  <div class="card-body">                    
                      <h5 class="card-title">Level 3</h5>
                      <h6 class="card-subtitle mb-2 text-muted">
                          Extension Officers and Advisors
                      </h6>
                  </div>
                </a>
            </div>
          </div>

          <div class="col-md-3 col-sm-12 number_4">
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