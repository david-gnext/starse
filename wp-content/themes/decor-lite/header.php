<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div class="container">
 *
 * @package Decor Lite
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="header">
  <div class="container">
    <div class="logo">
		<?php decor_lite_the_custom_logo(); ?>
        <div class="clear"></div>
		<?php
        $description = get_bloginfo( 'description', 'display' );
        ?>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <h2 class="site-title"><?php bloginfo('name'); ?></h2>
        <?php if ( $description || is_customize_preview() ) :?>
        <p class="site-description"><?php echo esc_html($description); ?></p>                          
        <?php endif; ?>
        </a>
    </div>
    <div class="header_row">
                <?php
                	$contact_no = get_theme_mod('contact_no');
					$contact_mail = get_theme_mod('contact_mail');
				?>
                <?php if ($contact_no || $contact_mail) { ?>
                <div class="column-1">
	            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/icon-phone.png" />
                <div class="phone-email-info">
                <?php  
			  		if (!empty($contact_no)) { ?>
                <span class="hederphone"><?php echo esc_html($contact_no); ?></span><br>
                <?php }  
                	if(!empty($contact_mail)){ 
				?>
                <span class="hederemailid"><a href="mailto:<?php echo esc_attr( antispambot(sanitize_email( $contact_mail ) )); ?>"><?php echo esc_html( antispambot( $contact_mail ) ); ?></a></span>
                <?php } ?>
                </div><!--phone-email-info-->
    			<div class="clear"></div>
            	</div><!--column-1-->
            	<?php }  
			   $contact_add = get_theme_mod('contact_add');
 			   if(!empty($contact_add)){?>	 
           <div class="column-1 column-2">
	           	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/icon-home.png" />
                <div class="phone-email-info"><span class="hederphone"><?php echo esc_html_e('Address','decor-lite'); ?></span><br>
                 <?php 
					  if (!empty($contact_add)) { ?>                
                <span class="hederemailid"><?php echo wp_kses_post($contact_add); ?></span>
			   <?php } ?>                 
    			<div class="clear"></div>
                </div><!--phone-email-info-->
            </div><!--column-1-->
            <?php } ?>
           <div class="column-3">
			   <?php
                    $fb_link = get_theme_mod('fb_link'); 
                    $twitt_link = get_theme_mod('twitt_link');
                    $gplus_link = get_theme_mod('gplus_link');
                    $linked_link = get_theme_mod('linked_link');
               
			   if(!empty($fb_link) || !empty($twitt_link)  || !empty($gplus_link)  || !empty($linked_link)){?>	
              <div class="header-social">
              <div class="header-social-icons">
						<?php 
                        if (!empty($fb_link)) { ?>
                        <a title="<?php esc_attr__('facebook','decor-lite'); ?>" class="fb" target="_blank" href="<?php echo esc_url($fb_link); ?>"></a> 
                        <?php }						
                        if (!empty($twitt_link)) { ?>
                        <a title="<?php esc_attr__('twitter','decor-lite'); ?>" class="tw" target="_blank" href="<?php echo esc_url($twitt_link); ?>"></a>
                        <?php } 
                        if (!empty($gplus_link)) { ?>
                        <a title="<?php esc_attr__('google-plus','decor-lite'); ?>" class="gp" target="_blank" href="<?php echo esc_url($gplus_link); ?>"></a>
                        <?php } 						
                         if (!empty($linked_link)) { ?> 
                        <a title="<?php esc_attr__('linkedin','decor-lite'); ?>" class="in" target="_blank" href="<?php echo esc_url($linked_link); ?>"></a>
                        <?php } ?>                   
                      </div>  
                       </div>
				<?php } ?>
                      </div><!--column-3-->
    <div class="clear"></div>
         </div>
         <div class="toggle"><a class="toggleMenu" href="#" style="display:none;"><?php esc_attr_e('Menu','decor-lite'); ?></a></div> 
        <div class="sitenav">
          <?php wp_nav_menu( array('theme_location' => 'primary') ); ?>         
        </div><!-- .sitenav--> 
        <div class="clear"></div> 
  </div> <!-- container -->
</div><!--.header -->