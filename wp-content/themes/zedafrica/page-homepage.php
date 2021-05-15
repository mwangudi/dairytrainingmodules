<?php
/*
Template Name: Home-Template
*/
?>
<?php get_header(); ?>

    <div class="home_main full_width">
      <div class="mwili pricing-header mx-auto text-center">
        <h1 class="display-4"><?php the_field( 'homepage_heading', 'option' ); ?></h1>
        <p class="lead"><?php the_field( 'homepage_subheading', 'option' ); ?></p>
      </div>

      <div class="mwili_cta text-center">
        <a class="btn btn-lg btn-dark" href="/select-theme">Get Started <i class="lni lni-arrow-right"></i></a>
      </div>

<!-- 
      <div class="mwili_cta">
        <ul class="partner_list">
          <li>Prodiary</li>
          <li>SNV</li>
          <li>Bles Dairies</li>
        </ul>
      </div>      
 -->

    </div>














    <div class="areas_out full_width">
        <div class="container">
            <div class="heading_A">
                <h3 class="text-center">Intervention Areas</h3>
            </div>
        </div> 
        <div class="container">
          <div class="area_in row clearfix">
              <div class="col-md-15 clearfix">
                  <div id="oxA" class="modal_pana modal6 modal">
                      <h2>1. Dairy Farm Productivity</h2>
                      <div class="project_details">
                          To address the skills gap in the dairy sector, KMDP-II continues to facilitate linkages between Kenyan dairy advisors and Dutch experts from PUM and Dutch training institutions. These dairy advisors are also linked to Dutch input suppliers and service providers who have set up business in Kenya, and have local presence. Dairy Advisory focuses on smallholder lead farmers and medium and large scale farmers and is being professionalized by equipping and training the dairy advisors with tools for benchmarking farm performance, advising on the most optimal feed ration for different categories of cows, and for monitoring herd fertility and key performance indicators in the farm. 
                          In the dairy value chain KMDP-II continues supporting dairy cooperative societies and milk processors with setting up their own training &amp; extension units.
                          As a third intervention in the field of practical skills development, KMDP-II promotes and supports a pilot that builds upon the PDTC concept developed under KMDP-I. In this case a local dairy training company collaborates with host or training farms (Practical Dairy Training Centers) and offers 1-day to 1-week skills based training for various target groups.
                          Lastly, KMDP-II supports initiatives and partnerships between Kenyan and Dutch institutes for dairy education and training, with emphasis on E-Learning and other structured training and education materials and concepts, that are contextualized to the Kenyan situation and needs.
                          <figure class="modal6_links">
                              <p><b>Related Links</b></p>
                              <p><a href="http://perfometer.org/" target="_blank">Perfometer</a>  
                              <a href="http://www.policyandmarkets.org/" target="_blank">Policy &amp; Market Options</a>  
                              <a href="http://http://prodairy.co.ke/" target="_blank">ProDairy</a> 
                              </p>
                          </figure>
                      </div>
                  </div>
                  <a href="#oxA" rel="modal:open">        
                      <figure class="area_image">
                          <img src="<?php echo get_template_directory_uri(); ?>/library/img/area-A.png">
                      </figure>
                      <div>
                          <h4>Practical Skills and Farm Management</h4>
                      </div>
                  </a>    
              </div>
              <div class="col-md-15 clearfix">
                  <div id="oxB" class="modal_pana modal6 modal">
                      <h2>2. Milk Quality</h2>
                      <div class="project_details">
                          <p>
                          KMDP has built up rich knowledge and experience as regards good practice forage production and preservation for smallholder, medium and large scale dairy farms (from seed to feed). In addition to that, it has successfully piloted commercialization of quality forages and of forage contracting services. This was achieved through the SPEN model and the concept of “maize train” (i.e. mechanized agricultural contracting services for maize production, harvesting and silage making), and by facilitating introduction of innovative machinery for making baled silages. Through replication and upscaling, this will ensure enhanced access of quality forages for small medium and large-scale dairy farms.
                          </p><p></p>In 2018 KMDP-II also started a pilot on introduction of feed rationing software to help optimizing total rations and margin over feeds. KMDP participates in sector platforms that discuss forage availability in Kenya and supported the National Fodder Conference in Nakuru in December 2017 and the Animal Production Society in Nanyuki in March 2018 
                          <p></p>
                          <figure class="modal6_links">
                              <p><b>Related Links</b></p>
                              <p><a href="https://cowsoko.com/kmdp/docs/1521452342SNV_Forage_Presentation_Main_File_19032018.pdf" target="_blank">SNV KMDP Forage Interventions</a></p>
                          </figure>
                      </div>
                  </div>
                  <a href="#oxB" rel="modal:open">            
                      <figure class="area_image">
                          <img src="<?php echo get_template_directory_uri(); ?>/library/img/area-B.png">
                      </figure>
                      <div>
                              <h4>Feed and Fodder</h4>
                      </div>
                  </a>    
              </div>
              <div class="col-md-15 clearfix">
                  <div id="oxC" class="modal_pana modal6 modal">
                      <h2>3. Value Chain</h2>
                      <div class="project_details">
                          <p>
                              KMDP-II works with 17 dairy cooperative societies and 3 milk processors (Meru Dairy Cooperative Union, Happy Cow Ltd and Bio Foods Ltd) on a number of issues related to milk production, collection, bulking and marketing; service provision and governance &amp; management. The interventions on milk quality range from more generic to specific in terms of piloting innovations and policy lobbying. On the generic level milk collectors, transporters and graders of dairy cooperatives are trained and policies are being developed and implemented at cooperative level at all 17 cooperatives. Next to this KMDP has a targeted approach where it supports Happy Cow Ltd from Nakuru and two of the cooperatives that supply the processor with milk, with implementing a milk quality tracking &amp; tracing system and a quality based milk payment system. At policy level KMDP-II works with the Kenya Dairy Board (KDB) and the Kenya Dairy Processors Association (KDPA), where it supports the safe milk campaign and strategic planning
                          </p>
                          <figure class="modal6_links">
                              <p><b>Related Links</b></p>
                              <p><a href="https://cowsoko.com/kmdp/docs/1522068088Happy_Cow_Presentation_on_Quality_Based_Milk_Payment_Pilot.pdf" target="_blank">Implementation of a quality-based milk payment (QBMP) system in Kenya</a>   
                              <a href="https://cowsoko.com/kmdp/docs/Ndambi-2018-QBMPS-Cost-Benefit-Analysis.pdf" target="_blank">3R Kenya Project Research Brief)</a></p>
                          </figure>
                      </div>
                  </div>
                  <a href="#oxC" rel="modal:open">              
                      <figure class="area_image">
                          <img src="<?php echo get_template_directory_uri(); ?>/library/img/area-C.png">
                      </figure>
                      <div>
                              <h4>Milk Quality</h4>
                      </div>
                  </a>    
              </div>
              <div class="col-md-15 clearfix">
                  <div id="oxD" class="modal_pana modal6 modal">
                      <h2>4. Nutrition</h2>
                      <div class="project_details">
                          <p>
                          KMDP-II (as in KMDP-I) promotes and supports within the partnerships it has with processors (3) and dairy societies (17), so-called functional dairy value chains. These are characterized by formal and inclusive relationships between farmers, dairy societies and processors with inclusion of youth and women. Important drivers for such relationships are trust and loyalty, timely payment, fair and stable prices and provision of quality services from the processor to the dairy society to the farmer. This includes services provided in-house and partnerships with private input and service providers. These services should be geared towards enhancing productivity at the farm level, and efficiency &amp; quality in raw milk collection and marketing. As this will contribute to enhanced profitability and sustainability of the dairy enterprise and the industry as a whole.
                          </p><p></p>
                          Functional dairy value chains are also characterized by a stable and conducive relationship of dairy value chain actors and input/service providers with policy makers and regulators. Be it at the level of Counties or national government, with a common vision on how to address systemic bottlenecks for sector growth and competitiveness. At this level KMDP supports Kenya Dairy Board and Kenya Dairy Processors Association, the latter with strategic plan development. KMDP also participates in national forums for feed &amp; fodder, milk quality and TVET (practical skills development). 
                          <p></p>
                          <figure class="modal6_links">
                              <p><b>Related Links</b></p>
                              <p><a href="https://cowsoko.com/kmdp/docs/146831370314.1._Dairy_Value_Chain_Status_Report.pdf" target="_blank">
                              Smallholder Dairy Value Chain Interventions</a></p>
                          </figure>
                      </div>
                  </div>
                  <a href="#oxD" rel="modal:open">  
                      <figure class="area_image">
                          <img src="<?php echo get_template_directory_uri(); ?>/library/img/area-D.png">
                      </figure>
                      <div>
                              <h4>Functional Dairy Value Chains</h4>
                      </div>
                  </a>    
              </div>

  
              <div class="col-md-15 clearfix">
                  <div id="oxE" class="modal_pana modal6 modal">
                      <h2>5. School Milk</h2>
                      <div class="project_details">
                          <p>
                              KMDP promotes and facilitates international knowledge exchange, business linkages and other partnerships for learning and exchange. This is seen as an important condition for fast-tracking adoption of good agricultural practices and innovations that are necessary to enhance the competitiveness of the sector, its long term sustainability and its attractiveness for investors. KMDP organises and supports investors’ forums, dairy trade fairs and exhibitions, market studies/scans, international study tours and trainings, and most importantly business-to-business linkages (B2B). B2B linkages and partnerships are considered as a more sustainable way of promoting change, innovations and best practices than aid-relationship are, as they are market-led and will continue as long as there is demand for the products and services. KMDP-I and II have been successful in forging B2B linkages between Kenyan and Dutch input suppliers and service providers, and assisted others with setting up base in Kenya and investing in the sector. This is partly facilitated through KMDP's Funds.
                          </p>
                          <figure class="modal6_links">
                              <p><b>Related Links</b></p>
                              <p><a href="https://cowsoko.com/programs/kmdp/workshops-and-seminars/5/dairy-investors-forum-eldoret-kenya" target="_blank">Eldoret Dairy Investors Forum</a>
                              <a href="https://cowsoko.com/programs/kmdp/innovation-fund-projects" target="_blank">KMDP-II Innovation &amp; Investment Fund Charter</a></p>
                          </figure>
                      </div>
                  </div>
                  <a href="#oxE" rel="modal:open">              
                      <figure class="area_image">
                          <img src="<?php echo get_template_directory_uri(); ?>/library/img/area-E.png">
                      </figure>
                      <div>
                          <h4>School Milk</h4>
                      </div>
                  </a>
              </div>  
  

          </div>
        </div>
    </div>








    <div class="program_intro_in">
      <div class="container">
        <div class=" row clearfix">
          <div class="p_intro_A col-md-12 clearfix">
            <div class="p_intro_item_in">

                      <div class="heading_A">
                          <h3 class="text-center"><?php the_field( 'tide_section_title', 'option' ); ?></h3>
                      </div>

                      <div class="row clearfix">
                          <div class="home_box_c6 col-md-6">
                              <?php the_field( 'tide_section_description', 'option' ); ?>                              
                          </div>
                          <div class="home_box_c6 col-md-6">
                              <?php the_field( 'tide_section_description_2', 'option' ); ?>
                          </div>
                      </div>
                  </div>
              </div>                    
          </div>
        </div>
      </div>
    </div>









    <div class="featured_places full_width clearfix">
        <div class="container clearfix">
            <div class="heading_A">
                <h3 class="text-center">Partners</h3>
            </div>
            <figure class="fp_partner text-center">
              <img src="<?php echo get_template_directory_uri(); ?>/library/img/partners.jpg">
            </figure>
        </div>    
    </div>













    <div class="foot_main full_width">



        <div class="container footer_container">

            <div class="c6_foot_nav">
                <ul class="c6-foot-links text-center">
                                            <li><a href="https://cowsoko.com">Home</a></li>
                                        
                    
                    <li><a href="https://cowsoko.com/pages/about">About</a></li>
                    <li><a href="https://cowsoko.com/pages/faq">FAQ</a></li>
                    <li><a href="https://cowsoko.com/pages/terms-of-use">Terms of Use</a></li>
                    <li><a href="https://cowsoko.com/pages/privacy-policy">Privacy Policy</a></li>
                    <li><a href="https://cowsoko.com/pages/team">Team</a></li>                                   
                    <li><a href="https://cowsoko.com/pages/contact">Contact</a></li>                                   
                </ul>
            </div> 
            
            <div class="c6_foot_stuff">
                <div class="c6_foot_stuff_in clearfix text-center">
                    <h5 class="color_dark m_bottom_20 fw_light">Talk to us.</h5>
                    <p><span>Tel:</span> +254 796 567 477   <span class="foot_space">•</span>  Ngong lane, off Ngong Road Nairobi, Kenya</p>
                    <p class="copyright">Copyright © 2012-2018, Cellfam Ltd. All Rights Reserved.</p>
                </div>
                <div class="c6_foot_stuff_in clearfix text-center">

                    <ul class="c6_foot_social">
                        <li class="c6_fb"><a target="_blank" href="https://www.facebook.com/cowsoko/"><i class="lni lni-facebook-filled"></i></a></li>
                        <li class="c6_tw"><a target="_blank" href="http://twitter.com/cowsoko/"><i class="lni lni-twitter-original"></i></a></li>
                        <li class="c6_gp"><a target="_blank" href="https://plus.google.com/10107103911963944447/"><i class="lni lni-google"></i></a></li>
                        <li class="c6_yt"><a target="_blank" href="https://www.youtube.com/channel/UCIm5j1mg0LwhLbnN67MrU0g"><i class="lni lni-youtube"></i></a></li>
                        <li class="c6_ig"><a target="_blank" href="https://www.instagram.com/cowsoko/"><i class="lni lni-instagram"></i></a></li>
                        <li class="c6_li"><a target="_blank" href="https://www.linkedin.com/company/cowsoko"><i class="lni lni-linkedin-original"></i></a></li>
                    </ul>
                    
                </div>
            </div>

        </div>



<!-- 
      <div class="container">
        <footer class="pt-4 my-md-0 pt-md-5 border-top">
          <div class="row">
            <div class="col-12 col-md">
              <img class="mb-2" src="assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
              <small class="d-block mb-3 text-muted">&copy; 2017-2020</small>
            </div>
            <div class="col-6 col-md">
              <h5>Features</h5>
              <ul class="list-unstyled text-small">
                <li><a class="text-muted" href="#">Cool stuff</a></li>
                <li><a class="text-muted" href="#">Random feature</a></li>
                <li><a class="text-muted" href="#">Team feature</a></li>
                <li><a class="text-muted" href="#">Stuff for developers</a></li>
                <li><a class="text-muted" href="#">Another one</a></li>
                <li><a class="text-muted" href="#">Last time</a></li>
              </ul>
            </div>
            <div class="col-6 col-md">
              <h5>Resources</h5>
              <ul class="list-unstyled text-small">
                <li><a class="text-muted" href="#">Resource</a></li>
                <li><a class="text-muted" href="#">Resource name</a></li>
                <li><a class="text-muted" href="#">Another resource</a></li>
                <li><a class="text-muted" href="#">Final resource</a></li>
              </ul>
            </div>
            <div class="col-6 col-md">
              <h5>About</h5>
              <ul class="list-unstyled text-small">
                <li><a class="text-muted" href="#">Team</a></li>
                <li><a class="text-muted" href="#">Locations</a></li>
                <li><a class="text-muted" href="#">Privacy</a></li>
                <li><a class="text-muted" href="#">Terms</a></li>
              </ul>
            </div>
          </div>
        </footer>
      </div>
 -->
    </div>
<?php get_footer(); ?>