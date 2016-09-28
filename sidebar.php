<div class="col-sm-3">
	<div>
		<h4>About</h4>
		<p><?php the_author_meta( 'description' ); ?> </p>
	</div>
	<div>
		<h4>Tags</h4>
		<ol>
			<?php
				$categories =  get_categories();
				foreach($categories as $category){
					echo $category->name;
				} 
			?>
		</ol>
	</div>
	<div>
		<h4>Archives</h4>
		<ol>
			<?php wp_get_archives('type=monthly'); ?>
		</ol>
	</div>
	<div>
		<h4>Elsewhere</h4>
		<ol>
			<li><a href="#">GitHub</a></li>
			<li><a href="#">Twitter</a></li>
			<li><a href="#">Facebook</a></li>
		</ol>
	</div>
</div><!-- /.blog-sidebar -->