<?php
	get_header(); 
	$isItemPage = is_page() || is_single();
?>
<div class="<?php echo ($isItemPage ? "single-item-page" : "multiple-items-page") ?>">
	<div class="row">
		<div class="col-sm-9">
			<?php 
				showListWithPosts();
			?>
		</div>
		<?php get_sidebar(); ?>
	</div> 
</div>
<div class="paginate-links">
	<?php echo paginate_links( $args ); ?>
</div>

<?php get_footer(); ?>

<?php
	function showSinglePost(){
		the_post(); 
		get_template_part( 'content-single-post', get_post_format() );
	}

	function showListWithPosts(){
		$first = true;

		while ( have_posts() )
		{ 
			if($first && isFirstPage()){
				showBigPost();
			} else {
				showSmallPost();
			}
			$first = false;
		}  		
	}

	function showBigPost(){
			echo "<div class='col-md-12'>";
			
			the_post();  	
			get_template_part( 'content-card', get_post_format() );

			echo "</div>";
	}

	function showSmallPost(){
			echo "<div class='col-md-6'>";
			
			the_post();  	
			get_template_part( 'content-card', get_post_format() );

			echo "</div>";
	}	

	function isFirstPage(){
		return is_home() && ((get_query_var('paged')) ? get_query_var('paged') : 0) == 0;
	}
?>