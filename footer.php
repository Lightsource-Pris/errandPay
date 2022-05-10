   <?php 
      $back_to_top = blo_option('back_to_top');

     
   ?> 
   
   <?php if(defined( 'FW' )): ?>

      <?php if( is_active_sidebar('footer-left') || is_active_sidebar('footer-center') || is_active_sidebar('footer-right') ): ?> 
         <footer class="xs-footer solid-bg-two xs-footer-classic" >
            <div class="container">
               <div class="row">
                  <div class="col-lg-4 col-md-12 fadeInUp">
                     <?php  dynamic_sidebar( 'footer-left' ); ?>

                  </div>
                  <div class="col-lg-5 col-md-6 footer-widget">
                     <?php  dynamic_sidebar( 'footer-center' ); ?>
                  </div>
                  <div class="col-lg-3 col-md-6">
                     <?php  dynamic_sidebar( 'footer-right' ); ?>
                  </div>
                  <!-- end col -->
               </div>
           </div>
                  
         </footer>
      <?php endif; ?>   
   <?php endif; ?>   
   <div class="copy-right">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="300ms">

                     <div class="copyright-text">
                     <?php 
                           $copyright_text = blo_option('footer_copyright', 'Copyright &copy; 2019 Blo. All Right Reserved.');
                        echo blo_kses($copyright_text);  
                     ?>
                     </div>
               </div>
               <div class="col-lg-6 col-md-5">
               <?php if ( defined( 'FW' ) ) : ?>   
                     <div class="footer-social">
                        <ul>
                        <?php 
                           $social_links = blo_option('footer_social_links',[]);                         
                           foreach($social_links as $sl):
                              $class = 'ts-' . str_replace('fa fa-', '', $sl['icon_class']);
                              ?>
                              <li class="<?php echo esc_attr($class); ?>">
                                    <a href="<?php echo esc_url($sl['url']); ?>">
                                    <i class="<?php echo esc_attr($sl['icon_class']); ?>"></i>
                                    </a>
                              </li>
                           <?php endforeach; ?>
                        </ul>
                  <?php endif; ?>     
                     </div>
                     <!--Footer Social End-->
               </div>
            </div>
            <!-- end row -->
         </div>
   </div>
        <!-- end footer -->
   <?php if($back_to_top=="yes"): ?>
      <div class="BackTo">
         <a href="#" class="fa fa-angle-up" aria-hidden="true"></a>
      </div>
   <?php endif; ?>