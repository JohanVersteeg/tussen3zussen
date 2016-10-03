<div class="blog-post">
	<h2 class="blog-post-title"><?php the_title(); ?></h2>
	<p class="blog-post-meta"><?php the_date(); ?> door <a href="#"><?php the_author(); ?></a></p>

 	<?php the_content(null, true); ?>

</div><!-- /.blog-post -->

	<style>
		.col-sm-9{
			border: solid 2px #f4f4f4;
			margin-bottom: 10px;
			background: white;
		}

		p{
			text-align: left !important;
		}
	</style>