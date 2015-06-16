<?php 

	$menu_name = 'front-grid';
	$grid_items_IDs = [];

	if ( $locations = get_nav_menu_locations() ) {
		$menu = wp_get_nav_menu_object( $locations[$menu_name] );
		$grid_items = wp_get_nav_menu_items($menu);
		foreach( (array) $grid_items as $item ) {
			$grid_items_IDs[] = $item->object_id;
		}
	}

	$args = array (
		'include' => $grid_items_IDs,
		'sort_column' => 'menu_order',
	);
	$posts = get_pages( $args );
?>

<div class="row collapse pages-grid" data-equalizer data-equalizer-mq="medium-up"> <!--Begin Row:--> 

     <?php 

     	$grid_id = 0;
        foreach( $posts as $post ) : setup_postdata($post); $grid_id++; ?>

		    <!--Item: -->
			<div class="<?php pages_grid_classes($grid_id); ?>">

				<div class="<?php pages_grid_panel_classes($grid_id); ?>" data-equalizer-watch>
		    
					<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">
					
						<section class="featured-image" itemprop="articleBody">
							<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
						</section> <!-- end article section -->
					
						<header class="article-header">
							<h3 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>	
						</header> <!-- end article header -->	
										
						<section class="entry-content" itemprop="articleBody">
							<?php the_excerpt('<button class="tiny">Read more...</button>'); ?> 
						</section> <!-- end article section -->
										    							
					</article> <!-- end article -->

				</div>
				
			</div>
		
	 	<?php endforeach; ?>

</div>  <!--End Row: --> 
	
<?php wp_reset_postdata(); ?>
					     
<?php joints_page_navi(); ?>		

<?php if ($posts = 0) : ?>

	<?php get_template_part( 'parts/content', 'missing' ); ?>

<?php endif; ?>
