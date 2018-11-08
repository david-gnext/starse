<?php
/**
 * The template for displaying home page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Decor Lite
 */
get_header(); ?>

<div class="container">
     <div class="page_content">
			 <div id="left_content">
	      <?php
				$pages = get_pages();
				foreach ($pages as $page_data) {
				    $content = apply_filters('the_content', $page_data->post_content);
				    $title = $page_data->post_title;
						echo "<h3>".$title."</h3>";
				    echo $content;
				}
				echo "</div>";
				get_sidebar();?>
    <div class="clear"></div>
  </div><!-- site-aligner -->
</div><!-- content -->
<?php get_footer(); ?>
