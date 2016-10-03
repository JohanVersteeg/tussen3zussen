<div class="col-sm-3">
	<div class="sidebar-item about">
		<h4>Welkom</h4>
		<?php echo get_avatar(get_the_author_meta( 'ID' ), 200); ?>
		<p><?php the_author_meta( 'description' ); ?> </p>
		
		<div class='social-media'>
			<i class="youtube fa fa-youtube" aria-hidden="true"></i>
			<i class="snapchat fa fa-snapchat" aria-hidden="true"></i>
			<i class="instagram fa fa-instagram" aria-hidden="true"></i>
			<i class="facebook fa fa-facebook" aria-hidden="true"></i>
			<i class="pinterest fa fa-pinterest" aria-hidden="true"></i>
			<i class="twitter fa fa-twitter" aria-hidden="true"></i>
		</div>
	</div>
	<div class="sidebar-item">
		<h4>Tags</h4>
		<ol>
			<?php
				$categories =  get_categories();
				foreach($categories as $category){
					echo $category->name . "<br />";
				} 
			?>
		</ol>
	</div>
</div><!-- /.blog-sidebar -->