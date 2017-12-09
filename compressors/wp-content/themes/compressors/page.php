<?php get_header(); ?> 

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
	<div class="container">
	    <div class="row">
	        <div class="col-md-12">
	            <div class="center-heading">
	                <h2><?php echo the_title(); ?></h2>
	            </div>
	        </div>
	    </div>
	    <div class="row">
		    <div class="col-sm-12">
		        <div class="center-heading">
		            <?php the_post_thumbnail('full', 'class=imgstyle-about'); ?>
		        	<?php the_content(); ?>
		        </div>
			</div>
	    </div>
	</div>
<?php endwhile; ?> 	

<?php else: ?> 	
	<!--no posts found -->
<?php endif; ?> 	

<?php get_footer(); ?> 