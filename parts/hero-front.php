<section class="homepage-hero hero">

<?php if (get_post_status(39)) { $frontPost = get_post(39); ?>
	
	<div class="hero-content-wrap row">

		<article id="post-<?php echo $frontPost->ID; ?>" class="post-<?php echo $frontPost->ID; ?> columns small-12 text-center" role="article" itemscope itemtype="http://schema.org/WebPage">
								
			<header class="article-header">
				<h1 class="page-title"><?php echo $frontPost->post_title; ?></h1>
			</header> <!-- end article header -->
							
		    <section class="entry-content" itemprop="articleBody">
			    <?php echo $frontPost->post_content; ?>
			    <?php wp_link_pages(); ?>
			</section> <!-- end article section -->
								
			<footer class="article-footer">
				
			</footer> <!-- end article footer -->
							
		</article> <!-- end article -->
	
	</div>

<?php } ?>		

</section>