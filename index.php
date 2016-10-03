<?php 
	get_header(); 
	$isItemPage = is_page() || is_single();
?>
<div class="<?php echo ($isItemPage ? "single-item-page" : "multiple-items-page") ?>">
	<div class="row">
		<div class="col-sm-9">
			<?php 
				if( is_page() || is_single() )
				{
					the_post(); 
					get_template_part( 'content-single-post', get_post_format() );
				}
				else if ( have_posts() ) 
				{
					while ( have_posts() )
					{ 
						the_post();  	
						get_template_part( 'content-card', get_post_format() );
					}  
				} 
			?>
		</div>
		<?php get_sidebar(); ?>
	</div> 
</div>
<?php get_footer(); ?>