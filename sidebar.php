<div class="col-sm-3">
	<div class="sidebar-item">
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

<style>
.social-media{
	text-align: center;
	margin-bottom: 20px;

}

.social-media .facebook:hover{
	color: #3B5998;	 
}

.social-media .snapchat:hover{
	color: #FFFC01;	 
}

.social-media .instagram:hover{
	color: #E3405F;	 
}

.social-media .youtube:hover{
	color: #CD1F20;	 
}

.social-media .pinterest:hover{
	color: #BD071D;	 
}

.social-media .twitter:hover{
	color: #54ACEC;	 
}


.social-media i{
	cursor: pointer;
	padding: 2px;
	font-size: 2.5em;
	color: rgb(70,70,70);
	-webkit-transition: all 0.2s; /* Safari */
}

.social-media i:hover{
	text-shadow: 0px 0px 5px rgba(155, 155, 155, 0.5);
}

.sidebar-item{
	border: solid 2px #f4f4f4;
	padding: 10px;
	margin-bottom: 20px;
	background: white;
}
</style>