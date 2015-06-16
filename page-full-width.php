<?php
/*
Template Name: Full Width (No Sidebar)
*/
?>

<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="row collapse">
			
				    <div id="main" class="large-12 medium-12 columns" role="main">
					
						<?php get_template_part( 'parts/loop', 'page' ); ?>
					    					
    				</div> <!-- end #main -->
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

			<?php if ( is_front_page() ) { get_template_part( 'parts/loop', 'pages-grid' ); } ?>

<?php get_footer(); ?>
