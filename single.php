<?php
	get_header(); 
?>
<div class="single-item-page">
	<div class="row">
		<div class="col-sm-9">
			<?php 
                the_post(); 
                get_template_part( 'content-single-post', get_post_format() );
            ?>
		</div>
		<?php get_sidebar(); ?>
	</div> 
</div>
<div class="paginate-links">
	<?php echo paginate_links( $args ); ?>
</div>

<?php get_footer(); ?>