<?php
   $class = '';
   $title = '';
   if ( defined( 'FW' ) ) { 
      $header_top_info_show     = blo_option('header_top_info_show');

      $header_contact_mail          = blo_option('header_contact_mail');
      $header_contact_address       = blo_option('header_contact_address');
      
      $header_nav_search_section    = blo_option('header_nav_search_section');
      $header_quota_button          = blo_option('header_quota_button');
      if($header_quota_button['style'] == 'yes'){
      $header_quota_text            =  $header_quota_button ['yes']['header_quota_text'];
      $header_quota_url             = $header_quota_button ['yes']['header_quota_url'];
      }
      //Page settings
      $header_nav_sticky            = blo_option('header_nav_sticky');    
      $default_class="";
   
   }else{
      $header_top_info_show    = "no";
      $header_contact_mail          = '';
      $header_contact_address      = '';
      $header_quota_button          = 'yes';
      $header_nav_search_section    = 'yes';
      $header_quota_url             = "#";
      $header_quota_text            = esc_html__('Get a quote','blo');
      $header_nav_sticky            = 'no';
      $header_quota_button = [];
      $header_quota_button['style'] = "no";
      $noquota = '';
      $default_class = 'header_default';
      
   }  

?>
 <?php if(defined( 'FW' ) && $header_top_info_show =='yes' ): ?>
<div class="topbar topbar-standard alice-blue-bg">
   <div class="container">
      <div class="row">
         <div class="col-md-7 col-lg-8 xs-center">
            <ul class="top-info">
               <?php if($header_contact_mail!=''): ?>
                 <li><i class="icon icon-envelope"></i> <?php echo blo_kses($header_contact_mail); ?> </li>
               <?php endif; ?>
               <?php if($header_contact_address!=''): ?>
                 <li><i class="icon icon-map-marker1"></i> <?php echo blo_kses($header_contact_address); ?></li>
               <?php endif; ?> 
            </ul>
         </div>
         <div class="col-md-5 col-lg-4 align-self-center">
         <?php $social_links = blo_option('general_social_links',[]);  ?>
            <ul class="social-links">
            <?php if(count($social_links)):  ?>
               <li> <?php echo esc_html__('On Social:','blo'); ?> </li>
            <?php endif; ?>   
                  <?php 
                  
                     if(count($social_links)):   
                        foreach($social_links as $sl):
                           if( isset( $sl['icon_class']) && isset($sl['ttile']) ) :
                              $class = 'ts-' . str_replace('fa fa-', '', $sl['icon_class']);
                              $title = $sl["title"];
                           endif; 
                  ?>
                        <li class="<?php echo esc_attr($class); ?>">
                           <a title="<?php echo esc_attr($title); ?>" href="<?php echo esc_url($sl['url']); ?>">
                           <span class="social-icon">  <i class="<?php echo esc_attr($sl['icon_class']); ?>"></i> </span>
                           </a>
                        </li>
                  <?php endforeach; ?>
               <?php endif; ?>
            </ul>
         <!-- end social links -->
         </div>
      <!-- end col -->
      </div>
   <!-- end row -->
   </div>
<!-- end container -->
</div>
<?php endif; ?>
<header id="header" class="header header-standard <?php echo esc_attr( $default_class); ?> <?php echo esc_attr($header_nav_sticky=='yes'?'navbar-sticky':''); ?>  <?php if(!is_user_logged_in()){echo esc_attr("pt-3 pb-3");}?>">
      <div class="header-wrapper">
            <div class="container">
               <nav class="navbar navbar-expand-lg navbar-light">
                        <!-- logo-->
                     <a class="logo" href="<?php echo esc_url(home_url('/')); ?>">
                        <img  class="img-fluid" src="<?php 
                           echo esc_url(
                              blo_src(
                                 'general_main_logo',
                                 BLO_IMG . '/logo/logo-common.png'
                              )
                           );
                        ?>" alt="<?php bloginfo('name'); ?>">
                     </a>
                     <button class="navbar-toggler" type="button" data-toggle="collapse"
                           data-target="#primary-nav" aria-controls="primary-nav" aria-expanded="false"
                           aria-label="Toggle navigation">
                           <span class="navbar-toggler-icon"><i class="icon icon-menu"></i></span>
                     </button>
                     
                       <?php get_template_part( 'template-parts/navigations/nav', 'primary' ); ?>
                       <?php if(defined( 'FW' )): ?>
                           <div class="nav-search-area">
                              <?php if($header_nav_search_section=='yes'): ?>
                                 <div class="nav-search">
                                    <span id="search">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                    </span>
                                 </div>
                              <?php endif; ?>
                                 <!--Search End-->
                              <div class="search-block" style="display: none;">
                                    <?php get_search_form(); ?>
                                    <span class="search-close">&#9932;</span>
                              </div>
                           </div>
                           
                        <?php endif; ?>
                  <!-- Site search end-->
                  <?php if(defined( 'FW' )): ?>
                        <?php if($header_quota_button['style'] =='yes' && $header_quota_text != ''): ?>
                              <div class="header-quote <?php if(!is_user_logged_in()){echo esc_attr("ml-auto");}?>">
                                 <a href="<?php echo esc_url($header_quota_url); ?>" class="quote-btn btn">  <?php echo esc_html($header_quota_text); ?>
                                 </a>
                              </div>   
                        <?php endif; ?>
                  <?php endif; ?>                                  
                            
               </nav>
            </div><!-- container end-->
   </div><!-- header wrapper end-->
</header>