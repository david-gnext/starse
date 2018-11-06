<?php
//about theme info
add_action( 'admin_menu', 'decor_lite_abouttheme' );
function decor_lite_abouttheme() {    	
	add_theme_page( esc_html__('About Theme', 'decor-lite'), esc_html__('About Theme', 'decor-lite'), 'edit_theme_options', 'decor_lite_guide', 'decor_lite_mostrar_guide');   
} 
//guidline for about theme
function decor_lite_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
?>
<div class="wrapper-info">
	<div class="col-left">
   		   <div class="col-left-area">
			  <?php esc_attr_e('Theme Information', 'decor-lite'); ?>
		   </div>
          <p><?php esc_attr_e('Decor Lite is a Interior design, designer, designing, architect, landscaper suitable template for home furnishings, curtains, sofa, carpets, rugs, kitchen, home appliances, cleaning, architecture, art lovers, artistic, furniture store, carpenter, handyman related website template. Responsive, mobile friendly, eCommerce friendly, translation ready, multilingual friendly and page builder friendly with SEO wise coding and SEO plugin compatible. Gallery, contact form and other plugins work just fine with this interior decor template.','decor-lite'); ?></p>
		  <a href="<?php echo esc_url(DECOR_LITE_SKTTHEMES_PRO_THEME_URL); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/free-vs-pro.png" alt="" /></a>
	</div><!-- .col-left -->
	<div class="col-right">			
			<div class="centerbold">
				<hr />
				<a href="<?php echo esc_url(DECOR_LITE_SKTTHEMES_LIVE_DEMO); ?>" target="_blank"><?php esc_attr_e('Live Demo', 'decor-lite'); ?></a> | 
				<a href="<?php echo esc_url(DECOR_LITE_SKTTHEMES_PRO_THEME_URL); ?>"><?php esc_attr_e('Buy Pro', 'decor-lite'); ?></a> | 
				<a href="<?php echo esc_url(DECOR_LITE__SKTTHEMES_THEME_DOC); ?>" target="_blank"><?php esc_attr_e('Documentation', 'decor-lite'); ?></a>
                <div class="space5"></div>
				<hr />                
                <a href="<?php echo esc_url(DECOR_LITE_SKTTHEMES_THEMES); ?>" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sktskill.jpg" alt="" /></a>
			</div>		
	</div><!-- .col-right -->
</div><!-- .wrapper-info -->
<?php } ?>