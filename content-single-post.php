<div class="blog-post">
	<h2 class="blog-post-title"><?php the_title(); ?></h2>
	<p class="blog-post-meta"><?php the_date(); ?></p>

 	<?php the_content(null, true); ?>
	<?php if(!is_page()){ ?>
		<small>Geplaats in categorie <?php the_category(', ') ?> met tags <?php the_tags("",', ') ?></small>
	<?php } ?>
	<hr />
        <?php include("post-social-media.php") ?>
	<hr />

	<?php comments_template(null, true ); ?>
</div>

