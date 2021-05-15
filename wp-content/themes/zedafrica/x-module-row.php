                  <div id="<?php echo "module_" . $count; ?>" class="module_id"></div>
                  <div class="content-block row">
                    <div class="col-md-5 col-md-12">
                      <content>
                        <h2><?php the_sub_field( 'module_title' ); ?></h2>
                        <article>
                        <?php the_sub_field( 'module_content' ); ?> 
                        </article>
                      </content>                
                    </div>
                    <div class="col-md-7 col-md-12">
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